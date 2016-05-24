<?php
//Ваша задача: При помощи механизма пространств имен (namespaces) 
//распределить персонажей вселенной Marvel по городу рождения. 
//Каждый персонаж должен быть описан отдельным классом с 
//методом whoami(), при вызове которого должна возвращаться 
//строка информации о нём. Например, если у нас есть
//описанный персонаж Нэмор (англ. Namor, также известный как 
//Подводник, англ. The Sub-Mariner), он впервые появился в 
//Motion Picture Funnies Weekly в апреле 1939 года.


    namespace Marvel\Atlantida;
    class NamorSubMariner { 
        public static function whoami() {}
    }
    echo NamorSubMariner::whoami()
?>