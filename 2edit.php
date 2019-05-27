
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$numerical=$_POST['numerical'];
	$waist=$_POST['waist'];
	$hip=$_POST['hip'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE table2 SET numerical='$numerical',waist='$waist',hip='$hip' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: 2index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM table2 WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$numerical = $user_data['numerical'];
	$waist = $user_data['waist'];
	$hip = $user_data['hip'];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white"><u>Measurement Table</u></h2>
   <link href='table1.css' rel='stylesheet' type='text/css'>
	
	<form name="update_user" method="post" action="2edit.php">
		 <table width="1300" height="500"  class="vitamins">
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
				<td>Numerical:<input type="text" name="numerical" value=<?php echo $numerical;?>></td>
				<td>waist:<input type="text" name="waist" value=<?php echo $waist;?>></td>
				<td>hip:<input type="text" name="hip" value=<?php echo $hip;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</head>
</html>