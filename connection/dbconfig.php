<?php
class Database
{
    private $host = "remotemysql.com";
    private $db_name = "Eph2RPFR5M";
    private $username = "Eph2RPFR5M";
    private $password = "F4s6Q1D7ZU";
    public $conn;

    public function dbConnection()
	{

	    $this->conn = null;
        try
		{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Database Connected";

        }
		catch(PDOException $exception)
		{
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

$db_host = "remotemysql.com";
$db_name = "Eph2RPFR5M";
$db_user = "Eph2RPFR5M";
$db_pass = "F4s6Q1D7ZU";

try{

  $db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass);
  $db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}
catch(PDOException $e){
  echo $e->getMessage();
}
?>
