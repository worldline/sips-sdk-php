<?php

namespace Worldline\Sips\Tests;

use PHPUnit\Framework\TestCase;
use Worldline\Sips\Common\Field\Contact;
use Worldline\Sips\Common\SipsEnvironment;
use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\PaypageRequest;
use Worldline\Sips\SipsClient;

class SipsClientTest extends TestCase
{

    public function testExecute()
    {
        $sipsClient = new SipsClient(new SipsEnvironment('SIMU'), '002001000000001', '002001000000001_KEY1', 1);

        $paypageRequest = new PaypageRequest();
        $paypageRequest->setAmount(2);
        $paypageRequest->setCurrencyCode('EUR');
        $paypageRequest->setOrderChannel('INTERNET');
        $paypageRequest->setNormalReturnUrl('http://localhost/return.php');

        $customerContact = new Contact();
        $customerContact->setFirstname('Firstname');
        $customerContact->setLastname('Lastname');
        $paypageRequest->setCustomerContact($customerContact);

        $initatialisationResponse = $sipsClient->initialize($paypageRequest);

        $this->assertAttributeEquals('INITIALISATION REQUEST ACCEPTED', 'redirectionStatusMessage', $initatialisationResponse, 'Request nog accepted.');
        $this->assertAttributeEquals("00", 'redirectionStatusCode', $initatialisationResponse, 'RedirectionstatusCode is not 00.');
    }

    public function testPaymentResultSuccess()
    {
        $sipsClient = new SipsClient(new SipsEnvironment('SIMU'), '002001000000001', '002001000000001_KEY1', 1);

        $_POST['Data'] = 'captureDay=0|captureMode=IMMEDIATE|currencyCode=978|merchantId=225005012170001|orderChannel=INTERNET|responseCode=00|transactionDateTime=2018-01-08T16:06:29+01:00|transactionReference=6b55a17f882|keyVersion=1|acquirerResponseCode=00|amount=2|authorisationId=60B5C9|panExpiryDate=202106|paymentMeanBrand=BCMC|paymentMeanType=CARD|customerIpAddress=194.78.195.168|maskedPan=6703###########16|scoreValue=0.0|scoreColor=GREEN|scoreInfo=SI;N;CARD_COUNTRY=BEL;IP_COUNTRY=BEL#SC;N;TRANS=8:10;CUMUL=16:500000#VI;N;TRANS=3:10;CUMUL=6:500000#VC;N;TRANS=XXX:3;CUMUL=XXX:500000#A3;N;NOT_APPLICABLE#CC;N;U;CARD_COUNTRY=BEL#CA;N;MIN=2:0;MAX=2:100000#SB;N;SHIP_COUNTRY=XXX;BILL_COUNTRY=XXX#FE;N;U#CS;N;SHIP_COUNTRY=XXX;CARD_COUNTRY=BEL|scoreProfile=DEFAULT|scoreThreshold=-6;-6|holderAuthentRelegation=N|holderAuthentStatus=SUCCESS|transactionOrigin=INTERNET|paymentPattern=ONE_SHOT|customerMobilePhone=null|mandateAuthentMethod=null|mandateUsage=null|transactionActors=null|mandateId=null|captureLimitDate=20180108|dccStatus=null|dccResponseCode=null|dccAmount=null|dccCurrencyCode=null|dccExchangeRate=null|dccExchangeRateValidity=null|dccProvider=null|statementReference=null|panEntryMode=WALLET|walletType=BCMCMOBILE|holderAuthentMethod=PASSWORD|holderAuthentProgram=BCMCMOBILE|paymentMeanId=null|instalmentNumber=null|instalmentDatesList=null|instalmentTransactionReferencesList=null|instalmentAmountsList=null|settlementMode=null|mandateCertificationType=null|valueDate=null|creditorId=null|acquirerResponseIdentifier=null|acquirerResponseMessage=null|paymentMeanTradingName=null|additionalAuthorisationNumber=null|issuerWalletInformation=null|s10TransactionId=17|s10TransactionIdDate=20180108|preAuthenticationColor=null|preAuthenticationInfo=null|preAuthenticationProfile=null|preAuthenticationThreshold=null|preAuthenticationValue=null|invoiceReference=null|s10transactionIdsList=null|cardProductCode=null|cardProductName=null|cardProductProfile=null|issuerCode=null|issuerCountryCode=null|acquirerNativeResponseCode=null|settlementModeComplement=null|preAuthorisationProfile=DEFAULT|preAuthorisationProfileValue=63b0b977-ae2e-44e1-851d-ca87e0949be6#7ab61a69-9046-423a-beb9-9639dd821ae0|preAuthorisationRuleResultList=[{"ruleCode":"SI","ruleType":"N","ruleWeight":"3","ruleSetting":"I","ruleResultIndicator":"0","ruleDetailedInfo":"CARD_COUNTRY=BEL;IP_COUNTRY=BEL"},{"ruleCode":"SC","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"0","ruleDetailedInfo":"TRANS=8:10;CUMUL=16:500000"},{"ruleCode":"VI","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"0","ruleDetailedInfo":"TRANS=3:10;CUMUL=6:500000"},{"ruleCode":"VC","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"A3","ruleType":"N","ruleWeight":"3","ruleSetting":"I","ruleResultIndicator":"X","ruleDetailedInfo":""},{"ruleCode":"CC","ruleType":"N","ruleWeight":"2","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"CA","ruleType":"N","ruleWeight":"2","ruleSetting":"I","ruleResultIndicator":"0","ruleDetailedInfo":"MIN=2:0;MAX=2:100000"},{"ruleCode":"SB","ruleType":"N","ruleWeight":"2","ruleSetting":"N","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"FE","ruleType":"N","ruleWeight":"2","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"CS","ruleType":"N","ruleWeight":"2","ruleSetting":"I","ruleResultIndicator":"U","ruleDetailedInfo":""}]|preAuthenticationProfileValue=null|preAuthenticationRuleResultList=null|paymentMeanBrandSelectionStatus=null|transactionPlatform=PROD';
        $_POST['InterfaceVersion'] = 'HP_2.0';
        $_POST['Seal'] = "90b14b490b494ae75a5db66c17c65206c697d0ff335f54d5f39511c334ee19f5";

        $transactionResult = $sipsClient->finalizeTransaction();

        $this->assertAttributeEquals('00', 'responseCode', $transactionResult);
        $this->assertAttributeEquals('00', 'acquirerResponseCode', $transactionResult);
    }

    public function testPaymentResultCancel()
    {
        $sipsClient = new SipsClient(new SipsEnvironment('SIMU'), '002001000000001', '002001000000001_KEY1', 1);

        $_POST['Data'] = 'captureDay=0|captureMode=AUTHOR_CAPTURE|currencyCode=978|merchantId=002001000000001|orderChannel=INTERNET|responseCode=17|transactionDateTime=2018-01-04T10:11:13+01:00|transactionReference=2699c2a658d|keyVersion=1|amount=2|customerIpAddress=194.78.195.168|paymentPattern=ONE_SHOT';
        $_POST['InterfaceVersion'] = 'HP_2.0';
        $_POST['Seal'] = "2a67c5160fd33b8439e5b3d09a4a5e02123786d7465864d95f8db089de6606eb";

        $transactionResult = $sipsClient->finalizeTransaction();

        $this->assertAttributeEquals('17', 'responseCode', $transactionResult);
    }

    public function testPaymentResultExceedPANAttempts()
    {
        $sipsClient = new SipsClient(new SipsEnvironment('SIMU'), '002001000000001', '002001000000001_KEY1', 1);

        $_POST['Data'] = 'captureDay=0|captureMode=AUTHOR_CAPTURE|currencyCode=978|merchantId=002001000000001|orderChannel=INTERNET|responseCode=75|transactionDateTime=2018-01-04T11:52:37+01:00|transactionReference=127cf1c96f0|keyVersion=1|amount=2|paymentMeanBrand=MASTERCARD|paymentMeanType=CARD|customerIpAddress=194.78.195.168|maskedPan=0000##########00|holderAuthentRelegation=N|holderAuthentStatus=|transactionOrigin=INTERNET|paymentPattern=ONE_SHOT';
        $_POST['InterfaceVersion'] = 'HP_2.0';
        $_POST['Seal'] = "b41b64780f3db9c3078bef60d56b7fc8d6c7724bb9f5b752cb7eec4097b9fb30";

        $transactionResult = $sipsClient->finalizeTransaction();

        $this->assertAttributeEquals('75', 'responseCode', $transactionResult);
    }

    public function testPaymentResultInvalidSeal()
    {
        $sipsClient = new SipsClient(new SipsEnvironment('SIMU'), '002001000000001', '002001000000001_KEY1', 1);

        $_POST['Data'] = 'captureDay=0|captureMode=IMMEDIATE|currencyCode=978|merchantId=225005012170001|orderChannel=INTERNET|responseCode=00|transactionDateTime=2018-01-08T16:06:29+01:00|transactionReference=6b55a17f882|keyVersion=1|acquirerResponseCode=00|amount=2|authorisationId=60B5C9|panExpiryDate=202106|paymentMeanBrand=BCMC|paymentMeanType=CARD|customerIpAddress=194.78.195.168|maskedPan=6703###########16|scoreValue=0.0|scoreColor=GREEN|scoreInfo=SI;N;CARD_COUNTRY=BEL;IP_COUNTRY=BEL#SC;N;TRANS=8:10;CUMUL=16:500000#VI;N;TRANS=3:10;CUMUL=6:500000#VC;N;TRANS=XXX:3;CUMUL=XXX:500000#A3;N;NOT_APPLICABLE#CC;N;U;CARD_COUNTRY=BEL#CA;N;MIN=2:0;MAX=2:100000#SB;N;SHIP_COUNTRY=XXX;BILL_COUNTRY=XXX#FE;N;U#CS;N;SHIP_COUNTRY=XXX;CARD_COUNTRY=BEL|scoreProfile=DEFAULT|scoreThreshold=-6;-6|holderAuthentRelegation=N|holderAuthentStatus=SUCCESS|transactionOrigin=INTERNET|paymentPattern=ONE_SHOT|customerMobilePhone=null|mandateAuthentMethod=null|mandateUsage=null|transactionActors=null|mandateId=null|captureLimitDate=20180108|dccStatus=null|dccResponseCode=null|dccAmount=null|dccCurrencyCode=null|dccExchangeRate=null|dccExchangeRateValidity=null|dccProvider=null|statementReference=null|panEntryMode=WALLET|walletType=BCMCMOBILE|holderAuthentMethod=PASSWORD|holderAuthentProgram=BCMCMOBILE|paymentMeanId=null|instalmentNumber=null|instalmentDatesList=null|instalmentTransactionReferencesList=null|instalmentAmountsList=null|settlementMode=null|mandateCertificationType=null|valueDate=null|creditorId=null|acquirerResponseIdentifier=null|acquirerResponseMessage=null|paymentMeanTradingName=null|additionalAuthorisationNumber=null|issuerWalletInformation=null|s10TransactionId=17|s10TransactionIdDate=20180108|preAuthenticationColor=null|preAuthenticationInfo=null|preAuthenticationProfile=null|preAuthenticationThreshold=null|preAuthenticationValue=null|invoiceReference=null|s10transactionIdsList=null|cardProductCode=null|cardProductName=null|cardProductProfile=null|issuerCode=null|issuerCountryCode=null|acquirerNativeResponseCode=null|settlementModeComplement=null|preAuthorisationProfile=DEFAULT|preAuthorisationProfileValue=63b0b977-ae2e-44e1-851d-ca87e0949be6#7ab61a69-9046-423a-beb9-9639dd821ae0|preAuthorisationRuleResultList=[{"ruleCode":"SI","ruleType":"N","ruleWeight":"3","ruleSetting":"I","ruleResultIndicator":"0","ruleDetailedInfo":"CARD_COUNTRY=BEL;IP_COUNTRY=BEL"},{"ruleCode":"SC","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"0","ruleDetailedInfo":"TRANS=8:10;CUMUL=16:500000"},{"ruleCode":"VI","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"0","ruleDetailedInfo":"TRANS=3:10;CUMUL=6:500000"},{"ruleCode":"VC","ruleType":"N","ruleWeight":"3","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"A3","ruleType":"N","ruleWeight":"3","ruleSetting":"I","ruleResultIndicator":"X","ruleDetailedInfo":""},{"ruleCode":"CC","ruleType":"N","ruleWeight":"2","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"CA","ruleType":"N","ruleWeight":"2","ruleSetting":"I","ruleResultIndicator":"0","ruleDetailedInfo":"MIN=2:0;MAX=2:100000"},{"ruleCode":"SB","ruleType":"N","ruleWeight":"2","ruleSetting":"N","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"FE","ruleType":"N","ruleWeight":"2","ruleSetting":"S","ruleResultIndicator":"U","ruleDetailedInfo":""},{"ruleCode":"CS","ruleType":"N","ruleWeight":"2","ruleSetting":"I","ruleResultIndicator":"U","ruleDetailedInfo":""}]|preAuthenticationProfileValue=null|preAuthenticationRuleResultList=null|paymentMeanBrandSelectionStatus=null|transactionPlatform=PROD';
        $_POST['InterfaceVersion'] = 'HP_2.0';
        $_POST['Seal'] = "invalid seal";

        $this->expectExceptionMessage("Invalid seal in response. Response not trusted.");

        $transactionResult = $sipsClient->finalizeTransaction();


    }
}