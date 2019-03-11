<?php
/**
 * 测试使用
 *
 * @param package test
 */

namespace neoteched\test\packagist;

use neoteched\test\packagist\message\Message;

class Test {

	private static $_instance = null;
	
	public function __construct(){
		echo 'This is the init class.'.PHP_EOL;
	}

	public static function getInstance(){
		if(empty(self::$_instance)){
			self::$_instance = new Test();
		}

		return self::$_instance;
	}

	public function run(){
		$msgType = Message::TestType;
		echo 'This is the function run. --'.$msgType.PHP_EOL;
	}
}
?>
