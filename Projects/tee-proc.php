<!DOCTYPE html>
<html>
<head>
<title>E11 U08-t-proc</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!--

E11 Mark U08-t-proc.php

What objectives are you demonstrating?

-Use PHP to process data
-Use on include (maybe)
-Use of isset()
-Use of a switch()
-Use of POST method
-Used is_numeric()

-->

<style>

body { margin: 8%; }

</style>

</head>
<body>

<h1>T-shirts R Us Receipt</h1>

<?php

//Get data from a GET or POST (change GET to POST for post)
if(isset($_POST['color'])) { $color = $_POST['color']; } else { $color = "X"; }
if(isset($_POST['size']))  { $size = $_POST['size']; }   else { $size  = "Y"; }
if(isset($_POST['quant'])) { $quant = $_POST['quant']; } else { $quant = "Z"; }

// print "(body of your project) $color $size $quant x";

// Calculate total with good data
if(is_numeric($quant)) {
	
	// Cost per size
	switch ($quant) {
		case "large"   : $cost = 12 * $quant; break;
		case "medium"  : $cost = 10 * $quant; break;
		case "small"   : $cost = 10 * $quant; break;
		case "x-small" : $cost =  8 * $quant; break;
		default        : $cost =  0;
	}
	
	// Print receipt 
	print "
	<p>
	<b style='color: #0000cc;'>Thank you for your order!</b>
	<br />
	Your total of $quant $size $color t-shirts is $cost.
	</p>
	";
	
} else {
	
	// Print error message
	print "
	<p>
	<b style='color: #cc0000;'>Error with quantity.</b>
	<br />
	Click on the back button and check value.
	</p>
	";
	
}

?>
</body>
</html>










