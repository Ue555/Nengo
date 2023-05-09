<?php

require __DIR__ . "/vendor/autoload.php";
use ue555\nengo\JapaneseNengoGenerator;

$nengo = new JapaneseNengoGenerator();
var_dump($nengo->to_wareki(20220112));
