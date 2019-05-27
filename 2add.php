<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
<article>
    <h2 style="font-size:30px;color:white">Measurement Table</h2>
    <div>
        <a href="chudi.html"><span style="font-size:29px;color:white;float:left;font-family:apple chancery,cursive;"><u>back page</u></span></a>
    </div>
    <br>
    <br>
    <br>
   <link href='table.css' rel='stylesheet' type='text/css'>
	<form action="2add.php" method="post" name="form1">
		<table width="1300" height="350" class="vitamins">
				 <thead>
            <tr>
                <th>SIZE</th>
                <th>NUMERIC</th>
                <th>WAIST</th>
                <th>HIPS</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>XS</td>
                <td>2</td>
                <td>24"-25"</td>
                <td>36"-37"</td>
            </tr>
            <tr>
                <td>S</td>
                <td>6</td>
                <td>27"-28"</td>
                <td>39"-40"</td>
            </tr>
            <tr>
                <td>M</td>
                <td>10</td>
                <td>29 1/2"-30"</td>
                <td>41 1/2"-42"</td>
            </tr>
            <tr>
                <td>L</td>
                <td>14</td>
                <td>32"-33"</td>
                <td>44"-45"</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>18</td>
                <td>35"-36"</td>
                <td>47"-48"</td>
            </tr>
            <tr>
                <td>XXL</td>
                <td>20</td>
                <td>36 1/2"-37 1/2"</td>
                <td>48 1/2"-49 1/2"</td>
            </tr>
            <tr>
                <td>XXXL</td>
                <td>22</td>
                <td>38"-39"</td>
                <td>50 1/2"-51 1/2"</td>
            </tr>
        </tbody>
			<tr> 
				<td>numerical:<input type="text" name="numerical"></td> 
				<td>waist:<input type="text" name="waist"></td>
				<td>hip:<input type="text" name="hip"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="Submit" value="submit"></td>
				<td><a href='2index.php'><span style="color:white">View Measurement</span></a></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$numerical = $_POST['numerical'];
		$waist = $_POST['waist'];
		$hip = $_POST['hip'];
		// include database connection file
		include_once("config.php");
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO table2(numerical,waist,hip) VALUES('$numerical','$waist','$hip')");
		// Show message when user added
	}
	?>
</body>
</html>