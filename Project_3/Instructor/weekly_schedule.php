<!DOCTYPE html>
<?php
session_start();
$ssn = $_SESSION["ssn"];

include '../dbconnection.php';

$query = 'SELECT w.courseCode, w.sectionId, w.dayy, w.hourr
          FROM  weeklyschedule w, instructor i
          WHERE i.ssn = w.issn AND i.ssn = "' . $ssn . '"';
$result = mysqli_query($conn, $query);



if (mysqli_num_rows($result) > 0) {

    $i = 0;

    while ($row = mysqli_fetch_assoc($result)) {
        $greenitems[$i] = "
                .row" . $row["hourr"] . " > ." . $row["dayy"] . "  {
                background-color: rgb(0, 255, 0);
            }
            
                .row" . $row["hourr"] . " > ." . $row["dayy"] . "::after  {
               content: '" . $row["courseCode"] . "." . $row["sectionId"] . "'  ;
            }


";
        $i++;
    }//end of while loop 
}
?>
<html>
    <head>
        <style>

            body{
                background: #f7f7f7;
                font-family: arial;
            }
            body * {
                box-sizing: border-box;
            }
            .mainBlock {
                width: 100%;
                height: 100%;
                display: flex;
                flex-flow: column nowrap;
                align-items: center;
                min-width: 900px;
            }
            h1{
                text-align: center;
            }
            .calendar{
                margin-top: 10px;
                margin-bottom: 50px;
                background: white;
                box-shadow: 0 0 30px -5px rgba(0,0,0,0.2);
                width: 60%;
            }
            .headerRow, .row{
                display: flex;
            }
            .headerRow .item{
                font-weight: 500;
                text-align: center;
                color: white;
                padding-top: 15px;
                background-color: #263591;
                border: 1px solid rgb(127, 137, 158);         
            }
            .item{ 
                width: calc(100% / 6 );
                height: 50px;
                text-align: center;
                font-size: 15px;
                padding-top: 18px;
                box-shadow: 0 0 0 1px rgba(0,0,0,0.1);
                background-color: rgb(255, 255, 255);
                /*background-color: rgb(0, 255, 0); green*/

            }



            <?php
            foreach ($greenitems as $items) {
                echo $items;
            }
            ?>

        </style>
    </head>
    <body>


    <div class='bottom-linkes'>
        <div><a href="../instructorPage.php" style="text-decoration: none;">< back to main page</a></div>
    </div>


    <div class='mainBlock'>

        <h1>Weekly Schedule</h1>
        <div class='calendar'>
            <div class='headerRow'>
                <div class='item'>Time Slot</div>
                <div class='item'>Monday</div>
                <div class='item'>Tuesday</div>
                <div class='item'>Wednesday</div>
                <div class='item'>Thursday</div>
                <div class='item'>Friday</div>
            </div>

            <div class='row row1'>
                <div class='item'>1</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row2'>
                <div class='item'>2</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row3'>
                <div class='item'>3</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row4'>
                <div class='item'>4</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row5'>
                <div class='item'>5</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row6'>
                <div class='item'>6</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>
            <div class='row row7'>
                <div class='item'>7</div>
                <div class='item Monday'></div>
                <div class='item Tuesday'></div>
                <div class='item Wednesday'></div>
                <div class='item Thursday'></div>
                <div class='item Friday'></div>
            </div>

        </div>
    </div>
</body> 
</html>