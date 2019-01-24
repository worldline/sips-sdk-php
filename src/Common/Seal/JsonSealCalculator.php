<?php

namespace Worldline\Sips\Common\Seal;


use Worldline\Sips\Paypage\InitializationResponse;
use Worldline\Sips\Paypage\SipsMessage;

class JsonSealCalculator
{
    const ALGORITHM_SHA256 = 'SHA-256';
    const ALGORITHM_HMAC_SHA256 = 'HMAC-SHA-256';
    const ALGORITHM_HMAC_SHA512 = 'HMAC-SHA-512';

    const ALGORITHM_DEFAULT = self::ALGORITHM_HMAC_SHA256;

    const EXCLUDED_FIELD = ['seal', 'sealAlgorithm', 'keyVersion'];

    public function calculateSeal(SipsMessage $sipsMessage, $secretKey, $algorithm = self::ALGORITHM_DEFAULT)
    {
        $seal = $this->encrypt($this->getSealData($sipsMessage->toArray()), $secretKey, $algorithm);
        $sipsMessage->setSeal($seal);
        if ($algorithm !== self::ALGORITHM_DEFAULT) {
            $sipsMessage->setSealAlgorithm($algorithm);
        }
    }

    private function encrypt(string $sealData, string $secretKey, string $algorithm = self::ALGORITHM_DEFAULT): string
    {
        $sealData = utf8_encode($sealData);
        $secretKey = utf8_encode($secretKey);
        
        switch ($algorithm) {
            case self::ALGORITHM_SHA256:
                return hash('sha256', $sealData . $secretKey);
            case self::ALGORITHM_HMAC_SHA256:
                return hash_hmac("sha256", $sealData, $secretKey);
            case self::ALGORITHM_HMAC_SHA512:
                return hash_hmac("sha512", $sealData, $secretKey);
        }
    }

    public function getSealData(array $array): string
    {
        $sealData = "";

        foreach ($array as $key => $value) {
            if (in_array($key, self::EXCLUDED_FIELD)) {
                continue;
            }
            if (is_array($value)) {
                $sealData .= implode('', $value);
            } else {
                $sealData .= $value;
            }
        }
        return $sealData;
    }

    public function isCorrectSeal(InitializationResponse $initializationResponse, $secretKey, $sealAlgorithm): bool
    {
        $seal = $this->encrypt($this->getSealData($initializationResponse->toArray()), $secretKey, $sealAlgorithm);
        if ($seal == $initializationResponse->getSeal()) {
            return true;
        } else {
            return false;
        }
    }

}
