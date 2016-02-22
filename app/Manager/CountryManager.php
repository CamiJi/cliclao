<?php 
namespace Manager;

class CountryManager extends \W\Manager\Manager 
{

	public function findByName($name){

		$sql = "SELECT * FROM " . $this->table . " WHERE name = :name LIMIT 1";
		$sth = $this->dbh->prepare($sql);
		$sth->bindValue(":name", $name);
		$sth->execute();

		return $sth->fetch();
	}

}