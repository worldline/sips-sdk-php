<?php

namespace Worldline\Sips\Common\Seal;


use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\PaypageRequest;

class JsonSealCalculator
{
    public function calculateSeal(PaypageRequest &$paypageRequest, $secretKey)
    {
        $seal = $this->encrypt($this->getSealData($paypageRequest->toArray()), $secretKey);
        $paypageRequest->setSeal($seal);
    }

    private function encrypt(string $sealData, string $secretKey): string
    {
        $sealData = utf8_encode($sealData);
        $secretKey = utf8_encode($secretKey);

        return hash_hmac("sha256", $sealData, $secretKey);
    }

    public function getSealData(array $array): string
    {
        $sealData = "";

        foreach ($array as $key => $value) {
            if ($key != "keyVersion" && $key != "sealAlgorithm" && $key != "seal" && $key != "paymentMeanBrandList") {
                if (is_array($value)) {
                    foreach ($value as $item) {
                        if (is_array($item)) {
                            foreach ($item as $subItem) {
                                $sealData .= $subItem;
                            }
                        } else {
                            $sealData .= $item;
                        }
                    }
                } else {
                    $sealData .= $value;
                }
            } elseif ($key == "paymentMeanBrandList") {
                foreach ($value as $brand) {
                    $sealData .= $brand;
                }
            }
        }
        return $sealData;
    }

    public function isCorrectSeal(InitializationResponse $initializationResponse, $secretKey): bool
    {
        $seal = $this->encrypt($this->getSealData($initializationResponse->toArray()), $secretKey);
        if ($seal == $initializationResponse->getSeal()) {
            return true;
        } else {
            return false;
        }
    }

}