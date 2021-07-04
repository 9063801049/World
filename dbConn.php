<?php
$conn=mysqli_connect("fdb32.awardspace.net","3865939_db","Nani@116","3865939_db");
$sql="select Country from covidcases1";
$res=mysqli_query($conn,$sql)
?>
<!DOCTYPE html>


<html>
<head>
<title>
</title>
<script type="text/javascript" src="cases.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style type="text/css">
        table{
        border:1px solid;
        border.collapse:collapse;
        padding:10px;
        background-color:skyblue;
        font-size:20pt;
        font-weight:bold;
        color:yellow;
        }
        th,td,tr,selectCountry
        {
        border: 1px solid;
        }
    </style>
</head>
<body>
<center>
Choose Country 
<br>
<br>

<select id="case" onchange="selectCountry()">
    <?php while($rows=mysqli_fetch_array($res)){
    ?>
    <option value="<?php echo $rows['Country']; ?>" > <?php echo $rows['Country']; ?></option>
    <?php
    }
        ?>
</select>
</center>
 <table>
         <thead>
                 <th style="width: 10%"> Country </th>
                  <th style="width: 10%">Total_Cases</th>
                  <th style="width: 10%">Active_Cases</th>
                   <th style="width: 10%">Deceased</th>
                    <th style="width: 10%">Recovered</th>
                 </thead>    
                 <tbody id="ans">
                 </tbody>
</table>
</body>
</html>