<html>
<head>
	<title>Sukanya Samriddhi Yojana Calculator</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<style>
    body {
        background-image: url('https://jupiter.money/content/images/2021/11/SukanyaSamridhi.jpg');	
}
  .text{
    margin-left:9.5em;
    margin-top:1em;
  }
  .form-signin {
  max-width: 415px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: #7B68EE;
  border: 1px solid rgba(0,0,0,0.1);}
  .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 8px;
		@include box-sizing(border-box);}
     .text-white{
        font-size:20px;
     }   
</style>
<body>
	<h1 class="text">Sukanya Samriddhi Yojana Calculator</h1>
	<form method="post" class="form-signin">
		<label for="principal" class="text-white"><b>Initial Deposit Amount:</b></label>
		<input type="number" class="form-control" name="principal" required><br>
		<label for="monthly" class="text-white"><b>Monthly Deposit Amount:</b></label>
		<input type="number"class="form-control" name="monthly" required><br>
		<label for="tenure" class="text-white"><b>Tenure (in years):</b></label>
		<input type="number"class="form-control" name="tenure" required><br>
		<label for="interest" class="text-white"><b>Rate of Interest:</b></label>
		<input type="number" class="form-control" step="0.01" name="interest" required><br>
		<input type="submit" name="submit" class="btn btn-sm btn-success btn-block" value="Calculate"><br><br>
		<?php
		if(isset($_POST['submit'])){
			$principal = $_POST['principal'];
			$monthly = $_POST['monthly'];
			$tenure = $_POST['tenure'];
			$interest = $_POST['interest'];

			$n = 12; //interest compounded monthly
			$r = $interest / 100;

			$amount = $principal;
			for($i=1;$i<=($tenure*12);$i++){
				$amount = $amount + $monthly;
				$amount = $amount + ($amount * ($r/$n));
			}

			$maturity = round($amount, 2);

			echo "<b>Maturity Value:</b> ".$maturity;
		}
	?>
	</form>
	
</body>
</html>
