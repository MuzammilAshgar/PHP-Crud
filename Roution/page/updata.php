<?php include("../database/conntion.php");

$uid = $_GET['id'];
$sql = "SELECT * FROM curd WHERE id = $uid";
$run = mysqli_query($conn,$sql);

if($run == true){
	 
	$row =$run->fetch_assoc();
	if($row){

		if(isset($_POST['submit'])){
			$name = $_POST['uname'];
			$email = $_POST['uemail'];
			$address = $_POST['address'];
			$phone = $_POST['phone'];

			$sql1 = "UPDATE curd SET
			name='$name',
			 email='$email',
			 address='$address',
			 phone='$phone'
			where id = $uid";
			
			$runs = mysqli_query($conn,$sql1);
			if($runs == 1){
				header("Location:../../index.php");	
			}
			
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Roution/Css/Style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="Roution/Js/app.js"></script>

</head>
<body>
    <!-- Edit Modal HTML -->

		<div class="modal-content">
			<form method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Edit Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="uname" required value="<?php echo $row['name'] ?>">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="uemail" required value="<?php echo $row['email'] ?>">
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" name="address" require value="<?php echo $row['address'] ?>">
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name="phone" required value="<?php echo $row['phone'] ?>">
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" name="submit" class="btn btn-info" value="Save">
				</div>
			</form>
		</div>
	
    
</body>
</html>