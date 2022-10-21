<?php 

    // Template Name: Home page

?>

<?php get_header(); ?>




<!-- Hero sec -->

<section class="hero-sec bg-darkBlue py-20">
    <div class="max-w-1240 mx-auto">
        <div class="content">
            <div class="max-w-[200px] mx-auto">
                <img class="border-[5px] rounded-full border-[#6BD4A5]" src="wp-content/uploads/2022/10/usman-1.jpg" alt="usman1">
            </div>
            <h1 class="font-radioCanada text-[46px] text-center font-bold text-white mt-[10px]">Hi, I am <span class="text-[#72E2AE]">Usman Mehar<span></h1>
            <p class="font-poppins text-[18px] text-center font-medium text-[#BFBECB] max-w-[70%] mx-auto mt-[0px]">I am a frontend web developer. I can provide clean code and pixel perfect design. I also make website more & more interactive with web animations.</p>
        </div>

        <div class="social-icon text-center mt-[40px]">
            <span class="text-white w-[40px] h-[40px] inline-flex items-center justify-center border rounded-lg hover:bg-lightGreen mr-5"><i class="fa-brands fa-facebook-f"></i></span>
            <span class="text-white w-[40px] h-[40px] inline-flex items-center justify-center border rounded-lg hover:bg-lightGreen mr-5"><i class="fa-brands fa-twitter"></i></span>
            <span class="text-white w-[40px] h-[40px] inline-flex items-center justify-center border rounded-lg hover:bg-lightGreen mr-5"><i class="fa-brands fa-github"></i></i></span>
            <span class="text-white w-[40px] h-[40px] inline-flex items-center justify-center border rounded-lg hover:bg-lightGreen mr-5"><i class="fa-brands fa-linkedin"></i></i></span>
            <span class="text-white w-[40px] h-[40px] inline-flex items-center justify-center border rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-dribbble"></i></i></span>
        </div>
        <div class="parent flex">
            <div class="1">
                <a class="text-white text-center block hover:text-lightGreen" href="#"><i class="fas fa-arrow-down"></i></a>
            </div>
            <div class="text-center">
               <span class="text-center"><a class="text-[15px] text-white font-medium text-center ml-1 mt-6 hover:text-lightGreen" href="#about">Scrool Down</a></span>
            </div>
        </div>
    </div>
</section>

<!-- About Sec -->

<section id="about" class="about-sec py-32 bg-[#0F172A] text-white">

    <div class="max-w-1240 mx-auto">
        
        <h2 class="font-radioCanada text-[46px] text-center font-bold text-white mb-20">About Me</h2>
        <div class="bg-lightGreen inline-flex h-1.5 w-32 rounded-full relative opacity-20 text-center">
                <span class="absolute left-0 top-0 inline-block h-full w-1.5 animate-lefttoright rounded-full bg-lightGreen"></span>
            </div>
        <div class="parent md:flex md:items-center">
            
            <div class="col-1 border-8 border-[#6BD4A5] rounded-lg max-w-[590px] mr-8">
                <img src="wp-content/uploads/2022/10/about-image.jpg" alt="">
            </div>

            <div class="col-2 about-inner">

                <h3 class="font-radioCanada text-[26px] font-bold text-white">Hi, I am <span class="text-[#72E2AE]">Usman Mehar<span></h3>

                <ul class="mt-3">
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">First Name <span class="text-[15px] ml-[20px] text-Grey font-medium ">: Usman</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Last Name  <span class="text-[15px] ml-[21px] text-Grey font-medium">: Bieber</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Age        <span class="text-[15px] ml-[75px] text-Grey font-medium">: 27 years</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Nationality<span class="text-[15px] ml-[19px] text-Grey font-medium">: American</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Languages  <span class="text-[15px] ml-[20px] text-Grey font-medium">: English, French</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Address    <span class="text-[15px] ml-[43px] text-Grey font-medium">: 121 King Street, Melbourne, United States</span></li>
                    <li class="text-lg pl-8 font-poppins text-Grey font-medium">Freelance  <span class="text-[15px] ml-[30px] text-Grey font-medium">: Joseph</span></li>
                </ul>

                <div class="mt-[40px]">
                    <span class="h-[47px] w-[188px] border uppercase inline-flex items-center justify-center rounded-[5px] bg-lightGreen text-[14px] font-medium border-[#6BD4A5] hover:bg-white text-black"><a href="#">Download Resume</a></span>
                </div>
                
            </div>
        </div>
    </div>
</section>

<!-- Skills sec -->

<section class="skills-sec flex bg-lightBlue pb-5">
    <div class="max-w-1240 mx-auto">
    <h2 class="font-radioCanada text-[46px] text-center font-bold text-white mb-[80px]">My Skills</h2>
        <div class="my-skills flex">
            <div>
                <div class="bg-[#162033] py-[20px] px-[85px] border rounded-lg border-[#6BD4A5] mr-7 text-center relative">
                    <svg class="circle" width="120" height="120" viewBox="0 0 120 120"><circle class="circlebg" cx="60" cy="60" r="54" pathLength="1" stroke-linecap="round" stroke-width="12"></circle><circle cx="60" cy="60" r="54" stroke-linecap="round" stroke-width="12" opacity="1" pathLength="1" stroke-dashoffset="0px" stroke-dasharray="0.85px 1px"></circle></svg>
                    <span class="font-poppins text-lg text-Grey absolute -right-[-125px] -top-[-70px]">85%</span>
                    <h4 class="text-lg text-white font-semibold font-poppins mt-3">UX/UI Design</h4>
                </div>
            </div>

            <div>
                <div class="bg-[#162033] py-[20px] px-[85px] border rounded-lg border-[#6BD4A5] mr-7 text-center relative">
                    <svg class="circle" width="120" height="120" viewBox="0 0 120 120"><circle class="circlebg" cx="60" cy="60" r="54" pathLength="1" stroke-linecap="round" stroke-width="12"></circle><circle cx="60" cy="60" r="54" stroke-linecap="round" stroke-width="12" opacity="1" pathLength="1" stroke-dashoffset="0px" stroke-dasharray="0.85px 1px"></circle></svg>
                    <span class="font-poppins text-lg text-Grey absolute -right-[-125px] -top-[-70px]">85%</span>
                    <h4 class="text-lg text-white font-semibold font-poppins mt-3">UX/UI Design</h4>
                </div>
            </div>

            <div>
                <div class="bg-[#162033] py-[20px] px-[85px] border rounded-lg border-[#6BD4A5] mr-7 text-center relative">
                    <svg class="circle" width="120" height="120" viewBox="0 0 120 120"><circle class="circlebg" cx="60" cy="60" r="54" pathLength="1" stroke-linecap="round" stroke-width="12"></circle><circle cx="60" cy="60" r="54" stroke-linecap="round" stroke-width="12" opacity="1" pathLength="1" stroke-dashoffset="0px" stroke-dasharray="0.85px 1px"></circle></svg>
                    <span class="font-poppins text-lg text-Grey absolute -right-[-125px] -top-[-70px]">85%</span>
                    <h4 class="text-lg text-white font-semibold font-poppins mt-3">UX/UI Design</h4>
                </div>
            </div>
            <div>
                <div class="bg-[#162033] py-[20px] px-[85px] border rounded-lg border-[#6BD4A5] mr-7 text-center relative">
                    <svg class="circle" width="120" height="120" viewBox="0 0 120 120"><circle class="circlebg" cx="60" cy="60" r="54" pathLength="1" stroke-linecap="round" stroke-width="12"></circle><circle cx="60" cy="60" r="54" stroke-linecap="round" stroke-width="12" opacity="1" pathLength="1" stroke-dashoffset="0px" stroke-dasharray="0.85px 1px"></circle></svg>
                    <span class="font-poppins text-lg text-Grey absolute -right-[-125px] -top-[-70px]">85%</span>
                    <h4 class="text-lg text-white font-semibold font-poppins mt-3">UX/UI Design</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-lightBlue pt-5 relative z-0">
    <div class="max-w-1240 mx-auto">
        <div class="parent flex">

            <div class="content-wrapper mr-7 relative">
                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Javascript - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen block w-[518px] h-[16px] rounded-full"></span>
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Node Js  - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">React Js - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">React Native - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>
            </div>

            <div class="content-wrapper2">
                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Html & Css - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Photoshop  - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Illustrator - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full mb-5"></span> 
                </div>

                <div class="bar-wrapper">
                    <h4 class="text-lg text-white font-radioCanada font-medium mb-3 mt-5">Figma - <span class="text-lightGreen text-lg font-medium font-radioCanada">(85%)</span></h4>
                </div>

                <div class="bar-1 bg-lightGreen relative w-[610px] h-[16px] rounded-full">
                    <span class="bg-lightGreen relative w-[518px] h-[16px] rounded-full"></span> 
                </div>
            </div>

        </div>
    </div>
</section>


<!-- services sec  -->

<section class="services-sec flex bg-darkBlue py-32">  
    <div class="max-w-1240 mx-auto">
        <h2 class="font-radioCanada text-[46px] text-center font-bold text-white mb-10">My Services</h2>

        <div class="services-content flex">

            <div class="box-1 bg-lightBlue py-5 px-10 border-[1px] rounded-lg border-[#6BD4A5]">
                <span class="text-lightGreen inline-flex mb-3 w-20 h-20 justify-center items-center bg-opacity-10 rounded-full bg-lightGreen "><i class="fab fa-envira"></i></span>
                <h4 class="text-lg text-white font-radioCanada font-medium">UX/UI Design</h4>
                <p class="text-[15px] text-Grey font-medium max-w-[300px] mt-[10px]">Working with Bieber is very good experience for me. He’s a good person.
                        If I need developer in future, I’ll definately hire him.</p>
            </div>

            <div class="box-1 bg-lightBlue py-5 px-10 border-[1px] rounded-lg border-[#6BD4A5] mx-[30px]">
                <span class="text-lightGreen inline-flex mb-3 w-20 h-20 justify-center items-center bg-opacity-10 rounded-full bg-lightGreen "><i class="fab fa-envira"></i></span>
                <h4 class="text-lg text-white font-radioCanada font-medium">UX/UI Design</h4>
                <p class="text-[15px] text-Grey font-medium max-w-[300px] mt-[10px]">Working with Bieber is very good experience for me. He’s a good person.
                        If I need developer in future, I’ll definately hire him.</p>
            </div>

            <div class="box-1 bg-lightBlue py-5 px-10 border-[1px] rounded-lg border-[#6BD4A5]">
                <span class="text-lightGreen inline-flex mb-3 w-20 h-20 justify-center items-center bg-opacity-10 rounded-full bg-lightGreen "><i class="fas fa-tablet-alt"></i></span>
                <h4 class="text-lg text-white font-radioCanada font-medium">UX/UI Design</h4>
                <p class="text-[15px] text-Grey font-medium max-w-[300px] mt-[10px]">Working with Bieber is very good experience for me. He’s a good person.
                        If I need developer in future, I’ll definately hire him.</p>
            </div>
        </div>
    </div>
</section>

    <!-- My Resume sec -->

<section class="bg-lightBlue py-32 relative">
    <div class="max-w-1240 mx-auto">

        <h2 class="text-[46px] text-center relative font-bold font-radioCanada text-white mb-10">MY RESUME</h2>
        <div class="parent">
            <div class="content-wrapper">
                <div>  
                    <h3 class="text-[22px] ml-[30px] text-white font-semibold font-radioCanada">Educational Qualification</h3>
                    <span class="text-lightGreen absolute top-[240px] left-[50px]"><i class="fas fa-briefcase"></i></span>
                </div>

                <div class="education pl-64 mt-6 relative">

                    <span class="line-top text-sm absolute top-[2px] -left-[230px] text-Grey inline-flex px-3 bg-opacity-20 bg-lightGreen rounded-full">2008 - 2010</span>
                    <div class="box-1">
                        <h4 class="line-left text-lg text-lightGreen font-semibold font-radioCanada">Higher School Graduation</h4>
                        <h5 class="text-md text-white font-normal font-radioCanada mt-2 mb-3">Punjab Collage.</h5>
                        <p class="text-sm text-Grey font-poppins font-normal max-w-[40%]">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed consectetur donec gravida ullamcorper cum id.
                            Sit viverra donec in ornare euismod.</p>
                    </div>

                    <div class="education mt-6 relative">

                    <span class="line-top text-sm absolute top-[2px] -left-[230px] text-Grey inline-flex px-3 bg-opacity-20 bg-lightGreen rounded-full">2008 - 2010</span>
                    <div class="box-2">
                        <h4 class="line-left text-lg text-lightGreen font-semibold font-radioCanada">Higher School Graduation</h4>
                        <h5 class="text-md text-white font-normal font-radioCanada mt-2 mb-3">Punjab Collage.</h5>
                        <p class="text-sm text-Grey font-poppins font-normal max-w-[40%]">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed consectetur donec gravida ullamcorper cum id.
                            Sit viverra donec in ornare euismod.</p>
                    </div>

                    <div class="education mt-6 relative">

                    <span class="line-top text-sm absolute top-[2px] -left-[230px] text-Grey inline-flex px-3 bg-opacity-20 bg-lightGreen rounded-full">2008 - 2010</span>
                    <div class="box-3">
                        <h4 class="line-left text-lg text-lightGreen font-semibold font-radioCanada">Higher School Graduation</h4>
                        <h5 class="text-md text-white font-normal font-radioCanada mt-2 mb-3">Punjab Collage.</h5>
                        <p class="text-sm text-Grey font-poppins font-normal max-w-[40%]">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed consectetur donec gravida ullamcorper cum id.
                            Sit viverra donec in ornare euismod.</p>
                    </div>
            
                </div>
            </div>

            
        </div>
    </div>
</section>

    <!-- Slider Sec -->
    
<section class="slider-sec bg-[#162033] py-[128px]">
    <div class="max-w-1240 mx-auto">
    <h2 class="text-[46px] text-center font-bold font-radioCanada text-white mt-[10px]">Client Reviwes<span></h2>
        <div class="owl-carousel owl-one">

        <div class="slide-1 border-[1px] rounded-lg border-[#6BD4A5] py-[50px] px-[30px]">
            <div class="w-[20%]">
                <img class="border-[4px] rounded-full border-[#6BD4A5] mt-[-90px]" src="wp-content/uploads/2022/10/user-avatar-4-1.png" alt="client1">
            </div>
            <h3 class="text-[22px] font-medium font-radioCanada text-white">David Chester</h3>
            <p class="text-[15px] font-poppins text-Grey mt-[10px]">Client - Envato.com</p>
            <div class="review">
                <div class="review-stars mt-[5px]">
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                </div>
                <span class="text-[13px] mt-[5px] text-white font-medium">Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</span>
            </div>
        </div>

        <div class="slide-1 border-[1px] rounded-lg border-[#6BD4A5] py-[50px] px-[30px]">
            <div class="w-[20%]">
                <img class="border-[4px] rounded-full border-[#6BD4A5] mt-[-90px]" src="wp-content/uploads/2022/10/user-avatar-4-1.png" alt="client1">
            </div>
            <h3 class="text-[22px] font-medium font-radioCanada text-white">David Chester</h3>
            <p class="text-[15px] font-poppins text-Grey mt-[5px]">Client - Envato.com</p>
            <div class="review">
                <div class="review-stars mt-[5px]">
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                </div>
                <span class="text-[13px] mt-[5px] text-white font-medium">Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</span>
            </div>
        </div>

        <div class="slide-1 border-[1px] rounded-lg border-[#6BD4A5] py-[50px] px-[30px]">
            <div class="w-[20%]">
                <img class="border-[4px] rounded-full border-[#6BD4A5] mt-[-90px]" src="wp-content/uploads/2022/10/user-avatar-4-1.png" alt="client1">
            </div>
            <h3 class="text-[22px] font-medium font-radioCanada text-white">David Chester</h3>
            <p class="text-[15px] font-poppins text-Grey mt-[5px]">Client - Envato.com</p>
            <div class="review">
                <div class="review-stars mt-[5px]">
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                </div>
                <span class="text-[13px] mt-[5px] text-white font-medium">Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</span>
            </div>
        </div>

        <div class="slide-1 border-[1px] rounded-lg border-[#6BD4A5] py-[50px] px-[30px]">
            <div class="w-[20%]">
                <img class="border-[4px] rounded-full border-[#6BD4A5] mt-[-90px]" src="wp-content/uploads/2022/10/user-avatar-4-1.png" alt="client1">
            </div>
            <h3 class="text-[22px] font-medium font-radioCanada text-white">David Chester</h3>
            <p class="text-[15px] font-poppins text-Grey mt-[5px]">Client - Envato.com</p>
            <div class="review">
                <div class="review-stars mt-[5px]">
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                </div>
                <span class="text-[13px] mt-[5px] text-white font-medium">Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</span>
            </div>
        </div>

        <div class="slide-1 border-[1px] rounded-lg border-[#6BD4A5] py-[50px] px-[30px]">
            <div class="w-[20%]">
                <img class="border-[4px] rounded-full border-[#6BD4A5] mt-[-90px]" src="wp-content/uploads/2022/10/user-avatar-4-1.png" alt="client1">
            </div>
            <h3 class="text-[22px] font-medium font-radioCanada text-white">David Chester</h3>
            <p class="text-[15px] font-poppins text-Grey mt-[5px]">Client - Envato.com</p>
            <div class="review">
                <div class="review-stars mt-[5px]">
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                    <span class="text-Yellow"><i class="fa-solid fa-star"></i></span>
                </div>
                <span class="text-[13px] mt-[5px] text-white font-medium">Working with Bieber is very good experience for me. He’s a good person.
                     If I need developer in future, I’ll definately hire him.</span>
            </div>
        </div>
     
    </div>
    </div>
</section>

<section class="blog-sec bg-darkBlue py-32">
    <div class="container max-w-1240 mx-auto">
        <div class="blog-content">
            <h2 class="text-[46px] text-center font-radioCanada font-bold text-white mt-[10px]">Latest Blog<span></h2>
            <div class="owl-carousel owl-two">

                <div class="relative placeholder:slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-[#6BD4A5]" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
                <div class="slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-lightGreen" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
                <div class="slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-lightGreen" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
                <div class="slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-lightGreen" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
                <div class="slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-lightGreen" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
                <div class="slide-1 bg-[#162033] py-5 px-5 border border-[#2E3748] rounded-lg">
                    <img class="mb-2 h-[210px]" src="wp-content/uploads/2022/10/blog-image-5.jpg" alt="">
                    <a class="text-lg text-white mt-2.5 font-semibold hover:text-lightGreen" href="#">Learn programming easy way</a>
                    <p class="text-1xl text-Grey font-medium hover:text-lightGreen">Trend</p>
                    <div class="c-date absolute top-[20px] right-[25px] py-1 px-4 rounded-[5px] bg-lightGreen">
                        <span class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">May</span>
                        <p class="text-darkBlue -mt-[6px] text-center text-lg font-normal font-poppins">01</p>
                        <h6 class="text-darkBlue -mt-[6px] text-center text-sm font-normal font-poppins">2022</h6>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<section class="bg-darkBlue">
    <div class="max-w-1240 mx-auto pb-32">
      <h2 class="font-radioCanada text-[46px] text-center font-bold text-white mb-10">Contact US</h2>
        <div class="form-content flex justify-between items-center">
            <div class="content-wrapper w-[541px]">
                <div>
                <h3 class="text-white text-[22px] font-radioCanada font-semibold mb-3">Contact Information</h3>
                <p class="text-text-base text-Grey font-poppins font-medium mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. A omnis,
                     iusto harum possimus non praesentium qui facere.</p>
                </div>

                <div class="mt-5 bg-lightBlue py-5 px-5 rounded-lg mr-5 border border-[#6BD4A5] flex">
                    <div class="parent">
                        <span class="inline-flex w-16 h-16 rounded-full bg-babyGreen mr-4 text-lightGreen items-center justify-center" href="#"><i class="fa-solid fa-phone"></i></span>
                    </div>

                    <div>
                        <h6 class="text-lg text-white font-poppins font-medium mb-3">Contact on phone</h6>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                    </div>
                </div>

                <div class="mt-5 bg-lightBlue py-5 px-5 rounded-lg mr-5 border border-[#6BD4A5] flex">
                    <div class="parent">
                        <span class="inline-flex w-16 h-16 rounded-full bg-babyGreen mr-4 text-lightGreen items-center justify-center" href="#"><i class="fa-solid fa-phone"></i></span>
                    </div>

                    <div>
                        <h6 class="text-lg text-white font-poppins font-medium mb-3">Contact on phone</h6>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                    </div>
                </div>

                <div class="mt-5 bg-lightBlue py-5 px-5 rounded-lg mr-5 border border-[#6BD4A5] flex">
                    <div class="parent">
                        <span class="inline-flex w-16 h-16 rounded-full bg-babyGreen mr-4 text-lightGreen items-center justify-center" href="#"><i class="fa-solid fa-phone"></i></span>
                    </div>

                    <div>
                        <h6 class="text-lg text-white font-poppins font-medium mb-3">Contact on phone</h6>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                        <p class="text-lg text-Grey font-poppins font-normal">+012-3456-7891</p>
                    </div>
                </div>
                
            </div>

            <div class="form-wrapper w-[682px] px-7 border border-[#6BD4A5] rounded-lg bg-lightBlue ">
                <?php echo do_shortcode('[wpforms id="25" title="false"]') ?>
            </div>
        </div>
    </div>
</section>










<?php get_footer(); ?>