<?php get_header(); ?>

	<main role="main">
	<div class="header">
	  <div class="logo-nuro">NU:RO</div>
	  <div class="button-buy-now">BUY NOW</div>
  </div>
	<div class="container row cl-banner">
    <div class="text-1 mg-auto ms-display-none">
      <div class="line-height-500">
      READY
      </div>
      <div>
      TO SHIP
      </div>
    </div>
    <div class="cl-image">
      <img class="image-1" src="http://washi-mask.com/wp-content/uploads/2020/07/kt-08.jpg">
    </div>
    <div class="text-1 mg-auto ms-display-none">
      <div class="line-height-500">
      READY
      </div>
      <div>
      TO SHIP
      </div>
    </div>
  </div>
  <hr style="margin: 0px; height: 4px; background: #000" />

  <div class="body">
<div>
      <h2 class='tt-watch-video'>WATCH VIDEO</h2>
    <div>
    <div class=" container row mg-top-130 line-height-30 wrap">
    <?php
    $vnkings = new WP_Query(array(
    'post_type'=>'product',
    'post_status'=>'publish',
    'cat' => 'dien-thoai',
    'tax_query' => array(
      array(
          'taxonomy' => 'product_cat',
          'field' => 'id',
          'terms' => '16'
      )
    ),
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts_per_page'=> '3'));
    ?>
    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
      <div class="cl-product-box">
          <!-- <img class="product-image" src="https://d3n32ilufxuvd1.cloudfront.net/54fdf5843f7907fd4dcf89ce/1171046/upload-9571f5f0-c03a-11e8-86bf-47531626556a.jpg" /> -->
          <a class="product-image" href="<?php the_permalink() ;?>"><?php the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?></a>
        <div>
          <div class="cl-product">
            <p class="uppercase text-center">
              <span>NU:RO Watch</span>
            </p>
            <p class="uppercase text-center">
              <span>
				  	<a href="<?php the_permalink() ;?>">
					  	<?php the_title() ;?>
					</a>
				</span>
            </p class="uppercase">
            <p>
            <span class="price">
				<a href="<?php the_permalink() ;?>">
				
				$	<?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?>
      </a>
			</span>
              
	
            </p>
          </div>

	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
          <div>
            <p class="cl-stock">
              <span>In Stock</span>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile ; wp_reset_query() ;?>

      <!-- <div style="width: 33%; text-align: center;">
        <img class="product-image" src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-1.jpg" />
        <div>
          <div class="cl-product">
            <p class="uppercase text-center">
              <span>NU:RO Watch</span>
            </p>
            <p class="uppercase text-center">
              <span>Black Leather Band</span>
            </p class="uppercase">
            <p>
              <span>$300</span>
            </p>
          </div>
          <div>
            <div class="button-buy-now" style="margin: auto">BUY NOW</div>
            <p class="cl-stock">
              <span>In Stock</span>
            </p>
          </div>
        </div>
      </div> -->

    </div>

    <div class=" container row md-block md-text-center mg-top-90">
      <div class="uppercase lg-block">
        <p><a class="color-black mg-left-40" href="#">Shipping, return & exchange policy</a></p>
        <p><a class="color-black mg-left-40" href="#">Available Limited Editions</a></p>
      </div>

      <div class="md-mg-top-25">
        <p class="md-wrap">
          <span class="uppercase">Buy At </span>
          <span class="cl-moma-design-store">MoMa Design Store</span>
        </p>

      </div>
    </div>

    <div class="container line-height-0_7 mg-top-230">
      <p class="uppercase">
        <span class="line-height-0.7 ms-fs-24 font-size-90 font-weight-500 ms-fw-5 ms-lh-0_8">NU:RO is a Minimalist Analog Watch. The watch has two dials, with hours at the top and minutes at the bottom. When they rotate, the time is shown in the middle inside the hourglass.</span>
      </P>
    </div>

    <div>
      <img class="img-1" src="http://washi-mask.com/wp-content/uploads/2020/07/kt-09.jpg" />
    </div>

    <div class=" container row mg-top-230 sm-wrap">
      <div class="line-height-45 col-6 ms-full-w">
        <div class="uppercase">
          <span class="ms-fs-24" style="font-size: 80px; font-weight: 700;">Diameter: 40</span>
          <span>MM</span>
        </div>

        <div class="uppercase">
          <span class="ms-fs-24" style="font-size: 80px; font-weight: 700;">Thickness: 9.5</span>
          <span>MM</span>
        </div>

        <div class="uppercase">
          <span class="ms-fs-24" style="font-size: 80px; font-weight: 700;">Weight: 58</span>
          <span>G</span>
        </div>
      </div>

      <div class="col-6 cl-table-contents ms-full-w">
        <div class="row ms-mg-bt-10">
          <div class="col-6">
            <div class="row">
              <span class="ms-fs-18" style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6 ms-auto-w">
            <div><span class="ms-fs-18">20mm</span></div>
          </div>
        </div>

        <div class="row ms-mg-bt-10">
          <div class="col-6">
            <div class="row">
              <span class="ms-fs-18" style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6 ms-auto-w">
            <div><span class="ms-fs-18">20mm</span></div>
          </div>
        </div>

        <div class="row ms-mg-bt-10">
          <div class="col-6">
            <div class="row">
              <span class="ms-fs-18" style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6 ms-auto-w">
            <div><span class="ms-fs-18">20mm</span></div>
          </div>
        </div>
 
        <div class="row ms-mg-bt-10">
          <div class="col-6">
            <div class="row">
              <span class="ms-fs-18" style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6 ms-auto-w">
            <div><span class="ms-fs-18">20mm</span></div>
          </div>
        </div>

        <div class="row ms-mg-bt-10">
          <div class="col-6">
            <div class="row">
              <span class="ms-fs-18" style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6 ms-auto-w">
            <div><span class="ms-fs-18">20mm</span></div>
          </div>
        </div>

        <!-- <div class="row">
          <div class="col-6">
            <div class="row">
              <span style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6">
            <div><span>20mm</span></div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="row">
              <span style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6">
            <div><span>20mm</span></div>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <div class="row">
              <span style="white-space: pre;">Wrist Band width:</span>
              <hr class="thwart"/>
            </div>
          </div>
          <div class="col-6">
            <div><span>20mm</span></div>
          </div>
        </div> -->
      </div>
    </div>

    <section class="wow slideInUp" data-aos="fade-up" data-wow-duration="3s" data-wow-offset="0" data-wow-iteration="1">
        <div class="mg-top-90">
          <img class="img-2" src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-1.jpg" />
        </div>
      </section>

    <div class="mg-top-170 ms-full-w" style="width: 70%;">
      <span class="uppercase ms-fs-24 font-size-80" style="font-weight: 500;">
        Setting and telling time with NU:RO
      </span>
    </div>

    <div class="row mg-top-90 delete">
      <div class="col-4">
        <div style="width: 300px; margin: auto;">
          <div style="width: 240px; height: 400px; margin: auto">
          <img src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-01.jpg" />
          </div>
          <div class="mg-top-60" style="width: 300px">
            <span class="uppercase">THE hour and minute dial work INDEPENDENTLY FROM EACH OTHER. It’s best to Set exact hour using the top dial and set “0” minutes using THE bottom dial.</span>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div style="width: 300px; margin: auto;">
          <div style="width: 240px; height: 400px; margin: auto">
            <img src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-02.jpg" />
          </div>
          <div class="mg-top-60" style="width: 300px">
            <span class="uppercase">THE hour and minute dial work INDEPENDENTLY FROM EACH OTHER. It’s best to Set exact hour using the top dial and set “0” minutes using THE bottom dial.</span>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div style="width: 300px; margin: auto;">
          <div style="width: 240px; height: 400px; margin: auto">
            <img src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-03.jpg" />
          </div>
          <div class="mg-top-60" style="width: 300px">
            <span class="uppercase">THE hour and minute dial work INDEPENDENTLY FROM EACH OTHER. It’s best to Set exact hour using the top dial and set “0” minutes using THE bottom dial.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="mg-top-60 hieght-515">
      <img class="full-width" src="http://washi-mask.com/wp-content/uploads/2020/07/kt-09.jpg" />
    </div>

    <div>
    <div class="container slideshow-container mg-top-230">
      <div class="font-size-90 mg-bottom-40 ms-fs-35">UP CLOSE</div>
      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img src="http://washi-mask.com/wp-content/uploads/2020/07/kt-05.jpg" class="banner">
      </div>

      <div class="mySlides fade">
        <img src="http://washi-mask.com/wp-content/uploads/2020/07/kt-04.jpg" class="banner">
      </div>

      <div class="mySlides fade">
        <img src="http://washi-mask.com/wp-content/uploads/2020/07/kt-03.jpg" class="banner">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next next-mg-r" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>

      <!-- The dots/circles -->
      <!-- <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
      </div> -->
    </div>
    <script>
      var slideIndex = 1;

var myTimer;

var slideshowContainer;

window.addEventListener("load",function() {
    showSlides(slideIndex);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);
  
    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
  
  
})

// NEXT AND PREVIOUS CONTROL
function plusSlides(n){
  clearInterval(myTimer);
  if (n < 0){
    showSlides(slideIndex -= 1);
  } else {
   showSlides(slideIndex += 1); 
  }
  
  //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
  
  if (n === -1){
    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
  } else {
    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  }
}

//Controls the current slide and resets interval if needed
function currentSlide(n){
  clearInterval(myTimer);
  myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
  showSlides(slideIndex = n);
}

function showSlides(n){
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[slideIndex-1].style.display = "block";
}
    </script>

  <div class="body container">
  <div class=" container row mg-top-130 line-height-30 wrap">
    <?php
    $vnkings = new WP_Query(array(
    'post_type'=>'product',
    'post_status'=>'publish',
    'cat' => 'dien-thoai',
    'tax_query' => array(
      array(
          'taxonomy' => 'product_cat',
          'field' => 'id',
          'terms' => '16'
      )
    ),
    'orderby' => 'ID',
    'order' => 'DESC',
    'posts_per_page'=> '3'));
    ?>
    <?php while ($vnkings->have_posts()) : $vnkings->the_post(); ?>
      <div class="cl-product-box">
          <!-- <img class="product-image" src="https://d3n32ilufxuvd1.cloudfront.net/54fdf5843f7907fd4dcf89ce/1171046/upload-9571f5f0-c03a-11e8-86bf-47531626556a.jpg" /> -->
          <a class="product-image" href="<?php the_permalink() ;?>"><?php the_post_thumbnail("medium",array( "title" => get_the_title(),"alt" => get_the_title() ));?></a>
        <div>
          <div class="cl-product">
            <p class="uppercase text-center">
              <span>NU:RO Watch</span>
            </p>
            <p class="uppercase text-center">
              <span>
				  	<a href="<?php the_permalink() ;?>">
					  	<?php the_title() ;?>
					</a>
				</span>
            </p class="uppercase">
            <p>
            <span class="price">
				<a href="<?php the_permalink() ;?>">
				
				$	<?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?>
      </a>
      <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
			</span>
      			  <!-- <span>$300</span> -->
              
	
            </p>
          </div>
          <div>
            <p class="cl-stock">
              <span>In Stock</span>
            </p>
          </div>
        </div>
      </div>
      <?php endwhile ; wp_reset_query() ;?>

  <div class="ms-unset-h" style="height: 1600px; overflow: hidden;">
    <div class="row mg-top-170 sm-wrap">
      <div class="col-6 ms-full-w">
        <img src="http://washi-mask.com/wp-content/uploads/2020/07/kt-08.jpg" />
      </div>

      <div class="col-6 ms-full-w">
        <div class="uppercase line-height-60 pd-top-270 font-size-80 ms-fs-35" >
          <div>
          <span>RETURN &</span>
          </div>
          <div>
          <span>Shipping</span>
          </div>
          <div>
          <span>Policy</span>
          </div>

        </div>

        <div class="mg-top-60 font-weight-600 row sm-wrap">
          <div class="mg-right-40">
            <p>
              <span>RETURNS &</span>
              <span>EXCHANGES</span>
            </p>
          </div>
          <div class="policy-content">
            <p>
              <span>YOU ARE WELCOME TO RETURN ALL UNWORN AND UNALTERED ITEMS WITHIN 60 DAYS OF THE ORIGINAL PURCHASE DATE. IF YOU CHOOSE TO RETURN AN ITEM, $30 WILL BE WITHHELD FROM YOUR REFUND TO COVER SHIPPING AND RESTOCKING. ALTERNATIVELY, YOU ARE WELCOME TO COME BY OUR STUDIO IN BROOKLYN TO RETURN YOUR ITEMS AT NO COST TO YOU.</span>
            </p>
            <p>
              <span>If the item is listed as final sale, it is not eligible for a return. International orders shipped outside of the US cannot be returned.</span>
            </p>
            <p>
              <span>If the item is listed as final sale, it is not eligible for a return. International orders shipped outside of the US cannot be returned.</span>
            </p>
          </div>
        </div>

        <div class="mg-top-60 font-weight-600 row sm-wrap">
          <div class="mg-right-40">
            <p>
              <span>RETURNS &</span>
              <span>EXCHANGES</span>
            </p>
          </div>
          <div class="policy-content">
            <p>
              <span>YOU ARE WELCOME TO RETURN ALL UNWORN AND UNALTERED ITEMS WITHIN 60 DAYS OF THE ORIGINAL PURCHASE DATE. IF YOU CHOOSE TO RETURN AN ITEM, $30 WILL BE WITHHELD FROM YOUR REFUND TO COVER SHIPPING AND RESTOCKING. ALTERNATIVELY, YOU ARE WELCOME TO COME BY OUR STUDIO IN BROOKLYN TO RETURN YOUR ITEMS AT NO COST TO YOU.</span>
            </p>
            <p>
              <span>If the item is listed as final sale, it is not eligible for a return. International orders shipped outside of the US cannot be returned.</span>
            </p>
            <p>
              <span>If the item is listed as final sale, it is not eligible for a return. International orders shipped outside of the US cannot be returned.</span>
            </p>
          </div>
        </div>

      </div>
    </div>

  </div>
	</main>
	<footer class="full-width">
    <div class="row uppercase pd-top-140 container sm-wrap">
      <div class="ms-full-w" style="width: 28%">
        <p>
          <span class="font-size-80">About</span>
        </p>
        <div class="about-1 ms-display-none">
          <p class="about-1-title">
            <span>Vikenty Gryaznov</span>
          </p>
          <p>
            <span>Vikenty Gryaznov</span>
          </p>
          <p>
            <span>Vikenty Gryaznov</span>
          </p>
          <p>
            <span>Vikenty Gryaznov</span>
          </p>
          <p>
            <span>Vikenty Gryaznov</span>
          </p>
        </div>
      </div>

      <div class="ms-full-w" style="width: 72%" class="font-size-44 line-height-33">
        <p>
          <span class="ms-fs-18 font-size-44">
          As a labor of love, Anton Repponen of the design studio ANTON & IRENE in New York designed the minimalist analog NU:RO watch. The watch has two dials, one with hours at the top and the other with minutes at the bottom. When they rotate, the current time is shown inside the hourglass. 
          </span>
        </p>
        <p>
          <span class="ms-fs-18 font-size-44">
          As a labor of love, Anton Repponen of the design studio ANTON & IRENE in New York designed the minimalist analog NU:RO watch. The watch has two dials, one with hours at the top and the other with minutes at the bottom. When they rotate
          </span>
        </p>
        <p>
          <span class="ms-fs-18 font-size-44">
          As a labor of love, Anton Repponen of the design studio ANTON & IRENE in New York designed the minimalist analog NU:RO watch. The watch has two dials
          </span>
        </p>
      </div>
    </div>
    
    <div class="container">
      <img class="img-3"  src="http://washi-mask.com/wp-content/uploads/2020/07/Untitled-1a.jpg"/>
    </div>

    <div class="container row pd-top-140 sm-wrap">
      <div style="width: 27%" class="font-size-80 uppercase ms-full-w ms-fs-35 ms-flex">
        <div>
          <span>In The</span>
        </div>
        <div>
          <span class="ms-mg-l-10">Media</span>
        </div>
      </div>

      <div class="media ms-fs-14 ms-fw-5 uppercase ms-full-w sm-wrap" style="width: 73%">
        <div>
          <p class="">
            <a>
              <span class="color-white">
                Award-Winning Watch That Displays Time In An Hourglass Is Your Next Arm-Candy
              <span>
            </a>
          </p>
          <p>
            <span class="color-white">By Design Taxi</span>
          </p>
        </div>
        <div>
          <p>
            <a>
              <span class="color-white">
                Award-Winning Watch That Displays Time In An Hourglass Is Your Next Arm-Candy
              <span>
            </a>
          </p>
          <p>
            <span class="color-white">By Design Taxi</span>
          </p>
        </div>
        <div>
          <p>
            <a>
              <span class="color-white">
                Award-Winning Watch That Displays Time In An Hourglass Is Your Next Arm-Candy
              <span>
            </a>
          </p>
          <p>
            <span class="color-white">By Design Taxi</span>
          </p>
        </div>
      </div>
    </div>
  </footer>

<?php get_footer(); ?>
