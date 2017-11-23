<?
//ini_set("error_reporting","E_ALL & ~E_NOTICE & ~E_WARNING");
include_once("../classes/reservation/Reservation.php");
?>
<?
	$search = $_REQUEST["search"];
	$reservation = new Reservation();
	$reservations = $reservation->searchReservations($search);
	$someJSON = json_encode($reservations);
  echo $someJSON;
?>