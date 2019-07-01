<?php
/**
 *  @class ncRequestProvider
 *  @package JAuthenticationManager
 */

abstract class ncRequestProvider {
  public static function getInstance() {
    $class = NC_REQUEST_PROVIDER;
    return new $class();
  }

  public abstract function getRequest();
}
