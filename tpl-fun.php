<?php
/*
	Template Name: For Fun
*/ 
get_header(); ?>
    
    <section id='fun' class="page">

        <!-- Scrollable content -->
        <div class="inner scrollpane"> 
            
            <!-- Title -->
            <h1><?php the_field('content'); ?></h1> 

            <div class="menu tOpacity">
	            <span class="llp-link selected">Lazy Line Painter</span> <span class="fonts-link">Fonts</span> <span class="motion-link">Motion</span>  <!--     <span class="box2d-link">Box2D</span>   --><!-- / <span class="fonts">ARDUINO</span> -->
			</div>

	 		<section id='lazylinepainter' class="page tOpacity demo">
	  			<?php  

	  				$lazylineId = getIdFromSlug('fun/lazyline');

					if( get_field('lazylinepaintings' , $lazylineId ) ): ?>
					 
						<div class="slideshow"> 
							<?php while( has_sub_field('lazylinepaintings' , $lazylineId ) ): ?>
						 
								<div class="slide">
									<div class="inner <?php the_sub_field( 'title'  , $lazylineId ); ?>">

										<?php if( get_sub_field( 'lazyline' , $lazylineId ) ): ?>
											  
											<?php while( has_sub_field('lazyline' , $lazylineId )): ?>
										  
												<div id="<?php the_sub_field('key' , $lazylineId ); ?>"></div>

											<?php endwhile; ?> 
									 
										<?php endif; ?>
									</div>
								</div>

							<?php endwhile; ?>
						</div>
					 
					<?php 
					endif; 
				?>
			</section>

        </div>
    </section>
<?php get_footer(); ?>.1-2.7 0.1-3.9 1.3 -1.1 1.1-1.2 2-1.3 3.9 -0.1 2.4-0.3 5.8-3.6 9.1 -3.3 3.3-6.6 3.5-9.1 3.6 -1.9 0.1-2.7 0.1-3.9 1.3 -1.1 1.2-1.2 2-1.3 3.9 -0.1 2.4-0.3 5.8-3.6 9.1C10.5 121.8 9.5 122.1 8.5 122.1z"/></svg>
	    	</div>
	    	<div class="left arrow">
	    		<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="70" height="126" viewBox="0" enable-background="new 0 0 70 126" xml:space="preserve"><path fill="#010101" d="M62.7 2.7c1 0 2 0.4 2.8 1.2 1.6 1.6 1.6 4.1 0 5.7 -1.2 1.2-1.2 2-1.3 3.9 -0.1 2.4-0.3 5.8-3.6 9.1s-6.6 3.5-9.1 3.6c-1.9 0.1-2.7 0.1-3.9 1.3 -1.1 1.1-1.2 2-1.3 3.9 -0.1 2.4-0.3 5.8-3.6 9.1 -3.3 3.3-6.6 3.5-9.1 3.6 -1.9 0.1-2.7 0.1-3.9 1.3 -1.1 1.1-1.2 2-1.3 3.9 -0.1 2.4-0.3 5.8-3.6 9.1 -2.9 2.9-6.9 3.4-9.9 3.8 -0.7 0.1-1.6 0.2-2.2 0.3 0.7 0.1 1.6 0.2 2.3 0.3 2.9 0.4 6.9 0.8 9.9 3.8 3.3 3.3 3.5 6.7 3.6 9.1 0.1 1.9 0.2 2.7 1.3 3.9 1.2 1.2 2 1.2 3.9 1.3 2.4 0.1 5.8 0.3 9.1 3.6 3.3 3.3 3.5 6.7 3.6 9.1 0.1 1.9 0.2 2.7 1.3 3.9 1.2 1.2 2 1.2 3.9 1.3 2.4 0.1 5.8 0.3 9.1 3.6 3.3 3.3 3.5 6.7 3.6 9.1 0.1 1.9 0.2 2.7 1.3 3.9 1.6 1.6 1.6 4.1 0 5.7 -1.6 1.6-4.1 1.6-5.7 0 -3.3-3.3-3.5-6.7-3.6-9.1 -0.1-1.9-0.2-2.7-1.3-3.9 -1.2-1.2-2-1.2-3.9-1.3 -2.4-0.1-5.8-0.3-9.1-3.6 -3.3-3.3-3.5-6.7-3.6-9.1 -0.1-1.9-0.2-2.7-1.3-3.9 -1.2-1.2-2-1.2-3.9-1.3 -2.4-0.1-5.8-0.3-9.1-3.6 -3.3-3.3-3.5-6.7-3.6-9.1 -0.1-1.9-0.2-2.7-1.3-3.9 -1-1-3.1-1.3-5.2-1.5 -3.2-0.4-9.8-1.2-9.8-8.3 0-7.1 6.6-7.9 9.8-8.3 2.1-0.2 4.2-0.5 5.2-1.5 1.1-1.1 1.2-2 1.3-3.9 0.1-2.4 0.3-5.8 3.6-9.1 3.3-3.3 6.7-3.5 9.1-3.6 1.9-0.1 2.7-0.1 3.9-1.3 1.1-1.1 1.2-2 1.3-3.9 0.1-2.4 0.3-5.8 3.6-9.1 3.3-3.3 6.7-3.5 9.1-3.6 1.9-0.1 2.7-0.1 3.9-1.3 1.2-1.1 1.2-2 1.3-3.9 0.1-2.4 0.3-5.8 3.6-9.1C60.6 3.1 61.6 2.7 62.7 2.7z"/></svg>
	        </div>

            
            <!-- Title -->
            <h1><?php the_field('content'); ?></h1> 

            <div class="menu tOpacity">
	            <span class="llp-link">Lazy Line Painter</span> <span class="fonts-link">Fonts</span> <!--     <span class="box2d-link">Box2D</span>   <span class="motion-link">Motion</span>  --><!-- / <span class="fonts">ARDUINO</span> -->
			</div>

			<div class="lazylinepainter tOpacity demo"> 
				<div class="slideshow">
					<div class="slide">
						<div class="inner guy">
							<div id="ll-guy"></div>
							<div id="ll-chair"></div>
						</div>
					</div>
					<div class="slide ">
						<div class="inner face">
							<div id="ll-face"></div>
						</div>
					</div>
					<div class="slide ">
						<div class="inner shape">
							<div id="ll-vertical-grid"></div>
							<div id="ll-horizontal-grid"></div>
							<div id="ll-shape"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="fonts tOpacity demo"> 
				<div class="slideshow"> </div>
			</div>
 
			<div class="box2d tOpacity demo"></div>
                  
        </div>  
 
    </section>
<?php get_footer(); ?>