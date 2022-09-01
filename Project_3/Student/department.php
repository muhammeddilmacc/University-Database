<?php
session_start();

$ssn = $_SESSION["ssn"];
?>
<html>
    <head>
    <title>Course Page</title>
</head>


<body>


<div class='bottom-linkes'>
    <div><a href="../studentPage.php" style="text-decoration: none;">< back to main page</a></div>
</div>



<?php
include '../dbconnection.php';

$query = 'SELECT i.dName 
FROM Student s, instructor i
WHERE s.advisorSsn = i.ssn AND s.ssn="'.$ssn.'";';
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) > 0) {
        
echo "<h2>Your Department is $row[dName]</h2> ";
  
} else {
    echo 'You dont have a department';
}
?>

</body>
</html>





