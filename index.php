<?php
function __autoload($className){    
    require $className . '.php';
}

use Marvel\Atlantida\NamorSubMariner;
use Marvel\Kiev\PetrEngineer;
use Marvel\NewYork\HankPymAntMan;
use Marvel\NewJersey\JanetVanDyneWasp;
use Marvel\Asgard\ThorMightyThor;
use Marvel\LongIsland\AnthonyEdwardTonyStarkIronMan;
use Marvel\Paterson\SimonWilliamsWonderMan;
use Marvel\UK\BrianBraddockCaptainBritain;
use Marvel\Illinois\HenryPhilipHankMcCoyBeast;

    echo NamorSubMariner::whoami();
    echo "<hr>";
    echo PetrEngineer::whoami();
    echo "<hr>";
    echo HankPymAntMan ::whoami();
    echo "<hr>";
    echo JanetVanDyneWasp::whoami();
    echo "<hr>";
    echo ThorMightyThor::whoami();
    echo "<hr>";
    echo AnthonyEdwardTonyStarkIronMan::whoami();
    echo "<hr>";
    echo SimonWilliamsWonderMan::whoami();
    echo "<hr>";
    echo BrianBraddockCaptainBritain::whoami();
    echo "<hr>";
    echo HenryPhilipHankMcCoyBeast::whoami();
           
?>