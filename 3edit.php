
<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	$bust=$_POST['bust'];
	$BBbust =$_POST['BBbust'];
	$shoulder=$_POST['shoulder'];
	$slength=$_POST['slength'];
	$sloose=$_POST['sloose'];
	$neck=$_POST['neck'];
	// update user data
	$result = mysqli_query($mysqli, "UPDATE table3 SET bust ='$bust',BBbust ='$BBbust',shoulder='$shoulder',slength='$slength',sloose='$sloose',neck='$neck' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: 3index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM table3 WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$bust  = $user_data['bust'];
	$BBbust  = $user_data['BBbust'];
	$shoulder = $user_data['shoulder'];
	$slength = $user_data['slength'];
	$sloose= $user_data['sloose'];
	$neck = $user_data['neck'];
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white"><u>Measurement Table</u></h2>
   <link href='table1.css' rel='stylesheet' type='text/css'>	
	<form name="update_user" method="post" action="3edit.php">
		 <table width="1300" height="500"  class="vitamins" >
		 	<thead>
            <tr>
                <th>BUST SIZE</th>
                <th>32</th>
                <th>34</th>
                <th>36</th>
                <th>40</th>
                <th>42</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>A(Around Bust)</td>
                <td>33</td>
                <td>35</td>
                <td>36</td>
                <td>40</td>
                <td>42</td>
            </tr>
            <tr>
                <td>B(Below Bust)</td>
                <td>26</td>
                <td>27</td>
                <td>30</td>
                <td>34</td>
                <td>37</td>
            </tr>
            <tr>
                <td>C(Shoulder)</td>
                <td>11</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
            </tr>
            <tr>
                <td>D(Sleeve Length)</td>
                <td>21</td>
                <td>21</td>
                <td>21</td>
                <td>22</td>
                <td>22</td>
            </tr>
            <tr>
                <td>E(Sleeve Loose)</td>
                <td>12</td>
                <td>12</td>
                <td>13</td>
                <td>14</td>
                <td>15</td>
            </tr>
            <tr>
                <td>G(Front Neck Depth)</td>
                <td>6</td>
                <td>6.5</td>
                <td>7</td>
                <td>8</td>
                <td>7.5</td>
            </tr>

			<tr> 
				<td>Around bust:<input type="text" name="bust " value=<?php echo $bust;?>></td>
				<td>Below bust:<input type="text" name="BBbust " value=<?php echo $BBbust ;?>></td>
				<td>shoulder:<input type="text" name="shoulder" value=<?php echo $shoulder;?>></td>
				<td>sleeve length:<input type="text" name="slength" value=<?php echo $slength;?>></td>
				<td>sleeve loose:<input type="text" name="sloose" value=<?php echo $sloose;?>></td>
				<td>neck:<input type="text" name="neck" value=<?php echo $neck;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</tbody>
		</table>
	</form>
</body>
</html>