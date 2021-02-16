<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 07/02/19
 * Time: 21:39
 */

namespace Worldline\Sips;


class SipsMessage
{
    /**
     * Connecter where to send the request
     * @var string
     */
    public $connecter;

    /**
     *
     * @var string
     */
    protected $interfaceVersion;

    /**
     *
     * @var int
     */
    protected $keyVersion;

    /**
     *
     * @var string
     */
    protected $merchantId;

    /**
     *
     * @var string
     */
    protected $seal;

    /**
     *
     * @var string
     */
    public $serviceUrl;

    /**
     *
     * @var string
     */
    protected $sealAlgorithm;

    /**
     *
     * @return string
     */
    public function getConnecter():string
    {
        return $this->connecter;
    }

    /**
     *
     * @return string
     */
    public function getServiceUrl(): string
    {
        return $this->serviceUrl;
    }

    /**
     *
     * @return string|null
     */
    public function getMerchantId(): ?string
    {
        return $this->merchantId;
    }

    /**
     *
     * @return int|null
     */
    public function getKeyVersion(): ?int
    {
        return $this->keyVersion;
    }

    /**
     * @return string|null
     */
    public function getInterfaceVersion(): ?string
    {
        return $this->interfaceVersion;
    }

    /**
     *
     * @return string|null
     */
    public function getSeal(): ?string
    {
        return $this->seal;
    }

    /**
     *
     * @return $this
     */
    public function getSealAlgorithm(): string
    {
        return $this->sealAlgorithm;
    }

    /**
     *
     * @param string $merchantId
     * @return SipsMessage
     */
    public function setMerchantId(string$merchantId): SipsMessage
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @param string $interfaceVersion
     * @return SipsMessage
     */
    public function setInterfaceVersion(string $interfaceVersion): SipsMessage
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     *
     * @param int $keyVersion
     * @return SipsMessage
     */
    public function setKeyVersion(int $keyVersion): SipsMessage
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    /**
     *
     * @param string $seal
     * @return SipsMessage
     */
    public function setSeal(string $seal): SipsMessage
    {
        $this->seal = $seal;
        return $this;
    }

    /**
     *
     * @param string $sealAlgorithm
     * @return $this
     */
    public function setSealAlgorithm(string $sealAlgorithm)
    {
        $this->sealAlgorithm = $sealAlgorithm;
        return $this;
    }

    /**
     *
     * @param string $prefixKey Prefix to add in the beginning of each key
     * @return array
     */
    public function toArray($prefixKey = ''): array
    {
        $array    = [];
        foreach ($this as $key => $value) {
            if (is_null($value)) {
                // null values are excluded from the array export
                continue;
            }
            if ($value instanceof SipsMessage) {
                // Every value in the sub object must be prefixed by the current key
                $array = array_merge($array, $value->toArray($prefixKey . $key));
            } else {
                $array[$prefixKey . $key] = $value;
            }
        }
        unset($array['serviceUrl']);
        unset($array['connecter']);

        if (isset($array['s10TransactionReference'])) {
            unset($array['transactionReference']);
        }
        ksort($array);

        return $array;
    }
}