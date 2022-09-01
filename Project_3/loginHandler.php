
<?php

session_start();
?>

<?php

if (isset($_POST["submit"])) {

    $ssn = $_POST["ssn"];
    $password = $_POST["pwd"];

    $_SESSION["ssn"] = $ssn;

    if ($ssn == "" || $password == "") {
        echo 'ssn or password cannot be empty!';
        exit();
    } else {

        include './dbconnection.php';

        $query = "SELECT* FROM userr WHERE ssn = '$ssn'  AND  password = '$password' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0 && $row["role"] == "instructor") {

            header("location: instructorPage.php");
        } else if (mysqli_num_rows($result) > 0 && $row["role"] == "student") {

            header("location: studentPage.php");
        } else {

            echo 'There is no such User! Please try again';
        }
    }
}//isset Block


