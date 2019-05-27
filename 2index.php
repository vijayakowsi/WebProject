<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM table2 ORDER BY id DESC");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white"><u>Measurement Table</u></h2>
    <div>
        <a href="chudi.html"><span style="font-size:29px;color:white;float:left;font-family:apple chancery,cursive;"><u>back page</u></span></a>
    </div>
    <br>
    <br>
    <br>
   <link href='table1.css' rel='stylesheet' type='text/css'>
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

    <tr>
        <th>numerical</th> <th>waist</th> <th>hip</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['numerical']."</td>";
        echo "<td>".$user_data['waist']."</td>";
        echo "<td>".$user_data['hip']."</td>";    
        echo "<td><a href='2edit.php?id=$user_data[id]'>Edit</a> | <a href='2delete.php?id=$user_data[id]'>Delete</a></td></tr>";   
    }
    ?>
    </tbody>
    </table>
</body>
</html>