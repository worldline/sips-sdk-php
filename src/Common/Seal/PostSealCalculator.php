<?php

namespace Worldline\Sips\Common\Seal;


class PostSealCalculator
{
    public function isCorrectSeal(string $data, string $secretKey, string $seal): bool
    {
        if ($seal == $this->encrypt($data, $secretKey)) {
            return true;
        } else {
            return false;
        }
    }

    public function encrypt(string $sealdata, string $secretKey): string
    {
        return hash("sha256", $sealdata . $secretKey);
    }
}