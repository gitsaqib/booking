jQuery(document).ready(function($) {
"use strict";
	$("#search").keyup(function(event) {
	    fetch.call(this);
	});
	fetch();
});
function fetch() {
	var str = $(this).serialize();
	$.ajax({
		type: "POST",
		url: "./retrieveOrdersJSON.php",
		data: str,
		success: function(responseData){
			var responseObject = JSON.parse(responseData);
			loadData(responseObject);
		}
	});
}
function loadData(response) {
	$("#tableBody").empty();
    $.each(response, function(i, item) {
			var $tr = $('<tr>').append(
				$('<td>').text(item.reservationId),
				$('<td>').text(item.name),
				$('<td>').text(item.contactNumber),
				$('<td>').text(item.carDetails),
				$('<td>').text(item.reservationDuration),
				$('<td>').text(item.email),
				$('<td>').text(item.message),
				$('<td>').text(item.pickupLocation)
			)
			$tr.appendTo('#tableBody');
    });
}

/*
SELECT * FROM `res_reservation`
WHERE
(1=1 AND `name` LIKE '%Aadil%' AND `name` LIKE '%Farooqui%')
OR
(1=1 AND `email` LIKE '%Aadil%' AND `email` LIKE '%Farooqui%')
OR
(1=1 AND `pickup_location` LIKE '%Aadil%' AND `pickup_location` LIKE '%Farooqui%')
OR
(1=1 AND `contact_number` LIKE '%Aadil%' AND `contact_number` LIKE '%Farooqui%')
OR
(1=1 AND `reservation_duration` LIKE '%Aadil%' AND `reservation_duration` LIKE '%Farooqui%')
OR
(1=1 AND `message` LIKE '%Aadil%' AND `message` LIKE '%Farooqui%')
OR
(1=1 AND `reservation_date` LIKE '%Aadil%' AND `reservation_date` LIKE '%Farooqui%')
;

#Select * from clients where Concat(field1, '', field2, '', fieldn) like "%Mary%"

SELECT * FROM `res_reservation`
WHERE CONCAT(NAME,' ',`name`) LIKE '%Aadil%'
;
SELECT * FROM res_reservation WHERE MATCH (`name`, email) AGAINST ('Aadil')
;


(1=1 AND `name` LIKE '%Aadil%' AND `name` LIKE '%Farooqui%')
OR
(1=1 AND `email` LIKE '%Aadil%' AND `email` LIKE '%Farooqui%')
OR
(1=1 AND `pickup_location` LIKE '%Aadil%' AND `pickup_location` LIKE '%Farooqui%')
OR
(1=1 AND `contact_number` LIKE '%Aadil%' AND `contact_number` LIKE '%Farooqui%')
OR
(1=1 AND `reservation_duration` LIKE '%Aadil%' AND `reservation_duration` LIKE '%Farooqui%')
OR
(1=1 AND `message` LIKE '%Aadil%' AND `message` LIKE '%Farooqui%')
OR
(1=1 AND `reservation_date` LIKE '%Aadil%' AND `reservation_date` LIKE '%Farooqui%')
*/