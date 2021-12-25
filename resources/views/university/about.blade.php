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
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

<!-- Google fonts - witch you want to use - (rest you can just remove) -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Chakra+Petch:400,100,300,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Stylesheets -->
<link rel="stylesheet" media="screen" href="js/bootstrap/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="js/mainmenu/menu.css" type="text/css" />
<link rel="stylesheet" href="css/default.css" type="text/css" />
<link rel="stylesheet" href="css/layouts.css" type="text/css" />
<link rel="stylesheet" href="css/shortcodes.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" media="screen" href="css/responsive-leyouts.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/Simple-Line-Icons-Webfont/simple-line-icons.css" media="screen" />
<link rel="stylesheet" href="css/et-line-font/et-line-font.css">



<!-- <link rel="stylesheet" type="text/css" href="js/smart-forms/smart-forms.css"> -->

<!-- Remove the below comments to use your color option -->
<link rel="stylesheet" href="css/colors/main.css" />
<style>
  h1 {
    font-family: Chakra Petch, sans-serif;
    font-weight: bold;
    padding-top: 30px;
  }
  li {
    font-family: Chakra Petch, sans-serif;
    font-size: 22px;
    padding-bottom: 10px;
    padding-top: 10px;
  }
  p {
    font-family: Chakra Petch, sans-serif;
    font-size: 22px;
    padding-left: 40px;
  }
  * {
    scroll-behavior: smooth;
  }
  #toc_container {
    background: #f9f9f9 none repeat scroll 0 0;
    border: 1px solid #aaa;
    display: table;
    /* font-size: 85%; */
    /* margin-bottom: 1em; */
    /* padding: 20px; */
    width: auto;
    display: block;
    color: white;
    text-align: center;
    /* padding: 16px; */
    text-decoration: none;
  }
  .toc_title {
    font-weight: 700;
    text-align: center;
  }
  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    
  }
  li {
    float: left;
}
li:hover {
  text-decoration: underline;
}
  #toc_container li, #toc_container ul, #toc_container ul li{
    list-style: outside none none !important;
    
  }
  .toc_list {
    margin-left: 10vw;
  }
  .toc_list li {
    margin-left: 2vw;
  }
</style>
</head>

<body>
  
<div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="/index" class="navbar-brand less-top-padding"><img src="images/logo.jpg" style="height: 50px;"alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
            <li><a href="/index" class="dropdown-toggle">หน้าแรก</a></li>
            <li class="dropdown"><a href="/about" class="dropdown-toggle active">เกี่ยวกับเรา</a>
            <ul class="dropdown-menu five" role="menu">
              <li><a href="/history" class="dropdown-toggle">ประวัติหลักสูตร</a></li>
              <li><a href="/vision" class="dropdown-toggle">วิสัยทัศน์</a></li>  
              </ul>
            </li>
            <li><a href="/gallery" class="dropdown-toggle">ภาพ</a></li>
            <li><a href="/staff" class="dropdown-toggle">คณะกรรมการบริหารหลักสูตร</a></li>
            <li class="dropdown"> <a class="dropdown-toggle">เพิ่มเติม</a>
              <ul class="dropdown-menu five" role="menu">
              <li><a href="/facilities" class="dropdown-toggle">สิ่งอำนวยความสะดวก</a></li>
              <li><a href="/admissions" class="dropdown-toggle">การรับสมัคร</a></li>
                <li> <a href="/research">วิจัย</a> </li>
                <li> <a href="/library">คลังความรู้</a> </li>
              </ul>
            </li>
            <li><a href="/contact" class="dropdown-toggle">ติดต่อ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
  <div id="toc_container">
  <!-- <div id="toc_container" style="position: relative; float: right;"> -->
      <p class="toc_title">Contents</p>
      <ul class="toc_list">
        <li><a href="#color">สีประจำหลักสูตร</a>
        <li><a href="#logo">โลโก้ประจำหลักสูตร</a>
        <li><a href="#scholarship">ทุนต่าง ๆ</a>
        <li><a href="#treatise">หนังสือ / ตำรา</a>
        <li><a href="#published">ผลงานตีพิมพ์</a>
        <li><a href="#RESEARCHAREAS">หัวข้องานวิจัย</a>
        <li><a href="#training">อบรม</a>
        <li><a href="#studentwork">ผลงานนักศึกษา</a>
      </ul>
    </div>
    <div class="clearfix"></div>
  <section>
    <div class="container">
    
  <h1 id="color">สีประจำหลักสูตร</h1>
  <p>สีชมพู</p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="logo">โลโก้ประจำหลักสูตร</h1>
  <p></p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="scholarship">ทุนต่าง ๆ</h1>
  <p></p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="treatise">หนังสือ / ตำรา</h1>
  <p></p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="published">ผลงานตีพิมพ์</h1>
  <ol>
  <li>อาจารย์ ดร.ศิริลักษณ์ หล่อพันธ์มณี
    <ul>
      <li>
          Siriluck Lorpunmanee. (2017). Dynamic Resources Selection for Distributed Visualization Pipeline Formation on Grid Environments. Advanced Information Sciences and Service Sciences (AISS). 9(3): 16-23
      </li>
    </ul>
  </li>
<li>ผู้ช่วยศาสตราจารย์ ดร.วิชชา ฉิมพลี
  <ul>
    <li>
      ประภัสสร วงษ์ดี, เสกสรร แย้มพินิจ, โสพล มีเจริญ และวิชชา ฉิมพลี. (2560). การวิเคราะห์หาประสิทธิผลรูปแบบการเรียนรู้เพื่อพัฒนาความสามารถด้านการวิจัยของนักศึกษาครูช่างอุตสาหกรรม (Analysis of Learning Effectiveness to Enhance Research Ability of Pre-service Teachers in Industrial Technology Education). วิจัยและพัฒนา มจธ. 39(4): 597-614.
    </li>
    <li>Witcha Chimphlee. (2016). RI-MFART: An Intrusion Detection System based on Combining Rule Induction Analysis and Modified Fuzzy ART Clustering. Advances in Information Sciences and Services Sciences (AISS). 8(2): 9-23.</li>
    <li>Surasit Songma, Witcha Chimphlee, Kiattisak Maichalernnukul and Parinya Sanguansat. (2013). Intrusion Detection through Rule Induction Analysis. Advances in Information Sciences and Service Sciences (AISS). 5(11): 187-194.</li>
    <li>Surasit Songma, Witcha Chimphlee, Kiattisak Maichalernnukul and Parinya Sanguansat. (2012). Implementation of Fuzzy c-Means and Outlier Detection for Intrusion Detection with KDD Cup 1999 Data Set. International Journal of Engineering Research and Development. 2(2): 44-48.</li>
</ul>
<li>ผู้ช่วยศาสตราจารย์ ดร.ศิริพร ฉิมพลี
  <ul>
      <li>
        Thanakorn Pamutha, Siriporn Chimphlee, Chom Kimpan and Parinya Sanguansat. (2014). Web Page Access Prediction on Server Side. Journal of Convergence Information Technology (JCIT). 9(5): 81-91.
      </li>
<li>Thanakorn Pamutha, Siriporn Chimphlee, Chom Kimpan and Parinya Sanguansat. (2013).</li>
<li>Effective Sequence Representation in Predicting Web Page Accessibility.</li>
<li>Advances in Information Sciences and Service Sciences (AISS). 5(12): 168-179.</li>
<li>Thanakorn Pamutha, Chom Kimpan, Siriporn Chimplee and Parinya Sanguansat. (2012). Improving Web Page Prediction Using Default Rule Selection. International Journal of Advanced Computer Science and Applications (IJACSA). 3(11): 159-164.</li>
</ul>
<li>อาจารย์ ณรงค์ฤทธิ์ ภิรมย์นก
  <ul>
  <li>Narongrit Piromnok. (2016). Problem-based Teaching to Promote Skill in Communication and use of Information Technology by Students Majoring in Information Technology. ASEAN Journal of Education. 2(1): 23-32.</li>
</ul>
<li>ผู้ช่วยศาสตราจารย์ วัชรากรณ์ เนตรหาญ
  <ul><li>
วัชรากรณ์ เนตรหาญ. (2559). การเปรียบเทียบประสิทธิภาพของโปรโตคอลที่ใช้ในดาวเทียมบริดแบนด์ไฮบริด. วารสารวิจัย มสด สาขาวิทยาศาสตร์และเทคโนโลยี. 9(3): 63-80.
</li></ul>
</ol>
<div class="divider-line solid light opacity-7 "></div>
  <h1 id="RESEARCHAREAS">หัวข้องานวิจัย</h1>
  <p>Artificial Intelligence and Intelligent Systems</p>
  <p>นักวิจัยวิจัย</p>
  <p>ดร.ศิริลักษณ์ หล่อพันธ์มณี</p>
  <p>Data Mining and Information Retrieval</p>
  <p>นักวิจัยวิจัย</p>
  <p>ผศ.ดร.ศิริพร ฉิมพลี</p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="training">อบรม</h1>
  <p></p>
  <div class="divider-line solid light opacity-7 "></div>
  <h1 id="studentwork">ผลงานนักศึกษา</h1>
  <ul>
    <li>Chadin Chaipornpisuth</li>
    <ol>
      <li><a href="#">Z</a></li>
      <li><a href="#">X</a></li>
      <li><a href="#">C</a></li>
      <li><a href="#">V</a></li>
    </ol>
    <li>Chadin Chaipornpisuth</li>
    <li>Chadin Chaipornpisuth</li>
    <li>Chadin Chaipornpisuth</li>
    <li>Chadin Chaipornpisuth</li>
  <ul>
  <div class="divider-line solid light opacity-7 "></div>

  </div>
  </section>

  
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
