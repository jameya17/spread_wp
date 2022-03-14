<?php
/**
 * Template Name: HomePage Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();

?>        

        <div class="container">
            <div class="content">
                <section class="content-box" data-anchor="home" id="home">
                    <div class="l-subsection">
                        <div class="l-subsection-h">
                            <div class="g-cols offset_default">
                                <div class="full-col intro-col intro-wrap">
                                    <div class="intro-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/spread-logo-big.png" />
                                    </div>
                                    <div class="intro-content">
                                        <p>We don't have customers. We have partners! People who trust us. People whom we like to cooperate with. We are here for them. As a team that speaks one language. Respect for the task. Courage to break new ground. Power in communication. With heart and expertise, we guide our partners through the world of media and public relations. That's what identifies us.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content-box"  id="about-us">
                    <div class="l-subsection">
                        <div class="l-subsection-h pad-t-0 pad-b-0 about-us">
                            <div class="g-cols offset_default green-bg">
                                <div class="one-half">
                                    <div class="about-us-img">
                                        <img class="block" src="<?php bloginfo('template_directory'); ?>/images/about-us.png" />
                                    </div>    
                                </div>

                                <div class="one-half">
                                    <div class="sec-info about-us-info">
                                        <h6>About Us</h6>
                                        <h2>SPREAD has know-how. <br/>SPREAD has esprit. <br/>SPREAD has character.</h2>
                                        <p>To us, it makes no difference whether an order is small or large. We share our knowledge equally with all. Whether a small business or a global company. We support national and international enterprises in Germany, Austria and Switzerland. Interdisciplinary thinking. Multidimensional action. Flexible implementation.</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>                

                <section class="content-box"  id="core-services">
                    <div class="l-subsection">
                        <div class="l-subsection-h">
                            <div class="intro-col mar-b-40">
                                <h6>Core Services</h6>
                                <h2>We can bundle disciplines to offer our customers all services from a single source</h2>
                                <p>We network to generate synergies and individual services for our partners. Apart from classical PR, we bring all instruments of modern communication in tune with each other like Marketing, Blogger Relations, Social Media Management, Consulting and Event Management</p>
                            </div>
                            <div class="g-cols offset_none services-list">
                               
                                <div class="one-third">
                                    <a data-fancybox data-src="#PR" class="services-img" >
                                        <img src="<?php bloginfo('template_directory'); ?>/images/services/pr.png" title="PR" alt="PR" />
                                        <h3>PR</h3>
                                    </a>
                                </div>

                                <div class="one-third">
                                    <a data-fancybox data-src="#marketing" class="services-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/services/marketing.png" title="Marketing" alt="Marketing" />
                                        <h3>Marketing</h3>
                                    </a>
                                </div>
                                
                                <div class="one-third">
                                    <a data-fancybox data-src="#consulting" class="services-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/services/consulting.png" title="Consulting" alt="Consulting" />
                                        <h3>Consulting</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Popup For PR-->
                    <section class="l-subsection popup" id="PR" style="display: none;">
                        <div class="popup-body">
                            <div class="l-col">
                                <span><img src="<?php bloginfo('template_directory'); ?>/images/pr-img.png" alt="PR" title="PR"></span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>PR</h2>
                                        <p>We tune in to our customers and partners. We do not impose a pattern on them. Good PR does not work according to a shotgun approach but with brains, sensitivity and best networking in the media world. Listening, addressing needs, acting flexibly, using contacts. We work out the communication strategies together with you, quickly and individually. Knowledge, creativity and intuition for trends are the pillars of successful and rewarding partnership. The mixture makes the master plan.</p>
                                    </div>
                                    <div class="list-block">
                                        <h2>Our competences</h2>
                                        <ul class="competence-list">
                                            <li>Influencer relations and media events </li>
                                            <li>Investigation of topic areas and lobbying and networking</li>
                                            <li>Drawing up of detailed PR strategies and press releases</li>
                                            <li>Digital pressroom and showroom at the agency</li>
                                            <li>Post-processing and placement of messages and contents</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Popup For Marketing-->
                    <section class="l-subsection popup" id="marketing" style="display: none;">
                        <div class="popup-body">
                            <div class="l-col">
                                <span><img src="<?php bloginfo('template_directory'); ?>/images/marketing-img.png" alt="Marketing" title="Marketing"></span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>Marketing</h2>
                                        <p>Branding is not limited to the media. We have the competence to develop your holistic brand identity or to enrich it with creative approaches. A new quality of cooperation also results from the fact that we serve small businesses and global companies alike. We call this the art of networking.</p>
                                    </div>
                                    <div class="list-block">
                                        <h2>Our competences</h2>
                                        <ul class="competence-list">
                                            <li>Conceptual design of tailor-made marketing strategies</li>
                                            <li>Support during market launch and branding</li>
                                            <li>Preparation of forms and promotion materials</li>
                                            <li>Concepts for and organisation and support of events</li>
                                            <li>Cooperation management and implementation of individual marketing campaigns</li>
                                            <li>Generation of synergies between business partners</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                     <!-- Popup For Consulting-->
                     <section class="l-subsection popup" id="consulting" style="display: none;">
                        <div class="popup-body">
                            <div class="l-col">
                                <span><img src="<?php bloginfo('template_directory'); ?>/images/consulting-img.png" alt="Consulting" title="Consulting"></span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>Consulting</h2>
                                        <p>Start-ups and small businesses can often not rely on the continuous assistance of an agency. Nevertheless, an overall concept is absolutely essential to your public presence today. This is exactly where we come into play.</p>
                                        <p>In group PR workshops or individual meetings, we explain all things that have to be considered for making the first steps that are so important. 
                                            Cornelia Steidl also is a member of the Vienna Economic Chamber's pool of consultants. Click here for the sponsored consulting.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </section>

                <section class="content-box light-blue-bg"  id="our-clients">
                    
                    <div class="l-subsection">
                        <div class="l-subsection-h full-width pad-t-0">
                            <div class="g-cols offset_default">
                                <div class="one-half flex-align-right flex-align-center">
                                    <div class="col-info">
                                        <h6>Our Clients</h6>
                                        <h2>We are a modern PR agency that provides individual services to all customers</h2>
                                        <p>From mid-sized businesses to higher education institutions to international corporations, we work with organizations striving to stand out and connect. Their goals and audiences are unique, but our clients all share one common ingredient: they understand the power of research, strategy, and creative when it comes to building authentic brands and compelling marketing experiences.</p>
                                        <a href="<?php the_permalink(8); ?>" class="text-link">View All</a>
                                    </div>    
                                </div>

                                <div class="one-half">
                                    <div class="col-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/our-clients.png" title="Our Clients" alt="Our Clients" />
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-subsection partners-sec">
                        <div class="l-subsection-h pad-t-0">
                            <h6>Our Partners</h6>
                            <div id="clientSlider" class="client-list owl-carousel owl-theme">
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
                                    <div class="client-item">
                                       <a href="javascript:void();">
                                        <img src="<?php the_field('client_logo'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                       </a>
                                    </div>

                            <?php
                                endwhile;
                            ?>
                                
                            </div>
                        </div>
                    </div>
                </section>  

                <section class="content-box contact-box" data-anchor="our-team" id="our-team">
                    <div class="l-subsection">
                        <div class="l-subsection-h pad-b-0">
                            <div class="g-cols offset_default">
                                <div class="full-width team-head">
                                    <h6>Our Team</h6>
                                    <h2>The professionals in our team are experienced, creative and service oriented</h2>
                                </div>
                            </div>
                        </div>
                        
                        <div class="l-subsection-h  pad-t-0 full-width teams-slider"  >
                            <div class="g-cols offset_default">
                                
                                <div class="one-half team-wrapper">
                                    <div  class="team-slider owl-1 owl-carousel owl-theme" id="owl-1">
                                        <?php

                                            $args = array(
                                                'post_type' => 'team',
                                                'post_status' => 'publish',
                                                'meta_key' => 'team_order',
                                                'orderby' => 'meta_value_num',
                                                'order' => 'ASC',
                                                'posts_per_page' => -1,
                                            );
                                            $the_query = new WP_Query( $args );

                                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                        ?>
                                            <div class="team-item"><img src="<?php the_field('team_image'); ?>" /></div>

                                        <?php
                                            endwhile;
                                        ?>
                                    </div>
                                </div>
                                <div  class="one-half flex-align-center">
                                    <div  class="team-info owl-2 owl-carousel owl-theme" id="owl-2">
                                        <?php
                                            while ( $the_query->have_posts() ) : $the_query->the_post();
                                                $popuplink = strtolower(get_the_title());
                                                $popuplink = str_replace(" ", '-', $popuplink);
                                        ?>

                                        <div class="col-info">
                                            <h2><?php the_title(); ?></h2>
                                            <?php the_field('team_short_description'); ?>
                                            <a data-fancybox data-src="#<?php echo $popuplink; ?>-popup"   class="text-link" >Read More</a>
                                        </div>    

                                        <?php
                                            endwhile;
                                        ?>
                                    </div>
                                </div>

                                 <?php
                                        while ( $the_query->have_posts() ) : $the_query->the_post();
                                            $popuplink = strtolower(get_the_title());
                                            $popuplink = str_replace(" ", '-', $popuplink);
                                ?>

                                    <section class="l-subsection popup" id="<?php echo $popuplink; ?>-popup" style="display: none;"  >
                                        <div class="popup-body">
                                            <div class="l-col">
                                                <span><img src="<?php the_field('team_pop_up_image'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></span>
                                            </div>
                                            <div class="r-col">
                                                <div class="r-col-pad">
                                                    <div class="popup-head">
                                                        <h2><?php the_title(); ?></h2>
                                                        <?php the_field('team_long_description'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                 <?php
                                    endwhile;
                                ?>

                            </div>
                            <div class="owl-controls">
                                    <div id="customNav" class="owl-nav"></div>
                            </div>
                        </div>
                    </div>
                    
                </section>

                <section class="content-box grey-bg" data-anchor="howitworks" id="howitworks" style="display: none;">
                    <div class="l-subsection">
                        <div class="l-subsection-h full-width pad-b-0">
                            <div class="g-cols offset_default">
                                <div class="one-half">
                                 </div>
                                 <div class="one-half flex-align-center">
                                    <div class="sec-info">
                                        <div class="sec-info-content g-cols offset_default">
                                            <div class="one-half flex-valign-center flex-direction-column">
                                                <h2>GREENWEEKS <br/>Unser Ziel</h2>
                                                <p>Ziel der GREENWEEKS ist es, uns allen im Alltag gesammelt Möglichkeiten aufzuzeigen, wie jeder von uns mit kleinen Schritten und</p>
                                                <p>Veränderungen einen Beitrag für ein nachhaltigeres Leben leisten kann.</p>
                                            </div>

                                            <div class="one-half">
                                                <div class="how-greenweeks-works-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/how-greenweeks-work.png" alt="GREENWEEKS Unser Ziel" title="GREENWEEKS Unser Ziel" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>  
                
                <section class="content-box grey-bg" data-anchor="partner" id="partner" style="display: none;">
                    <div class="l-subsection">
                        <div class="l-subsection-h full-width">
                            <div class="g-cols offset_default">
                                <div class="one-third flex-align-center">
                                    <div class="sec-info">
                                        <h2>GREENWEEKS <br/>Die Partner</h2>
                                        <p>
                                            Alleine ist es ein Tropfen auf dem heißen Stein, gemeinsam können wir etwas bewegen!
                                        </p>
                                        <!-- <div class="slider-btn">
                                            <a herf="javascript:void();" class="prev">prev</a>
                                            <a herf="javascript:void();" class="next">next</a>
                                        </div> -->
                                    </div>   
                                </div>
                                <div class="two-thirds">
                                    <div id="partnerSlider" class="partner-slider owl-carousel owl-theme">
                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/kopek.png" alt="kopek" title="kopek"/>
                                                </div>
                                                <div class="slide-name">Kopek</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/stivali.png" alt="stivali" title="stivali" />
                                                </div>
                                                <div class="slide-name">Stivali</div>
                                            </a>
                                        </div>
                                        
                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/khomo-gear.png" alt="khomo gear" title="khomo gear" />
                                                </div>
                                                <div class="slide-name">Khomo Gear</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/weizzer-toys.png" alt="weizzer toys" title="weizzer toys" />
                                                </div>
                                                <div class="slide-name">Weizzer Toys</div>
                                            </a>
                                        </div>

                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/leeki.png" alt="leeki" title="leeki" />
                                                </div>
                                                <div class="slide-name">Leeki</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/lithe-and-Limber.png" alt="lithe & limber" title="lithe & limber" />
                                                </div>
                                                <div class="slide-name">Lithe & Limber</div>
                                            </a>
                                        </div>

                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/kopek.png" alt="kopek" title="kopek"/>
                                                </div>
                                                <div class="slide-name">Kopek</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/stivali.png" alt="stivali" title="stivali" />
                                                </div>
                                                <div class="slide-name">Stivali</div>
                                            </a>
                                        </div>
                                        
                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/khomo-gear.png" alt="khomo gear" title="khomo gear" />
                                                </div>
                                                <div class="slide-name">Khomo Gear</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/weizzer-toys.png" alt="weizzer toys" title="weizzer toys" />
                                                </div>
                                                <div class="slide-name">Weizzer Toys</div>
                                            </a>
                                        </div>

                                        <div class="slide">
                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/leeki.png" alt="leeki" title="leeki" />
                                                </div>
                                                <div class="slide-name">Leeki</div>
                                            </a>

                                            <a href="" class="slide-item">
                                                <div class="slide-img">
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/temp/lithe-and-Limber.png" alt="lithe & limber" title="lithe & limber" />
                                                </div>
                                                <div class="slide-name">Lithe & Limber</div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="l-subsection white-bg">
                        <div class="l-subsection-h pad-t-0 pad-b-0 full-width">
                            <div class="gallery-box iso-call col4">
        
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/1.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/2.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/3.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/4.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/5.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/6.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/7.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/8.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/9.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/10.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/11.jpg" alt="">
                                    </div>
                                </div>
                
                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/12.jpg" alt="">
                                    </div>
                                </div>

                                <div class="gallery-post">
                                    <div class="inner-gallery-post">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/gallery/13.jpg" alt="">
                                    </div>
                                </div>
                
                            </div>
                        </div>
                    </div>   
                </section> 
                
                
                <section class="content-box" data-anchor="team" id="team" style="display: none;">
                        <div class="l-subsection">
                            <div class="l-subsection-h pad-b-0 full-width">
                                <div class="wrap">
                                    <div class="g-cols offset_default">
                                        <div class="one-third">
                                            <div class="sec-info">
                                                <h2>Team und Kontakt</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utlaborum.</p>
                                            </div>
                                        </div>
                                        <div class="two-thirds">
                                            <div class="our-team-list">
                                                <div class="our-team-item">
                                                    <div class="team-img">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/team/cornelia-steidl.jpg" />
                                                    </div>
                                                    <div class="team-info">
                                                        <h3>Cornelia Steidl</h3>
                                                        <a href="tel:+436641665020">+43 664 166 50 20</a>
                                                        <a href="mailto:greenweeks@spread-vienna.com">greenweeks@spread-vienna.com</a>
                                                    </div>
                                                </div>
    
                                                <div class="our-team-item">
                                                    <div class="team-img">
                                                        <img src="<?php bloginfo('template_directory'); ?>/images/team/katharina-dulberg.jpg" />
                                                    </div>
                                                    <div class="team-info">
                                                        <h3>Katharina Dulberg</h3>
                                                        <a href="tel:+436641665020">+43 664 166 50 20</a>
                                                        <a href="mailto:greenweeks@spread-vienna.com">greenweeks@spread-vienna.com</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                
                                
                                <div class="pr-cta">
                                    <div class="wrap">
                                        <h3>
                                            Für aktuelle Pressemitteilungen
                                            <span>& begleitende Bilder für alle unsere Partner</span>
                                        </h3>
                                        <a class="btn white-btn" href="">Gehe zum Presseraum</a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                </section>    
                
            </div>
        </div>

<?php

get_footer();   

?>