<?php
    session_start();
	$connection = mysqli_connect("localhost","root","","crm_for_admission");
	if($connection)
	{
		$usertype = $_POST['usertype'];
		$username = $_POST['username'];
    	$password = $_POST['password']; 
      
    	$uid = "SELECT * FROM Employee WHERE Email = '$username'";
    	$pswd = "SELECT * FROM Employee Where Password = '$password'";
    	
        $_SESSION['con'] = $connection;

        $verify_uid = mysqli_query($connection,$uid);
    	$verify_pswd = mysqli_query($connection,$pswd);
    	
        $v_uid_row = mysqli_fetch_array($verify_uid,MYSQLI_ASSOC);
    	$v_pswd_row = mysqli_fetch_array($verify_pswd,MYSQLI_ASSOC);
      
    	$count_uid = mysqli_num_rows($verify_uid);
    	$count_pswd = mysqli_num_rows($verify_pswd);

    	if($count_uid == 1)
    	{
    		if($count_pswd == 1)
    		{
                if($v_uid_row['DesigId'] == $usertype)
                {
        			if($v_uid_row['DesigId'] == 1)
        			{   
                        $_SESSION['ses'] = "true";
        				header("Location:../Dashboard/Admission_coordinator_or_principal_sir/index.php");
        			}
        			elseif ($v_uid_row['DesigId'] == 3)
        			{
        				
        				header("Location:../Dashboard/Head_of_the_department/index.php");
        			}	
        			elseif ($v_uid_row['DesigId'] == 4)
        			{	
        				header("Location:../Dashboard/Faculty/index.php");
        			}
                }
                else
                {
                    header("Location:login.php");
                }
    		}
    		else
    		{
                header("Location:login.php");
    			echo "Invalid password";
    		}
    	}
    	else
    	{
            header("Location:login.php");
    		echo "Invalid Username";
    	}
	}
	else
	{
		echo "Not connected";
	}
?>