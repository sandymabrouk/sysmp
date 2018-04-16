<!-- Rwan Al dagher -->
<!-- Edited By Seif Elsallamy -->
<!DOCTYPE html>
<html>
<head>
	
	<script src="../../javascript/edit.js"></script>
    <link rel="stylesheet" href="font-awesome.min.css">
	<link href="bootstrap.min.css" rel="stylesheet">
	<style>
	
	
	
	.c{
	background-color:white;
	margin-top:25px;

	}
	input:hover{
	width:auto;
	}
	
	* {
  box-sizing: border-box;
}

/* Style the search field */
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}


	
	</style>
</head>
<body wonload="getJson('../../json/students.php', 'students.php');">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<form class="example" action="javascript:getJson('../../json/search/students.php?query='+document.getElementById('query').value, 'students.php');">
					<input type="text" placeholder="Search by student name or student Id" id="query">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			<div id="showData"></div>
				
				
			</div>
		</div>
	</div>
</body>

</html>