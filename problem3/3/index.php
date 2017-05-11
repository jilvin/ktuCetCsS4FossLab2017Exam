<?php
if(isset($_GET['age']))
{
	$age=$_GET['age'];

	$limitHigh=(220-$age)*0.85;

	$limitLow=(220-$age)*0.65;


	#echo $limitHigh;
	#echo $limitLow;
	$flag=1;
}
?>
<!doctype html>
<html>
<head>
<title>Heart Rate Limit Calculator - Simple Version</title>
</head>
<body>
<div id="heading">
<p>Heart Rate Limit Calculator</p>
</div>
<?php
	if($flag==1)
	{
?>
<div id="result">
The result for age <?php echo $age; ?> is:<br>High Limit: <?php echo $limitHigh; ?><br>Low Limit: <?php echo $limitLow; ?>
</div>
<?php
	}
?>
<div id="formhead">
<?php if($flag==1)
	{
?>
Enter another age if you want to find results for another age
<?php } 
	else 
	{
?>
Enter your age below
<?php 
	} 
?>
</div>
<div id="form">
<form method="GET">
<input type="text" name="age"/>
<button type="submit">Submit Age</button>
</form>
</div>
</body>
</html>
