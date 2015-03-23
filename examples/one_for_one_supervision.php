<?php
/**
 * @author bigbigant
 */

require __DIR__ . '/bootstrap.inc.php';

$run = function ()
{
    $i = 10;
    while ($i --) {
        echo "#$i PID:" . posix_getpid() . "\n";
        sleep(1);
    }
};

$config = array(
    'runnableCallback' => $run,
    'quantity' => 3
);

Comos\Qpm\Supervision\Supervisor::oneForOne($config)->start();
