
</main>

<?php do_action( 'tailpress_content_end' ); ?>

</div>

<?php do_action( 'tailpress_content_after' ); ?>

<footer id="colophon" class="site-footer bg-darkBlue py-12" role="contentinfo">
	<?php do_action( 'tailpress_footer' ); ?>
	<div class="container mx-auto">
		<div class="nevbar flex">
			
			<div class="box-1">
				<div class="social-icon text-left ml-4xl">
					<span class="h-[40px] w-[40px] text-white mr-2  inline-flex items-center justify-center border border-[#282F40] rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-facebook-f"></i></span>
					<span class="h-[40px] w-[40px] text-white mr-2  inline-flex items-center justify-center border border-[#282F40] rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-twitter"></i></span>
					<span class="h-[40px] w-[40px] text-white mr-2  inline-flex items-center justify-center border border-[#282F40] rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-github"></i></i></span>
					<span class="h-[40px] w-[40px] text-white mr-2  inline-flex items-center justify-center border border-[#282F40] rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-linkedin"></i></i></span>
					<span class="h-[40px] w-[40px] text-white mr    inline-flex items-center justify-center border border-[#282F40] rounded-lg hover:bg-lightGreen"><i class="fa-brands fa-dribbble"></i></i></span>
				</div>
			</div>

			<div class="box-2">
				<p class="text-[15px] text-Grey font-normal text-right">© 2022, All right reserved <span class="text-">NuclearThemes</span></p>
			</div>

		</div>
	</div>
</footer>

</div>



<script>
	jQuery('.owl-one').owlCarousel({
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

	jQuery('.owl-two').owlCarousel({
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
