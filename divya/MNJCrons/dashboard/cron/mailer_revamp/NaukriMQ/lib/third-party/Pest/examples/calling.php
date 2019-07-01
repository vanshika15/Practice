<?php

require 'Pest.php';
require 'PestJSON.php';
require 'PestXML.php';
require 'PestFactory.php';


$a = PestFactory::getInstance()->getJsonPestManager(5, 10);
var_dump($a->get("http://rajeev.infoedge.com/x.php?json=1"));

$a = PestFactory::getInstance()->getXmlPestManager(5, 10);
var_dump($a->get("http://rajeev.infoedge.com/x.php?xml=1"));

$a = PestFactory::getInstance()->getPestManager(5, 10);
var_dump($a->get("http://rajeev.infoedge.com/x.php"));

