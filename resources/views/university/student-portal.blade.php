<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<!--<![endif]-->
<!--<![endif]-->
<html lang="en">
<head>
<title>Data Science & Analytics @SDU</title>
<meta charset="utf-8">
<!-- Meta -->
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="" />
<meta name="description" content="" />

<!-- this styles only adds some repairs on idevices  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="{{ asset('js/bootstrap/bootstrap.min.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('js/mainmenu/menu.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/default.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/layouts.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/shortcodes.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" media="screen" href="{{ asset('css/responsive-leyouts.css') }}" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/Simple-Line-Icons-Webfont/simple-line-icons.css') }}" media="screen" />
<link rel="stylesheet" href="{{ asset('css/et-line-font/et-line-font.css') }}">



<!-- Remove the below comments to use your color option -->
<link rel="stylesheet" href="{{ asset('css/colors/orange.css') }}" />
<!--<link rel="stylesheet" href="{{ asset('css/colors/green.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/pink.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/red.css') }}" />-->
<!-- <link rel="stylesheet" href="{{ asset('css/colors/purple.css') }}" /> -->
<!--<link rel="stylesheet" href="{{ asset('css/colors/bridge.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/yellow.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/violet.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/cyan.css') }}" />-->
<!--<link rel="stylesheet" href="{{ asset('css/colors/mossgreen.css') }}" />-->

</head>

<body>
  
<div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="{{url('/index')}}" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
            <li><a href="{{url('/index')}}" class="dropdown-toggle">Home</a></li>
            <li><a href="{{url('/about')}}" class="dropdown-toggle">About</a></li>
            <li><a href="{{url('/facilities')}}" class="dropdown-toggle">Facilities</a></li>
            <li><a href="{{url('/admissions')}}" class="dropdown-toggle">Admissions</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle active">More +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses')}}">Courses</a> </li>
                <li> <a href="{{url('/accommodation')}}">Accommodation</a> </li>
                <li> <a href="{{url('/jobs')}}">Jobs</a> </li>
                <li> <a href="{{url('/student-portal')}}">Student portal</a> </li>
                <li> <a href="{{url('/research')}}">Research</a> </li>
                <li> <a href="{{url('/library')}}">Library</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle">Gallery</a></li>
            <li><a href="{{url('/blog')}}" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{url('/contact')}}" class="dropdown-toggle">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
  
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Student Portal</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/index')}}">Home</a><i> / </i><a href="{{url('/courses')}}">More</a><i> / </i> Student Portal </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
      
      <h3 class=" roboto-slab uppercase less-mar3">Student Portal</h3>
            <div class="title-line-9 less-margin align-center"></div>
            <div class="clearfix"></div>
            
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Career development</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Venenatis Quis</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Praesent Odio Tellus</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="divider-line solid light opacity-7"></div>
        <div class="col-divider-margin-4"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Ultrices Rhoncus</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Vivamus Amet Felis</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="http://placehold.it/400x200" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Pellentesque Sapien </a></h4>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue Aliquam ornare hendrerit augue</p>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">View Details</a>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-centered text-center">
          <h3 class="less-mar3 roboto-slab text-white text-center font-weight-3">Get Many More Features With Hasta</h3>
          <br/>
          <p class="text-white">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus.</p>
          <br/>
          <a class="btn btn-border white btn-large" href="#">Purchase now</a> </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-fulldark sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Information About</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <div class="item-holder">
            <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">Recent Posts</h4>
            <div class="footer-title-bottomstrip"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3 nopadding roboto-slab font-weight-3 nopadding"><a href="#">Clean And Modern</a></h6>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
            </div>
            <div class="divider-line solid dark margin opacity-6"></div>
            <div class="clearfix"></div>
            <div class="image-left"><img src="http://placehold.it/80x80" alt=""/></div>
            <div class="text-box-right">
              <h6 class="text-white less-mar3 roboto-slab font-weight-3 nopadding"><a href="#">Layered PSD Files</a></h6>
              <p>Lorem ipsum dolor sit</p>
              <div class="footer-post-info"> <span>By John Doe</span><span> May 20</span> </div>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item-->
        
        <div class="col-md-3 clearfix">
          <h4 class="uppercase footer-title less-mar3 roboto-slab font-weight-3">quick links</h4>
          <div class="clearfix"></div>
          <div class="footer-title-bottomstrip"></div>
          <ul class="usefull-links no-border">
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Aliquam porttitor vestibulum ipsum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Lobortis enim nec nisi</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Placerat bibendum</a></li>
            <li><a href="#"><i class="fa fa-angle-right"></i> Ullamcorper odio nec turpis</a></li>
          </ul>
        </div>
        <!--end item--> 
        
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="section-copyrights sec-moreless-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12"> <span>Copyright © 2020 <a href="https://1.envato.market/hasta-html-by-codelayers">hasta</a> By <a href="https://1.envato.market/codelayers">Codelayers</a> | All rights reserved.</span></div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <a href="#" class="scrollup pink-3"></a><!-- end scroll to top of the page--> 
</div>
<!-- end site wraper --> 

<!-- ============ JS FILES ============ --> 

<script type="text/javascript" src="js/universal/jquery.js"></script> 
<script src="js/bootstrap/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/mainmenu/customeUI.js"></script> 
<script src="js/scrolltotop/totop.js"></script> 
<script src="js/mainmenu/jquery.sticky.js"></script> 
 
<script src="js/scripts/functions.js" type="text/javascript"></script>
</body>
</html>