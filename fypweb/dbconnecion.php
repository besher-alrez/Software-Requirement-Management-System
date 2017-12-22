<?php class dbconnection{

public $dblocal;
public function __construct() {


}
public function DBO(){
	$this->dblocal= new PDO("mysql:host=localhost;dbname=srm;charset=latin1","root","",array(PDO::ATTR_PERSISTENT => true));
	  $this->dblocal->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


 }



}
?>