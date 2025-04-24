<html>
<head>
    <title>Processed Information</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-container">
        <h2>Processed Information</h2>
		<center>
		<p><strong>Electricity Cost</strong></p>
    <?php 
        $unit = $_POST['txtunits'];

        $first = 50;
		$second = 100;
		$third = 100;
		$above = 250;

        if ($unit <= 50) 
		{
            $firstresult = $unit * 3.50;
	?>
			<p><strong>Electricity bill for <?php echo $unit; ?> unit is = RS <?php echo $firstresult; ?></strong></p>
	<?php
        } 
		elseif ($unit > 50 && $unit <= 150) 
		{
            $secondresult1 = $unit - $first;
			$secondresult2 = ($first * 3.50) + ($secondresult1 * 4.00);
	?>
			<p><strong>Electricity bill for <?php echo $unit; ?> unit is = RS <?php echo $secondresult2; ?></strong></p>
	<?php
        } 
		elseif ($unit >150 && $unit <= 250) 
		{
            $thirdresult1 = $unit - ($first + $second);
			$thirdresult2 = ($first * 3.50) + ($second * 4.00) + ($thirdresult1 * 5.20);
	?>
			<p><strong>Electricity bill for <?php echo $unit; ?> unit is = RS <?php echo $thirdresult2; ?></strong></p>
	<?php
        } 
		else
		{
            $aboveresult1 = $unit - ($above);
			$aboveresult2 = ($first * 3.50) + ($second * 4.00) + ($third * 5.20) + ($aboveresult1 * 6.50);
	?>
			<p><strong>Electricity bill for <?php echo $unit; ?> unit is = RS <?php echo $aboveresult2; ?></strong></p>
	<?php
        }
    ?>
		</center>
    </div>
</body>
</html>