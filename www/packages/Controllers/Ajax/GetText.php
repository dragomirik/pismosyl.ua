<?php
/**
 * Created by PhpStorm.
 * User: Andriy
 * Date: 17.02.2015
 * Time: 22:00
 */

	namespace Controllers\Ajax;

	class GetText {
	    public function run(){
	        \Anex::showArray($_REQUEST);
	    }
	}