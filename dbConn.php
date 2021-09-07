<?php
$conn=mysqli_connect("fdb32.awardspace.net","3865939_db","Nani@116","3865939_db");
$sql="select Country from covidcases";
$res=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>


<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
        }<style>
div {
  background-image: url('covid_image.jpg');
}
</style>

          
    </style>
</head>
<body>
<style>
body{
        margin-top:30px;
        margin-left:30px;
        margin-right:30px
        }
         
     
          
</style>
<center>
<h3>Choose Country</h3> 

<select id="case" onchange="selectCountry()">
    <?php while($rows=mysqli_fetch_array($res)){
    ?>
    <option value="<?php echo $rows['Country']; ?>" > <?php echo $rows['Country']; ?></option>
    <?php
    }
        ?>
</select>
 
</center>
<br>

 <table class="table table-dark table-striped">
         <thead>
                 <th style="width: 10%"> Country</th>
                  <th style="width: 10%">Total Cases</th>
                  <th style="width: 10%">Active Cases</th>
                   <th style="width: 10%">Deceased</th>
                    <th style="width: 10%">Recovered</th>
                 </thead>    
                 <tbody id="ans">
                 </tbody>
</table>

      <div>
      <style>
body{
        margin-top:30px;
        margin-left:30x;
        margin-right:30px;
       <img src="world_covid.jpg">
        
        
        }
</style>
</div>
<br>
<img src="world_covid.jpg" width="1460x" height="800px">
 
</body>
</html>
