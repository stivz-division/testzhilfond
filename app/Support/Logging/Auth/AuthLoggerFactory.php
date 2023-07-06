<?php

namespace App\Support\Logging\Auth;

use Monolog\Logger;

class AuthLoggerFactory
{

    public function __invoke(array $config): Logger
    {
        $logger = new Logger('auth');

        $logger->pushHandler(new AuthLoggerHandler($config));

        return $logger;
    }

}
