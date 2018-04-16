<!-- Rwan Al dagher -->
<!DOCTYPE html>
<html>
<head>
	
	<script src="../../javascript/present.js"></script>
    <link href="bootstrap.min.css" rel="stylesheet">
	
	<style>
        table, th, td 
        {
            margin:10px 0;
            border:solid 1px #333;
            padding:2px 4px;
            font:15px Verdana;
        }
        th {
            font-weight:bold;
        }
    </style>
</head>
<body onload="getJson('../../json/payments.php');">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
    <div id="showData"></div>
	</div>
	</div>
	</div>
</body>

</html>