<!DOCTYPE html>
<html lang="en">

<!-- Done by Alaa Eid Hassan -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Register Degree</title>
  <!-- Bootstrap core CSS-->
  <link href="../style/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../style/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../style/css/sb-admin.css" rel="stylesheet">
  <link href="../style/css/myStyle.css" rel="stylesheet">
  <script src="../../javascript/options.js"></script>
  
</head>
<body onload="op('professor1[]','../../json/professors.php','professor_email','name'); op('professor2[]','../../json/professors.php','professor_email','name')">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register Degree</div>
      <div class="card-body">
        <form action="addDegree.php" method="post"><!-- to be changed -->
			<div class="form-group">
				<div class="switch-field">
				  <input type="radio" id="switch_left" name="degree_type" value="master" checked/>
				  <label for="switch_left">Master</label>
				  <input type="radio" id="switch_right" name="degree_type" value="phd" />
				  <label for="switch_right">Ph.D.</label>
				</div>
			</div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="degree_name">Degree Name</label>
                <input class="form-control" id="degree_name" name="degree_name" type="text" aria-describedby="nameHelp" placeholder="Enter degree name" required>
              </div>
              <div class="col-md-6">
                <label for="degree_price">Degree Price</label>
                <input class="form-control" id="degree_price" name="degree_price" type="number" aria-describedby="nameHelp" placeholder="Enter the price of the degree" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="number_of_terms">Number of Rounds</label>
            <input onchange="op('professor1[]','../../json/professors.php','professor_email','name'); op('professor2[]','../../json/professors.php','professor_email','name');" class="form-control" id="number_of_terms" name="rounds" type="number" min="1" placeholder="Number of terms" value="1" required>
          </div>
		  
		 
		  
		  <div class="form-group" id="courses_group">
			  <hr>
			  <div class="form-group">
				<label for="number_of_term">- Round 1</label>
			  </div>
			  <div class="form-group" id="dateGroup">
					<div class="form-row">
					  <div class="col-md-6">
						<label >Start Date</label>
						<input class="form-control" name="start_date[]" type="date" required>
					  </div>
					  <div class="col-md-6">
						<label >End Date</label>
						<input class="form-control" name="end_date[]" type="date" required>
					  </div>
					</div>
			  </div>
			
			  
			  <div class="form-group">
				<div class="form-row">
				  <div class="col-md-6">
					<label >Course 1</label>
					<input class="form-control" name="course1[]" type="text" required>
				  </div>
				  <div class="col-md-6">
					<label >Dr.</label>
					<select id="professors" class="form-control" name="professor1[]">
					</select>
					<!--<input class="form-control" name="course1" type="text" required>-->
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="form-row">
				  <div class="col-md-6">
					<label >Course 2</label>
					<input class="form-control" name="course2[]" type="text" required>
				  </div>
				  <div class="col-md-6">
					<label >Dr.</label>
					<select class="form-control" name="professor2[]">
					</select>
					<!--<input class="form-control" name="course2" type="text"required>-->
				  </div>
				</div>
			  </div>
			  <hr>
		  </div>
		  
		  
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
		  <input type="submit" name="add_degree" class="btn btn-primary btn-block" value="Create" id="register">
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../style/vendor/jquery/jquery.min.js"></script>
  <script src="../style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../style/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="addCourses.js"></script>
</body>

</html>
