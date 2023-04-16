<?php
include_once('connect.php'); 
class Db_Class{
    private $table_name = 'pasien';
    function register(){

        if(!isset($_POST['nama'])){
            $_SESSION['message'] = "nama";
            return 'nama';
            exit;
        }
        if(!isset($_POST['telp'])){
            $_SESSION['message'] = "telp";
            return 'telp';
            exit;
        }
        if(!isset($_POST['email'])){
            $_SESSION['message'] = "email";
            return 'email';
            exit;
        }
        if(!isset($_POST['alamat'])){
            $_SESSION['message'] = "alamat";
            return 'alamat';
            exit;
        }
        if(!isset($_POST['password'])){
            $_SESSION['message'] = "password";
            return 'password';
            exit;
        }

        $sql = "SELECT * FROM ".$this->table_name." ";
        $q1  = pg_query($sql);
        $start = 1;
        if(pg_num_rows($q1)>0){
            $start = pg_num_rows($q1)+1;
        }
        $nik = "NIK".str_pad($start, 4, '0', STR_PAD_LEFT);
        $pass= password_hash($this->cleanData($_POST['password']),PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO PUBLIC.".$this->table_name."(nik,nama,email,telp,alamat,password) "."VALUES('$nik','".$this->cleanData($_POST['nama'])."','".$this->cleanData($_POST['email'])."','".$this->cleanData($_POST['telp'])."','".$this->cleanData($_POST['alamat'])."','".$pass."')";

        
        if(pg_query($sql)){
            $_SESSION['message'] = "success_register";
            return true;
        }else{
            echo $sql;exit;
            $_SESSION['message'] = "failed_register";
            return 'failed_register';
        }
    }

    function getPasien(){             
        $sql ="select *from public." . $this->table_name . " ORDER BY id DESC";
        return pg_query($sql);
    } 

    function login($email, $password){
        $sql = "SELECT * FROM ".$this->table_name." WHERE email = '$email' ";
        $q1  = pg_query($sql);
        if(pg_num_rows($q1)>0){
            while ($row = pg_fetch_row($q1)) {
                $passDb = $row[6];
                $pass1  = password_hash($password,PASSWORD_DEFAULT);
                if(password_verify($password,$passDb)){
                    //echo json_encode($q1);exit;
                    $_SESSION['isLogin'] = true;
                    $_SESSION['id']      = $row[0];
                    $_SESSION['nik']     = $row[1];
                    $_SESSION['nama']    = $row[2];
                    $_SESSION['email']   = $row[3];
                    $_SESSION['telp']    = $row[4];
                    $_SESSION['alamat']  = $row[5];
                    
                    return true;
                }else{
                    //echo "password salah";
                    $_SESSION['message'] = "Password Salah !";
                    return 'password';
                }
            }
        }else{
            //echo "akun tidak ditemukan";
            $_SESSION['message'] = "Akun tidak ditemukan !";
            return 'account';
        }
    }
    function cleanData($val){
         return pg_escape_string($val);
    }
}
?>