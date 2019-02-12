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

    private $possibleEnvironments = [
        self::PAYPAGE => [
            self::SIMULATION => "https://payment-webinit.simu.sips-atos.com/",
            self::TEST       => "https://payment-webinit.test.sips-atos.com/",
            self::PRODUCTION => "https://payment-webinit.sips-atos.com/",
        ],
        self::OFFICE  => [
            self::SIMULATION => "https://office-server.simu.sips-atos.com/",
            self::TEST       => "https://office-server.test.sips-atos.com/",
            self::PRODUCTION => "https://office-server.sips-atos.com/",
        ]
    ];
    private $environment;

    /**
     * SipsEnvironment constructor.
     * @param string $environment
     * @throws InvalidEnvironmentException
     */
    public function __construct(string $environment)
    {
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