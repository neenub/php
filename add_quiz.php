<?php
include 'dbcon.php';
?>
 
<!DOCTYPE html>
<html lang="en">
    
<!--  <html class="no-js" lang=""> <![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Learn It</title>
        <link rel="shortcut icon" href="images/logo.png" />
        <meta name="description" content="Sufee Admin - HTML5 Admin Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
        <link rel="stylesheet" href="assets/scss/style.css">
        <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

    </head>
    <body>


        <!-- Left Panel -->

        <aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href=""><img src="images/logo2.png" alt="Logo"></a>
                </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="adminhome.php"> <img src="images/home.png" width="30">Admin Home</a>
                        </li>







                        <li>
                            <a href="tutapprove.php"><img src="images/approve.png" width="20"> Tutor Approve </a>
<!--                            <a href="viewstud.php"><img src="images/view.png" width="20"> View Students</a>-->
                            <a href="addcourse.php"><img src="images/add.png" width="20"> Add Course</a>
                            <a href="addsub.php"><img src="images/add.png" width="20"> Add subject</a>
                            <a href="addstate.php"><img src="images/add.png" width="20"> Add State</a>
                            <a href="addcity.php"><img src="images/add.png" width="20"> Add City</a>
                            <a href="bookadd.php"><img src="images/add.png" width="20"> Add Book</a>
<!--                            <a href="add_quiz.php"><img src="images/add.png" width="20"> Add Quiz</a>-->
                            <a href="studview.php"><img src="images/view.png" width="20"> View Student</a>
                            <a href="vb.php"><img src="images/view.png" width="20"> View Book</a>
                            <a href="viewall.php"><img src="images/view.png" width="20"> View Tutor</a>
                            <a href="vb.php"> <img src="images/not.png" width="20">Notification</a>
                            <a href="signout.php"><img src="images/log.png" width="20">LOGOUT</a>
                        </li>



                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside><!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <header id="header" class="header">

                <div class="header-menu">



                    <div class="col-sm-5">

                    </div>
                </div>

            </header><!-- /header -->
            <!-- Header-->

          
      
      
      
 
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
 
  <body role="document">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="www.technopoints.com"></a>
        </div>
        <div class="navbar-collapse collapse" class="toactive">
<!--          <ul class="nav navbar-nav" class="list-inline">
            <li class="cli"><a href="index1.php">Home</a></li>
            <li class="cli active"><a href="add_quiz.php">Add Quiz</a></li>
            <li class="cli"><a href="result.php">View Result</a></li>
          </ul>-->
        </div><!--/.nav-collapse -->
      </div>
    </div>
 
 
<style>
</style>
<div class="row">
    <div class="col-md-offset-2 col-md-8">
        <h1>Add Quiz</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="question">Ask Question</label>
                <input type="text" class="form-control" id="question" name="question" placeholder="Enter your question here" Required>
            </div>
            <div class="form-group">
                <label for="correct_answer">Correct answer</label>
                <input type="text" class="form-control" id="correct_answer" name="correct_answer" placeholder="Enter the correct answer here" Required>
            </div>
            <div class="form-group">
                <label for="wrong_answer1">Wrong Answers</label>
                <input type="text" class="form-control" id="wrong_answer1" name="wrong_answer1" placeholder="Wrong answer 1" Required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer2">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer2" name="wrong_answer2" placeholder="Wrong answer 2" Required>
            </div>
            <div class="form-group">
                <label class="sr-only" for="wrong_answer3">Wrong Answers 2</label>
                <input type="text" class="form-control" id="wrong_answer3" name="wrong_answer3" placeholder="Wrong answer 3" Required>
            </div>
            <button type="submit" class="btn btn-primary btn-large" value="submit" name="submit">+ Add Question</button>
 
        </form>
    </div>
     </div>
	 <?php if(isset($_POST['submit'])){
$fetchqry = "SELECT * FROM `quiz`";
$result=mysqli_query($con,$fetchqry);
$num=mysqli_num_rows($result);
@$id = $num + 1;
@$que = $_POST['question'];
@$ans = $_POST['correct_answer'];
@$wans1 = $_POST['wrong_answer1'];
@$wans2 = $_POST['wrong_answer2'];
@$wans3 = $_POST['wrong_answer3']; 
$qry = "INSERT INTO `quiz`(`id`, `que`, `option 1`, `option 2`, `option 3`, `option 4`, `ans`) VALUES ($id,'$que','$ans','$wans1','$wans2','$wans3','$ans')";
$done = mysqli_query($con,$qry);
if($done==TRUE){
	echo "Question and Answers Sumbmitted Succesfully";
}
	 }
?>
