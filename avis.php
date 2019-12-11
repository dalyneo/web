<?PHP
	class feedback
	{
		private $Ref ;
		private $Titre ;
		private $Commentaire ;
		private $Avis ;
		//private $Ip ;
		public function getRef()
		{
			return $this->Ref ;
		}
		public function getTitre()
		{
		return  $this->Titre ;
		}
		public function getCommentaire()
		{
		return $this->Commentaire ;
		}
		public function getAvis()
		{
			return $this->Avis ;
		}
		/*public function getIp()
		{
			return $this->Ip ;
		}
		*/
		public function setRef($Ref)
		{
			$this->Ref=$Ref ;
		}
		public function setTitre($Titre)
		{
		 $this->Titre=$Titre ;
		}
		public function setCommentaire($Commentaire)
		{
		$this->Commentaire=$Commentaire ;
		}
		public function setAvis($Avis)
		{
			$this->Avis = $Avis ;
		}
		/*public function setIp($Ip)
		{
			$this->Ip = $Ip ;
		}
		*/
		public function __construct($Ref,$Titre,$Commentaire,$Avis/*,$Ip*/)
		{
			$this->Ref=$Ref ;
		 	$this->Titre=$Titre ;
			$this->Commentaire=$Commentaire ;
			$this->Avis=$Avis ;	
		//$this->Ip = $Ip ;
		}
	}
?>