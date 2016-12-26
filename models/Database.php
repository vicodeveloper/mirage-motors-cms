<?php

/**
 * Created by PhpStorm.
 * User: ViCODeveloper
 * Date: 026 26.12.16
 * Time: 15:49
 */
class Database
{
	 public $isConn;
	 private $datb;

	//connect to db
	 public function __construct($username=DB_USER,$pass=DB_PASS,$host=DB_HOST,$dbname=DB_NAME,$option=[]){
	 	 $this->isConn = TRUE;
	 	 try{
	 	 	 $this->datb = new PDO("mysql:host={$host};$dbname={$dbname};charset=utf8",$username,$pass,$option);
	 	 	 $this->datb->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	 	 $this->datb->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
		 } catch (PDOException $e){
	 	 	 throw new Exception($e->getMessage());
		 }
	 }

	 //disconnect db
	 public function Disconnect(){
	 	 $this->isConn = FALSE;
	 	 $this->datb = NULL;
	 }
	 //get row
	 public function getRow($query, $params=[]){
	 	 try{
	 	 	 $stmt = $this->datb->prepare($query);
	 	 	 $stmt->execute($params);
	 	 	 return $stmt->fetch();
		 } catch (PDOException $e){
	 	 	 throw new Exception($e->getMessage());
		 }
	 }

	//get rows
	 public function getRows($query, $params=[]){
		  try{
				$stmt = $this->datb->prepare($query);
				$stmt->execute($params);
				return $stmt->fetchAll();
		  } catch (PDOException $e){
				throw new Exception($e->getMessage());
		  }
	 }

	//insert row
	 public function insertRow($query, $params=[]){
			try{
				 $stmt = $this->datb->prepare($query);
				 $stmt->execute($params);
				 return TRUE;
			} catch (PDOException $e){
				 throw new Exception($e->getMessage());
			}
	 }

	//update row
	 public function updateRow($query, $params=[]){
	 	 $this->insertRow($query, $params);
	 }
	//delete row
	 public function deleteRow($query, $params=[]){
	 	 $this->insertRow($query, $params);
	 }


}