
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$bust=$_POST['bust'];
	$hip=$_POST['waist'];
	$waist=$_POST['hip'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE table1 SET bust='$bust',waist='$waist',hip='$hip' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM table1 WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$bust = $user_data['bust'];
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
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		 <table width="1300" height="500"  class="vitamins" >
    
			 <thead>
            <tr>
                <th>SIZE</th>
                <th>BUST</th>
                <th>WAIST</th>
                <th>HIP</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>S</td>
                <td>34</td>
                <td>32</td>
                <td>38</td>
            </tr>
            <tr>
                <td>M</td>
                <td>36</td>
                <td>34</td>
                <td>40</td>
            </tr>
            <tr>
                <td>L</td>
                <td>38</td>
                <td>36</td>
                <td>42</td>
            </tr>
            <tr>
                <td>XL</td>
                <td>42</td>
                <td>40</td>
                <td>46</td>
            </tr>
            <tr>
                <td>XXL</td>
                <td>44</td>
                <td>42</td>
                <td>48</td>
            </tr>
        </tbody>

			<tr> 
				<td>bust:<input type="text" name="bust" value=<?php echo $bust;?>></td>
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