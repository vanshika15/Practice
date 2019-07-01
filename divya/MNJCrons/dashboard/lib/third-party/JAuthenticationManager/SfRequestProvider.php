<?php
/**
 *  @class SfRequestProvider
 *  @package JAuthenticationManager
 */

class SfRequestProvider extends ncRequestProvider {
  public function getRequest() {
    return sfContext::getInstance()->getRequest();
  }
}
