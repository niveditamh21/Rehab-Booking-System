<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head> 
<body>
  
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container">
         <a class="navbar-brand"
         href="Laws.html">
         <img src="C:\Users\Hp\OneDrive\Pictures\Images\lawslogo.jpeg" 
 alt="logo" class="rounded-circle"/>
         
      </a>
     <button 
       class="navbar-toggler" 
       type="button" data-toggle="collapse" 
       data-target="#navbarNav" 
       aria-controls="navbarNav" 
       aria-expanded="false" 
       aria-label="Toggle navigation">
       <span 
         class="navbar-toggler-icon">
       </span> 
     </button>
     <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item ">
              <style></style>
              <a style="font-family:'Times New Roman';" class="nav-link" href="laws_home.html"><h2 class="h1" >Home</h2></a>
            </li>
          
     </div>
     
   </div> 
  </nav> 
  
<?php
$con=new mysqli("localhost","root","root","drug database",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "select Category,laws.Name,Authority,Parties,Year_of_enforcement,Country from drug_varieties,laws,restricts_to where drug_varieties.Variety_number=restricts_to.Variety_number and laws.Name=restricts_to.Name";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Category</th><th>Name</th><th>Authority</th><th>Collaborated Parties</th><th>Year of Enforcement</th><th>Country</th></tr>";
    while($row = $result->fetch_assoc()) {
    echo "<tr><td>" .$row["Category"]. " " . "</td><td>" . $row["Name"]. " " . "</td><td>" . $row["Authority"]. " " . "</td><td>" . $row["Parties"]. " " . "</td><td>" . $row["Year_of_enforcement"]." ". "</td><td>" . $row["Country"]. "</td></tr>" ;
    }
    echo "</table>";
} else {
    echo "0 results";
           
    }
    $con->close();
    
?>

<a style="text-align:center;font-size:25px;font-family:Times New Roman;" class="nav-link text-dark" href="laws_home.html"><u>Home</u></a> 

</body>
</html>
