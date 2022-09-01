<?php
session_start();
$ssn = $_SESSION["ssn"];
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
        <div><a href="../instructorPage.php" style="text-decoration: none;">< back to main page</a></div>
    </div>
    
    
    <div class="list">
        <ol>

            <?php
            include '../dbconnection.php';

            $query = 'SELECT courseCode, sectionId, eName, edate, yearr
              FROM exam e
              WHERE e.issn = "' . $ssn . '" 
              ORDER BY sectionID';
            $result = mysqli_query($conn, $query);



            if (mysqli_num_rows($result) > 0) {
                echo '
               <table>
                 <thead>
                    <tr>
                     <th> COURSE NAME </th>
                     <th> EXAM NAME </th>
                     <th> EXAM DATE </th>
                     <th> YEAR </th>
                    </tr>
                 <thead> 
             ';

                while ($row = mysqli_fetch_assoc($result)) {
                    ?>


                    <tbody>
                        <tr>
                            <td><?php echo $row["courseCode"] . "." . $row["sectionId"] ?></td>
                            <td><?php echo $row["eName"] ?></td>
                            <td><?php echo $row["edate"] ?></td>
                            <td><?php echo $row["yearr"] ?></td>
                        </tr>
                    </tbody>



                    <?php
                }//end of while loop
                ?>

                <!-- closing table after while loop ends-->
                </table>


                <?php
            } else {
                echo 'thre is no exam For Instructor: &nbsp;' . $ssn;
            }
            ?>



            </body>
            </html>