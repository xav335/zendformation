<?php
namespace POTM\View\Helper;

use Zend\View\Helper\AbstractHelper;

class MyHelperClass extends AbstractHelper {
	
	public function __invoke($msg){
		return "Hello $msg";
	}
	
}