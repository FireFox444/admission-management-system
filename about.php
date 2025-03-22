<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Siksha University</title>
    <style>
        
/* ABOUT PAGE CSS */
.about-hero{
    background: url('images/flower1.jpg') no-repeat center center/cover;
    color: #fff;
    height: 450px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    opacity: 0;
    transform: scale(0.9);
    animation: fadeInZoom 1.5s ease-out forwards;
    
}

/* keyframe animation for fade-in and zoom */

@keyframes fadeInZoom {
   0% {
        opacity: 0;
        transform: scale(0.9);
    }
    100%{
        opacity: 1;
        transform: scale(1);
    }
}

.about-hero:hover{
    transform: scale(1.05);
    transition: transform 0.5s ease;
}

.about-hero h2{
    font-size: 2.5rem;
    margin-bottom: 10px;
}

.about-hero p{
    font-size: 1.2rem;
}

.about-details{
    padding: 50px 20px;
    background-color: #f9f9f9;

}

.about-details .about-conatainer{
    max-width: 1200px;
    margin: 0 auto;
}

.about-info scroll-reveal{
    margin-bottom: 30px;
}

.about-conatainer h3{
    font-size: 1.8rem;
    margin-bottom: 15px;
    border-bottom: 2px solid #007bff;
    display: inline-block;
}

.about-conatainer p{
    font-size: 1rem;
    line-height: 1.6;
    color: #333;
}

.about-cta scroll-reveal{
    text-align: center;
    margin-top: 40px;
}

.about-cta scroll-revreal p{
    font-size: 1.2rem;
    margin-bottom: 20px;
}

/* scroll to top button style */
.scroll-to-top-btn{
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: white;
    transform: translate(-250%, 60%);
    /* center the button */
    padding: 15px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    display: none;
    /* initially hidden */
    transition: background-color 0.3s ease;
}

.scroll-to-top-btn a{
    color: white;
    text-decoration: none;
}

.scroll-to-top-btn:hover{
    background-color: #0056b3;
}

/* show hte button when scrolled down */
.scroll-to-top-btn.show{
    display: block;
}

/* initially hidden state for text */
.scroll-reveal{
    opacity: 0;
    transform: translateY(30px);
    /* start slightly below */
    transition: opacity 008s ease,tarnsform 0.8s ease;
}

/* whaen element become visible */
.scroll-reveal.visible{
    opacity: 1;
    transform: translateY(0);
    /* return to normal position */
}

        
    </style>
</head>
<body>
<?php include('templets/header.php')?>

<section class="about-hero scroll-reavel">
        <div class="about-container">
            <h2>About Siksha University</h2>
            <p>Empowering minds since 2000 with quality education and innovation</p>
        </div>
</section> 

<section class="about-details">
    <div class="about-container">
        <div class="about-info scroll-reavel" >
            <h3>Who Are You</h3>
            <p>
                Siksha University is a leading institution dedicated to academic excellence, reseacher, and innovation.
                Establish in 2000, we have grown into a vibrant community of learners, educators, and leaders, fostering a passion for knowledge and skill that shape the future.
            </p>
        </div>
        <br>
        <div class="about-info scroll-reavel">
            <h3>Our Mission</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iste minus sapiente magni aspernatur excepturi error, in cum harum, quis ducimus maiores? Quis, repudiandae harum sed dolorem ab ipsam. Ea consequatur dicta quaerat odit? Unde, quam quas saepe, facilis animi alias excepturi placeat aut nostrum temporibus dolorem, quisquam eos! Exercitationem.
            </p>
        </div>
        <br>
        <div class="about-info scroll-reavel">
            <h3>Our Vission</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iste minus sapiente magni aspernatur excepturi error, in cum harum, quis ducimus maiores? Quis, repudiandae harum sed dolorem ab ipsam. Ea consequatur dicta quaerat odit? Unde, quam quas saepe, facilis animi alias excepturi placeat aut nostrum temporibus dolorem, quisquam eos! Exercitationem.
            </p>
        </div>
        <br>
        <div class="about-info scroll-reavel">
            <h3>Join Us</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe iste minus sapiente magni aspernatur excepturi error, in cum harum, quis ducimus maiores? Quis, repudiandae harum sed dolorem ab ipsam. Ea consequatur dicta quaerat odit? Unde, quam quas saepe, facilis animi alias excepturi placeat aut nostrum temporibus dolorem, quisquam eos! Exercitationem.
            </p>
            <br>
            <br>
            <br>
            <br>
            <button class="scroll-to-top-btn"><a href="#">Explore Admissions</a></button>
        </div>
    </div>
</section>
<?php include('templets/footer.php')?>

<script>
    // Function to detect if an element is in the view port
    function isInviewport(element) {
        const rect = element.getBoundingClinentRect();
        return(
            rect.top >= 0 &&
            rect.bototm <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }

    // Scroll event listener
    function revealOnScroll() {
        const element = document.querySelectorAll('.Scroll-reveal');
        element.forEach(el) => {
            if (isInViewport(el)) {
                el.classList.add('visible');
            };
        }
    }

    // run the function on scroll

    window.addEventListener('scroll',revealOnScroll);

    // trigger the function initially in case some element are already visible
    revealOnScroll();

    // show or hide the "back to top" button based on scroll position
    window.addEventListener('scroll',function() {
        const button = document.querySelector('.scroll-to-top-btn');
         if(window.scrolly > 300) { //show button after scrolling down 300px
            button.ClassList.add('show')
        }else {
            button.ClassList.remove('show');
        }
    });

    // scroll to top functionality
    document.querSelector('.scroll-to-top-btn').addEventListner('click',function(){
        window.scrollto({
            top: 0,
            behavior: 'smooth'
        });
    });

</script>
</body>
</html>