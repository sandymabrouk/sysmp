<!DOCTYPE html>
<html lang="eg">
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
			document.getElementById("select_professor").innerHTML = document.getElementById("select_professor").innerHTML + options.replace("%data1%",r[i]["professor_email"]).replace("%data2%",r[i]["name"]);
		}
	}
	
  </script>
</head>

<body onload="getJson('json/professors.php')">
	<div class="container">
		<div class="card card-register mx-auto mt-5">
		<div class="card-header">New Course</div>
		<div class="card-body">
			<form action="course.php" class="form" method="post">
				<input type="text" name="course_name" id="inputCourse" class="form-control" placeholder="Course Name"  required autofocus>
				<div class="form-group">
				<div class="form-row">
			<div class="col-md-6">
                <label for="exampleInputProfessor">By Professor</label>
				
				<select id="select_professor" name="course_professor" class="form-control"></select>
				<br>
				<a href="professor_reg.html">Add new professor</a>
              </div>
			
			<div class="col-md-6">
                <label for="exampleInputSemester">At Semester</label>
                <select name="course_semester" class="form-control">
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
		  

        <input name="course_submit" class="btn btn-lg btn-primary btn-block" value="Submit" type="submit">

        </div>
        </form>
        </div></div>
</body>
</html>
