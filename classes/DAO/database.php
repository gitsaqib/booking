<?
class DATABASE
{
	static function connect(){
		try {
				$dbConnection = new PDO("mysql:host=;dbname=", "", "");
				// set the PDO error mode to exception
				$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				echo "Connected successfully";
			}
			catch(PDOException $e)
			{
				echo "Connection failed: " . $e->getMessage();
			}
	}
	static function disconnect(){
		$dbConnection = null;
	}
}
?>