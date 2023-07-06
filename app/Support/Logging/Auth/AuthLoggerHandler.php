<?php

namespace App\Support\Logging\Auth;

use App\Models\AuthLog;
use Monolog\Handler\AbstractProcessingHandler;
use Monolog\Logger;

class AuthLoggerHandler extends AbstractProcessingHandler
{

    public function __construct(array $config)
    {
        $level = Logger::toMonologLevel($config['level']);

        parent::__construct($level);
    }

    protected function write(array|\Monolog\LogRecord $record): void
    {
        AuthLog::query()->create([
          'type'       => $record->context['type'],
          'message'    => $record->message,
          'ip_address' => request()->ip(),
        ]);
    }

}
