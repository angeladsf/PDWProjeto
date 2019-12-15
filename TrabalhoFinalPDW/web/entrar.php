<?php
        $psword = filter_input(INPUT_POST, 'psword');
        $email = filter_input(INPUT_POST, 'email');
        
        
        if((!empty($psword))&&(!empty($email))){

        
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "123";
            $dbname = "pdw";

            $dbcon = new mysqli($host, $dbusername, $dbpassword, $dbname);

            $result = mysqli_query($dbcon, "SELECT * FROM cliente WHERE Email = '$email' AND Password = '$psword'");
            $row = mysqli_fetch_array($result);

            if(mysqli_connect_error()){
                $msg = "FALHA AO CONECTAR";
                echo "<script type ='text/javascript'>alert('$msg');</script>";
                echo '<script type ="text/javascript">window.location.href = "login.php";</script>';
            }
            else{
                if($row['Email'] == $email && $row['Password'] == $psword){ 

                    setcookie('email', $email, time()*60*60);
                    setcookie('pass', $psword, time()*60*60);

                    session_start();
                        $_SESSION['email'] = $email;
                        $_SESSION['pass'] = $psword;
                        header("Location: index.php");
                        exit();
                    
                }
                else{
                    $msg = "Esta conta não existe.";
                    echo "<script type ='text/javascript'>alert('$msg');</script>";
                    echo '<script type ="text/javascript">window.location.href = "login.php";</script>';
                }
            }
            $dbcon->close();
        }
			?>