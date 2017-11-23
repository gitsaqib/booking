<!DOCTYPE html>
<html lang="en">
<head>

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<link href="./retrieveOrder.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <a>Search</a> <input type="text" id="search" name="search" />
</nav>
 <section class="content-area">
  <div class="table-area">
    <table class="responsive-table table">
      <thead>
        <tr>
		  <th>Ref No </th>
          <th>Name</th>
          <th>Number</th>
          <th>Car</th>
          <th>Duration</th>
          <th>Email</th>
          <th>Message</th>
          <th>Pickup Location</th>
        </tr>
      </thead>
      <tbody id="tableBody">

      </tbody>
    </table>
  </div>
</section>
<script src="./retrieveOrder.js">

</script>
</body>

</html>
