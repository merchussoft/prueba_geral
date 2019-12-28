<?php

	function autoload($class_name){

        if (file_exists(CONTROLLER . "{$class_name}.php")) {
            include_once(CONTROLLER . "{$class_name}.php");
        }
        if (file_exists(CONFIG . "{$class_name}.php")) {
            include_once(CONFIG . "{$class_name}.php");
        }
		
	}