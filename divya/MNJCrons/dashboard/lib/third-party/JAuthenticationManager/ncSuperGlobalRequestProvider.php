<?php
/**
 *  @class ncSuperGlobalRequestProvider
 *  @package JAuthenticationManager
 */

class ncSuperGlobalRequestProvider extends ncRequestProvider {
  public function getRequest() {
    return new ncSuperGlobalRequest();
  }
}

/**
 *  @class ncSuperGlobalRequest
 *  @package JAuthenticationManager
 */

class ncSuperGlobalRequest {
  public function getParameter($name) {
    return $this->hasParameter($name) ? $_REQUEST[$name] : null;
  }

  public function hasParameter($name) {
    return array_key_exists($name, $_REQUEST);
  }
}
