<?php
session_start();

function login_validate() {
$timeout = 1800;
$_SESSION["expires_by"] = time() + $timeout;
}

function login_check() {
	$exp_time = $_SESSION["expires_by"];
	if (time() < $exp_time) {
		login_validate();
		return true;
	} 
	else {
		unset($_SESSION["expires_by"]);
		return false;
	}
}

function rupiah($uang,$desimal){
	$uang=floatval($uang);
	$muang=$uang;
	if($muang<0) $uang=$uang*(-1);
	$uang = number_format($uang,$desimal,",",".");
	if($muang<0) $uang="(".$uang.")";
    return $uang; 
}
function getSmt($smt){
		if($smt==1) $smt="Gasal"; else $smt="Genap";
		return $smt;
} 

function generate_uuid() {
	return sprintf( '%04x%04x-%04x%04x',
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
		mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
	);
}

function upload_file()
{
    if(isset($_FILES["fileUpload"]))
    {
		$filename = $_FILES['fileUpload']['name'];
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
        $new_name = rand() . '.' . $extension;
        $destination = '../uploads/' . $new_name;
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], $destination);
        return $new_name;
    }
}

// function get_file_name($user_id)
// {
//     include('db.php');
//     $statement = $connection->prepare("SELECT image FROM users WHERE id = '$user_id'");
//     $statement->execute();
//     $result = $statement->fetchAll();
//     foreach($result as $row)
//     {
//         return $row["image"];
//     }
// }
?>