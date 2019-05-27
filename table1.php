<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
<article>
    <h2 style="font-size:30px;color:white"><u>Measurement Table</u></h2>
   <link href='table1.css' rel='stylesheet' type='text/css'>
   <form action="add.php" method="post" name="form1">
    <table width="1300" height="500"  class="vitamins" >
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
            <tr>
            <td>BUST:<input type="text" name="bust" ><br><br></td>
            <td>WAIST:<input type="text" name="waist"><br><br></td>
            <td>HIP:<input type="text" name="hip"><br><br></td>
            <td><input type="submit" name="Submit" value="Add"></td>
            </tr>                            
        </tbody>
    </table>
</article>
</form>
</head>
</body>
<?php
 // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['bust'];
        $email = $_POST['waist'];
        $mobile = $_POST['hip'];
        
        // include database connection file
        include_once("config.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO table1(bust,waist,hip) VALUES('$bust','$waist','$hip')");
        
        // Show message when user added
        echo "Value  added successfully.";

        // <a href='index.php'>View Users</a>;
    }
    ?>

</html>