<?php
namespace Marvel\Paterson;
    class SimonWilliamsWonderMan { 
              
        public static function whoami() {
            $arr =  get_class();
            $segments = explode("\\", $arr);
            return "I'm ". $segments[2].  " from ". $segments[1];
        }
    }
?>