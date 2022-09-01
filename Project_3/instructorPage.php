<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
    <title>Instructor Page</title>
</head>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        padding: 20px;
        font-family: "Source Sans Pro", sans-serif;
        margin: 0;
        background-color: #f7f7f7;
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
            <div class="header_item"> Instructor Page </div>
        </div>
        <div class="table-content">
            <div class="table-row">
                <a href="Instructor/courses.php" class="data">Courses</a>
            </div>

            <div class="table-row">
                <a href="Instructor/weekly_schedule.php" class="data">Weekly Schedule</a>
            </div>
            <div class="table-row">
                <a href="Instructor/students_of_courses.php" class="data">Students of Courses</a>
            </div>
            <div class="table-row">
                <a href="Instructor/project_leading.php" class="data">Projects Leading</a>
            </div>
            <div class="table-row">
                <a href="Instructor/project_working_on.php" class="data">Projects Working On</a>
            </div>
            <div class="table-row">
                <a href="Instructor/student_list_advising.php" class="data">Students List, Advising</a>
            </div>
            <div class="table-row">
                <a href="Instructor/graduate_students_supervising.php" class="data">Graduate Students, Supervising</a>
            </div>
            <div class="table-row">
                <a href="Instructor/free_hours.php" class="data">Display Free Hours For Courses, teached</a>
            </div>
            <div class="table-row">
                <a href="Instructor/display_exam.php" class="data">Display Exam</a>
            </div>
            <div class="table-row">
                <a href="Instructor/add_exam.php" class="data">Add Exam</a>
            </div>

        </div>
    </div>
</div>


</body>

</html>