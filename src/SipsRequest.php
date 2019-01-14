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
     * @return array
     */
    abstract protected function toArray(): array;
}
