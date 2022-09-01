<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
    <title>Student Page</title>
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        padding: 20px;
        font-family: "Source Sans Pro", sans-serif;
        margin: 0;
    }

    .container {
        max-width: 1000px;
        margin-right: auto;
        margin-left: auto;
      /*display: flex;
        justify-content: center;
        align-items: center;*/
        min-height: 100vh;
        margin-top: 10px;
    }

    .table {
        width: 100%;
        border: 1px solid #EEEEEE;
    }

    .table-header {
        background: #000;
        padding: 25px;
        color: white;
    }

    .header_item {
        text-align: center;
        font-size: 23px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .table-row {
        display: flex;
        width: 100%;
        padding: 18px 24px;
    }

    .table-row:nth-of-type(odd) {
        background: #EEEEEE;
    }

    .data {
        text-decoration: none;
        color: rgb(5, 150, 175);
        font-size: 15px;

    }
</style>


<body>
    
<div class='bottom-linkes'>
    <div><a href="loginPage.php" style="text-decoration: none;"> < Log out</a></div>
</div>

<div class="container">

    <div class="table">

        <div class="table-header">
            <div class="header_item"> Student Page </div>
        </div>
        <div class="table-content">
            <div class="table-row">
                <a href="Student/courses.php" class="data">Courses</a>
            </div>

            <div class="table-row">
                <a href="Student/weekly_schedule.php" class="data">Weekly Schedule</a>
            </div>
            <div class="table-row">
                <a href="Student/transcript.php" class="data">Grade Report (Transcript)</a>
            </div>
            <div class="table-row">
                <a href="Student/exam_grade.php" class="data">Exam Grade</a>
            </div>
            <div class="table-row">
                <a href="Student/advisor.php" class="data">Advisor</a>
            </div>
            <div class="table-row">
                <a href="Student/courses_untaken.php" class="data">List Of Courses Supposed to Taken</a>
            </div>
            <div class="table-row">
                <a href="Student/department.php" class="data">Department</a>
            </div>
            <div class="table-row">
                <a href="Student/project_supervising.php" class="data">List Of Project, Supervising or Working</a>
            </div>



        </div>
    </div>
</div>



</body>

</html>