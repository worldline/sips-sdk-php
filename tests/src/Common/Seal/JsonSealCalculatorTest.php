<?php

namespace Worldline\Sips\Tests;


use PHPUnit\Framework\TestCase;
use Worldline\Sips\Common\Field\Address;
use Worldline\Sips\Common\Field\Contact;
use Worldline\Sips\Common\Seal\JsonSealCalculator;
use Worldline\Sips\Paypage\PaypageRequest;

class JsonSealCalculatorTest extends TestCase
{
    private $paypageRequest;
    private $jsonSealCalculator;
    /**
     * @before
     */
    public function setupParameters()
    {
        $this->paypageRequest = new PaypageRequest();
        $this->paypageRequest->setAmount(2);
        $this->paypageRequest->setCurrencyCode('EUR');
        $this->paypageRequest->setOrderChannel('INTERNET');
        $this->paypageRequest->setNormalReturnUrl('http://localhost/return.php');
        $this->paypageRequest->setTemplateName('custom');
        $this->paypageRequest->setAutomaticResponseUrl('http://test.com');
        $this->paypageRequest->setTransactionReference('test');
        $this->jsonSealCalculator = new JsonSealCalculator();
    }

    /**
     * @test
     */
    public function getSealData()
    {
        $calculatedSealData = $this->jsonSealCalculator->getSealData($this->paypageRequest->toArray());
        $expectedSealData = "2http://test.com978IR_WS_2.19http://localhost/return.phpINTERNETcustomtest";

        $this->assertEquals($expectedSealData, $calculatedSealData);
    }

    /**
     * @test
     */
    public function getSealDataWithList()
    {
        $this->paypageRequest->setPaymentMeanBrandList(["VISA","MASTERCARD"]);
        $calculatedSealData = $this->jsonSealCalculator->getSealData($this->paypageRequest->toArray());
        $expectedSealData = "2http://test.com978IR_WS_2.19http://localhost/return.phpINTERNETVISAMASTERCARDcustomtest";

        $this->assertEquals($expectedSealData, $calculatedSealData);
    }

    /**
     * @test
     */
    public function getSealDataWithContainer()
    {
        $customerContact = new Contact();
        $customerContact->setFirstname("Firstname");
        $customerContact->setLastname('Lastname');
        $this->paypageRequest->setCustomerContact($customerContact);
        $customerAddress = new Address();
        $customerAddress->setCity("CustomerCity");
        $customerAddress->setCountry("CustomerCountry");
        $this->paypageRequest->setCustomerAddress($customerAddress);

        $expectedSealData = "2http://test.com978CustomerCityCustomerCountryFirstnameLastnameIR_WS_2.19http://localhost/return.phpINTERNETcustomtest";
        $calculatedSealData = $this->jsonSealCalculator->getSealData($this->paypageRequest->toArray());

        $this->assertEquals($expectedSealData, $calculatedSealData);
    }
}
