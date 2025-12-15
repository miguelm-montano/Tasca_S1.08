<?php
/*Programa un DataProvider per a la classe Test de l’exercici 1 del nivell anterior i fes-lo servir..*/
namespace ExerciseN2_1;

class NumberChecker  {

	public function __construct(private int $number){}

	public function isEven(): bool {
		return $this->number % 2 == 0;
	}
	public function isPositive(): bool {
		return $this->number > 0;
	}

}

?>