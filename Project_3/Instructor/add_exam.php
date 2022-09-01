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

        .Header{
            text-align: center;
        }

        .bottom-linkes{
            display: flex;
            justify-content: space-between;
        }

        body {
            background: #f7f7f7;
            font: 400 14px "Calibri", "Arial";
            padding: 20px;
        }

        /*after addition*/



        * {
            box-sizing: border-box;
        }

        input:focus {
            outline: none;
        }

        body {
            font-size: 16px;
            background: #f7f7f7;
        }


        h1 {
            text-align: center;
            color: #333;
            margin: 40px;
        }

        .container {
            width: 700px;
            margin: 2em auto;
            padding: 2em;
            border: 1px solid #ddd;
            border-radius: 3px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /*
           Everything else is float label related
        */

        .content-Container {     
            background: #f4f4f4;
            clear: both;
            padding: 0.5em;
            font-size: 15px;
        }
        .content-Container label {
            display: block;
            margin: 10px 0;
        }
        .content-Container input {
            font-size: 15px;
            padding: 5px;
            width: 100%;
        }

        select{
            font-size: 15px;
            padding: 5px;
            width: 100%;
            width: 100%;
            height: 30px;
        }


        select:focus {
            outline: none;
        }


        .button{
            margin-top: 15px;
            border-radius: 20px;
            height: 40px;
            width: 100%;
            color: white;
            font-weight: 600;
            font-size: 20px;
            background-color: rgb(1, 177, 30);
            border: none;
            margin: 4px 4px;
            cursor: pointer;
        }

        .button:hover{
            background-color: rgb(5, 148, 29);
        }




    </style>


    <body>
        


    <div class="Header">
        <h2>Add Exam</h2>
    </div>

    <?php
    include '../dbconnection.php';

    //find the course of teacher for the select box
    $query = 'SELECT DISTINCT e.courseCode, e.sectionId, c.courseName, semester, yearr
              FROM userr u, enrollment e, course c
              WHERE u.ssn = "' . $ssn . '"  AND u.ssn = e.issn AND c.courseCode = e.courseCode AND e.yearr = 2022
              ORDER BY sectionID ';
    $result = mysqli_query($conn, $query);



    if (mysqli_num_rows($result) > 0) {

        echo '
             
        
   <div class="container"> 
               <div>  
        <form  action="" method = "POST">     
              <div class="content-Container">
                 <label>Select a course  </label>
                 <select name="selectedCourse">
                 <option hidden>Courses, you are teaching</option>';

        while ($row = mysqli_fetch_assoc($result)) {


            $course = $row["courseCode"] . '.' . $row["sectionId"];
            echo ' <option value= ' . $course . ' >' . $course . ' : ' . $row["courseName"] . '</option>';
        }//end of while loop
        ?>

        <!-- closing table after while loop ends-->
    </select> 
    </div>

    <div class="content-Container">
        <label for="fname-input">Enter Exam Name</label>
        <input type="text" name="eName" placeholder="Final..." id="fname-input">
    </div>

    <div class="content-Container">
        <label for="date">Enter Exam Date</label>
        <input type="date" name="edate" >
    </div>

    <div class="content-Container">
        <button  class="button" type="submit" name="submit">Submit</button>
    </div>  

    </form>
    </div>

    <?php
} else {
    echo 'You does not teaching any course. so you cannot add an exam to the system !<br><br><br><br><br>';
}
?>

</div> <!-- end of Container div-->

<div class='bottom-linkes'>
    <div><a href="../instructorPage.php"> <-Back to main page</a></div>
    <div><a href="../Instructor/display_exam.php"> display exams page -></a></div>
</div>

<?php
if (isset($_POST["submit"])) {



    $selectedCourse = $_POST["selectedCourse"];
    $eName = $_POST["eName"];
    $edate = $_POST["edate"];
    $length = strlen($selectedCourse); //finding section ıd in course name
    $courseCode = mb_substr($selectedCourse, 0, $length - 2);
    $sectionId = mb_substr($selectedCourse, $length - 1, $length); //finding section ıd in course name




    if ($selectedCourse != "" && $eName != "" && $edate != 0000 - 00 - 00) {
        $query = 'INSERT INTO Exam(`eName`, `edate`, `issn`, `courseCode`, `yearr`, `semester`, `sectionId`)
          VALUES 
            ("' . $eName . '", "' . $edate . '", "' . $ssn . '", "' . $courseCode . '", "2022", "spring", "' . $sectionId . '")';
        $result = mysqli_query($conn, $query);
            echo '<div> Successfully submitted </div>';
            
    } else {
        echo '
            <br><br>
        <div> girilen değerler hatalı tekrar deneyin.  </div>
                ';
    }
}
?>
</body>
</html>