<?php require_once __DIR__.'/vendor/autoload.php';

use GO\Scheduler;

// Create a new scheduler
$scheduler = new Scheduler();
$scheduler->run();

$scheduler->php('path/to/my/script.php');
$scheduler->php('cron.php');