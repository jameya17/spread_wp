<?php
/**
 * Template Name: HomePage Template
 *
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

define("LANGUAGE", "de");
get_header();
?>        

        <div class="container">
            <div class="content">
                <!--<div class="l-subsection">
                   <div class="l-subsection-h pad-t-0 pad-b-0 pos-rel flex-align-right">
                    <select onchange="changeLanguage(this);" class="notranslate lang-selector" id="gtranslate_selector" aria-label="Website Language Selector"><option value="de" selected>German</option><option value="en">English</option></select><style>#goog-gt-tt{display:none!important;}.goog-te-banner-frame{display:none!important;}.goog-te-menu-value:hover{text-decoration:none!important;}.goog-text-highlight{background-color:transparent!important;box-shadow:none!important;}body{top:0!important;}#google_translate_element2{display:none!important;}</style>
                   </div> 
                </div>
                -->
                <section class="content-box" data-anchor="home" id="home">
                    <div class="l-subsection">
                        <div class="l-subsection-h">
                            <div class="g-cols offset_default">
                                <div class="full-col intro-col intro-wrap">
                                    <div class="intro-img">
                                        <img src="<?php bloginfo('template_directory'); ?>/images/spread-logo-big.png" />
                                    </div>
                                    <div class="intro-content">
                                        <p>Wir haben keine Kunden. Wir haben Partner! Menschen, die uns vertrauen. Menschen, mit denen wir gerne zusammenarbeiten. Für sie sind wir da. Als Team, das eine Sprache spricht. Respekt vor der Aufgabe. Mut zu neuen Wegen. Kraft in der Kommunikation. Wir begleiten unsere Partner professionell und mit Herz durch die Welt der Medien- und Öffentlichkeitsarbeit. Das ist, was uns ausmacht.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content-box"  id="about-us">
                    <div class="l-subsection">
                        <div class="l-subsection-h pad-t-0 pad-b-0 about-us">
                            <div class="g-cols offset_default green-bg flex-align-center">
                                <div class="one-half">
                                    <div class="about-us-img">
                                        <img class="block" src="<?php bloginfo('template_directory'); ?>/images/about-us.png" />
                                    </div>    
                                </div>

                                <div class="one-half">
                                    <div class="sec-info about-us-info">
                                        <h6>ÜBER UNS</h6>
                                        <h2>SPREAD hat Know How. <br/>SPREAD hat Esprit. <br/>SPREAD hat Charakter.</h2>
                                        <p>Wir unterscheiden nicht zwischen kleinen und großen Aufträgen. Unser Wissen stellen wir allen gleichermaßen zur Verfügung. Vom Kleinunternehmen bis zum Weltkonzern. Nationale und internationale Unternehmen unterstützen wir in Deutschland, Österreich und der Schweiz. Interdisziplinär denken. Multidimensional planen. Flexibel umsetzen.</p>
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
                                <h6>Kernleistungen</h6>
                                <h2>Der große Vorteil ist, dass wir die Disziplinen bündeln können und so Kunden alle Leistungen aus einer Hand bekommen.</h2>
                                <p>Wir vernetzen, das bedeutet Synergien und individuellen Service für unsere Partner. Neben klassischer PR stimmen wir alle Instrumente moderner Kommunikation aufeinander ab.</p>
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
                                <span class="popup-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/pr-img.png" title="PR" alt="PR"/>
                                </span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>PR</h2>
                                        <p>Wir stellen uns auf unsere Kunden und Partner ein. Wir zwängen ihnen kein Schema auf. Gute PR funktioniert nicht nach dem Gießkannenprinzip, sondern mit Verstand, Einfühlungsvermögen und bester Vernetzung in die Medienwelt. Zuhören, auf Bedürfnisse eingehen, flexibel agieren, Kontakte nutzen. Die Kommunikationsstrategien erarbeiten wir mit Ihnen schnell und individuell. Wissen, Kreativität und Trendgespür sind die Säulen einer erfolgreichen und bereichernden Partnerschaft. Die Mischung macht den Masterplan.</p>
                                    </div>
                                    <div class="list-block">
                                        <h2>Unsere Kompetenzen</h2>
                                        <ul class="competence-list">
                                            <li>Influencerrelations und Mediaevents </li>
                                            <li>Recherche von Themenumfeldern sowie Lobbying und Networking</li>
                                            <li>Erstellen detaillierter PR-Strategien und Pressetexte</li>
                                            <li>Digitaler Pressroom und Showroom in der Agentur</li>
                                            <li>Nachbearbeitung und Platzierung von Meldungen und Inhalten</li>
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
                                <span class="popup-img">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/marketing-img.png" title="Marketing" alt="Marketing"/>
                                </span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>Marketing</h2>
                                        <p>Markenbildung ist nicht nur auf Medien beschränkt. Wir haben die Kompetenz, Ihren ganzheitlichen Auftritt zu entwickeln oder mit kreativen Ansätzen zu bereichern. Auch weil wir Kleinunternehmen und Weltkonzerne gleichsam betreuen, bietet sich hier eine neue Qualität der Zusammenarbeit. Wir nennen es die Kunst der Vernetzung.</p>
                                    </div>
                                    <div class="list-block">
                                        <h2>Unsere Kompetenzen</h2>
                                        <ul class="competence-list">
                                            <li>Konzeption maßgeschneiderter Marketingstrategien</li>
                                            <li>Begleitung bei Markteinführung und Branding</li>
                                            <li>Erstellung von Drucksorten und Promotionsmaterial</li>
                                            <li>Eventkonzeption-, Organisation und -Betreuung</li>
                                            <li>Kooperationsmanagement und Umsetzung individueller Marketingaktionen</li>
                                            <li>Synergien unter Geschäftspartnern schaffen</li>
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
                            <span class="popup-img">
                                <img src="<?php bloginfo('template_directory'); ?>/images/consulting-img.png" title="Consulting" alt="Consulting"/>  
                            </span>
                            </div>
                            <div class="r-col">
                                <div class="r-col-pad">
                                    <div class="popup-head">
                                        <h2>Consulting</h2>
                                        <p>NeugründerInnen oder Kleinunternehmen ist es oft nicht möglich, auf eine dauerhafte Betreuung durch eine Agentur zurückzugreifen. Trotzdem ist ein Gesamtkonzept für den öffentlichen Auftritt heutzutage unumgänglich. Genau hier kommen wir ins Spiel.</p>
                                        <p>In Gruppen-PR-Workshops oder bei Individualterminen beraten wir Sie darüber, was bei den so wichtigen ersten Schritten alles zu beachten ist. Cornelia Steidl ist auch Mitglied des Beraterpools der Wirtschaftskammer Wien. <a href="https://www.wko.at/service/w/unternehmensfuehrung-finanzierung-foerderung/Gefoerderte_Unternehmensberatung.html?gclid=CjwKCAjw1ZbaBRBUEiwA4VQCIcHkP_vm0BHCEBzU5CHKUnuUwRCxIp04nSOU8x7YeIC_Gzpr9xRZnhoCgXcQAvD_BwE&dclid=CPqL4_CWl9wCFcqlUQodwm4BUw" target="_blank">Hier</a> geht’s zur geförderten Beratung.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                </section>

                <section class="content-box light-blue-bg"  id="our-clients">
                    
                    <div class="l-subsection">
                        <div class="l-subsection-h full-width pad-t-0">
                            <div class="g-cols offset_default bdr-bt">
                                <div class="one-half flex-align-right flex-align-center">
                                    <div class="col-info">
                                        <h6>UNSERE KUNDEN</h6>
                                        <h2>Wir sind eine moderne PR-Agentur, die alle Kunden individuell betreut</h2>
                                        <p>Von mittelständischen Unternehmen über Hochschuleinrichtungen bis hin zu internationalen Konzernen arbeiten wir mit Organisationen zusammen, die danach streben, sich abzuheben und Kontakte zu knüpfen. Ihre Ziele und Zielgruppen sind einzigartig, aber unsere Kunden haben alle eine gemeinsame Zutat: Sie verstehen die Kraft von Forschung, Strategie und Kreativität, wenn es darum geht, authentische Marken und überzeugende Marketingerlebnisse aufzubauen.</p>
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
                            <h6>UNSERE PARTNER</h6>
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
                                       <a href="javascript:void();" target="_blank">
                                        <img src="<?php the_field('client_logo'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                                       </a>
                                    </div>

                            <?php
                                endwhile;
                            ?>
                                
                            </div>
                            <div class="flex-center">
                                <a href="<?php the_permalink(8); ?>" target="_blank" class="text-link">Alle ansehen</a>
                            </div>
                        </div>
                    </div>
                </section>  

                <section class="content-box contact-box" data-anchor="our-team" id="our-team">
                    <div class="l-subsection">
                        <div class="l-subsection-h pad-b-0">
                            <div class="g-cols offset_default">
                                <div class="full-width team-head">
                                    <h6>Unser Team</h6>
                                    <h2>Die Profis in unserem Team sind erfahren, kreativ und serviceorientiert</h2>
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
                                            <a data-fancybox data-src="#<?php echo $popuplink; ?>-popup"   class="text-link" >Weiterlesen</a>
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
                                                <span>
                                                    <img src="<?php the_field('team_pop_up_image'); ?>" title="<?php the_title(); ?>" />
                                                </span>
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