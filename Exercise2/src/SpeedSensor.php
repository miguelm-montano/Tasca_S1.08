<?php
/*Estem programant la lògica d'un sensor de velocitat de vehicles. Els diferents nivells són:

< 30 km/h: Molt lent
30-60 km/h: Velocitat adequada
61-80 km/h: Excés lleu
81-100 km/h: Excés moderat
> 100 km/h: Excés greu
Fes un programa(mitjançant TDD) que, donada una velocitat concreta, et retorni l'umbral corresponent en funció de com s'ha descrit a dalt.*/
namespace Exercise2;

class SpeedSensor {

    public function checkSpeed(int $speed): string {
        
        if($speed < 30) {
            return 'Very slow';
        } elseif ($speed <= 60) {
            return 'Right speed';
        } elseif ($speed <= 80) {
            return 'Minor excess';
        } elseif ($speed < 100) {
            return 'Moderate excess';
        } else {
            return 'Serious excess';
        }
    }
}

?>