<!doctype html>
<html>
	<head>
        <title>Digital Clock</title>
        <meta http-equiv="Refresh" content="1;" />
		<style type="text/css">
			p{
				border: 3px dashed green;
				margin: 5px 500px 500px 500px;
				padding: 5px;
				background-color: pink;
			}
		</style>
	</head>
	<body>
	<center>
	<b>Sugyan Anand 1CR17CS154</b><br>
	<p><b>
		<?php
			date_default_timezone_set("Asia/Kolkata");
            echo "Digital Clock<br>";
			echo date("h : i : s A")."<br>";
			echo "Date<br>";
			echo date("d/m/y");
		?>
	</b></p></center>
	</body>
</html>