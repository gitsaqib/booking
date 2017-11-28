<?
//ini_set("error_reporting","E_ALL & ~E_NOTICE & ~E_WARNING");
include_once("../classes/reservation/Reservation.php");
	$name = $_REQUEST["name"];
	$contactNumber = $_REQUEST["contactNumber"];
	if(
		$name
		&& (strlen(trim($name)) > 0)
		&& $contactNumber
		&& (strlen(trim($contactNumber)) > 0)
		)
	{
		$reservation = new Reservation();
		$reservation = $reservation->getReservationFromRequest($_REQUEST);
		$reservation->insertReservation();
		if($reservation->reservationId && $reservation->reservationId >0) {
			echo "{\"responseCode\":\"20\",\"response\" : \"$reservation->reservationId\",\"responseMessage\" : \"Request Saved Successfully.\"}";
		}else {
			echo "{\"responseCode\":\"00\",\"responseMessage\" : \"Transaction Fail.\"}";
		}
	}else
	{
		echo "{\"responseCode\":\"00\",\"responseMessage\" : \"Transaction Fail.\"}";
	}
?>