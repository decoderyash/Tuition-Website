<html>

	<head>
	</head>
	<body>
		<form action="index.php" method="POST">
		<select class="form-control" name="drpcol">
			<option value="">Select College</option>
			<option value="GOVERNMENT_ENGINEERING_COLLEGE_MODASA">GOVERNMENT ENGINEERING COLLEGE MODASA</option>
			<option value="VENUS_INTRNATIONAL_COLLEGE_OF_TECHNOLOGY">VENUS INTRNATIONAL COLLEGE OF TECHNOLOGY</option>
			<option value="VIDHYAHARTI_TRUST_POLYTECHNIC_INSTITUTE">VIDHYAHARTI TRUST POLYTECHNIC INSTITUTE</option>
			<option value="VIDYABHARTI_TRUST_INSTITUTE_OF_TECHNOLOGY_AND_RESEARC">VIDYABHARTI TRUST INSTITUTE OF TECHNOLOGY AND RESEARC</option>
			<option value="VISHWAKARMA_GOVERNMENT_ENGINEERING_COLLEGE">VISHWAKARMA GOVERNMENT ENGINEERING COLLEGE</option>
			<option value="VIVEKANAND_INSTITUTE_OF_TECHNOLOGY">VIVEKANAND INSTITUTE OF TECHNOLOGY</option>
			<option value="VPMP_POLYTECHNIC">VPMP POLYTECHNIC</option>
		</select>
		<input type="submit" name="submit" /> 
		</form>
	</body>
</html>
<?php

	if(isset($_POST['submit'])){
		$col_name = $_POST['drpcol'];
		session_start();
		$_SESSION['coll_name'] = $col_name;
		header('Location:home.php');
	}

?>