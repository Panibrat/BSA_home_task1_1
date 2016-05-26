<?php

trait HeroesAbstract {
    public static function whoami() {
            
            $arr =  get_class();
            $segments = explode("\\", $arr);
            return "I'm ". $segments[2].  " from ". $segments[1];
        }//put your code here
}
