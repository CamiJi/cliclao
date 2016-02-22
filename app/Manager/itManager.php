<?php 
namespace Manager;

class itManager extends \W\Manager\Manager 
{

	public function findByVoyageId($id){

		$sql = "SELECT * FROM voyages WHERE id = :id LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetch();
	}


	public function findDaysByVoyageId($id){

		$sql = "SELECT * FROM days WHERE voyage_id = :id ORDER BY ordering";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}

}