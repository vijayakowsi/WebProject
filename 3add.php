<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white">Measurement Table</h2>

   <link href='table.css' rel='stylesheet' type='text/css'>
   <div>
   	<a href="saree.html"><span style="font-size:29px;color:white;float:left;font-family:apple chancery,cursive;"><u>back page</u></span></a>
   </div>
    <br>
    <br>
    <br>
	<form action="3add.php" method="post" name="form1">
		<table width="1350" height="500"   class="vitamins">
 
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
				<td>Around bust:<input type="text" name="bust"></td>
				<td>Below bust:<input type="text" name="BBbust"></td>
				<td>shoulder:<input type="text" name="shoulder"></td>
				<td>sleeve length:<input type="text" name="slength"></td>
				<td>sleeve loose:<input type="text" name="sloose"></td>
				<td>neck:<input type="text" name="neck"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="submit"></td>
				<td><a href='3index.php'><span style="color:white">View Measurement</span></a></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$bust= $_POST['bust'];
		$BBbust  = $_POST['BBbust'];
		$shoulder = $_POST['shoulder'];
		$slength= $_POST['slength'];
		$sloose = $_POST['sloose'];
		$neck = $_POST['neck'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO table3(bust,BBbust,shoulder,slength,sloose,neck) VALUES('$bust','$BBbust','$shoulder','$slength','$sloose','$neck')");
		
		// Show message when user added
	}
	?>
</body>
</head>
</html>