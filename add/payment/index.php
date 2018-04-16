<!DOCTYPE html>
<html lang="en">

<!-- Done by Alaa Eid Hassan -->

<!-- with doha -->
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
      <div class="card-header">Add new payment</div>
      <div class="card-body">
        <form action="payments.php" method="post"><!-- to be changed -->
          
		  
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Paid order Id</label>
                <input name="order_id" class="form-control" id="exampleInputName" autocomplete="off" type="text" aria-describedby="nameHelp" placeholder="Enter order Id." required>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputName">Student Identity Number</label>
                <input name="code" class="form-control" id="exampleInputName" autocomplete="off" type="text" aria-describedby="nameHelp" placeholder="Enter student Id." required>
              </div>
            </div>
          </div>
		  
		  <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <label for="exampleInputEmail">Paid amount</label>
                <input name="amount" class="form-control" id="exampleInputamount" autocomplete="off" type="number" aria-describedby="emailHelp" placeholder="Enter paid amount" required>
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
</body>

</html>
