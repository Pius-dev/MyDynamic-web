<?php
$databaseCon = mysqli_connect("localhost", "root", "", "Dynamic php"); // or  die (Bad Connect: ".mysqli_connect_error());


/* check connection */
//echo "Connection Successful";
if ($databaseCon ->connect_errno) {
    printf("Connect failed: %s\n", $databaseCon ->connect_error);
    exit();
}

$employeeData  = "INSERT INTO Employee (EmpNo,LName,FName,Address,Contact) VALUES (1,'Birungi','Sarah','Wakiso','075678542')";
$result  = mysqli_query($databaseCon,$employeeData ) or die ("Invailed Query: $employeeData" );

$employeeData  = "INSERT INTO Employee (EmpNo,LName,FName,Address,Contact) VALUES (2,'Otim','William','Kakira','077678500')";
$result  = mysqli_query($databaseCon,$employeeData ) or die ("Invailed Query: $employeeData" );




$employeeData  = "INSERT INTO Employee (EmpNo,LName,FName,Address,Contact) VALUES (3,'Obonyo','pius','Kampala','075690842')";
$result  = mysqli_query($databaseCon,$employeeData ) or die ("Invailed Query: $employeeData" );

echo "VALUES added";

// Use Select Query
$employeeData = "SELECT * FROM  Employee";

$result  = mysqli_query($databaseCon,$employeeData ) or die ("Invailed Select Query: $employeeData");

//To Display the Content on the HTML table; 

echo "<table border='2'>";
echo "<tr><td>EmpNo</td><td>LName</td><td>FName</td><td>Address</td><td>Contact</td></tr>\n";

while($row = mysqli_fetch_assoc($result)) { // while loop allows face all the result present
echo "<tr><td>{$row['EmpNo']}</td><td>{$row['LName']}</td><td>{$row['FName']}</td><td>{$row['Address']}</td><td>{$row['Contact']}</td></tr>\n";

}
echo "</table>";





?>