<?php
session_start();
include('../db/db_connection.php');

$message = '';

if(isset($_POST["username"]))
{
       $query = "
       SELECT * FROM user_details
       WHERE user_name = :user_name
       ";
       $statement = $connect->prepare($query);
       $statement->execute(
              array(
                    'user_name'	=>	$_POST["username"]
            )
      );
       $count = $statement->rowCount();
       if($count > 0)
       {
              $result = $statement->fetchAll();
              foreach($result as $row)
              {
                     if($row['status'] == '1')
                     {
                            if($_POST["password"] == $row["password"])
                            {

                                   //$_COOKIE['mobile'] = $row['mobile'];
                                   //$_COOKIE['user_id'] = $row['user_id'];
                                  // $_COOKIE['user_name'] = $row['user_name'];
        					//header("location:../home");
                   $_SESSION['police_user_id'] = $row['user_id'];
                   $_SESSION['police_user_name'] = $row['user_name'];
                   $_SESSION['police_user_type'] = $row['user_type'];
                   //header("location:../home");                



                                   echo "1";
                           }
                           else
                           {
        					//$message = "Wrong Password";
                                echo "2";
                        }
                }
                else
                {
        				//$message = "Your account is Deactive Contact Petter";
                        echo "2";
                }
        }
}
else
{
        		//$message = "Wrong Mobile Or Password";
        echo "2";
}
}

?>