<?php
/**
 * Pest is a REST client for PHP.
 *
 * See http://github.com/educoder/pest for details.
 *
 * This code is licensed for use, modification, and distribution
 * under the terms of the MIT License (see http://en.wikipedia.org/wiki/MIT_License)
 */
class PestFactory
{
    /**
     * @var $instance
     */
    private static $instance;

    /**
     * getInstance
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

    /**
     * Class constructor
     */
    private function __construct() {

    }

    /**
     * getPestManager
     * @param int $connectTimeout
     * @param int $requestTimeout
     */
    public function getPestManager($connectTimeout = 1, $requestTimeout = 2) {
        return new Pest($connectTimeout, $requestTimeout);
    }

    /**
     * getJsonPestManager
     * @param int $connectTimeout
     * @param int $requestTimeout
     */
    public function getJsonPestManager($connectTimeout = 1, $requestTimeout = 2) {
        return new PestJSON($connectTimeout, $requestTimeout);
    }

    /**
     * getXmlPestManager
     * @param int $connectTimeout
     * @param int $requestTimeout
     */
    public function getXmlPestManager($connectTimeout = 1, $requestTimeout = 2) {
        return new PestXML($connectTimeout, $requestTimeout);
    }
}

