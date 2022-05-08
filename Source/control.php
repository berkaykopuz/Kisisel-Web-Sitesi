<?php

$email = $_POST['email'];
$password = $_POST['password']; 

if($email == "g211210045@sakarya.edu.tr"){
    if($password == "g211210045"){
        sleep(2);
        echo '<h1>Hoşgeldiniz G211210045! <a href="index.html"> Ana sayfaya buraya tıklayarak dönebilirsiniz </a></h1>';
        
    }
    else {
        
        
        header("Location: login.html");
        
       

    }
} 
else {
        
        header("Location: login.html");
}





?>



