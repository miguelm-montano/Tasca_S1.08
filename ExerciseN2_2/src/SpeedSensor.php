<?php
/*Programa un DataProvider per a la classe Test de l’exercici 2 del nivell 1 i fes-lo servir.*/
namespace ExerciseN2_2;

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