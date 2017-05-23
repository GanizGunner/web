<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <div class="page-header text-center">
    <h1>Insert Data</h1>      
  </div>   
</div>

<link rel="stylesheet" href="bootstrap.min.css">
	
<div class="container">
	<form class="form-horizontal pull-left" method="post" action="insert2.php" style="margin-top: 30px">
		<div class="form-body">
			<div class="form-group">
				<label class="control-label col-md-3">Id Matkul</label>
				<div class="col-md-9">
					<input type="text" name="id_matkul" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-md-3">Nama Matkul</label>
				<div class="col-md-9">
					<input type="text" name="nama_matkul" class="form-control">	
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-3">
					<button class="btn btn-primary" type="submit">Add</button>
				</div>
			</div>
		</div>
	</form>
</div>

</body>
</html>
