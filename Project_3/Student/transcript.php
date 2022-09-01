<?php
session_start();

$ssn = $_SESSION["ssn"];
?>
<html>
    <head>
    <title>Course Page</title>
</head>

<style>

    body{

    }

    table, td, th {
        font-family: "Open Sans",sans-serif;
        border: 1px solid rgb(231, 236, 241);

    }
    th{
        background-color: darkgray;
        padding: 7px;
        font-size: 15px;
        font-family: "Open Sans",sans-serif;

    }

    td{
        padding-left: 5px;
        height: 30px;
        border: 1px solid #ddd;
    }

    .cCode-cells{
        width: 110px;
        min-width: 100px;
    }

    .year-cells{
        width: 150px;
        min-width: 110px;
    }


    .ects-cells{
        width: 50px;
        min-width: 40px;
    }


    .lgrade-cells{
        width: 130px;
        min-width: 100px;
    }

    .container{
        width: 70%;
        margin: 30px auto 30px auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    .year-header{
        font-size: 25px;
        font-weight: 700;
        font-family: "Open Sans",sans-serif;
        text-align: center;
        padding-bottom: 11px;
        color: white;
        padding-top: 15px;
        background-color: #263591;
    }


</style>

<body>


<div class='bottom-linkes'>
    <div><a href="../studentPage.php" style="text-decoration: none;">< back to main page</a></div>
</div>



<?php
include '../dbconnection.php';

$query = 'SELECT  e.courseCode, c.courseName, c.ects, semester, yearr, e.lettergrade
              FROM userr u, enrollment e, course c
              WHERE u.ssn = "' . $ssn . '"  AND u.ssn = e.sssn AND c.courseCode = e.courseCode';
$result = mysqli_query($conn, $query);


if (mysqli_num_rows($result) > 0) {

    echo '
        
        <div class="Container">
               <table>
         
                     <div class="year-header"> All Courses List </div>

                 <thead>
                    <tr>
                     <th class="cCode-cells"> Course Code </th>
                     <th>Course Title</th>
                     <th class="ects-cells"> ECTS </th>
                     <th class="year-cells"> Semester-Year </th>
                     <th class="lgrade-cells"> Letter Grade </th>
                    </tr>
                 <thead> 
             ';

    while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <tbody>
            <tr>
                <td><?php echo $row["courseCode"] ?></td>
                <td><?php echo $row["courseName"] ?></td>
                <td style="text-align:center"><?php echo $row["ects"] ?></td>
                <td style="text-align:center"><?php echo $row["semester"] . '-' . $row["yearr"] ?></td>
                <td style="text-align:center;<?php
                    if (!$row["lettergrade"]) {
                        echo 'color: #A8A8A8"';
                    } else {
                        echo'"';
                    }
                    ?>><!-- closing of td table assiging gray color whic is not graded yet-->
                    <?php
                    if ($row["lettergrade"]) {
                        echo $row["lettergrade"];
                    } else {
                        echo 'not graded';
                    }
                    ?>
                    </td>
                    </tr>
                    </tbody>

                    <?php
                }//end of while loop
                ?>

                <!-- closing table after while loop ends-->
                </table>

                <?php
            } else {
                echo 'thre is no courses';
            }
            ?>

            </body>
            </html>





