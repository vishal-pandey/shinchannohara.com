<!DOCTYPE html>
<html>
<head>
	<title>Shinchan Nohara</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="./secure/test.php" class="theform">
	<input type="text" name="user" class="form-group">
	<input type="submit" name="submit" class="btn">
</form>
<div class="theoutput"></div>

</body>
</html>
<script type="text/javascript">
			$(document).ready(function(){
				$(".theform").submit(function(e) {
				    var url = "./secure/test.php";

				    $.ajax({
				           type: "POST",
				           url: url,
				           data: $(this).serialize(), 
				           success: function(data)
				           {
				               $(".theoutput").html(data);
				           }
				         });

				    e.preventDefault(); 
				});
			});
</script>