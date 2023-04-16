<?php
    session_start();
    include_once('Db_Class.php');
    $obj = new Db_Class();
    // $pasien = $obj->getPasien();
    // while($data = pg_fetch_object($pasien)):
    //     echo $data->nik." ";
    // endwhile;
    if($_POST['action']=="login"){
        $result = $obj->login($_POST['email'],$_POST['password']);
        //echo json_encode($result);exit;
        if($result=="true"){
            header("Location: ../profile.php");
            exit();
        }else{
            header("Location: ../index.php?error=$result");
            exit();
        }
    }else if($_POST['action']=="register"){
        $result = $obj->register($_POST['email']);
        if($result=="true"){
            header("Location: ../index.php?register=success");
            exit();
        }else{
            header("Location: ../register.php?register=$result");
            exit();
        }
    }else if($_POST['action']=="logout"){
        session_destroy();
        header("Location: ../index.php?logout=true");
        exit();
    }
?>

