<?php
namespace Worldline\Sips;

/**
 *
 */
abstract class SipsRequest
{

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
     * @return SipsRequest
     */
    public function setMerchantId(string$merchantId): SipsRequest
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @param string $interfaceVersion
     * @return SipsRequest
     */
    public function setInterfaceVersion(string $interfaceVersion): SipsRequest
    {
        $this->interfaceVersion = $interfaceVersion;

        return $this;
    }

    /**
     *
     * @param int $keyVersion
     * @return SipsRequest
     */
    public function setKeyVersion(int $keyVersion)
    {
        $this->keyVersion = $keyVersion;
        return $this;
    }

    /**
     *
     * @param string $seal
     * @return SipsRequest
     */
    public function setSeal(string $seal): SipsRequest
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
    abstract protected function toArray(): array;
}
