<?php
require_once __DIR__ . './config.php';
session_start();
?>
<?php

    class API{
        function Select($username,$email,$pass){
            $db = new Connect;
            $users = array();
            $data = $db->prepare("SELECT * FROM `login` WHERE u_name = '$username' AND email = '$email' OR password = '$pass'");
            $data->execute();
            // while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
            //     $users[$OutputData['u_name']] = array(
            //         'name' => $OutputData['u_name'],
            //         'email' => $OutputData['email'],
            //         'password' => $OutputData['password']
            //     );
            // }
            
                    $row = $data->fetch(PDO::FETCH_ASSOC);
                    $users = $row;
                    if($row['u_name'] == $username || $row['email'] == $email && $row['password'] == $pass){
                        $_SESSION['userName'] = $username;
                        header("location:Welcome.php");
                    }
                    else {
                        echo("Login failed. Please be sure you are using the correct email address and password.");
                    }
            return json_encode($users);
        }

        function insert($tablename,$id,$col1,$col2,$parfield1,$parfield2){
            $db = new Connect;
            $data = $db->prepare("INSERT INTO `$tablename`(`$id`, `$col1`, `$col2`) VALUES (NULL,'$parfield1','$parfield2')");
            $data->execute();
            if($data == TRUE){
                echo '<script>alert("Data Inserted....")</script>'; 
            }
            else {
                echo '<script>alert("Data Not Inserted....")</script>';        
            }
        }

        function credinsert($tablename,$id,$col1,$col2,$col3,$col4,$col5,$col6,$col7,$col8,$col9,$col10,$col11,$col12,$parfield1,$parfield2,$parfield3,$parfield4,$parfield5,$parfield6,$parfield7,$parfield8,$parfield9,$parfield10,$parfield11,$parfield12){
            $db = new Connect;
            $data = $db->prepare("INSERT INTO `$tablename`(`$id`, `$col1`, `$col2`, `$col3`, `$col4`, `$col5`, `$col6`, `$col7`, `$col8`, `$col9`, `$col10`, `$col11`, `$col12`) VALUES (NULL,'$parfield1','$parfield2','$parfield3','$parfield4','$parfield5','$parfield6','$parfield7','$parfield8','$parfield9','$parfield10','$parfield11','$parfield12')");
            $data->execute();
            if($data == TRUE){
                echo '<script>alert("Data Inserted....")</script>';                 
            }
            else {
                echo '<script>alert("Data Not Inserted....")</script>';        
            }
        }

        function CWEinsert($tablename,$id,$col1,$col2,$col3,$col4,$parfield1,$parfield2,$parfield3,$parfield4){
            $db = new Connect;
            $data = $db->prepare("INSERT INTO `$tablename`(`$id`, `$col1`, `$col2`, `$col3`, `$col4`) VALUES (NULL,'$parfield1','$parfield2','$parfield3','$parfield4')");
            $data->execute();
            if($data == TRUE){
                echo '<script>alert("Data Inserted....")</script>';                 
            }
            else {
                echo '<script>alert("Data Not Inserted....")</script>';        
            }
        }

        function TAGinsert($tablename,$id,$col1,$col2,$col3,$parfield1,$parfield2,$parfield3){
            $db = new Connect;
            $data = $db->prepare("INSERT INTO `$tablename`(`$id`, `$col1`, `$col2`, `$col3`) VALUES (NULL,'$parfield1','$parfield2','$parfield3')");
            $data->execute();
            if($data == TRUE){
                echo '<script>alert("Data Inserted....")</script>';                 
            }
            else {
                echo '<script>alert("Data Not Inserted....")</script>';        
            }
        }

            function showdata(){
            $db = new Connect;
            $data = $db->prepare("SELECT * FROM `login` WHERE u_name = '$username' AND email = '$email' OR password = '$pass'");
            $data->execute();
            
                    $row = $data->fetch(PDO::FETCH_ASSOC);
                    return $row;
                    // $users = $row;
                    // if($row['u_name'] == $username || $row['email'] == $email && $row['password'] == $pass){
                    //     $_SESSION['userName'] = $username;
                    //     header("location:Welcome.php");
                    // }
                    // else {
                    //     echo("Login failed. Please be sure you are using the correct email address and password.");
                    // }
            }

        
    }
$API = new API;
//echo $API->Select();
//$API->insert();
//$API->credinsert();
//$API->CWEinsert();
//$API->showdata();
    
 ?>