<?php

namespace failure;

use Castor\Attribute\AsTask;

use function Castor\run;

#[AsTask(description: 'A failing task not authorized to fail')]
function failure(): void
{
    run('bash -c i_do_not_exist', workingDirectory: '/tmp', pty: false);
}

#[AsTask(description: 'A failing task authorized to fail')]
function allow_failure(): void
{
    run('bash -c i_do_not_exist', allowFailure: true, pty: false);
}
