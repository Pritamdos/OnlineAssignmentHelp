<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "oah";

session_start();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['minisubmit'])){
	
	$email = $_POST['email'];
  	$subject = $_POST['subject'];
  	$date = $_POST['datepicker'];
	$page_count = $_POST['pageNo'];
	
   $query = " SELECT id FROM `mini_form_data` ORDER BY timestamp DESC ";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
   
   if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 15, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
	   $id = $constant.$datef.$sub.$curr_count;
	      
   }
   else {
	   $constant = 'TMP';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($subject, 0, 4);
	   $sub      = strtoupper($tmp3);
      $curr_count = 1;
      $id = $constant.$datef.$sub.$curr_count;
   }
   
   $sql = "INSERT INTO `mini_form_data`(`id`,`email`,`subject`,`date`,`page_count`) VALUES ('$id','$email','$subject','$date','$page_count');";
   
	if ($conn->query($sql) === TRUE) {
		header('Location: login.php');
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

if(isset($_POST['callsubmit'])){
	
	$phone = $_POST['call_phone'];
	$type = $_POST['call_type'];
	$reason = $_POST['call_reason'];
	$time = $_POST['call_time'];
	
	$query = "SELECT id FROM `callback_form_data` ORDER BY timestamp DESC ";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
	
	if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['id'];
	   $prev_count = substr($temp, 11, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
	   $id = $constant.$mob.$typ.$curr_count;
	      
   }
   else {
	   $constant = 'TMP';
	   $mob      = substr($phone, 0 ,4);
	   $typ      = substr($type, 0 ,3);
      $curr_count = 1;
      $id = $constant.$mob.$typ.$curr_count;
   }
	
   $sql = "INSERT INTO `callback_form_data` (`id`,`phone`,`order_type`,`reason`,`contact_time`) VALUES ('$id','$phone','$type','$reason','$time');";

	if ($conn->query($sql) === TRUE) {
	   $message = "We will call you later ! ";
       echo "<script type='text/javascript'>alert('$message');</script>";
	   echo "<script>setTimeout(\"location.href = 'index.php';\",50);</script>";   
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

if(isset($_POST['registersubmit'])){
	
	$name = $_POST['reg_name'];
	$email = $_POST['reg_email'];
	$phone = $_POST['reg_phone'];
	$education = $_POST['reg_education'];
	$password = $_POST['reg_password'];
	
	$query = "SELECT id FROM `register_form_data` ORDER BY timestamp DESC";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
	
	if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp1 = $row['id'];
	   $prev_count = substr($temp1, 7, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'OAH';
	   $temp2     = substr($name, 0 ,4);
	   $nam      = strtoupper($temp2);
	   $id = $constant.$nam.$curr_count;
	      
   }
   else {
	   $constant = 'OAH';
	   $temp3     = substr($name, 0 ,4);
	   $nam      = strtoupper($temp3);
      $curr_count = 1;
      $id = $constant.$nam.$curr_count;
   }
   
   $sql = "INSERT INTO `register_form_data` (`id`,`name`,`email`,`phone`,`education`,`password`) 
                     VALUES ('$id','$name','$email','$phone','$education','$password');";

	if ($conn->query($sql) === TRUE) {
		header("location:login.php");    
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

if(isset($_POST['signsubmit'])){
	
	$userid    = $_POST['signuserid'];
   $password = $_POST['signpassword'];
   
   $sql = "SELECT email, password FROM `register_form_data` WHERE email='$userid' AND password = '$password';";
	$result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    header("location:userpage.php");    
   }
   else{
	  //$_SESSION['invalid'] = 'Yours user name or password are wrong!!';
	  //header("location:login.php"); 
      $message = "Invalid Username or Password ! ";
      echo "<script type='text/javascript'>alert('$message');</script>";
	   echo "<script>setTimeout(\"location.href = 'login.php';\",50);</script>";
	 } 
   }
   
//INSERT DATA OF ORDER CREATION INTO DATABASE
if(isset($_POST['ordersubmit'])){
	
  //VARIABLE DECLARATION	
	$name = $_POST['ord_user'];
	$date = $_POST['datepicker'];
	$pagecount = $_POST['pageNo'];
	$phone = $_POST['ord_phone'];
	$education = $_POST['ord_education'];
	$email = $_POST['ord_email'];
	$style = $_POST['ord_style'];
	$reason = $_POST['ord_reason'];
	
  //FILE UPLOADING	
  if (isset($_FILES["file"]["name"])) {
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    if (!empty($filename)) {
        $location = 'uploads/';
        if  (move_uploaded_file($tmp_name, $location.$filename)){
        }

    }  
  	else{
       $message = "Please upload correct file!";
       echo "<script type='text/javascript'>alert('$message');</script>"; 
    }
}
	
  //UNIQUE ID CREATION	
	$query = "SELECT orderid FROM `order_form_data` ORDER BY timestamp DESC";
   $result = $conn->query($query);
   if(!$result){
	   echo 'Could not run query'.mysql_error();
	   exit;
   }
	
	if ($result->num_rows > 0) {
	   $row = mysqli_fetch_array($result);
	   $temp = $row['orderid'];
	   $prev_count = substr($temp, 15, 1);
      $curr_count = $prev_count + 1;
	   $constant = 'OAH';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($name, 0, 4);
	   $namef      = strtoupper($tmp3);
	   $id = $constant.$datef.$namef.$curr_count;
	      
   }
   else {
	   $constant = 'OAH';
	   $tmp1     = $date;
	   $tmp2     = date("d-m-Y", strtotime($tmp1)); 
	   $datef     = str_replace("-",'', $tmp2);
	   $tmp3     = substr($name, 0, 4);
	   $namef      = strtoupper($tmp3);
      $curr_count = 1;
      $id = $constant.$datef.$namef.$curr_count;
   }
   
   $sql = "INSERT INTO `order_form_data` (`orderid`,`name`,`phone`,`deadline`,`study_level`,`page_count`,`email`,`style`,`description`,`filepath`) 
                           VALUES ('$id','$name','$phone','$date','$education','$pagecount','$email','$style','$reason','$filename');";

	if ($conn->query($sql) === TRUE) {
		$message = "Order is successfully Created";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	   echo "<script>setTimeout(\"location.href = 'userpage.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}


//INSERT SUBSCRIBER INFO INTO DATABASE
if(isset($_POST['subscribesubmit'])){
	
	$email = $_POST['sub_email'];

   $sql = "INSERT INTO `subscriber_list`(`email`) VALUES ('$email');";
   
	if ($conn->query($sql) === TRUE) {
		$message = "You are subscribed for our updates!";
      echo "<script type='text/javascript'>alert('$message');</script>";   
	   echo "<script>setTimeout(\"location.href = 'index.php';\",50);</script>";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}

//CREATE QUERY TO DB AND PUT RECEIVED DATA INTO ASSOCIATIVE ARRAY
if (isset($_REQUEST['query'])) {
	 $req    = $_POST['query'];
	 $request = mysql_real_escape_string( $req );
	 $sql = "SELECT * FROM `subject_list` WHERE subject LIKE '%".$request."%'";
	 $result = $conn->query($sql);
    $data = array();
    if ($result->num_rows > 0) {
    // output data of each row
       while($row = mysqli_fetch_assoc($result))
         {
					$data[] = $row["subject"];
			}
       echo json_encode($data); 
   }
}

$conn->close();
?>

