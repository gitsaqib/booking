<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reservation</title>

    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<style>
		div#main_view {
			background: #ffffff;
			padding: 16px;
		}
	</style>
	<link href="../datepicker/css/datepicker.min.css" rel="stylesheet" type="text/css">
	<script src="../datepicker/js/datepicker.min.js"></script>
	<!-- Include English language -->
	<script src="../datepicker/js/i18n/datepicker.en.js"></script>
	<script src="./reservation.js"></script>
	
</head>

<body>

    <div id="main_view">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reservation</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			<form role="form">
			<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin Reservation Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
										<div class="form-group">
                                            <label>Cars</label>
                                            <select class="form-control" name="carDetails" id="carDetails"
												data-rule="carDetails" data-msg="Select car"
											>
												<option value="Suzuki Cultus - VXRi - 2017">Suzuki Cultus - VXRi - 2017</option>
												<option value="Toyota Corolla - XLI 2017">Toyota Corolla - XLI 2017 </option>
												<option value="Honda Civic - 1.8 2017 ">Honda Civic - 1.8 2017 </option>
                                            </select>
                                        </div>
                                       <div class="form-group">
                                            <label>Message </label>
											<textarea class="form-control" name="message" rows="3"
											data-rule="required" data-msg="Please write something for us "
											placeholder="Message (Preferences)"></textarea>
                                        </div>
                                </div>
                                <!-- /.col-lg-3 (nested) -->
                                <div class="col-lg-6">
                                            <div class="row">
												<div class="col-lg-6">
													<label for="disabledSelect">From Location Picker</label>
													<input class="form-control" name="fromPickup" id="fromPickup" 
													type="text" placeholder="Enter Address to pickup">
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="disabledSelect">Starting Time</label>
														<input data-position="left bottom" class="datepicker-here form-control" name="fromDateTime" id="fromDateTime" 
														type="text" placeholder="Click to Set Date">
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<label for="disabledSelect">To Location Picker</label>
													<input class="form-control" name="toPickup" id="toPickup" 
													type="text" placeholder="Enter Address to drop">
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label for="disabledSelect">Ending Time</label>
														<input data-position="left bottom" class="datepicker-here form-control" name="toDateTime" id="toDateTime" 
														type="text" placeholder="Click to Set Date">
													</div>
												</div>
											</div>
											

                                </div>

                            </div>
                            <!-- /.row (nested) -->
							<div >
							<button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
							</div>
						</div>

                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
			</form>
        </div>
        <!-- /#page-wrapper -->
	<script >
	    var start = new Date()
		// 12:00 AM
		start.setHours(12);
		start.setMinutes(0);
	    // Initialization
		$('#fromDateTime').datepicker(
		{startDate: start,language: "en",timepicker: true,timeFormat: "hh:ii AA",maxHours : 23})
		// Access instance of plugin
		$('#fromDateTime').data('datepicker')
	</script>

</body>

</html>
