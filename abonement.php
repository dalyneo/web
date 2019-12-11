<?php

class abonement
{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	
	
	function getId()
	{
		return $id->id;
	}
	function getNom()
	{
		return $this->nom;
	}
	function getPrenom()
	{
		return $this->prenom;
	}
		function getEmail()
	{
		return $this->email;
	}
		
	function setId ($id)
	{
		$this->id=$id;
	}
	function setNom ($nom)
	{
		$this->nom=$nom;
	}
	function setPrenom ($prenom)
	{
		$this->prenom=$prenom;
	}
	function setEmail ($email)
	{
		$this->email=$email;
	}
	function __constract($id,$nom,$prenom,$email)
	{
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		
	}
	
	
}


?>