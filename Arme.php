<?php

class Arme
{
	protected $arme;
	protected $personnage;

	public function __construct($personnage)
	{
		$this->setArme($personnage);
		var_dump($this->arme);
	}

	public function getArme()
	{
		return $this->arme;
	}

	public function getPersonnage()
	{
		return $this->personnage;
	}

	public function setArme($personnage)
	{
		if ($personnage == 'Chevalier')
		{
			$this->arme = 'Epée à 2 mains';
		}
		else if ($personnage == 'Fantassin')
		{
			$this->arme = 'Epée simple';
		}
		else if ($personnage == 'Paysan')
		{
			$this->arme = 'Fourche';
		}
	}
}