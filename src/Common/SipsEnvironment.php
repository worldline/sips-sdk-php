<?php

namespace Worldline\Sips\Common;


use Worldline\Sips\Common\Exception\InvalidEnvironmentException;

class SipsEnvironment
{
    private $possibleEnvironments = [
        "SIMU" => "https://payment-webinit.simu.sips-services.com/",
        "TEST" => "https://payment-webinit.test.sips-services.com/",
        "PROD" => "https://payment-webinit.sips-services.com/",
    ];
    private $environment;

    /**
     * SipsEnvironment constructor.
     * @param string $environment
     * @throws InvalidEnvironmentException
     */
    public function __construct(string $environment)
    {
        if (key_exists(strtoupper($environment), $this->possibleEnvironments)) {
            $this->environment = $this->possibleEnvironments[$environment];
        } else {
            throw new InvalidEnvironmentException();
        }
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return $this->environment;
    }
}