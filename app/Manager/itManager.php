<?php 
namespace Manager;

class itManager extends \W\Manager\Manager 
{

	public function findByVoyageId($id){

		$sql = "SELECT * FROM " . $this->table . " WHERE id = :id LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":id", $id);
		$sth->execute();

		return $sth->fetch();
	}

}