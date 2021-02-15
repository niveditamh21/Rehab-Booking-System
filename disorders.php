<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disorders</title>
 
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
  
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark ">
    
    <div class="container">
         <a class="navbar-brand">
         
         <img src="" alt="logo" class="rounded-circle"/>
         
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
     <div class="collapse navbar-collapse" id="navbarNav" >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
         
          <a style="font-family:'Times New Roman';"class="nav-link" href="home.html"><h2 class="h1">Home</h2></a>
        </li>
      </ul>
     </div>
     
   </div> 
  </nav> 
</div>
<section style="font-family:'Times New Roman'; font-size:22px; text-align:center;">
      <div class="card" style="width:100rem;height:40rem;">
        <img src="/disorder.jpg" class="card-img" alt="...">
        <h2 class="h1"></h2>
        <div class="card-img-overlay" style="background-color:rgba(255, 248, 220, 0.734);">

        <?php
        $con=new mysqli("localhost","root","root","drug database",'3307');
 
        // Check connection
        if($link === false){
          die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        $sql = "select disorder_name,caused_by,Symptom_1,Symptom_2,Symptom_3,Cured_by_1,Cured_by_2,Cured_by_3,Cured_by_4 from disorders order by disorder_name";
        
        $result = $con->query($sql);


        if ($result->num_rows > 0) {
          echo "<table><tr><th>Disorder Name</th><th>Caused By</th><th>Symptoms</th><th>Cured By</th></tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["disorder_name"]. " " . "</td><td>" . $row["caused_by"]. " " . "</td><td>" . $row["Symptom_1"]. "," . $row["Symptom_2"]. "," . $row["Symptom_3"]. "</td><td>" . $row["Cured_by_1"].  "," . $row["Cured_by_2"]. "," . $row["Cured_by_3"]. "</td></tr>";
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
  
  </nav>
 
  </body>
</html>