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
  
</head>

<body>
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Add new professor</div>
      <div class="card-body">
        <form action="professor_reg.php" method="post"><!-- to be changed -->
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
		  <input name="reg_submit" type="submit" class="btn btn-primary btn-block" value="Submit" id="register">
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
