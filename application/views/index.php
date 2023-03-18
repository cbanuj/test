<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from clapat.ro/themes/newave/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2020 05:39:18 GMT -->
<head>

    <title>Samana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Responsive One Page Parallax Template" />
    <meta name="author" content="ClaPat Studio">
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="icon" type="image/ico" href="<?=base_url(); ?>assets/images/logo-icon.png" />
    
    
    
    <link href="<?=base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />    
    <link href="<?=base_url(); ?>assets/style.css" rel="stylesheet" />
    
    
    <link rel="alternate stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/colors/color-gray.css" title="gray">
    <link rel="alternate stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/colors/color-green.css" title="green">
    <link rel="alternate stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/colors/color-red.css" title="red">
    <link rel="alternate stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/colors/color-blue.css" title="blue">
    <link rel="alternate stylesheet" type="text/css" href="<?=base_url(); ?>assets/css/colors/color-yellow.css" title="yellow">
    
        
    <link rel="stylesheet" href="<?=base_url(); ?>assets/css/prettyPhoto.css" type="text/css" media="screen" />    
    <link href="<?=base_url(); ?>assets/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="<?=base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css' />    
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <style>
    .zoom {
      transition: transform .2s;
      width: 260px;
      height: 260px;
      margin: 40px
    }

    .zoom:hover {
      -ms-transform: scale(1.5); /* IE 9 */
      -webkit-transform: scale(1.5); /* Safari 3-8 */
      transform: scale(1.5); 
    }
    .default:hover {
      background: #e7e7e7;
    }
    .social-icon{
        height: 35px;
    }
    .border-style{
            border: 5px solid;
            border-color: white;
            margin-bottom: -5px;
    }
    #modal-style{
        border:2px solid;border-color:skyblue;
    }
    /*.isotope-item{
            width: 25% !important;
    }*/

/*    li a.active h5 {
    background-color: #222222;*/
    
</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="75">


    <!-- Preloader -->
    <div class="mask"><div id="loader"></div></div>


      <!-- Navigation -->
    <div id="navigation" class="navbar navbar-fixed-top">
        <div class="navbar-inner ">
            <div class="container no-padding">
                
                    <a class="show-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="show-menu-bar"></span>
                    </a>
                    
                    <div id="logo"><a class="external" href=""></a></div>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="menu-1"><a class="colapse-menu1" href="#home">Home</a></li>
                            <li class="menu-2"><a class="colapse-menu1" href="#our-story">Our Story</a></li>
                            <li class="menu-3"><a class="colapse-menu1" href="#our-product">Our Products</a></li>
                            <li class="menu-5"><a class="colapse-menu1" href="#project-slider">Testimonial</a></li>
                            <li class="menu-6"><a class="colapse-menu1" href="#contact">Contact</a></li>
                             <li><a href="https://www.facebook.com/SamanaInterior/" target="_blank"><img src="<?=base_url(); ?>assets/images/facebook.png" alt="" class="social-icon" /></a></li>
                            <li><a href="https://twitter.com/Samanaonline1" target="_blank"><img src="<?=base_url(); ?>assets/images/twitter.png" alt="" class="social-icon"/></a></li>
                <li><a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Ffeed%2F" target="_blank"><img src="<?=base_url(); ?>assets/images/linkedin.png" alt="" class="social-icon"/></a></li>
                <li><a href="https://www.youtube.com/channel/UCem8JC3mEEKsbqS1lXhUXtQ" target="_blank"><img src="<?=base_url(); ?>assets/images/youtube.png" alt="" class="social-icon"/></a></li>
                <li><a href="https://www.instagram.com/samana.online/?igshid=pgoiy4y3v4ux" target="_blank"><img src="<?=base_url(); ?>assets/images/instagram.png" alt="" class="social-icon"/></a></li>
                <li><a href="https://www.google.com/maps/place/Samana/@21.1337907,82.7088952,12z/data=!4m8!1m2!2m1!1ssamana!3m4!1s0x390cf1b9505eb1e1:0x718b0092ba9498a0!8m2!3d21.1337907!4d82.778933" target="_blank">
                <img src="<?=base_url(); ?>assets/images/Google-My-Business.png" alt="" class="social-icon"/></a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </div>
    <!--/Navigation -->
    <!-- Home Section -->

    <div id="home">
         
            <a id="slider_left"><img src="<?=base_url(); ?>assets/images/arrow_left.png" alt="Slide Left" /></a>
            <a id="slider_right"><img src="<?=base_url(); ?>assets/images/arrow_right.png" alt="Slide Right" /></a>
            <img id="cycle-loader" src="<?=base_url(); ?>assets/images/ajax-loader.gif" alt="" />
           
            <div id="fullscreen-slider">
                <?php foreach($slider_list as $row) { ?>
                <div>
                    
                    <img src="<?=base_url('assets/banner_image/'.$row['image']); ?>" alt="" />
                    <div class="pattern">
                        <div class="slide-content light">
                            <div class="div-align-center">              
                                <p class="georgia">Welcome to our Samana</p>                        
                                <h1><?=$row['title']; ?></h1>                        
                                <a href="#our-story" class="newave-button medium white outline">See What we do</a>                      
                            </div>
                        </div>
                    </div>
                    
                </div>
                <?php } ?>
                <!-- <div>
                    <img src="<?=base_url(); ?>assets/images/b2.jpg" alt="" />
                    <div class="pattern">
                    <div class="slide-content light"> 
                        <div class="div-align-center">                   
                            <h1>Modern <span class="text-color">&</span> Luxury Style</h1>
                        </div>
                    </div>
                    </div>
                </div> -->
                
                <!-- <div>
                    <img src="<?=base_url(); ?>assets/images/b1.jpg" alt="" />
                    <div class="pattern">
                    <div class="slide-content light"> 
                        <div class="div-align-center">                   
                            <h1>Victorian Style</h1>                        
                             <a href="#our-story" class="newave-button medium grey">More about us</a>
                        </div>
                    </div>
                    </div>
                </div> -->

            </div>
            
    </div>  
   
    <!-- End Home Section -->
    
     <!-- We Are Newave -->
    <section id="our-story">
        
        <!-- Container -->
        <div class="container">
            
            <!-- Section Title -->
            <div class="section-title">
                <h1>Our Story</h1>
                <span class="border"></span>
                <!-- <p>We're a close team of creatives, designers & developers who work together to create beautiful, engaging digital experiences. We take pride in delivering only the best.</p> -->
                <a href="https://www.youtube.com/channel/UCem8JC3mEEKsbqS1lXhUXtQ" target="_blank"><h4><img src="<?=base_url(); ?>assets/images/icon_play_2.png" style="height:70px;width:70px;"> View Collection Video</h4></a>
            </div> 

            <!--/Section Title -->
                      
            <!--/Section Title --> 
            <div class="one_half last">           
                <img class="element_from_right" src="<?=base_url(); ?>assets/images/about.jpg" alt="" />               
            </div>

        <div class="one_half"> 
                <div class="service-item text-left element_from_left" style="margin-left:30px;">

                    <p style="text-align: justify;margin-top: 140px;"><b>Established in 2014, Sāmāna</b> has been a recongnized name in furniture industry. We 
have grown catering to various clients, locations & industries. In the year 2019, <b>Sāmāna</b> has also been awarded “U.P. Brand Leadership Award of the Industry”. 
We offer a vast assortment of styles in an amazing variety of furniture categories. We hand pick & curate the best in quality and style for you & your home. We understand that durability is equally important, so our technical team works constantly to check on technical feasibility of various materials available for our products. Our main priority is customer satisfaction, so our highly trained staff is ready to assist you all the time.
                </p>
                </div>
            </div>   
        </div>
        <!--/Container -->
        
    </section>  
    <!--/We Are Newave -->
    
     
    
    <!-- Quote Parallax -->
    <div id="quote-parallax" class="parallax" style="background-image: url('<?=base_url(); ?>assets/images/separator2.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        
        <div class="parallax-overlay parallax-background-color">
            <div class="container quote">   
                <h4 style="color:white!important;"><span class="quote-img"><img src="<?=base_url(); ?>assets/images/quote1.png" alt="" /></span>Creativity is allowing yourself to make mistakes Art is knowing which ones to keep<span class="quote-img"><img src="<?=base_url(); ?>assets/images/quote2.png" alt="" /></span></h4>
                <p>- Richard Johnson -</p>
            </div>    
        </div>
                    
    </div>
    <!--/Quote Parallax -->




  <!-- insta gallery -->


  <section id="">
            <br><br>
            <div class="section-title">
                <h1>Insta Gallery</h1>
                <span class="border"></span>
            </div> 
            <ul class="our-team">
                   
               <li class="team-person element_from_left">                 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CBBVfy_JDiX/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CBBVfy_JDiX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/CBBVfy_JDiX/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Walk in wardrobe is not a utility, it’s a style statement Get the best wardrobe designs to suit your home’s floor plan. We at Samana can provide you with the best designing solutions of your modular wardrobe, which are aesthetically amazing &amp; technically feasible. A team of expert designers and installers are trained by companies like Hettich &amp; Häfele. www.samana.online #samana #samanaonline #samanamodular #samanafurniture #samanawardrobes #samanadesigns #samanawardrobedesigning #ModularFurniture #ModularWardrobes #walkinwardrobes #walkinwardrobedesign #walkinwardrobestyles #ModularWardrobeSolutions #ModularwardrobeDesigns #ModularWardrobeDesignIdeas #WardrobeDesigningTips #Wardrobe #WardrobeDesigning #WardrobeDesigningIdeas #wardrobedecor #almirah #hettich #hafele #häfele #germantechnology</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-06-04T17:03:57+00:00">Jun 4, 2020 at 10:03am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>  

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CAIuzxqplEU/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CAIuzxqplEU/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/CAIuzxqplEU/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Space saving furniture give you the freedom to maximize the limited area available to you and that too without burning a hole in your pocket. We at Samana can provide you with best space saving furniture that is functional, customised, technically feasible &amp; durable as well. Our expert team of designers &amp; Installers is trained by professionals of Hettich &amp; Hafele. We can design any space &amp; fulfill all your requirements for that particular space. www.samana.online #Samana #SamanaOnline #SamanaSpaceSavers #SpaceSavers #Designers #FurnitureDesigners #DesignerFurniture #SamanaFurniture #SamanaDesigns #SpaceSavingFurniture #SpaceSavingFurnitureIdeas #SpaceSavingIdeas #spacesavingdecor #Furniture #AllAboutFurniture #FurnitureDesign #FurnitureDesignIdeas #FurnitureIdeas #WoodenFurniture #modularfurniture #ModularFurnitureDesign #ModularFurnitureDesignIdeas #woodenspacesavers #Wooden #carpentry #Woodenfurniture #WoodenspacesavingIdeas #Creativewood #Hettich #Hafele</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-05-13T17:28:25+00:00">May 13, 2020 at 10:28am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B_-PxLBJv2m/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B_-PxLBJv2m/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B_-PxLBJv2m/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Space saving furniture is not just trendy, it&#39;s necessary... We at Samana can provide you with best space saving furniture that is functional, customised, technically feasible &amp; durable as well. Our expert team of designers &amp; Installers is trained by professionals of Hettich &amp; Hafele. We can design any space &amp; fulfill all your requirements for that particular space. www.samana.online #Samana #SamanaOnline #SamanaSpaceSavers #SpaceSavers #Designers #FurnitureDesigners #DesignerFurniture #SamanaFurniture #SamanaDesigns #SpaceSavingFurniture #SpaceSavingFurnitureIdeas #SpaceSavingIdeas #spacesavingdecor #Furniture #AllAboutFurniture #FurnitureDesign #FurnitureDesignIdeas #FurnitureIdeas #WoodenFurniture #modularfurniture #ModularFurnitureDesign #ModularFurnitureDesignIdeas #woodenspacesavers #Wooden #carpentry #Woodenfurniture #WoodenspacesavingIdeas #Creativewood #Hettich #Hafele</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-05-09T15:44:46+00:00">May 9, 2020 at 8:44am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B_rhIcKJzwa/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B_rhIcKJzwa/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B_rhIcKJzwa/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Dining &amp; kitchen areas... www.samana.online #samana #samanaonline #samanainteriors #samanadiningareas #samanadesigns #diningareas #designerdiningareas #designerdining #diningroom #diningroomdecor #dininginteriors #diningroomdesign #designerinteriors #designerinteriorideas</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-05-02T09:10:56+00:00">May 2, 2020 at 2:10am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B-4QeKnJxzA/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-4QeKnJxzA/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B-4QeKnJxzA/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Some space saving ideas in the centre table…We can play with wood and create amazing stuff for you. #Samana #samanaonline #samanafurniture #SpaceSavingFurniture #DesignerFurniture #WoodenFurniture #Furniture #FurnitureDesign #CoffeeTable #DecorFurniture #allaboutfurniture</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-04-12T11:24:05+00:00">Apr 12, 2020 at 4:24am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B-GoTtspNmz/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B-GoTtspNmz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B-GoTtspNmz/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Geometry meets design n elegance.....wondering to have a simple coffee table with a wow factor, #samana is the right place to get your deal done #samanafurniture #samanadesigns #samanaonline #samanatable #designerfurniture #samanainteriors</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-03-24T04:50:20+00:00">Mar 23, 2020 at 9:50pm PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CACHIQfpOVH/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/CACHIQfpOVH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/CACHIQfpOVH/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Space saving furniture is not just trendy, it&#39;s necessary... We at Samana can provide you with best space saving furniture that is functional, customised, technically feasible &amp; durable as well. Our expert team of designers &amp; Installers is trained by professionals of Hettich &amp; Hafele. We can design any space &amp; fulfill all your requirements for that particular space. www.samana.online #Samana #SamanaOnline #SamanaSpaceSavers #SpaceSavers #Designers #FurnitureDesigners #DesignerFurniture #SamanaFurniture #SamanaDesigns #SpaceSavingFurniture #SpaceSavingFurnitureIdeas #SpaceSavingIdeas #spacesavingdecor #Furniture #AllAboutFurniture #FurnitureDesign #FurnitureDesignIdeas #FurnitureIdeas #WoodenFurniture #modularfurniture #ModularFurnitureDesign #ModularFurnitureDesignIdeas #woodenspacesavers #Wooden #carpentry #Woodenfurniture #WoodenspacesavingIdeas #Creativewood #Hettich #Hafele</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-05-11T03:46:15+00:00">May 10, 2020 at 8:46pm PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>

<li class="team-person element_from_left"> 

<blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/B_9ZXJSpL5-/?utm_source=ig_embed&amp;utm_campaign=loading" data-instgrm-version="12" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:16px;"> <a href="https://www.instagram.com/p/B_9ZXJSpL5-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;" target="_blank"> <div style=" display: flex; flex-direction: row; align-items: center;"> <div style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;"></div> <div style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;"> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;"></div> <div style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;"></div></div></div><div style="padding: 19% 0;"></div> <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg width="50px" height="50px" viewBox="0 0 60 60" version="1.1" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-511.000000, -20.000000)" fill="#000000"><g><path d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631"></path></g></g></g></svg></div><div style="padding-top: 8px;"> <div style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;"> View this post on Instagram</div></div><div style="padding: 12.5% 0;"></div> <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;"><div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);"></div> <div style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;"></div> <div style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);"></div></div><div style="margin-left: 8px;"> <div style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;"></div> <div style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)"></div></div><div style="margin-left: auto;"> <div style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);"></div> <div style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);"></div> <div style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);"></div></div></div></a> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/B_9ZXJSpL5-/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">New range of wardrobe organisers... We at Samana can provide you with the best organiser solutions for your modular wardrobe, which are aesthetically amazing &amp; technically feasible. A team of expert designers and installers are trained by companies like Hettich &amp; Häfele. www.samana.online #samana #samanaonline #samanamodular #samanafurniture #samanawardrobes #samanadesigns #samanawardrobedesigning #ModularFurniture #ModularWardrobes #ModularWardrobeSolutions #ModularwardrobeDesigns #Wardrobeorganisers #ModularWardrobeDesignIdeas #WardrobeOrganisingTips #WardrobeDesigningTips #Wardrobe #WardrobeDesigning #WardrobeDesigningIdeas #wardrobedecor #almirah #hettich #hafele #häfele #germantechnology</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A post shared by <a href="https://www.instagram.com/samana.online/?utm_source=ig_embed&amp;utm_campaign=loading" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px;" target="_blank"> Samana</a> (@samana.online) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2020-05-09T07:49:22+00:00">May 9, 2020 at 12:49am PDT</time></p></div></blockquote> <script async src="//www.instagram.com/embed.js"></script>

</li>               
            
            </ul>               
       
        <!--/Container -->       
    </section> 

    
   <!-- Portfolio -->
    <section id="our-product" class="content hght" style="z-index: -1;">
            
        <!-- Container -->
        <div class="container portfolio-title">
            
            <!-- Section Title -->
            <div class="section-title">
                <h1>Our Products</h1>
                <span class="border"></span>
            </div>              
            <!--/Section Title -->
            
        </div> 
        
        <!-- Container -->           
        <div class="portfolio-top"></div> 
        <!-- Portfolio Plus Filters -->
        <div class="portfolio">
       <!-- Portfolio Filters -->   
       <div  id="filters" class="sixteen columns">   
          <ul class="clearfix">
            <li ><a id="all" href="#" data-filter="*" class="" style="background-color:white!important;"></a></li> 
          </ul>
        </div>
        <!--/Portfolio Filters -->
        <!-- Portfolio Wrap -->  
        <div id="portfolio-wrap">
            
    
            <!-- Portfolio Item With PrettyPhoto  --> 
               <?php $cnt = count($product_list); if($product_list){ $i=1; foreach($product_list as $row){ 
                if($i<=4){ ?>   
                   <div class="portfolio-item one-four  photography branding web">
                    
                        <div class="portfolio-image">
                            <img class="border-style" src="<?=base_url('assets/product_image/'.$row['image']); ?>" alt="Portfolio 1" style="width:100%;height: 385px;"/>
                        </div>
                        
                        <div class="project-overlay">
                            <div class="open-project-link">
                                <a class="open-project" href="project-fullscreen-expander-1.html" title="Open Project"></a>             
                            </div>
                            <div class="project-info">
                                <div class="zoom-icon"></div>
                                <h4 class="project-name"><?=$row['title']; ?></h4>
                            </div>
                        </div>
                            
                    </div>
               
               <?php } else { ?>
               
            <div class="portfolio-item one-four  photography branding web" id="nxt<?php echo $i; ?>" style="display:none;">
                
            <div class="portfolio-image">
                <img class="border-style" src="<?=base_url('assets/product_image/'.$row['image']); ?>" alt="Portfolio 1" style="width:100%;height: 385px;"/>
            </div>
            
            <div class="project-overlay">
                <div class="open-project-link">
                    <a class="open-project" href="project-fullscreen-expander-1.html" title="Open Project"></a>             
                </div>
                <div class="project-info">
                    <div class="zoom-icon"></div>
                    <h4 class="project-name"><?=$row['title']; ?></h4>
                </div>
            </div>
                
            </div>
                
            <?php } $i++; } } ?>
        </div>      
     
    
        
     </section>
    <!--/Portfolio -->
 
    <div class="section-title" id="mrgn myBtn" style="margin-top:0px;">
            <!-- <h4 >Testimonial</h4> --><br>
             <button onclick="seeMore()" class="newave-button medium grey rounded">See More</button>
    </div>
    
       <!-- Project Slider -->
    <section id="project-slider">
        
        <!-- Container -->
        <div class=" container small-width">
        
        
        <!-- Section Title -->
        <div class="section-title">
            <h1>Testimonial</h1>
            <span class="border"></span>
        </div>              
        <!--/Section Title -->
        
        
        <!-- Project Slider -->
        <div class="project-image-slider">
            <ul class="project-slider">
                <?php foreach ($testimonial_list as $row){ ?>
                <li><img src="<?=base_url('assets/testimonial_image/'.$row['image']); ?>" alt="" /></li>
                <!-- <li><img src="<?=base_url(); ?>assets/images/projects/t3.jpg" alt="" /></li>
                <li><img src="<?=base_url(); ?>assets/images/projects/t4.jpg" alt="" /></li> -->
            <?php }?>
            </ul>
        </div>
        <!--/Project Slider -->
        
        
        </div>
        <!--/Container -->
        
    </section>  
    <!--/Project Slider -->

    <!-- Shortcode Call To Action -->
    <section id="shortcode" class="content">
        <!-- Container -->
        <div class="container no-padding">
            
            <h4 class="call-action">Have you fallen in love yet with our portfolio?<a href="#contact" class="newave-button medium grey move" data-toggle="modal" data-target="#myModal2">Contact Us</a></h4>
            
        </div> 
        <!-- Container --> 
    </section>  
    

    
    <!-- Contact Section -->
    <section id="contact">
         <!-- Container -->
        <div class=" container">
        <!-- Section Title -->
            <div class="section-title">
                <h1>Contact</h1>
                <span class="border"></span>
                <!-- <p>Want to say hello? Want to know more about us? Give us a call or drop us an email and we will get back to you as soon as we can.</p> -->
            </div>              
            <!--/Section Title -->    
        <div class="one_half">           
                <div class="service-item text-left element_from_left">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-phone fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>0120-4137673</h5>
                    <p>Want to say hello? Give us a call, we would love to hear from you.</p>
                </div>
                
                <div class="service-item text-left element_from_left">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-envelope-o fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>info@samana.com</h5>
                    <p>Drop us an email & we will get back to you as soon as we can</p>
                </div>
                
                <div class="service-item text-left element_from_left">
                    <span class="fa-stack fa-3x left">
                      <i class="fa fa-circle fa-2x fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse service-icon"></i>
                    </span>
                    <h5>Address</h5>
                    <p>606, Ansal Shivam Corporate Suites RDC, Raj Nagar Ghaziabad, UP-201002, India</p>
                </div>
            </div>   
            
            <div class="one_half last">           
                <img class="element_from_right" src="<?=base_url(); ?>assets/images/our-presence.jpg" alt="" />               
            </div>
        </div>
        <!--/Container -->
        
        <section id="" class="">
        <!-- Container -->
        <div class="container no-padding">
            
            <h4 class="call-action">If you want to join with us. Click on career<a href="#contact" class="newave-button medium grey" data-toggle="modal" data-target="#myModal">Career</a></h4>
            
        </div> 
        <!-- Container --> 
    </section> 
    </section>
    <!-- Footer -->
    <footer>

        <!-- Button to trigger modal -->
        <div class="container no-padding">
            
            <a id="back-top"><div id="menu_top"><div id="menu_top_inside"></div></div></a>
            
            <ul class="socials-icons">
                <li><a href="https://www.facebook.com/SamanaInterior/" target="_blank"><img src="<?=base_url(); ?>assets/images/facebook.png" alt=""  /></a></li>
                <li><a href="https://twitter.com/Samanaonline1" target="_blank"><img src="<?=base_url(); ?>assets/images/twitter.png" alt="" /></a></li>
                <li><a href="https://www.linkedin.com/uas/login?session_redirect=https%3A%2F%2Fwww.linkedin.com%2Ffeed%2F" target="_blank"><img src="<?=base_url(); ?>assets/images/linkedin.png" alt=""/></a></li>
                <li><a href="https://www.youtube.com/channel/UCem8JC3mEEKsbqS1lXhUXtQ" target="_blank"><img src="<?=base_url(); ?>assets/images/youtube.png" alt="" /></a></li>
                <li><a href="https://www.instagram.com/samana.online/?igshid=pgoiy4y3v4ux" target="_blank"><img src="<?=base_url(); ?>assets/images/instagram.png" alt="" /></a></li>
            </ul>
            
            <p class="copyright">2020 &copy; Samana. All rights reserved.</p>
            
        </div>
    </footer>
    <!--/Footer -->
    
     
<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" style="text-align: center;"><b>Please Enter The Details</h3>
  </div>
  <div class="modal-body">
     <form action="<?=base_url('Samana/send_mail2');?>" method="post" enctype="multipart/form-data">
                <div class="form-group" id="modal-style">
                <input type="text" class="form-control" name="username" placeholder="Enter Full Name" required>
                </div><br>
                    <div class="form-group" id="modal-style">
                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
                    </div><br>

                    <div class="form-group" id="modal-style">
                        <input type="text" class="form-control" name="address" placeholder="Enter Current Location" required>
                    </div><br>

                    <div class="form-group" id="modal-style">
                        <input type="number" class="form-control" name="number" placeholder="Mobile Number" required>
                    </div><br>
                    <div class="form-gro3p" id="modal-style">
                        <input type="file" class="form-control" name="resume" accept=".doc,.docx,.pdf,.jpg,.jpeg,.png" placeholder="Upload Resume" required><b>Upload Resume</b>
                        <!-- <label>gegtt</label> -->
                    </div><br>
                    <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>            
            </div>
    </div>
    
    <div style="opacity:0; height:0px!important; position:fixed; ">    
        <img  src="<?=base_url();?>assets/images/projects/3.png" alt="" /> 
        <img  src="<?=base_url();?>assets/images/projects/4.jpg" alt="" /> 
        <img  src="<?=base_url();?>assets/images/projects/5.jpg" alt="" /> 
        <img  src="<?=base_url();?>assets/images/projects/6.png" alt="" /> 
    </div>   
    
    <script type="text/javascript">
        $('#myModal').modal(options)
    </script>
    
    <div id="myModal2" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel" style="text-align: center;"><b>Please Enter The Details</h3>
  </div>
  <div class="modal-body">
         <form method="post" action="<?=base_url('Samana/send_mail3');?>">
                    <div class="form-group" id="modal-style">
                    <input type="text" class="form-control" name="username" placeholder="ENTER YOUR NAME" required>
                    </div><br>

                    <div class="form-group" id="modal-style">
                        <input type="email" class="form-control" name="email" placeholder="ENTER EMAIL" required>
                    </div><br>

                    <div class="form-group" id="modal-style">
                        <input type="number" class="form-control" name="number" placeholder="ENTER MOBILE NUMBER" required>
                    </div><br>
            <div class="form-group" id="">
                        <!-- <te type="text" class="form-control" placeholder="Enter Current Location" required> -->
                         <textarea id="modal-style" name="msg" cols="50" rows="7" id="comments" placeholder="Message" required></textarea> 
                    </div>
                    <!-- <div class="form-gro3p" id="modal-style">
                        <input type="file" class="form-control" placeholder="Upload Resume" required><b>Upload Resume</b>
                        <label>gegtt</label>
                    </div><br> -->
                    <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </form>            
            </div>
    </div>
    <script type="text/javascript">
        $('#myModal2').modal(options)
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='<?=base_url(); ?>assets/jquery/1.8.3/jquery.js'></script>
    <script src="<?=base_url(); ?>assets/js/jquery.sticky.js"></script> 
    <script src="<?=base_url(); ?>assets/js/styleswitcher.js" type="text/javascript"></script>    
    <script src="<?=base_url(); ?>assets/js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/appear.js" type="text/javascript" ></script>
    <script src="<?=base_url(); ?>assets/js/modernizr.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/isotope.js" type="text/javascript"></script>
    <script src="<?=base_url(); ?>assets/js/jquery.bxslider.min.js"></script>
    <!-- <script type="text/javascript" src="js/jquery.tweet.js"></script> -->
    <script src="<?=base_url(); ?>assets/js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=base_url(); ?>assets/js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
    <script src="<?=base_url(); ?>assets/js/sscr.js"></script>
    <script src="<?=base_url(); ?>assets/js/skrollr.js"></script>
    <script src="<?=base_url(); ?>assets/js/jquery.jigowatt.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>    
    <script src="<?=base_url(); ?>assets/js/scripts.js" type="text/javascript"></script>
    
<script>
function seeMore() {
    
    $("#mrgn").css("div_hght");
    <?php if($product_list){ $i=1; foreach($product_list as $row){ if($i<=4){ ?>
        
        <?php } else { ?>
        $("#nxt<?php echo $i; ?>").css("display", "block");
        <?php } $i++;  } } ?>
}



//alert(div_hght);
function myFunction() {
    var div_hght = $('.hght').outerHeight(true);
  document.getElementById("#myBtn").style.height = "div_hght";
}

</script>
    
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'YOUR GOOGLE ANALYTICS CODE']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>
    
    
   
    
 

    <div id="myModal" class="modal hide fade">
    
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Modal header</h3>
    </div>
    
    <div class="modal-body"> 
        
       <!--  <a class="btn pop"  rel="popover" href="#" data-original-title="A Title" data-container="body"
        data-content="And here's some amazing content.It's very engaging. right? And another thing about this is a that it's really long.  When I say  long I mean really, really long.  Super, duper long.  There is even more text that makes it longer.  Why do I need so much text in my modal?  It's so long that the top gets cut off by the modal header.  How do I fix this?">
            Click to toggle popover
         </a> -->
        <img src="<?=base_url(); ?>assets/images/team1.png" height="150px" width="170px">
        <p style="margin: -153px 0px -2px 185px;text-align: justify;">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book.</p>
    </div>
    <div class="modal-body">
        <img src="<?=base_url(); ?>assets/images/team2.png" height="150px" width="165px">&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?=base_url(); ?>assets/images/team1.png" height="150px" width="165px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <img src="<?=base_url(); ?>assets/images/team3.png" height="150px" width="165px">
    </div>
    
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <!-- <a href="#" class="btn btn-primary">Save changes</a> -->
    </div>
</div>
    </body>

<!-- Mirrored from clapat.ro/themes/newave/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jan 2020 05:39:44 GMT -->
</html>