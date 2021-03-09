<?php

namespace Worldline\Sips\Common;

use Worldline\Sips\Common\Exception\InvalidEnvironmentException;

class SipsEnvironment
{
    const PAYPAGE    = 'paypage';
    const OFFICE     = 'office';
    const SIMULATION = 'SIMU';
    const TEST       = 'TEST';
    const PRODUCTION = 'PROD';

    protected $possibleEnvironments = [
        self::PAYPAGE => [
            self::SIMULATION => "https://payment-webinit.simu.sips-services.com/",
            self::TEST       => "https://payment-webinit.test.sips-services.com/",
            self::PRODUCTION => "https://payment-webinit.sips-services.com/",
        ],
        self::OFFICE  => [
            self::SIMULATION => "https://office-server.simu.sips-services.com/",
            self::TEST       => "https://office-server.test.sips-services.com/",
            self::PRODUCTION => "https://office-server.sips-services.com/",
        ]
    ];
    protected $environment;

    /**
     * SipsEnvironment constructor.
     * @param string|null $environment
     * @throws InvalidEnvironmentException
     */
    public function __construct(string $environment = null)
    {
        if ($environment == null) {
            $environment = $_SERVER["SIPS_ENVIRONMENT"];
        }
        if (!key_exists($environment, $this->possibleEnvironments[self::PAYPAGE])) {
            throw new InvalidEnvironmentException('Invalid environment "' . $environment . '"');
        }
        $this->environment = $environment;
    }

    /**
     * @return string
     */
    public function getEnvironment(string $connecter): string
    {
        if (!key_exists($connecter, $this->possibleEnvironments)) {
            throw new InvalidEnvironmentException('Invalid connecter "' . $connecter . '"');
        }
        return $this->possibleEnvironments[$connecter][$this->environment];
    }
}