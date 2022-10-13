<?php 

    // Template Name: Home page

?>

<?php get_header(); ?>






<section class="hero-sec bg-[#0B1224] py-20">
    <div class="max-w-7xl mx-auto">
        <div class="content">
            <div class="rounded-full max-w-[200px] mx-auto">
                <img class="border" src="wp-content/uploads/2021/10/usman-1.jpg" alt="usman1">
            </div>
            <h1 class="text-[46px] text-center font-bold text-white">Hi, I am <span class="text-[#72E2AE]">Usman Mehar<span></h1>
            <p class="text-[18px] text-center font-medium text-[#BFBECB] max-w-[70%] mx-auto">I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.</p>
        </div>

        <div class="social-icon text-center">
            <span class="text-white mx-5 border"><i class="fa-brands fa-facebook-f"></i></span>
            <span class="text-white mx-5 border"><i class="fa-brands fa-twitter"></i></span>
            <span class="text-white mx-5 border"><i class="fa-brands fa-github"></i></i></span>
            <span class="text-white mx-5 border"><i class="fa-brands fa-linkedin"></i></i></span>
            <span class="text-white mx-5 border"><i class="fa-brands fa-dribbble"></i></i></span>
        </div>
    </div>
</section>

<section class="py-32 bg-[#0F172A] text-white">

    <div class="max-w-7xl mx-auto">
        
        <h2>About Me</h2>

        <div class="parent flex">
            
            <div class="col-1 border-8 max-w-[590px] mr-4">
                <img src="wp-content/uploads/2022/10/about-image.jpg" alt="">
            </div>

            <div class="col-2">

                <h3 class="text-2xl text-center font-bold">Hi, I am <span class="text-[#72E2AE]">Usman Mehar<span></h3>

                <ul>
                    <li>First Name<span>: Joseph</span></li>
                    <li>Last Name<span>: Bieber</span></li>
                    <li>Age<span>: 27 years</span></li>
                    <li>Nationality<span>: American</span></li>
                    <li>Languages<span>: English, French</span></li>
                    <li>Address<span>: Joseph</span></li>
                    <li>Freelance<span>: Joseph</span></li>
                </ul>

                <a href="#">Download Rusame</a>
            </div>
        </div>
    </div>
</section>

<section class="slider-sec bg-darkBlue">
    <div class="max-w-7xl mx-auto">
        <div class="owl-carousel owl-theme">
        <!-- single slide -->

        <div class="item">
            <h3>David Chester</h3>
            <p>Client - Envato.com</p>
            <div class="review">
                <div class="review-stars">
                    <span class="text-yellow-600"><i class="fa-solid fa-star"></i></span>
                    <span class="text-yellow-600"><i class="fa-solid fa-star"></i></span>
                    <span class="text-yellow-600"><i class="fa-solid fa-star"></i></span>
                    <span class="text-yellow-600"><i class="fa-solid fa-star"></i></span>
                    <span class="text-yellow-600"><i class="fa-solid fa-star"></i></span>
                </div>
                <p>Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</p>
            </div>
        </div>
      <!-- single slide end -->
      

    </div>
    </div>
</section>










<?php get_footer(); ?>