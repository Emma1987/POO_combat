<?php

abstract class Animal extends Personnage
{
	protected $sante;

	public function __construct()
	{
		parent::__construct();
		$this->sante = 50;
	}
}