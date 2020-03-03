<nav class="main-nav text-white bg_blk_primary " role="navigation">
	<div class="sec-nav">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/nuglobalogo.png" alt="">
		<?php if ( has_nav_menu( 'bouve_bs_menu_secl' ) ) : 
				
				wp_nav_menu(
					array(
						'theme_location' => 'bouve_bs_menu_secl',
						'menu_id'		 => 'sec-menu-l',
						'menu_class'     => 'sm sm-simple bv-undrbar',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);

			endif; ?>



		<?php if ( has_nav_menu( 'bouve_bs_menu_secr' ) ) : 
					
					wp_nav_menu(
						array(
							'theme_location' => 'bouve_bs_menu_secr',
							'menu_id'		 => 'sec-menu-r',
							'menu_class'     => 'sm sm-simple bv-undrbar',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);

				endif; ?>
		
				
	</div> <!-- end .sec-nav -->
	<div class="prime-nav">	
		  <!-- Mobile menu toggle button (hamburger/x icon) -->
		  <input id="main-menu-state" type="checkbox" />
		  <label class="main-menu-btn" for="main-menu-state" checked>
		    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
		  </label>

		  	<div class="nav-brand">
		  		
				  	<?php if ( has_custom_logo() ) : ?>
						<div class="bv-site-logo"><?php the_custom_logo(); ?></div>
					<?php else : ?>
								<?php $blog_info = get_bloginfo( 'name' ); ?>
								<?php if ( ! empty( $blog_info ) ) : ?>
									<?php if ( is_front_page() && is_home() ) : ?>
										<div class="default-logo">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/nulogo.svg" alt="">
											<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
										</div>
									<?php else : ?>
										<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
									<?php endif; ?>
								<?php endif; ?>

					<?php endif; ?>
				
			</div> <!-- end .nav-brand -->
		<?php if ( has_nav_menu( 'bouve_bs_menu' ) ) : 
					
					wp_nav_menu(
						array(
							'theme_location' => 'bouve_bs_menu',
							'menu_id'		 => 'main-menu',
							'menu_class'     => 'sm sm-simple',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);

				endif; ?>
		<button class="bv-search-box">
				<span><i class="fas fa-search"></i></span>
		</button>
	</div> <!-- end .prime-nav -->

</nav>