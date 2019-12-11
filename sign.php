<?php

class sign
{
	private $nom;
	private $prenom;
	private $login;
	private $email;
	private $pwd;
	
	function __constract($nom,$prenom,$login,$email,$pwd)
	{
		$this->first=$first;
		$this->last=$last;
		$this->user=$user;
		$this->email=$email;
		$this->mdp=$mdp;
		
	}
	
	function getFirst()
	{
		return $first->first;
	}
	function getLast()
	{
		return $last->last;
	}
	function getUser()
	{
		return $this->user;
	}
		function getEmail()
	{
		return $this->email;
	}
		function getMdp()
	{
		return $this->mdp;
	}
	
	
}


?>