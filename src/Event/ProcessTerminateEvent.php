<?php

namespace Castor\Event;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Process\Process;

class ProcessTerminateEvent
{
    public function __construct(
        public readonly Process $process,
        public readonly Command $command,
    ) {
    }
}
