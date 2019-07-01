<?php
/**
 *  @class mnjSessionIdSource
 *  @package JAuthenticationManager
 */

class mnjSessionIdSource {
  public function getSessionId() {
    if(Cookies::isCookieEnabled()) {
      return $_COOKIE['MYNAUKRI']['ID'];
    } else {
      return ncRequestProvider::getInstance()->getRequest()->getParameter('id');
    }
  }
}
