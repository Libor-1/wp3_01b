<?php

function getCarDescription(int $year):void {
    if ($year <= 1900) {
        echo "Něco takového ještě jezdí? :)";
    }
    elseif ($year <= 1980) {
        echo "Hodně stará kára";
    }
    elseif ($year <= 2000) {
        echo "To už by šlo";
    }
    elseif ($year <= 2010) {
        echo "Dobrý";
    }
    
else {
    echo "Super!!!";
    }
}

?>