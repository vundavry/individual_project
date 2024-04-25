
<?php  

	$mysqli= new mysqli('localhost',
						'waph-team31',
						'Pa$$w0rd',
						'waph_team');
	if ($mysqli->connect_errno){
		printf("DATABASE COONECTION FAILED: %s\n", $mysqli->connect_error);
		return FALSE;
	}
	
  	function addnewuser($username, $password,$Fullname,$Email) {
		 global $mysqli;
		 $prepared_sql ="INSERT INTO users (username,password,fullname,additional_email) VALUES (?,md5(?),?,?);";
		 $stmt = $mysqli->prepare($prepared_sql);
		 $stmt-> bind_param("ssss",$username,$password,$Fullname,$Email);
		 if($stmt->execute()) return TRUE;
		  // echo "DEBUG>sql= $sql";	
		  return FALSE;
  	}

  	function checklogin_mysql($username, $password) {
		 global $mysqli;
		 $prepared_sql ="SELECT * FROM users WHERE username= ? AND password = md5(?);";
		 $stmt = $mysqli->prepare($prepared_sql);
		 $stmt-> bind_param("ss",$username,$password);
		 $stmt->execute();
		  // echo "DEBUG>sql= $sql";
		 $result = $stmt->get_result();
		 if($result->num_rows ==1)
		  return TRUE;
		 return FALSE;
  	}

  	/*function changepassword($username, $password) {
		 global $mysqli;
		 $prepared_sql ="UPDATE users SET password = md5(?) WHERE username= ?;";
		 $stmt = $mysqli->prepare($prepared_sql);
		 $stmt-> bind_param("ss",$username,$password);
		 if($stmt->execute()){ 
		 	return TRUE;
		    echo "DEBUG>sql= $sql";	
		 }else{
		  	return FALSE;
		  }
		 
  	}*/

  	   function changepassword($username, $password) {
       global $mysqli;
       $prepared_sql = "UPDATE users SET password = md5(?) WHERE username =?;";
       $stmt = $mysqli->prepare($prepared_sql);
       $stmt-> bind_param("ss",$password, $username);
       $stmt->execute();
       return $stmt->affected_rows == 1;
    }


   function changeprofile($Username, $Fullname, $Email, $Phone) {
        global $mysqli;
        $prepared_sql = "UPDATE users SET fullname = ?, additional_email = ?, phone = ? WHERE username = ?"; 
        $stmt = $mysqli->prepare($prepared_sql);
        $stmt->bind_param("ssss", $Fullname, $Email, $Phone, $Username);
        if($stmt->execute()) {
            return TRUE;
        } else {
            return FALSE;
        }
       
    }

    function getUserInfo($username) {
    global $mysqli;
    $prepared_sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($prepared_sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
    }

?>