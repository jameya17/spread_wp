<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

wp_reset_postdata();
$title = get_the_title();

?>

		<?php
			if($title == "Home"){
		?>
			<footer class="footer" data-anchor="contact" id="contact" >
	            <div class="footer-top">
	                <div class="wrap">
	                    <span class="contact-head">OUR CONTACT</span>
	                    <div class="footer-box-list">
	                        <div class="footer-box">
	                            <!-- <div class="footer-logo">
	                                <img src="images/greenweeks-footer-logo.png"  alt="Greenweeks Logo" title="Greenweeks Logo" />
	                            </div> -->
	                          
	                            <div class="contact-block">
	                                <div class="contact-info">
	                                    <h2>Please contact us</h2>
	                                    <div class="social-media-block">
	                                        <a href="https://www.instagram.com/spreadpr/"> <img src="<?php bloginfo('template_directory'); ?>/images/social-media/insta-icon.svg" alt="instagram-icon" title="instagram"></a>
	                                        <a href="https://twitter.com/spreadpr"> <img src="<?php bloginfo('template_directory'); ?>/images/social-media/twitter-icon.svg" alt="twitter-icon" title="twitter"></a>
	                                        <a href="https://www.facebook.com/SPREADPR/"> <img src="<?php bloginfo('template_directory'); ?>/images/social-media/facebook-icon.svg" alt="facebook-icom" title="facebook"></a>
	                                        <a href="https://www.linkedin.com/company/spread-pr-marketing-sales/"> <img src="<?php bloginfo('template_directory'); ?>/images/social-media/linkedin.svg" alt="linkedin-icon" title="linkedin"></a>
											<a href="https://www.tiktok.com/@spreadpr"> <img src="<?php bloginfo('template_directory'); ?>/images/social-media/tik-tok.png" alt="tiktok-icon" title="Tik Tok"></a>
	                                    </div>
	                                    <address>
	                                        Wollzeile 20/8 A-1010 Wien, Österreich <a href="mailto:info@spread-vienna.com">info@spread-vienna.com</a> <a href="tel:+43 1 920 9274">+43 1 920 9274</a>
	                                    </address>
	                                </div>
	                            </div>
	                            <div class="contact-info">
	                                <!-- <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.9046972379347!2d16.373924415478704!3d48.208451579229106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079f96e11473%3A0x26625cff11e6946c!2sWollzeile%2C%201010%20Wien%2C%20Austria!5e0!3m2!1sen!2sin!4v1644660156199!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
	                                <!-- <div id="map"></div> -->
	                                <!--<img src="<?php bloginfo('template_directory'); ?>/images/map-image.png" alt="">-->
	                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.915444337719!2d16.3741835515846!3d48.208244579127225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d079fbe5c5589%3A0x52ca60c6736e0005!2sWollzeile%2020%2F8%2C%201010%20Wien%2C%20Austria!5e0!3m2!1sen!2sin!4v1646314500823!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	                            </div>
	                            <!-- <address class="address">
	                                Katharina Dulberg</br>
	                                SPREAD PR</br>
	                                Wollzeile 20/8</br>
	                                A - 1010 Wien
	                            </address> -->
	                          
	                            <!-- <div>
	                                <div class="cont-row email">
	                                    <a href="mailto:greenweeks@spread-vienna.com">greenweeks@spread-vienna.com</a>
	                                </div>
	                                <div class="cont-row phone">
	                                    <a href="tel:+43 664 166 50 20">+43 664 166 50 20</a>
	                                </div>
	                            </div> -->
	                            
	                        </div>

	                        <div class="footer-box">
	                            <div class="g-cols offset_default links-col-list">
	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Cornelia Steidl</h2>
	                                    <div class="person-contact">
	                                    	<?php
	                                    	  $text = "Inhaber & Managing Director";
	                                    	  if(LANGUAGE == "en"){
	                                    	  	$text = "Owner & Managing Director";
	                                    	  }

	                                    	?>
	                                        <span><?php echo $text; ?></span>
	                                        <a href="mailto:cs@spread-vienna.com">cs@spread-vienna.com</a>
	                                        <a href="tel:+43 660 4970931">+43 660 4970931</a>
	                                    </div>
	                                </div>

	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Kristina Kirova</h2>
	                                    <div class="person-contact">
	                                    	<?php
	                                    	  $text = "Agenturleitung";
	                                    	  if(LANGUAGE == "en"){
	                                    	  	$text = "Head of Agency";
	                                    	  }

	                                    	?>
	                                        <span><?php echo $text; ?></span>
	                                        <span>Senior Consultant & Head of Media & Blogger Relations</span>
	                                        <a href="mailto:kk@spread-vienna.com ">kk@spread-vienna.com</a>
	                                        <a href="tel:++43 660 8648118">+43 660 8648118</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="g-cols offset_default links-col-list">
	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Bianca Wietzke</h2>
	                                    <div class="person-contact">
	                                    	<?php
	                                    	  $text = "Senior Consultant & Projektmanagement";
	                                    	  if(LANGUAGE == "en"){
	                                    	  	$text = "Senior Consultant & Project Management";
	                                    	  }

	                                    	?>
	                                        <span><?php echo $text; ?></span>
	                                        <a href="mailto:bw@spread-vienna.com ">bw@spread-vienna.com</a>
	                                        <a href="tel:+43 676 770 42 30">+43 676 770 42 30</a>
	                                    </div>
	                                </div>

	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Annika Hahn</h2>
	                                    <div class="person-contact">
	                                        <span>Senior Consultant & Head of Client Relations </span>
	                                        <a href="mailto:ah@spread-vienna.com ">ah@spread-vienna.com </a>
	                                        <a href="tel:+43 664 500 93 10">+43 664 500 93 10</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="g-cols offset_default links-col-list">
	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Susanne Sarbo</h2>
	                                    <div class="person-contact">
	                                        <span>Accounting & Reporting</span>
	                                        <a href="mailto:su@spread-vienna.com">su@spread-vienna.com</a>
	                                        <a href="tel:+43 1 920 9274">+43 1 920 9274</a>
	                                    </div>
	                                </div>

	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Katharina Dulberg</h2>
	                                    <div class="person-contact">
	                                    	<?php
	                                    	  $text = "Senior Consultant Events & Projekt PR";
	                                    	  if(LANGUAGE == "en"){
	                                    	  	$text = "Senior Consultant Events & Project PR";
	                                    	  }

	                                    	?>
	                                        <span><?php echo $text; ?></span>
	                                        <a href="mailto:kd@spread-vienna.com">kd@spread-vienna.com</a>
	                                        <a href="tel:+43 664 166 5020">+43 664 166 5020</a>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="g-cols offset_default links-col-list">
	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Laura Kernetzky</h2>
	                                    <div class="person-contact">
	                                        <span>PR Assistant & Junior Consultant</span>
	                                        <a href="mailto:lk@spread-vienna.com">lk@spread-vienna.com</a>
	                                        <a href="tel:+43 660 4970931">+43 660 555 2573</a>
	                                    </div>
	                                </div>

	                                <div class="one-half links-col">
	                                    <h2 class="link-head">Sara Demir</h2>
	                                    <div class="person-contact">
	                                        <span>PR Assistant</span>
	                                        <a href="mailto:sd@spread-vienna.com">sd@spread-vienna.com</a>
	                                        <a href="tel:+43 676 979 8295">+43 676 979 8295</a>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div> 
	                </div>
	            </div>
	        </footer>

	        <section class="l-subsection footer-banner-sec" data-anchor="newsroom" id="newsroom"  >
	            <div class="l-subsection-h full-width pad-t-0 pad-b-0">
	                <div class="footer-banner">
	                    <img src="<?php bloginfo('template_directory'); ?>/images/spread-footer-banner.png" alt="">
	                </div>
	            </div>
	        </section>

	    <?php } ?>

	        <div class="footer-info"  >
	            <div class="wrap">
	                <div class="logo-block">
	                    <img src="<?php bloginfo('template_directory'); ?>/images/spread-logo-white.png" alt="Spread" title="Spread">
	                    <span>@ SPREAD, VIENNA, 2022</span>
	                </div>
	                <div class="footer-links">
	                    <a href="<?php the_permalink(104); ?>">Legal Notice </a>
	                    <a href="<?php the_permalink(109); ?>">GTCS </a>
	                    <a href="<?php the_permalink(107); ?>">Data Privacy</a>
	                </div>
	            </div>
	        </div>

			<div id="cookie-notice" class="cookie-sticky" <?php if(isset($_COOKIE['noticeCookie'])){ ?>style="display:none;"<?php } ?>>
				<div class="wrap">
					<div class="cookie-text">
						<span>We use cookies to improve, promote and protect our offer. By continuing to use the website, you agree to our privacy policy.</span>
					</div>    
					
					<div class="cookie-btn-panel">
						<a href="javascript:void(0);" id="setCookie">OK</a>
						<a href="<?php the_permalink(107); ?>">privacy</a>
					</div>
			
					<a href="javascript:void(0);" id="closeCookie" class="cookie-close-icon"></a>
				</div>
			</div>

        </div>

        <?php
			if($title == "Home"){
		?>

         <script type="text/javascript">

         	function changeLanguage(){
         		var language = $('#gtranslate_selector').val();

         		if(language == 'en'){
         			var url = window.location.href;
         			url = url+"/en/home";
         			window.location.href = url;
         		}
         		else{
         			window.location.href = "/";
         		}
         	}

	        function getURLParameter(e){e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]");var t=new RegExp("[\\?&]"+e+"=([^&#]*)"),n=t.exec(location.search);return n==null?"":decodeURIComponent(n[1].replace(/\+/g," "))};
	        if(getURLParameter("id")!=""){$("html, body").animate({scrollTop:$("#"+getURLParameter("id")).offset().top-0},600)}
	       

	        $(document).ready(function(){

	        	$("#closeCookie").click(function(){
	                $("#cookie-notice").hide();
	                return false;
	            });

	            $("#setCookie").click(function(){
	                $.ajax({
	                    type : "post",
	                    url : "form-submit.php",
	                    data : {"setCookie":"true"},
	                    success: function(response){
	                        $("#cookie-notice").hide();
	                        return false;
	                    }
	                });
	                return false;
	            });

	        // Add smooth scrolling to all links
		        $("a").on('click', function(event) {

		            if (this.hash !== "") {
		            // Prevent default anchor click behavior
		            event.preventDefault();

		            var hash = this.hash;

		            $('html, body').animate({
		                scrollTop: $(hash).offset().top
		            }, 800, function(){

		                // Add hash (#) to URL when done scrolling (default click behavior)
		                window.location.hash = hash;
		            });
		            }
		        });
	        });

	        $(document).ready(function() {
	            var o1 = $('#owl-1'), o2 = $('#owl-2');

	            //Sync o2 by o1
	            o1.on('click', '.owl-next', function () {
	                o2.trigger('next.owl.carousel')
	            });

	            o1.on('click', '.owl-prev', function () {
	                o2.trigger('prev.owl.carousel')
	            });

	            //Sync o1 by o2
	            o2.on('click', '.owl-next', function () {
	                o1.trigger('next.owl.carousel')
	            });

	            o2.on('click', '.owl-prev', function () {
	                o1.trigger('prev.owl.carousel')
	            });

	            //Carousel settings
	            o1.owlCarousel({
	                center : true,
	                loop : true,
	                items : 3,
	                margin:0,
	                nav : true,
	                dots: false,
	                touchDrag  : false,
	                mouseDrag  : false,
	                responsive:{
	                    0:{
	                        items:1,
	                        nav:true,
	                        dots:false,
	                        margin:0,
	                        stagePadding: 55
	                    },
	                    1030:{
	                        items:3
	                    },
	                }
	                
	            }).on('dragged.owl.carousel', function (e) {
	                if (e.relatedTarget._drag["stage"]["start"].x < e.relatedTarget._drag["stage"]["current"].x) {
	                    o2.trigger('next.owl.carousel')
	                } else {
	                    o2.trigger('prev.owl.carousel')
	                }
	            });
	            o2.owlCarousel({
	                center : true,
	                loop : true,
	                items : 1,
	                margin:0,
	                nav : false,
	                dots: false,
	                touchDrag  : false,
	                mouseDrag  : false,
	            }).on('dragged.owl.carousel', function (e) {
	                if (e.relatedTarget._drag["stage"]["start"].x < e.relatedTarget._drag["stage"]["current"].x) {
	                    o1.trigger('next.owl.carousel')
	                } else {
	                    o1.trigger('prev.owl.carousel')
	                }
	            });
	        });
	    
	        $(document).ready(function() {   
	            // var owl = $('#clientSlider');
	            // owl.owlCarousel({
	            //     loop: true,
	            //     autoplay:true,
	            //     autoplayHoverPause:true,
	            //     autoplayTimeout:30000,
	            //     transitionStyle : "fade",
	            //     responsive:{
	            //       0:{
	            //           items:2,
	            //           nav:true,
	            //           margin:0,
	            //           dotsEach: 5
	            //       },
	            //       1000:{
	            //           items:7,
	            //           nav : false,
	            //           dots:true,
	            //           margin:30
	            //       }
	            //   }
	              
	            // }).on('dragged.owl.carousel', function (e) {
	            //     alert('hhh')
	            //     if (e.relatedTarget._drag["stage"]["start"].x < e.relatedTarget._drag["stage"]["current"].x) {
	                   
	            //         o1.trigger('next.owl.carousel')
	            //     } else {
	            //         o1.trigger('prev.owl.carousel')
	            //     }
	            // });

	            $('.client-list').slick({
	                draggable: true,
	                autoplay: true,
	                autoplaySpeed: 7000,
	                arrows: false,
	                dots: false,
	                // fade: true,
	                speed: 500,
	                infinite: true,
	                cssEase: 'ease-in-out',
	                touchThreshold: 100,
	                slidesToShow: 7,
	                responsive: [
	                    {
	                        breakpoint: 1024,
	                        settings: {
	                            slidesToShow: 7,
	                            slidesToScroll: 1,
	                        }
	                    },
	                    {
	                        breakpoint: 800,
	                        settings: {
	                            slidesToShow: 2,
	                            slidesToScroll: 2
	                        }
	                    },
	                    {
	                        breakpoint: 480,
	                        settings: {
	                            slidesToShow: 2,
	                            slidesToScroll: 2
	                        }
	                }]
	            })


	            $(".icon-burger").click(function(){

	                if($(this).hasClass("is-open")){
	                    $(this).removeClass("is-open");
	                    $(".sticky-nav-tabs").removeClass("open-slide");
	                    return false;
	                }else{
	                    $(this).addClass("is-open");
	                    $(".sticky-nav-tabs").addClass("open-slide");
	                    return false;
	                }

	            });

	            $(".gotoidea").click(function(){

	                var scrollPointN = $('#idea').offset().top - 74;
	                $('body,html').animate({
	                    scrollTop: scrollPointN
	                }, 300);

	            });

	            jQuery('.link-head').click(function(e) {
	                e.preventDefault();
	                var jQuerythis = jQuery(this);
	                if (jQuerythis.next().hasClass('show')) {
	                    jQuerythis.next().removeClass('show');
	                    jQuerythis.next().slideUp(350);
	                } else {
	                    jQuerythis.parent().parent().find('.link-list').removeClass('show');
	                    jQuerythis.parent().parent().find('.link-list').slideUp(350);
	                    jQuerythis.next().toggleClass('show');
	                    jQuerythis.next().slideToggle(350);
	                }
	            });
	        });

	        jQuery(document).ready(function(jQuery) {            
	            var topMenu = jQuery("#top-menu"),
	            offset = 90,
	                
	                
	                // if ($(window).width() < 1024) {
	                //     var topMenu = jQuery("#top-menu"),
	                //     offset = 0,
	                // } 
	                
	                topMenuHeight = topMenu.outerHeight()+offset,
	                // All list items
	                menuItems =  topMenu.find('a[href*="#"]'),
	                // Anchors corresponding to menu items
	                scrollItems = menuItems.map(function(){
	                  var href = jQuery(this).attr("href"),
	                  id = href.substring(href.indexOf('#')),
	                  item = jQuery(id);
	                  //console.log(item)
	                  if (item.length) { return item; }
	                });

	            // so we can get a fancy scroll animation
	            menuItems.click(function(e){
	              var href = jQuery(this).attr("href"),
	                id = href.substring(href.indexOf('#'));
	                offsetTop = href === "#" ? 0 : jQuery(id).offset().top-topMenuHeight+1;
	                jQuery('html, body').stop().animate({ 
	                    scrollTop: offsetTop
	                }, 300);
	                if ($(window).width() < 1024) {
	                    offsetTop = href === "#" ? 0 : jQuery(id).offset().top - 60;
	                    jQuery('html, body').stop().animate({ 
	                    scrollTop: offsetTop
	                    }, 300);
	                } 
	              e.preventDefault();
	            });
	            
	            

	            // Bind to scroll
	            jQuery(window).scroll(function(){
	               // Get container scroll position
	               var fromTop = jQuery(this).scrollTop()+topMenuHeight;

	               // Get id of current scroll item
	               var cur = scrollItems.map(function(){
	                 if (jQuery(this).offset().top < fromTop)
	                   return this;
	                  
	               });
	               

	               // Get the id of the current element
	               cur = cur[cur.length-1];
	               var id = cur && cur.length ? cur[0].id : "";               
	               
	               menuItems.parent().removeClass("active");
	               if(id){
	                    menuItems.parent().end().filter("[href*='#"+id+"']").parent().addClass("active");
	                    $('.sticky-nav-tabs').removeClass('open-slide');
	                    $('.icon-burger').removeClass('is-open');
	               }
	               
	            })
	        })

	        

	        
	        $(window).scroll(function() {
	                var windscroll = $(window).scrollTop();
	                if (windscroll >= 70) {
	                    $('.header').addClass('fixed');
	                    $('.content-box').each(function(i) {
	                        // alert(i);
	                        if ($(this).position().top <= windscroll - 30) {
	                            $('nav a').removeClass('active');
	                            $('nav a').eq(i).addClass('active');
	                        }
	                    });

	                } else {

	                    $('.header').removeClass('fixed');
	                    $('nav a.active').removeClass('active');
	                    // $('nav a:first').addClass('active');
	                }

	            }).scroll();

	        
	        // $('.sticky-nav-tabs a').on('click', function() {

	        //     var scrollAnchorN = $(this).attr('data-scroll');

	        //     if($(window).width() < 1024){
	        //         if(scrollAnchorN == "howitworks"){
	        //             var scrollPointN = $('#' + $(this).attr("data-scroll")).offset().top - 74;
	        //         }
	        //     }else{
	        //         if(scrollAnchorN == "howitworks")
	        //         {
	        //             var scrollPointN = $('#' + $(this).attr("data-scroll")).offset().top + 100;
	        //         }else
	        //         {
	        //             var scrollPointN = $('#' + $(this).attr("data-scroll")).offset().top - 99;
	        //         }
	                
	        //     }

	        //     $('body,html').animate({
	        //         scrollTop: scrollPointN
	        //     }, 300);

	        //     $('.sticky-nav-tabs a').removeClass('active');
	        //     $(this).addClass('active');
	        //     $(".sticky-nav-tabs").removeClass("open-slide");
	        //     $(".icon-burger").removeClass("is-open");

	        //     return false;

	        // })
	         
    
    	</script>

    	<?php } else { ?>


			<script type="text/javascript">
       

		        $(window).scroll(function() {
		           var windscroll = $(window).scrollTop();
		           if (windscroll >= 99) {
		               $('.header').addClass('fixed');
		               $('.content-box').each(function(i) {
		                   // alert(i);
		                   if ($(this).position().top <= windscroll + 99) {
		                       $('.sticky-nav-tabs a').removeClass('active');
		                       $('.sticky-nav-tabs a').eq(i).addClass('active');
		                   }
		               });

		           } else {
		               $('.header').removeClass('fixed');
		               $('.sticky-nav-tabs a.active').removeClass('active');
		               // $('nav a:first').addClass('active');
		           }
		       }).scroll();

		       $(".icon-burger").click(function(){
		            if($(this).hasClass("is-open")){
		                $(this).removeClass("is-open");
		                $(".sticky-nav-tabs").removeClass("open-slide");
		                return false;
		            }else{
		                $(this).addClass("is-open");
		                $(".sticky-nav-tabs").addClass("open-slide");
		                return false;
		            }
		        });

		       	$(document).ready(function(){

		        	$("#closeCookie").click(function(){
		                $("#cookie-notice").hide();
		                return false;
		            });
		        });
		        
		        $("#setCookie").click(function(){
	                $.ajax({
	                    type : "post",
	                    url : "form-submit.php",
	                    data : {"setCookie":"true"},
	                    success: function(response){
	                        $("#cookie-notice").hide();
	                        return false;
	                    }
	                });
	                return false;
	            });	

		    </script>

		<?php } ?>


	</body>
</html>
