<?php 
namespace Manager;

class itManager extends \W\Manager\Manager 
{

	public function findByVoyageId($id){

		$sql = "SELECT days.id , voyages.name as voyage_name , `description_voyage` , days.name as day_name , bodyText, ordering FROM voyages CROSS JOIN days WHERE voyage_id = :id";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetchAll();
	}




}