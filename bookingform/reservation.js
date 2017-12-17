
$(document).ready(function($) {
	    //http://t1m0n.name/air-datepicker/docs/
		var start = new Date()
		// 12:00 AM
		start.setHours(12);
		start.setMinutes(0);
	    dateConfigFrom = {startDate: start,language: "en",timepicker: true,timeFormat: "hh:ii AA",maxHours : 23}
		// Initialization
		$('#fromDateTime').datepicker(dateConfigFrom)
		// Access instance of plugin
		//$('#fromDateTime').data('datepicker')
		dateConfigTo = {startDate: start,language: "en",timepicker: true,timeFormat: "hh:ii AA",maxHours : 23}
		$('#toDateTime').datepicker(dateConfigTo)

});