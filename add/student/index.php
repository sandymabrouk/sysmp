<!DOCTYPE html>
<html lang="en">

<!-- Done by Alaa Eid Hassan -->

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
  <script>
  function getJson(url){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
	if (this.readyState == 4 && this.status == 200) {
			var myArr = JSON.parse(this.responseText);
			addToSelect(myArr);
				
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
	
function addToSelect(r){
	options = '<option value="%data1%">%data2%</option>';
	for (i=0;i<r.length;i++){
		rr = document.getElementById("addhere");
		rr.innerHTML = rr.innerHTML + options.replace("%data1%",r[i]["degree_id"]).replace("%data2%",r[i]["name"]);
		
	}
}
	
  </script>
</head>

<body 
      <?php require('../../auth.php') ; ?>
      class="" onload="getJson('../../json/degrees.php');">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register new student</div>
      <div class="card-body">
        <form action="reg.php" method="post"><!-- to be changed -->
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Full name</label>
                <input name="reg_name" class="form-control" id="exampleInputName" autocomplete="off" type="text" aria-describedby="nameHelp" placeholder="Enter full name" required>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputEmail">Email address</label>
                <input name="reg_email" class="form-control" id="exampleInputEmail" autocomplete="off" type="email" aria-describedby="emailHelp" placeholder="Enter email address" required>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputdate">Date of birth</label>
                <input name="reg_date" class="form-control" id="exampleInputDate" autocomplete="off" type="date" aria-describedby="dateHelp" placeholder="Date" required>
              </div>
			  <div class="col-md-6">
                <label for="exampleInputMobile">Mobile</label>
                <input name="reg_mobile" class="form-control" id="exampleInputMobile" autocomplete="off" type="tel" aria-describedby="mobileHelp" placeholder="Enter mobile number" required>
              </div>
            </div>
          </div>
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputAddress">Address</label>
                <input name="reg_address" class="form-control" id="exampleInputAddress" autocomplete="off" type="text" aria-describedby="addressHelp" placeholder="Enter home address" required>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputCampus">Campus</label>
				<select name="reg_campus" class="form-control">
				  <option value="Alexandria">Alexandria</option>
				  <option value="Cairo">Cairo</option>
				</select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputCohort">Cohort</label>
                <select name="reg_cohort" class="form-control">
				  <option value="A">A</option>
				  <option value="B">B</option>
				  <option value="C">C</option>
				</select>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputDegree">Degree</label>
				<select id="addhere" name="reg_degree" class="form-control">
				<option value="">---</option>
				</select>
              </div>
              <div class="col-md-6">
                <label for="exampleInputSemester">Semester</label>
                <select name="reg_semester" class="form-control">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				  <option value="6">6</option>
				  <option value="7">7</option>
				  <option value="8">8</option>
				  <option value="9">7</option>
				  <option value="10">10</option>
				</select>
              </div>
            </div>
          </div>
          <!--<a class="btn btn-primary btn-block" href="login.html">Register</a>-->
		  <input name="reg_submit" type="submit" class="btn btn-primary btn-block" value="Register" id="register">
        </form>
        
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../style/vendor/jquery/jquery.min.js"></script>
  <script src="../style/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../style/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>
