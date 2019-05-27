
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white"><u>Measurement Table</u></h2>
   <link href='table1.css' rel='stylesheet' type='text/css'>
    <table width="1300" height="500"  class="vitamins" >
	

	<form action="add.php" method="post" name="form1">
		<thead>
            <tr>
                <th>SIZE</th>
                <th>BUST</th>
                <th>WAIST</th>
                <th>HIP</th>
            </tr>
        </thead>
         <tfoot>
            <tr>
                <td colspan="4">
                    <p><span style="font-family:apple chancery,cursive;font-size: 20px"><strong>Always treat your Measurement exactly as you want </strong></span></p>
                            <a href="chudi.html"><span style="font-size:21px;color:white;float:left;font-family:apple chancery,cursive;"><u>Back Page</u></span></a>
                </td>
            </tr>
        </tfoot>
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
				<td>bust:<input type="text" name="bust"></td>
				<td>waist:<input type="text" name="waist"></td>
				<td>hip:<input type="text" name="hip"></td>
			</tr>
			<tr> 
				<td><input type="submit" name="Submit" value="submit"></td>
				<td><a href='index.php'><span style="color:white">View Measurement</span></a></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$bust = $_POST['bust'];
		$waist = $_POST['waist'];
		$hip = $_POST['hip'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO table1(bust,waist,hip) VALUES('$bust','$waist','$hip')");
		
		// Show message when user added
		
	}
	?>
</body>
</html>