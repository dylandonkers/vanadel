<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>


    <?php
    
    
    $wp_query = new WP_Query(); 
    $wp_query->query('showposts=999' . '&paged='.$paged);
    $blogs = '';
    while ($wp_query->have_posts()) {
    	$wp_query->the_post();
    	$blogs .= '<div class="section-blog-link">
         			<a href="'.get_permalink().'" ><b> > </b>'.get_the_title().'</a>
    			   </div>';
    }; 

    wp_reset_query();

    
    ?>


	<div class="u-gridContainer">
		<div class="content-wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<section class="gridRow">
					<article class="Content Content--home u-gridCol8" id="post-<?php the_ID(); ?>">
						<hgroup class="h2-title">
							<h2><?php the_title(); ?></h2>
							<hr class="underline">
						</hgroup>
						<main>
							<?php the_content();
							 $image1 = get_field('image1'); 
							 $image2 = get_field('image2'); 
							 $image3 = get_field('image3'); 
							 $image4 = get_field('image4'); 

							 ?>
							<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
						</main>
					</article>
					<aside class="u-gridCol4">
						<section class="aside-img">
							<?php if( !empty($image1) ): ?>
								<img  class="imgstyle" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>"/>
							<?php endif; ?>
						</section>

						<section class="aside-ul2">
									<div class="content-wrapper"> 			
										<h5>Actueel nieuws</h5>
										<article class="blogspost">
											<?php echo $blogs; ?>
											<a href="/actueel-nieuws" class="leesmeer-blog2">Meer > </a>
										</article>

								   	</div>
						</section>
						<section>
							<a href="/contact">
								<button class="aside-button">
									<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/man.png" >
									<p>Maak een kennismakingsafspraak</p>
								</button>	
							</a>
				
							<a href="/contact">
								<button class="aside-button">
									<img  class="button-image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/mail.png" >
									<p>Vraag een offerte aan</p>
								</button>	
							</a>
						</section>
					</aside>
				</section>

				<section >
					<article class="">
						<hgroup class="h2-title u-gridCol12">
							<h2>Diensten</h2>
							<button class="hoog-knop totop"><img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/v.svg"/></button>
							<hr class="underline">
						</hgroup>
						<section class="gridRow">
							<article class="u-gridCol4">
								<img  class="imgstyle" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>"/>
								<section class="driecolumen-style">
									<h5>Administratie</h5>
									<p>Het fundament van een succesvolle 
										onderneming is een overzichtelijke 
										en solide administratie. Wij zorgen 
										ervoor dat u inzicht krijgt en houdt 
										over de geldstromen binnen uw 
										bedrijf.
									</p>
									<a href="/administratie/" class="driecolumn-link">Lees verder ></a>
								</section>
							</article>

							<article class="u-gridCol4">
								<img  class="imgstyle" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>"/>
								<section class="driecolumen-style">
									<h5>Belastingen</h5>
									<p>Wij verzorgen alle soorten belastingaangiften, zoals omzetbelasting, inkomstenbelasting, vennootschapsbelasting, loonheffing en dividendbelasting. Ons uitgangspunt hierbij is om dit zo voordelig mogelijk voor u als cliënt uit te voeren.</p>
									<a href="/belastingaangiften-en-advies/" class="driecolumn-link">Lees verder ></a>
								</section>
							</article>

							<article class="u-gridCol4 no-margin-right">
								<img  class="imgstyle" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>"/>
								<section class="driecolumen-style">
									<h5>Advies</h5>
									<p>Wij bieden u ruim 20 jaar ervaring op het gebied van financiële en fiscale activiteiten in uiteenlopende branches en sectoren binnen het bedrijfsleven. Vanuit onze uitgebreide praktische werkervaring kunnen wij u goed adviseren op diverse financiële gebieden.</p>
									<a href="/financiele-advisering/" class="driecolumn-link">Lees verder ></a>
								</section>
							</article>
						<section>  

					</article>
				</section>

			<?php endwhile; endif; ?> 
		</div>   
	</div> 
	

<?php get_footer(); ?> 
