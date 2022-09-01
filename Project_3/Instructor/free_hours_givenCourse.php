<?php
session_start();

$ssn = $_SESSION["ssn"];
$courseCode = $_SESSION["courseCode"];
?>
<html>
    <head>
    <title>Course Page</title>
</head>

<style>
    table {
        border-collapse: collapse;
        background: white;
        border-radius: 6px;
        overflow: hidden;
        max-width: 800px;
        width: 100%;
        margin: 0 auto;
        position: relative;
    }
    table * {
        position: relative;
        text-align: center; 
    }
    table td, table th {
        padding-left: 8px;

    }
    table thead tr {
        height: 60px;
        background: #FFED86;
        font-size: 16px;
    }
    table tbody tr {
        height: 48px;
        border-bottom: 1px solid #E3F1D5;
    }



    @media screen and (max-width: 500px) {
        table {
            display: block;
        }

        table tbody tr {
            height: auto;
            padding: 8px 0;
        }
        table tbody tr td {
            padding-left: 45%;
            margin-bottom: 12px;
        }


    }
    body {
        background: #f7f7f7;
        font: 400 14px "Calibri", "Arial";
        padding: 20px;
    }

</style>

<body>

    
    <div class='bottom-linkes'>
        <div><a href="free_hours.php" style="text-decoration: none;">< back to courses</a></div>
    </div>
    
    <?php
    include '../dbconnection.php';

    $query = '
select T.dayy, T.hourr
from timeslot T
where (T.dayy, T.hourr) not in (SELECT W.dayy, W.hourr
                           	FROM enrollment E NATURAL JOIN weeklyschedule W
                               	WHERE E.yearr=2022 and  
				E.semester = "spring" and 
				E.sssn in (SELECT E2.sssn
					   FROM enrollment E2
					   WHERE E2.sssn = E.sssn and E2.issn= "'.$ssn.'" and 
					   E2.courseCode="'.$courseCode.'"))
                                            ';
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {

        echo '
               <table>
                 <thead>
                    <tr>
                     <th> DAY </th>
                     <th> HOUR </th>
                    </tr>
                 <thead> 
             ';

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

        <tbody>
            <tr>
                <td> <?php echo $row["dayy"]; ?> </td>
                <td> <?php echo $row["hourr"]; ?> </td>
            </tr>
        </tbody>

        <?php
    }//end of while loop
    ?>

    <!-- closing table after while loop ends-->
    </table>

    <?php
} else {
    echo 'There is no courses that you are teaching, so all free !';
}
?>

</body>
</html>




