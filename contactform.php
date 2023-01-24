<!-- add data validation -->

<?php
    if(isset($_POST['submit'])){
        #retrieve user input
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $company = $_POST['company'];
        $message = $_POST['message'];
        
        if (empty($name) | empty($email) | empty($phone) | empty($message)){
            header("Location: contact.php/?post=empty");
        }
        else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: contact.php?post=invalidemail");
            }
        }
        $mailTo = "raemela@icloud.com";
        $headers = "From: ".$email;
        $msg = "You have a new message from: ".$name.".\n\n".$message;
        mail($mailTo, "New message from your website, Nzube", $msg, $headers);
        header("Location: contact.php?MessageSent");
    }else{
        header("Location: contact.php?post=error");
    }
?>