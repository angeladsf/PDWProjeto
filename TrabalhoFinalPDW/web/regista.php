<?php
        $nome = filter_input(INPUT_POST, 'nome');
        $morada = filter_input(INPUT_POST, 'morada');
        $psword = filter_input(INPUT_POST, 'psword1');
        $email = filter_input(INPUT_POST, 'email');
        
        if((!empty($nome))&&(!empty($morada))&&(!empty($psword))&&(!empty($email))){

        
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "pdw";

        $dbcon = new mysqli($host, $dbusername, $dbpassword, $dbname);

        $result = mysqli_query($dbcon, "SELECT * FROM cliente WHERE Email = '$email'");
        $row = mysqli_fetch_array($result);

        if(mysqli_connect_error()){
            $msg = "FALHA AO CONECTAR";
            echo "<script type ='text/javascript'>alert('$msg');</script>";
            echo '<script type ="text/javascript">window.location.href = "register1.php";</script>';
        }
        else{
            if($row['Email'] == $email){
                $msg = "Este email já existe.";
                echo "<script type ='text/javascript'>alert('$msg');</script>";
                echo '<script type ="text/javascript">window.location.href = "register1.php";</script>';
            }
            else{
                $sql = "INSERT INTO cliente(Nome, Password, Email, Morada) values('$nome', '$psword','$email', '$morada')";
                if($dbcon->query($sql)){
                    header("Location: login.php");
                    exit();
                }else{
                    $msg = "FALHA AO REGISTAR";
                    echo "<script type ='text/javascript'>alert('$msg');</script>";
                    echo '<script type ="text/javascript">window.location.href = "register1.php";</script>';

                }
            }
        }
        $dbcon->close();
    }
			?>