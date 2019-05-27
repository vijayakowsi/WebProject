<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM table3 ORDER BY id DESC");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <body style="background-color:#300032; ">
    <h2 style="font-size:30px;color:white">Measurement Table</h2>
    <div>
        <a href="saree.html"><span style="font-size:29px;color:white;float:left;font-family:apple chancery,cursive;"><u>back page</u></span></a>
    </div>
    <br>
    <br>
    <br>
   <link href='table1.css' rel='stylesheet' type='text/css'>
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
        <th>Around bust</th> <th>Below bust</th> <th>shoulder</th><th>sleeve length </th><th>sleeve loose</th><th>neck</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['bust']."</td>";
        echo "<td>".$user_data['BBbust']."</td>";
        echo "<td>".$user_data['shoulder']."</td>";    
        echo "<td>".$user_data['slength']."</td>";  
        echo "<td>".$user_data['sloose']."</td>";  
        echo "<td>".$user_data['neck']."</td>";  
        echo "<td><a href='3edit.php?id=$user_data[id]'>Edit</a>| <a href='3delete.php?id=$user_data[id]'>Delete</a></td></tr>";   
    }
    ?>
</tbody>
</table>
</body>
</head>
</html>