<?php
/**
 *  @class AuthenticatorManager
 *  @package JAuthenticationManager
 */
class AuthenticatorManager {
	private static $authenticator;
	
	/**
	 * @access public
	 * @desc returns Authenticator class object.
	 */
	public static function getAuthenticator($mysqlFlag = false) {
		if (!isset(self::$authenticator)) {
			self::$authenticator = new Authenticator($mysqlFlag);
		}
		return self::$authenticator;
	}
}

