<!DOCTYPE html>
<html lang="en">

<!-- Done by Alaa Eid Hassan -->
<!-- Edited By Ghada hassan -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="../style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../style/css/sb-admin.css" rel="stylesheet">
  
</head>

<body onload="op('professor_id','../../json/professors.php', 'professor_email', 'name'); op('course_id','../../json/courses.php', 'course_id', 'name');">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add new professor to a course</div>
      <div class="card-body">
        <form action="courses_professors.php" method="post"><!-- to be changed -->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Add professor :</label>
                <select name="professor_id" class="form-control" id="professor"  aria-describedby="nameHelp" placeholder="Enter full name"></select>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputEmail">To Course :</label>
                <select name="course_id" class="form-control" id="course" aria-describedby="nameHelp" placeholder="Enter full name"></select>
              </div>
            </div>
          </div>
		  <input name="submit" type="submit" class="btn btn-primary btn-block" value="Submit" id="register">
        </form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../style/vendor/jquery/jquery.min.js"></script>
  <script src="../style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../style/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../../javascript/options.js"></script>
</body>

</html>
