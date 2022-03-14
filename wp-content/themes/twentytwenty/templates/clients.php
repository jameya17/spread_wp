<?php
/**
 * Template Name: Clients Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();

?>        

        <div class="container">
            <div class="page-banner">
                <div class="l-subsection">
                    <div class="l-subsection-h">
                        <h1>Our Clients</h1>
                    </div>    
                </div>      
            </div>
            <section class="l-subsection">
                <div class="l-subsection-h">
                    <div class="g-cols offset_default client-list" >
                        <?php

                            $args = array(
                                'post_type' => 'clients',
                                'post_status' => 'publish',
                                'meta_key' => 'client_order',
                                'orderby' => 'meta_value_num',
                                'order' => 'ASC',
                                'posts_per_page' => -1,
                            );
                            $the_query = new WP_Query( $args );

                            while ( $the_query->have_posts() ) : $the_query->the_post();
                        ?>
                            <div class="one-fifth client-list-item">
                               <a href="<?php the_field('client_website'); ?>" target="_blank">
                                <img src="<?php the_field('client_logo'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                               </a>
                            </div>
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </section>
            
        </div>

<?php

get_footer();   

?>