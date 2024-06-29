<?php require_once("db_maero.php"); ?>
<?php require_once("sessions.php"); ?>

<?php
function Redirect_to($New_Location){
    header("Location:".$New_Location);
    exit;
}

function Password_Encryption($Password){
    $BlowFish_Hash_Format = "$2y$10$";
    $Salt_Length = 22;
    $Salt = Generate_Salt($Salt_Length);
    $Formating_Blowfish_With_Salt = $BlowFish_Hash_Format . $Salt;
    $Hash = crypt($Password, $Formating_Blowfish_With_Salt);
        return $Hash;
}

function Generate_Salt($length){
    $Unique_Random_String = md5(uniqid(mt_rand(), true));
    $Base64_String = base64_encode($Unique_Random_String);
    $Modified_Base64_String = str_replace('+', '.', $Base64_String);
    $Salt = substr($Modified_Base64_String, 0, $length);
        return $Salt;
}

function Password_Check($Password, $Existing_Hash){
    $Hash = crypt($Password, $Existing_Hash);
    if ($Hash === $Existing_Hash){
        return true;
    }else{
        return false;
    }
}

function CheckEmailExistsOrNot($Email){
    global $connection;
    $Query="SELECT * FROM registration WHERE email='$Email'";
    $Execute=mysqli_query($connection, $Query);
    if(mysqli_num_rows($Execute)>0){
        return true;
    }else {
        return false;
    }
}

function Login_Attempt($Username,$Password){
    global $connection;
    $Query="SELECT * FROM registration WHERE username='$Username'";
    $Execute=mysqli_query($connection, $Query);
    if($admin=mysqli_fetch_assoc($Execute)){
        if(Password_Check($Password,$admin["password"])){   
            return $admin;
        }
    }else{
        return null;
    }
}

function Login_Attempt_Peserta($Username,$Password){
    global $connection;
    $Query="SELECT * FROM registration_asesi WHERE nim='$Username'";
    $Execute=mysqli_query($connection, $Query);
    if($admin=mysqli_fetch_assoc($Execute)){
        if(Password_Check($Password,$admin["password"])){   
            return $admin;
        }
    }else{
        return null;
    }
}

function Login_Attempt_Asesor($Username,$Password){
    global $connection;
    $Query="SELECT * FROM asesor WHERE nik='$Username'";
    $Execute=mysqli_query($connection, $Query);
    if($admin=mysqli_fetch_assoc($Execute)){
        if(Password_Check($Password,$admin["password"])){   
            return $admin;
        }
    }else{
        return null;
    }
}

function Login(){
    if(isset($_SESSION["User_Id"])){
        return true;
    }
}

function Confirm_Login(){
    if(!Login()){
        $_SESSION["ErrorMessage"]="Login Required";
        Redirect_to("login.php");
    }
}

?>