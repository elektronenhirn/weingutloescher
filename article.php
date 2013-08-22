<?php

class Article
{
	public $Id;
	public $Title;
	public $Jahrgang;
	public $Bild;
	public $Alc;
	public $Preis;
	
	function __construct($id, $title, $jahrgang, $bild, $alc, $preis)
	{
		$this->Id = $id;
		$this->Title = $title;
		$this->Jahrgang = $jahrgang;
		$this->Bild = $bild;
		$this->Alc = $alc;
		$this->Preis = $preis;
	}
}

class Wein extends Article
{
	public $Saeure;
	public $Erntedatum;
	public $Rebsore;
	public $Restzucker;
	public $Boden;	
	
	function __construct($id, $title, $jahrgang, $bild, $alc, $preis, $saeure, $erntedatum, $rebsorte, $restzucker, $boden)
	{
		parent::__construct($id, $title, $jahrgang, $bild, $alc, $preis);
		$this->Saeure = $saeure;
		$this->Erntedatum = $erntedatum;
		$this->Rebsore = $rebsorte;
		$this->Restzucker = $restzucker;
		$this->Boden = $boden;
	}
}

class Schnaps extends Article
{
	public $Obstsorte;

	function __construct($id, $title, $jahrgang, $bild, $alc, $preis, $obstsorte)
	{
		parent::__construct($id, $title, $jahrgang, $bild, $alc, $preis);
		$this->Obstsorte = $obstsorte;
	}
}

?>