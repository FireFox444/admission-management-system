<?php
session_start();

// if(!isset($_SESSION['student_email']))
// {
//     // header("Location: ../login.php");
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siksha University</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <style>

body,h1,h2,p,a{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.hero{
    position: relative;
    height: 100vh;
    background:url('images/flower1.jpg') no-repeat center center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: #fff;
    overflow: hidden;
    /* height: 100vh; */
    /* display: flex; */   
}

.hero h2{
    font-size: 3dvh;
    margin-bottom: 20px;
    opacity: 0;
    transform: translateY(-50px);
    animation: fadeInDown 1s ease-out forwards;
}

.hero p{
    font-size: 1.5rem;
    margin-bottom: 30px;
    opacity: 0;
    transform: translateY(-50px);
    animation: fadeInDown 1.5s ease-out forwards;
}

.hero .btn{
    padding: 15px 30px;
    font-size: 1.2rem;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 5px; 
    transition: background-color 0.3s ease, transform 0.3s ease;
    opacity: 0;
    transform: translateY(50px);
    animation: fadeInUp 2s ease-out forwards;
}

.hero.btn:hover{
    background-color: #0056b3;
    transform: scale(1.05);

}

@keyframes fadeInDown {
    from {
         opacity: 0;
         transform: translateY(-50px);
     }
     to{
         opacity: 1;
         transform: translateY(0);
     }
 }

 @keyframes fadeInUp {
    from{
         opacity: 0; 
         transform: translateY(50px);
     }
     to {
         opacity: 1;
         transform: translateY(0);
     }
 }
        </style>
</head>
<body>
<?php include('temp/header.php')?>

<section class="hero">
    <div class="container">
        <h2>Welcom to siksha University</h2>
        <p>Be a Part Of Our</p>
        <a href="apply-form" class="btn">Apply Here</a>
    </div>
</section>

<?php include('temp/footer.php')?>    
</body>
</html>