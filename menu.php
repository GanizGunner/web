<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="jumbotron text-center">
    <h1><strong>Data Matakuliah</strong></h1>
  </div>    
</div>

<?php
include('koneksi.php');

$batas = 5; 
$pg = isset($_GET['pg']) ? $_GET['pg'] : ""; 
 
if(empty($pg)) {
	$posisi = 0;
	$pg = 1;
} else {
	$posisi = ( $pg - 1 ) * $batas;
}

$sql = "SELECT * FROM matkul limit $posisi, $batas";
$no = 1+$posisi;
$res = mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0) { ?>
	<link rel="stylesheet" href="bootstrap.min.css">
	
	<div class="container" style="margin-top: 40px">
		<a class="btn btn-primary" href="insert.php">Add</a>
		<table class='table table-striped'>
			<tr>
				<th>No</th>
				<th>Id Matkul</th>
				<th>Nama Matkul</th>
			</tr>		
			<?php
				while($row = mysqli_fetch_assoc($res)) {
					echo "<tr>";
						echo "<td>".$no."</td>";
						echo "<td>".$row['id_matkul']."</td>";
						echo "<td>".$row['nama_matkul']."</td>";
						echo '<td>
							  <a class="btn btn-warning" href="edit.php?id='.$row['id_matkul'].'">Edit</a>
							  <a class="btn btn-danger" href="delete.php?id='.$row['id_matkul'].'">Delete</a>
							  </td>';
					echo "</tr>";	
					$no++;
				}
			?>
		</table>
		<?php
			$sql1 = "SELECT * FROM matkul";
			$res2 = mysqli_query($con,$sql1);
			$jml_data = mysqli_num_rows($res2);
			
			$JmlHalaman = ceil($jml_data / $batas); 
			 
			 
			$nmr = '';
			for ( $i = 1; $i<= $JmlHalaman; $i++ ){
				if ( $i == $pg ) {
					$nmr .= $i . " ";
				} else {
					$nmr .= "<a href='?pg=$i'>$i</a> ";
				}
			}
			echo $nmr ;
		?>
	</div>
<?php 
} 
mysqli_close($con);
?>
</body>
</html>
