
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-darkBlue py-12" role="contentinfo flex">
	<?php do_action( 'tailpress_footer' ); ?>

	<div class="container mx-auto">
		<p class="text-[15px] text-Grey font-normal text-right">© 2022, All right reserved <span class="">NuclearThemes</span></p>
	</div>

	<div class="footer-content">
		<div class="social-icon text-left ml-4xl">
			<span class="text-white mx-5 border"><i class="fa-brands fa-facebook-f"></i></span>
			<span class="text-white mx-5 border"><i class="fa-brands fa-twitter"></i></span>
			<span class="text-white mx-5 border"><i class="fa-brands fa-github"></i></i></span>
			<span class="text-white mx-5 border"><i class="fa-brands fa-linkedin"></i></i></span>
			<span class="text-white mx-5 border"><i class="fa-brands fa-dribbble"></i></i></span>
        </div>
	</div>
</footer>

</div>



<script>
	jQuery('.owl-carousel').owlCarousel({
		loop:true,
		margin:20,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:2,
				nav:false
			},
			1000:{
				items:3,
				nav:true,
				loop:false
			}
		}
	});
</script>
<?php wp_footer(); ?>

</body>
</html>
