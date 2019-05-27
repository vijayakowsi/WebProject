<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM table1 ORDER BY id DESC");
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
            <th><strong>bust</strong></th> <th><strong>waist</strong></th> <th><strong>hip</strong></th>
            </tr>
            <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['bust']."</td>";
        echo "<td>".$user_data['waist']."</td>";
        echo "<td>".$user_data['hip']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";     
    }
    ?>
        </tbody>
    

    </table>
</body>
</html>