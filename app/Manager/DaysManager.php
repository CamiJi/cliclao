<?php 
namespace Manager;

class DaysManager extends \W\Manager\Manager 
{


	public function findDaysByVoyageId($id){

		$sql = "SELECT * FROM days WHERE voyage_id = :id ORDER BY ordering";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}

}