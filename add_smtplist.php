<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH.'/includes/auth_validate.php';

// Serve POST method, After successful insert, redirect to customers.php page.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = mysqli_connect('localhost','root','','smtpserver');
	$success = isset($_POST['uploadFile']);
	if ($success) {
		if($conn) {
			$open = fopen($_POST['uploadFile'],'r');
			if(!$open) {
				echo "Error opening file...";
			}
			else {
				while (!feof($open)) {
					$getTextLine = fgets($open);
					$explodeLine = explode(":",$getTextLine);
	
					list($server_ip,$server_port,$email,$password) = $explodeLine;
					echo "$server_ip $server_port $email $password <br>";
					#$qry = "INSERT into smtplists (server_ip,server_port,email,password) values('".$server_ip."','".$server_port."','".$email."','".$password."')";
					#mysqli_query($conn,$qry);
					#if (!$qry) {
				#		echo "Error inserting entries into the database...";
				#	}
				}
				fclose($open);
			}
		}
		else {	
			echo "Cannot connect to database...";
			die(mysqli_error());
		}
	}
}

// We are using same form for adding and editing. This is a create form so declare $edit = false.
$edit = false;
?>
<?php include BASE_PATH.'/includes/header.php'; ?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Import SMTP List</h2>
        </div>
    </div>
    <!-- Flash messages -->
    <?php include BASE_PATH.'/includes/flash_messages.php'; ?>
    <form class="form" action="/forms/smtplist_form.php" method="post" id="smtplist_form" enctype="multipart/form-data">
        Select File: <input type="file" name="uploadFile">
		<label></label>
		<div class="form-group text-center">
			<label></label>
			<button type="submit" class="btn btn-warning" >Import SMTPs <i class="glyphicon glyphicon-send"></i></button>
		</div>
    </form>
</div>

<?php include BASE_PATH.'/includes/footer.php'; ?>
