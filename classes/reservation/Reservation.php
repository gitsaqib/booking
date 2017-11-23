<?
class Reservation implements JsonSerializable {
	var $reservationId;
	var $name;
	var $email;
	var $pickupLocation;
	var $contactNumber;
	var $reservationDuration;
	var $carDetails;
	var $message;
	var $reservationDate;

	public function jsonSerialize()
	{
		return [
			'reservationId' => $this->reservationId,
			'name' => $this->name,
			'email' => $this->email,
			'pickupLocation' => $this->pickupLocation,
			'contactNumber' => $this->contactNumber,
			'reservationDuration' => $this->reservationDuration,
			'carDetails' => $this->carDetails,
			'message' => $this->message
		];
	}
	function Reservation() {
	}
	function getReservations(){
		$items = array();
		$dbConnection = null;
		try {

				$dbConnection = new PDO("mysql:host=;dbname=", "", "");
				// set the PDO error mode to exception
				$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connected successfully";

				$stmt = $dbConnection->prepare("select * from res_reservation order by reservation_date desc");
				$stmt->execute();
				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
				$rows = $stmt->fetchAll();

				foreach($rows as $rowIndex=>$row) {
					$thisReservation = new Reservation();
					$thisReservation->reservationId = $row["reservation_id"];
					$thisReservation->name = $row["name"];
					$thisReservation->email = $row["email"];
					$thisReservation->pickupLocation = $row["pickup_location"];
					$thisReservation->contactNumber = $row["contact_number"];
					$thisReservation->reservationDuration = $row["reservation_duration"];
					$thisReservation->carDetails = $row["car_details"];
					$thisReservation->message = $row["message"];
					$thisReservation->reservationDate = $row["reservation_date"];

					$items[] = $thisReservation;
				}
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		finally {
				$dbConnection = null;
		}
		return $items;
	}
		function insertReservation(){
			$items = array();
			$dbConnection = null;
			try {

					$dbConnection = new PDO("mysql:host=;dbname=", "", "");
					// set the PDO error mode to exception
					$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

					$insert = "INSERT INTO res_reservation(";
					$insert.= "reservation_id";
					$insert.= ",name";
					$insert.= ",email";
					$insert.= ",pickup_location";
					$insert.= ",contact_number";
					$insert.= ",reservation_duration";
					$insert.= ",car_details";
					$insert.= ",message";
					$insert.= ",reservation_date";
					$insert.= ") VALUES(";
					$insert.= "null";
					$insert.= ",:name";
					$insert.= ",:email";
					$insert.= ",:pickup_location";
					$insert.= ",:contact_number";
					$insert.= ",:reservation_duration";
					$insert.= ",:car_details";
					$insert.= ",:message";
					$insert.= ",NOW()";
					$insert.= ")";

					$prepredStatement = $dbConnection->prepare($insert);
					$prepredStatement->bindParam(':name', $this->name, PDO::PARAM_STR);
					$prepredStatement->bindParam(':email', $this->email, PDO::PARAM_STR);
					$prepredStatement->bindParam(':pickup_location', $this->pickupLocation, PDO::PARAM_STR);
					$prepredStatement->bindParam(':contact_number', $this->contactNumber, PDO::PARAM_STR);
					$prepredStatement->bindParam(':reservation_duration', $this->reservationDuration, PDO::PARAM_STR);
					$prepredStatement->bindParam(':car_details', $this->carDetails, PDO::PARAM_STR);
					$prepredStatement->bindParam(':message', $this->message, PDO::PARAM_STR);
					$prepredStatement->execute();

					$this->reservationId = $dbConnection->lastInsertId();

			}
			catch(PDOException $e) {
			    echo "Error: " . $e->getMessage();
			}
			finally {
					$dbConnection = null;
			}
		}
		function getReservationFromRequest($request){
				$reservation = new Reservation();

				$reservation->reservationId = $request["reservationId"];
				$reservation->name = $request["name"];
				$reservation->email = $request["email"];
				$reservation->pickupLocation = $request["pickupLocation"];
				$reservation->contactNumber = $request["contactNumber"];
				$reservation->reservationDuration = $request["reservationDuration"];
				$reservation->carDetails = $request["carDetails"];
				$reservation->message = $request["message"];
				$reservation->reservationDate = $request["reservationDate"];

				return $reservation;
	}
	function searchReservations($search){
			$items = array();
			$dbConnection = null;
			try {

					$dbConnection = new PDO("mysql:host=;dbname=", "", "");
					// set the PDO error mode to exception
					$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					//echo "Connected successfully";

					$stmt = $dbConnection->prepare("SELECT * FROM `res_reservation` WHERE CONCAT(`reservation_id`,' ',`name`,' ',`email`,' ',`pickup_location`,' ',`contact_number`,' ',`reservation_duration`,' ',`car_details`,' ',`message`,' ',`reservation_date`) LIKE '%$search%' ORDER BY reservation_date DESC LIMIT 0, 25");
					$stmt->execute();
					// set the resulting array to associative
					$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
					$rows = $stmt->fetchAll();

					foreach($rows as $rowIndex=>$row) {
						$thisReservation = new Reservation();
						$thisReservation->reservationId = $row["reservation_id"];
						$thisReservation->name = $row["name"];
						$thisReservation->email = $row["email"];
						$thisReservation->pickupLocation = $row["pickup_location"];
						$thisReservation->contactNumber = $row["contact_number"];
						$thisReservation->reservationDuration = $row["reservation_duration"];
						$thisReservation->carDetails = $row["car_details"];
						$thisReservation->message = $row["message"];
						$thisReservation->reservationDate = $row["reservation_date"];

						$items[] = $thisReservation;
					}
			}
			catch(PDOException $e) {
			    echo "Error: " . $e->getMessage();
			}
			finally {
					$dbConnection = null;
			}
			return $items;
	}
}
?>