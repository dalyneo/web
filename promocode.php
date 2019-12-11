<?php

class promocode
{
	//attributs
	protected $code;
	protected $pourcentage;
	protected $used;
	//constructeur


	function __construct($code,$pourcentage){
		$this->code=$code;
		$this->pourcentage=$pourcentage;
	}
  function getcode()
  {
    return $this->code;
  }
  function getpourcentage()
  {
    return $this->pourcentage;
  }

		  public static function all() {
		      $list = [];
		      $db = Db::getInstance();
		      $req = $db->query("SELECT * from promocode");
		      foreach ($req->fetchAll() as $temp) {
		          if ($temp['used']==0) {
								$promo = new promocode($temp['code'], $temp['pourcentage']);
			          $list[] = $promo;
		          }
							else {
								promocode::supprimer($temp['code']);
							}
		      }
		      return $list;
		  }

			public static function supprimer($ids)
			{
					$sql="DELETE from promocode WHERE code='".$ids."'";
					$db=Db::getInstance();
					$req=$db->prepare($sql);
					$req->execute();
					return $req;
			}

			public static function check($PC)
			{
				$db = Db::getInstance();
				$req = $db->query("SELECT code from promocode");
				foreach ($req->fetchAll() as $temp) {
						if ($temp['code']==$PC) {return true;}
						}
				return false;
			}

			public static function changeretat($PC=NULL)
			{
				$db = Db::getInstance();
				$sql ="Update promocode set used=1 WHERE code='".$PC."'";
				$req = $db->query($sql);
			}

			public static function Upd($PC)
			{
					if ($PC!=NULL)
					{
						$pourcentage=0;
						$db = Db::getInstance();
						$sql ="SELECT  * from promocode WHERE code='".$PC."'";
						$req = $db->query($sql);
						foreach ($req->fetchAll() as $temp) {
									if ($temp['used']!=1)$pourcentage=$temp['pourcentage'];
								}
						return $pourcentage;
					}
					return 0;
			}


	}


?>
