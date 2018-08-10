<?php

/**
 *
 * 创建一个单例对象
 * 
 * 目的：节省资源，防止对象被多次创建
 * 不能被继承 final
 * 不能被clone private
 * 方法不能被重写 private
 */

final class Db{

	private static $db;

	private function __construct(){
		echo '创建一个Db对象<br>';
	}
	
	public static function getDb(){
		
		if(self::$db==null){
			self::$db = new Db();
		}

		return self::$db;
	}

	public static function test(){
		echo "Db对象中的test方法<br>";
	}

}

//获取对象
$db = Db::getDb();

Db::test();
