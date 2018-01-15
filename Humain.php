<?php

class Humain extends Personnage
{
	protected $sante = 100;
	protected $persoArme;

	public function __construct()
	{
		parent::__construct();

		$personnage = $this->getPersonnage();
		$arme = new Arme($personnage);
		$this->setPersoArme($arme);
	}

	public function getPersoArme()
	{
		return $this->persoArme;
	}

	public function setPersoArme($persoArme)
	{
		$this->persoArme = $persoArme;
	}
}