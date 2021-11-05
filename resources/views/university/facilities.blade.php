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
<link rel="stylesheet" href="{{ asset('css/colors/main.css') }}" />
<!-- <link rel="stylesheet" href="{{ asset('css/colors/orange.css') }}" /> -->
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
            <li><a href="{{url('/index')}}" class="dropdown-toggle">หน้าแรก</a></li>
            <li class="dropdown"><a href="{{url('/about')}}" class="dropdown-toggle">เกี่ยวกับเรา</a>
            <ul class="dropdown-menu five" role="menu">
              <li><a href="{{url('/vision')}}" class="dropdown-toggle">วิสัยทัศน์</a></li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle">ภาพ</a></li>
            <!-- <li><a href="{{url('/blog')}}" class="dropdown-toggle">Blog</a></li> -->
            <li><a href="{{url('/staff')}}" class="dropdown-toggle">คณะกรรมการบริหารหลักสูตร</a></li>
            <li class="dropdown"> <a class="dropdown-toggle active">เพิ่มเติม</a>
              <ul class="dropdown-menu five" role="menu">
              <li><a href="{{url('/facilities')}}" class="dropdown-toggle">สิ่งอำนวยความสะดวก</a></li>
              <li><a href="{{url('/admissions')}}" class="dropdown-toggle">การรับสมัคร</a></li>
                <!-- <li> <a href="{{url('/courses')}}">Courses</a> </li> -->
                <!-- <li> <a href="{{url('/accommodation')}}">Accommodation</a> </li> -->
                <!-- <li> <a href="{{url('/jobs')}}">Jobs</a> </li> -->
                <!-- <li> <a href="{{url('/student-portal')}}">Student portal</a> </li> -->
                <li> <a href="{{url('/research')}}">วิจัย</a> </li>
                <li> <a href="{{url('/library')}}">คลังความรู้</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/contact')}}" class="dropdown-toggle">ติดต่อ</a></li>
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
            <h3>Facilities</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/index')}}">Home</a><i> / </i> Facilities </div>
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
        <div class="col-md-9 col-centered text-center">
          <h4 class="text-pink-3 roboto-slab font-weight-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci.</h4>
          <br/><br/>
        </div>
        <h1>ฐานข้อมูลออนไลน์</h1>
          <ol>
            <li>Thai LIS</li>
            <li>ProQuest</li>
            <li>SpringerLink</li>
            <li>ScienceDirect</li>
            <li>ACS Journals</li>
            <li>IEEEXplore</li>
            <li>Emerald Management Xtra, EMX PLUS</li>
            <li>ACM Digital Library</li>
            <li>EBSCO</li>
            <li>ISI Web of Science</li>
            <li>ERIC</li>
            <li>Cinahl Plus with Fulltext</li>
          </ol>
        <h1>หนังสืออิเล็กทรอนิกส์</h1>
        <p>ประกอบด้วย ดุษฎีนิพนธ์ วิทยานิพนธ์ ภาคนิพนธ์ ผลงานวิจัย สิ่งพิมพ์ทางการศึกษา หนังสือหายาก หนังสือประกอบการเรียนการสอนของมหาวิทยาลัยสวนดุสิต</p>
        <h1>ระบบการเรียนการสอนออนไลน์</h1>
        <h1>ระบบกฤตภาคออนไลน์</h1>
        <h1>ห้องปฏิบัติการคอมพิวเตอร์</h1>
          <ul>
            <li>ห้อง 11201 อาคาร 11 ชั้น 2 มหาวิทยาลัยสวนดุสิต จำนวน 80 เครื่อง</li>
            <li>ห้อง 11204 อาคาร 11 ชั้น 2 มหาวิทยาลัยสวนดุสิต จำนวน 90 เครื่อง</li>
            <li>ห้อง 11305 อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 40 เครื่อง</li>
            <li>ห้อง 11306 อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 40 เครื่อง</li>
            <li>ห้อง 11307 อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 40 เครื่อง</li>
            <li>ห้อง 11308 อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 40 เครื่อง</li>
            <li>ห้อง Training อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 40 เครื่อง</li>
            <li>ห้อง Self-Study อาคาร 11 ชั้น 3 มหาวิทยาลัยสวนดุสิต จำนวน 30 เครื่อง</li>
          </ul>
        <h1>ระบบเทคโนโลยีสารสนเทศเพื่อการศึกษา</h1>
          <ul>
            <li>Suan Dusit Internet Broadcasting : SDIB</li>
            <li>e-Learning</li>
            <li>WBSC System</li>
          </ul>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        
        <div class="col-md-6 bmargin">
          <h5 class="roboto-slab font-weight-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus</p>
          <br/>
          <ul class="iconlist dark">
            <li><i class="fa fa-check"></i> Nullam turpis Cras dapibus orci rutrum </li>
            <li><i class="fa fa-check"></i> Etiam enim Suspendisse imperdiet cursus nisi Maecenas </li>
          </ul>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">Read more</a></div>
          
          <div class="col-md-6 bmargin"><img src="http://placehold.it/800x500" alt="" class="img-responsive"/></div>
          
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="col-md-6 bmargin"><img src="http://placehold.it/800x500" alt="" class="img-responsive"/></div>
        <div class="col-md-6 bmargin">
          <h5 class="roboto-slab font-weight-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus</p>
          <br/>
          <ul class="iconlist dark">
            <li><i class="fa fa-check"></i> Nullam turpis Cras dapibus orci rutrum </li>
            <li><i class="fa fa-check"></i> Etiam enim Suspendisse imperdiet cursus nisi Maecenas </li>
          </ul>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">Read more</a></div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        
        <div class="col-md-6 bmargin">
          <h5 class="roboto-slab font-weight-4">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </h5>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. Vestibulum ante ipsum primis in faucibus</p>
          <br/>
          <ul class="iconlist dark">
            <li><i class="fa fa-check"></i> Nullam turpis Cras dapibus orci rutrum </li>
            <li><i class="fa fa-check"></i> Etiam enim Suspendisse imperdiet cursus nisi Maecenas </li>
          </ul>
          <br/>
          <a class="btn btn-pink-3 btn-round" href="#">Read more</a></div>
          
          <div class="col-md-6 bmargin"><img src="http://placehold.it/800x500" alt="" class="img-responsive"/></div>
          
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- end section -->
  
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
