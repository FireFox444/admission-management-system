<?php

session_start();

require 'templets/db_connection.php';

$error = $success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm-password']);

    //validation
    if (empty($name) || empty( $email) || empty($password) || empty($confirm_password) ){
        $error = "All field are required";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = "Invalid Email Format";
    }
    elseif ($password !== $confirm_password){
        $error = "Password does not match";
    }
    else
    {
        $sql = "SELECT * FROM login WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
     
        if ($result->num_rows > 0)
            {
                    echo "<script> alert('You Regiister Successfully congratulation :)');</script>";

            }

            else{
                $insert_sql = "INSERT INTO LOGIN (name, email, password) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($insert_sql);
                $stmt->bind_param("sss", $name, $email, $password);
                $stmt->execute();{
                    echo "<script> alert('Register successful! you can now <a href='login.php'>login here</a>');</script>";

                }
                // else
                // {
                //     echo "<script> alert('ERROR DURING REGISTRATION PLEASE TRY AGAIN..');</script>";

        
                // }
            }

            $stmt->close();
    }

}
$conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
    <style>
        
/* register css */

.signup-hero{
    background: url('images/flower1.jpg') no-repeat center center;
    background-size: cover;
    background-position: center;
    /* color: #fff; */
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.signup-container{
    background-color: rgba(255, 255, 255, 0.9);
    padding: 10px 10px;
    border-radius: 10px;
    width: 100%;
    max-width: 400px;
    height: 450px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    animation: slideIn 0.6s ease-out;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow-y: auto;
    /* opacity: 0; */
    /* transfor: translateY(-50px); */
    
}

.signup-container h2{
    margin-bottom: 15px;
    font-size: 1.8rem;
    color: #333;
    /* animation: fadeIn 1s ease-in-out; */
}

.signup-form{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    /* animation: fadeIn 1s ease-in-out; */
}

.signup-form .form-group{
    margin-bottom: 0px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    /* width: 100%; */
}

.signup-form label{
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    font-size: 1rem;
    color: #333;  
}

.signup-form input{
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    /* transition: border-color 0.3s ease, background-color 0.3s ease; */

}

.signup-form button{
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.signup-form button:hover{
    background-color: #0056b3;
}

.signup-form p{
    margin-top: 12px;
    font-size: 0.9rem;
}


.signup-form a{
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
}

.signup-form a:hover{
    text-decoration: underline;
}



@keyframes fadeIn{
    from{
        transform: translateY(-30px);
        opacity: 0;
    }
    to{
        transform: translateY(0);
        opacity: 1;
    }
}

.nav-link li a{
    color: #333;
    text-decoration: none;
    padding: 10px;
    transition: color 0.3s ease;
} 

.nav-link li a:hover{
    color: #007bff;
}



    </style>
</head>
<body>
<?php include('templets/header.php')?>
<section class="signup-hero">
    <div class="signup-container">
        <h2>STUDENT REGISTRATION</h2>
        <form action="#" method="POST" class="signup-form">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="enter full name" required >
            </div>

            <div class="form-group">
                <label for="email">email</label>
                <input type="email" id="email" name="email" placeholder="enter email" required >
            </div>

            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="enter password" required >
            </div>

            <div class="form-group">
                <label for="Confirm Password">Confirm Password</label>
                <input type="Password" id="confirm-password" name="confirm-password" placeholder="enter Confirm Password" required >
            </div>

            <button type="submit" clas="btn">Login</button>
            <p>Already Have An Account? <a href="login.php">login Here</a></p>
        </form>

        <!-- <div class="register-link">
            <p>Don't have an account? <a href="stud-reg.php" class="btn-register">Register Here</a></p>
        </div> -->
    </div>
</section>

<?php include('templets/footer.php')?> 
</body>
</html>