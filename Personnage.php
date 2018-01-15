<?php

abstract class Personnage
{
	protected $name;
	protected $force;
	protected $sante;
	protected $force_min;
	protected $force_max;
	protected $personnage;

	public function __construct()
	{
		$personnage = static::class;
		$this->setPersonnage($personnage);
	}

	public function frapper(Personnage $perso)
	{
		$this->force = rand($this->force_min, $this->force_max);
		$perso->sante -= $this->force;
	}

	//SETTERS & GETTERS
	
	public function getName()
	{
		return $this->name;
	}

	public function getForce()
	{
		return $this->force;
	}

	public function getSante()
	{
		return $this->sante;
	}

	public function getForceMin()
	{
		return $this->force_min;
	}
	
	public function getForceMax()
	{
		return $this->force_max;
	}

	public function getPersonnage()
	{
		return $this->personnage;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function setForce($force)
	{
		$this->force = $force;
	}

	public function setSante($sante)
	{
		$this->sante = $sante;
	}

	public function setPersonnage($personnage)
	{
		$this->personnage = $personnage;
	}

	public function setForceMin($force_min)
	{
		$this->force_min = $force_min;
	}
	
	public function setForceMax($force_max)
	{
		$this->force_max = $force_max;
	}
}

















