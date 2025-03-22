<?php
session_start()

// if(!isset($_SESSION['stuent_email'])) {
//     header("Location: ../login.php"); 
//     exit();
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perks</title>
    <link rel="stylesheet" href="../CSS/style.css">
<style>
/* perks CSS */

body,h1,h2,p,a{
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.university-perks{
    padding: 50px 20px;
    background-color: #f9f9f9;
}

.university-perks .container{
    max-width: 1200px;
    margin: 0 auto;
    text-align: center;

}

.section-title{
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.perks-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;

}

.perk-item{
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.perk-item:hover{
    transform: translateY(-10px);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.perk-item img{
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-bottom: 2px solid #007bff;
}

.perk-item h3{
    font-size: 1.5rem;
    color: #333;
    margin: 15px 0;
}

.perk-item p{
    font-size: 1rem;
    color: #666;
    padding: 1 15px 15px;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .perk-item img{
        height: 150px;
    }

    .perk-item h3{
        font-size: 1.3rem;
    }

    .perk-item p{
        font-size: 0.9rem;
    }
}

</style>
</head>
<body>
<?php include('temp/header.php')?>

<section class="university-perks">
    <div class="container">
        <h2 class="section-title">Why Choose Siksha University?</h2>
        <div class="perks-grid">
            <!-- perk 1 -->
            <div class="perk-item">
            <img src="../images/flower1.jpg" alt="World-Class Facilities">
            <h3>World Class Facilities</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div>

             <!-- perk 2  -->
             <div class="perk-item">
            <img src="../images/flower1.jpg" alt="Experienced faculty">
            <h3>Experienced faculty</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div>

             <!-- perk 3 -->
             <div class="perk-item">
            <img src="../images/flower1.jpg" alt="Global Opportunities">
            <h3>Global Opportunities</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div>

             <!-- perk 4 -->
             <div class="perk-item">
            <img src="../images/flower1.jpg" alt="Vibrant Student Life">
            <h3>Vibrant Student Life</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div>

             <!-- perk 5 -->
             <div class="perk-item">
            <img src="../images/flower1.jpg" alt="Coursera">
            <h3>Coursera</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div>


             <!-- perk 6 -->
             <!-- <div class="perk-item">
            <img src="../images/flower1.jpg" alt="World-Class Facilities">
            <h3>World Class Facilities</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div> -->


             <!-- perk 7-->
             <!-- <div class="perk-item">
            <img src="../images/flower1.jpg" alt="World-Class Facilities">
            <h3>World Class Facilities</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div> -->

             <!-- perk 8 -->
             <!-- <div class="perk-item">
            <img src="../images/flower1.jpg" alt="World-Class Facilities">
            <h3>World Class Facilities</h3>
            <p>Experience State-of-the-art Infrastructure, including Mordern labs, libraries, and research center.</p>
            </div> -->
        </div>
    </div>
</section>

<?php include('temp/footer.php')?>  

</body>
</html>