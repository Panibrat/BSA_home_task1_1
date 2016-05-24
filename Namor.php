<?php
namespace Marvel\Atlantida;
    class NamorSubMariner { 
              
        public static function whoami() {
            $arr =  get_class();
            $segments = explode("\\", $arr);
            return "I'am ". $segments[2].  " from ". $segments[1];
        }
    }
?>