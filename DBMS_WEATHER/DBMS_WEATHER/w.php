<?php
 $UserID = $_POST["userId"];
 $UserName = $_POST["userName"];
 $UserPassword = $_POST["userPassword"];

 $Locationid = $_POST["locationid"];
 $City1 = $_POST["city1"];
 $Country1 = $_POST["country1"];

 $Weatherid = $_POST["weatherid"];
 $Locationid = $_POST["locationid"];
 $Dates1 = $_POST["dates1"];
 $Timing1 = $_POST["timing1"];
 $Temp = $_POST["temp"];
 $Wind = $_POST["wind"];
 
 $Eventid = $_POST["eventid"];
 $Weatherid = $_POST["weatherid"];
 $Eventtype= $_POST["eventtype"];
 $Severity1= $_POST["severity1"];
 $Start1= $_POST["start1"];
 $End1= $_POST["end1"];

 $Reportid = $_POST["reportid"];
 $UserID = $_POST["userId"];
 $Weatherid = $_POST["weatherid"];
 $Reporttext= $_POST["reporttext"];
 $Reportstatus= $_POST["reportstatus"];
 $conn = new mysqli('localhost','root', '','weather');
 if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            // if ($username == $row["city"]) {
            //     //echo "<br>Duplicate city found<br>";
            //     return;
            // }    
        }
    } 
    $sql = "INSERT INTO users VALUES ('$UserID','$UserName','$UserPassword')";
    $result = $conn->query($sql);
   
    $sqll = "SELECT * FROM locations";
    $result1 = $conn->query($sqll);
    if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) 
        {
            // if ($username == $row["city"]) {
            //     //echo "<br>Duplicate city found<br>";
            //     return;
            // }    
        }
    } 
    $sqll = "INSERT INTO locations VALUES ('$Locationid','$City1','$Country1')";
    $result1 = $conn->query($sqll);


    $sqlw = "SELECT * FROM weather";
    $result2 = $conn->query($sqlw);
    if ($result2->num_rows > 0) 
    {
        while($row = $result2->fetch_assoc()) 
        {
            // if ($username == $row["city"]) {
            //     //echo "<br>Duplicate city found<br>";
            //     return;
            // }    
        }
    } 
    $sqlw = "INSERT INTO weather VALUES ('$Weatherid','$Locationid','$Dates1','$Timing1','$Temp','$Wind')";
    $result2 = $conn->query($sqlw);

    

    $sqle = "SELECT * FROM events";
    $result3 = $conn->query($sqle);
    if ($result3->num_rows > 0) {
        while($row = $result3->fetch_assoc()) 
        {
            // if ($username == $row["city"]) {
            //     //echo "<br>Duplicate city found<br>";
            //     return;
            // }    
        }
    } 
    $sqle = "INSERT INTO events VALUES ('$Eventid','$Weatherid','$Eventtype','$Severity1','$Start1','$End1')";
    $result3 = $conn->query($sqle);
    
    $sqlr = "SELECT * FROM reports";
    $result4 = $conn->query($sqlr);
    if ($result4->num_rows > 0) {
        while($row = $result4->fetch_assoc()) 
        {
            // if ($username == $row["city"]) {
            //     //echo "<br>Duplicate city found<br>";
            //     return;
            // }    
        }
    } 
    $sqlr = "INSERT INTO reports VALUES ('$Reportid','$UserID','$Weatherid','$Reporttext','$Reportstatus')";
    $result4 = $conn->query($sqlr);
    echo "Record Inserted Successfully!!!";
    
}


