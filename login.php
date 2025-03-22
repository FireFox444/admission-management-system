<?php
session_start();

require 'templets/db_connection.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM login WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0)
    {
        $user = $result->fetch_assoc();

        // if ($user['role'] === 'admin'){
        //     $_session['admin_email'] = $student_eamil;
        //     header ("Location: admin/home.php");
        //     exit();
        // }else{
        //     $error = "you do not have admin privileges";
        // }

        $_SESSION['student_email'] = $student_email;
        header("Location: user/home.php");
        exit();
    }
    else
    {
        $error = "Invalid Email or Password";
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Siksha University</title>
    <style>
        /* login css */

.login-hero{
    background: url('images/flower1.jpg') no-repeat center center;
    background-size: cover;
    color: #fff;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-container{
    background-color: rgba(0, 0, 0, 0.7);
    padding: 30px;
    border-radius: 10px;
    width: 400px;
    text-align: center;
    opacity: 0;
    transform: translateY(-50px);
    animation: slideIn 0.8s ease-out forwards;
}

@keyframes slideIn{
    to{
        opacity: 1;
        transform: translateY(0);
    }
}

.login-container h2{
    margin-bottom: 20px;
    font-size: 2rem;
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn{
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}

.login-form{
    display: flex;
    flex-direction: column;
    align-items: center;
    animation: fadeIn 1s ease-in-out;
}

.form-group{
    margin-bottom: 15px;
    width: 100%;
}

.form-group label{
    display: block;
    margin-bottom: 5px;
    font-size: 1rem;
    color: #fff;  
}

.form-group input{
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
    transition: border-color 0.3s ease, background-color 0.3s ease;

}

.form-group input:focus{
    border-color: #007bff;
    background-color: #f1f1f1;
}

.btn{
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn:hover{
    background-color: #0056b3;
}

.login-container p{
    margin-top: 15px;
    font-size: 1rem;
    color: #fff;

}

.login-container a{
    color: #007bff;
    text-decoration: none;
}

.login-container a:hover{
    text-decoration: underline;
}

    </style>
</head>
<body>
<?php include('templets/header.php')?>
<section class="login-hero">
    <div class="login-container">
        <h2>Login to Siksha University</h2>
        <form action="#" method="POST" class="login-form">
            <div class="form-group">
                <label for="username">username</label>
                <input type="email" id="email" name="email" placeholder="enter Email" required >
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" id="password" name="password" placeholder="enter password" required >
            </div>
            <button type="submit" class="btn">Login</button>
            <p>Forgot Your Password? <a href="#">Click Here</a></p>
        </form>

        <div class="register-link">
            <p>Don't have an account? <a href="stud-reg.php" class="btn-register">Register Here</a></p>
        </div>
    </div>
</section>

<?php include('templets/footer.php')?>  
</body>
</html>