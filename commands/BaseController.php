<?php
namespace app\commands;

use yii\console\Controller;

class BaseController extends Controller{
	public function echoLog($msg){
		echo date('Y-m-d H:i:s').':'.$msg."\r\n";
		return true;
	}
}