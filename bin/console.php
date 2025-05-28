#!/usr/bin/env php
<?php

use HarenaFiantso\Coffee\CLIInterface;

require __DIR__ . '/../vendor/autoload.php';

$app = new CLIInterface();
$app->run();
