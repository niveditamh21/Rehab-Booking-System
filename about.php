<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link
     rel="stylesheet"
     href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous"
     />
     <script 
       src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
       integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
    </script>
     <script 
       src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" 
       integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" 
       crossorigin="anonymous">
    </script>
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" 
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" 
        crossorigin="anonymous">
    </script>

<style>
table, th, td {
    border: 1px solid black;
}
</style>

</head>

<body>
<div style="width:42.3cm;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
         <a class="navbar-brand">
         
         <img src="/." >
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
           <a style="font-family: 'Times New Roman';font-size: 25px; "class="nav-link" href="rehabs.html">Home </a>
         </li>
         <li class="nav-item active">
           <a style="font-family: 'Times New Roman';font-size: 25px;"class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a style="font-family: 'Times New Roman';font-size: 25px;"class="nav-link" href="book.html">Booking</a>
         </li>
       </ul>
     </div>
  </nav>
</div>
    <!-- end of nav bar-->

    <section style="font-family:'Times New Roman'; font-size:15px; text-align:center;">
    <div class="card" style="width:100rem;height:70rem" >
    <img src="https://www.stockvault.net/data/2019/08/24/268599/preview16.jpg" class="card-img" alt="...">
    <div class="card-img-overlay">

<?php
$con=new mysqli("localhost","root","root","drug database",'3307');
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "select r.name,r.contact_no,r.website_url,r.location,t.support_grp,t.choice,t.cost,t.duration from rehabs as r,treatment as t where r.rno=t.facilitates" ;

$result = $con->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Rehab Name</th><th>Contact Number</th><th>Website</th><th>Location</th><th>Support Group</th><th>Treatment Choice</th><th>Treatment Cost</th><th>Treatment Duration</th></tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr><td>"  . $row["name"]. " " . "</td><td>" . $row["contact_no"]. " " . "</td><td>" . $row["website_url"]. " " . "</td><td>" . $row["location"]. " " . "</td><td>" . $row["support_grp"]. " " . "</td><td>" . $row["choice"]. " " . "</td><td>" . $row["cost"]. " " . "</td><td>" . $row["duration"]. "</td></tr>";

  }
  echo "</table>";
} else {
  echo "0 results";
 
}
$con->close();
?> 

    </div> 
</div>
</section>


</body>
</html>
