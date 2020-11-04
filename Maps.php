<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>코로나-19 강원도 내 해외 입국자 현황 분석 및 시각화</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/gomfavicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
  <!--==========================
  Header
  ============================-->
  
  
  <header id="header">

    

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>Gangwon Covid-19</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Main</a></li>
          <li><a href="#hachamap">하차지 이동</a></li>
          <li><a href="#solomap">격리지 이동</a></li>
          <li><a href="#nationmap">출국국가</a></li>
          <li class="active"><a href="#intro">UP</a></li>
        </ul>
		
	
		
		  

  
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Covid-19<br>강원도 해외입국자<br><span>지도 분석</span></h2>
          <div>
            <a href="#hachamap" class="btn-get-started scrollto">시작하기</a>
          </div>
        </div>
  
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/Pictures/Graphs/Graphmain.jpg" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
     하차지 이동 현황 지도그래프
    ============================-->
   <section id="hachamap"><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Maps/hachamap.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>격리지별 분석(하차지 이동 현황)</h4>
			    <i class="fa fa-object-group" style="color: #ffb774;"></i> <b>본 하차지 현황 데이터는 인천국제공항 간 수송 버스의 중간 하차지 및 최종 종착지(하차지)를 반영환 결과임</b><br><br>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도 유입 해외 입국자들의 하차지 이동 현황을 분석한 후 지도그래프로 시각화한 결과</b><br>
			  <li> 원주 1,814명으로 가장 높게 나타났으며</li>
			  <li> 양구 14명으로 가장 낮게 나타남</li>
			  <li> 강원 지역 외의 도착 후 재유입 인원들은 기타로 분류(4명)</li>
			  <li> 버스 및 자차이용 건으로 버스 이용자 수로 인한 하차지 이동자가 많음</li><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>지도에 동그라미가 강원도의 각 시군별 위치이고 시군별 인원수에 따라 색을 다르게 표시함</b><br>
			<li> 0명부터 10명 까지는 초록색<br></li>
			<li> 10명부터 300명 까지는 파란색<br></li>
			  <li> 300명부터 700명 까지는 노란색, 그 이상은 빨간색으로 표시<br></li>
          </div>
        </div>
      </div>
    </section><!-- #about -->
	  
	<!--==========================
     격리지 이동 지도그래프
    ============================-->
	  
	<section id="solomap"><br><br>
      <div class="container">
		  
        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Maps/solomap.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>격리지별 분석(격리지 이동 현황)</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>인천국제공항을 통해 입국한 해외 입국자 중 강원도 지역으로 격리지를 선택하고 이동한 현황을 분석한 후 지도그래프로 시각화한 결과</b><br>
			  <li>원주 1,643명으로 제일 높게 나타났으며,</li>
			  <li>춘천 1,490명</li>
			  <li>강릉 1,013명</li>
			  <li>평창 421명</li>
			  <li>속초 399명 등의 순서로 인구수가 집중됨</li><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>지도에 동그라미가 강원도의 각 시군별 위치이고 시군별 인원수에 따라 색을 다르게 표시함</b><br>
			<li> 0명부터 10명 까지는 초록색<br></li>
			<li> 10명부터 300명 까지는 파란색<br></li>
			  <li> 300명부터 700명 까지는 노란색, 그 이상은 빨간색으로 표시<br></li>
              <br><br>
              
            <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>지역별 하차지, 격리지 현황 표</b><br>
              
<table width=600 border=1>
	<tr>
	<th>시군</th>
	<th>하차지 선택인원(명)</th>
    <th>격리지 선택인원(명)</th>    
	</tr>



<?php
	$conn = mysqli_connect("localhost", "root", "123456", "numdb");

	$sql = "select * from maptable";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) {
		echo "<tr><td>{$row['region']}</td><td>{$row['hacha']}</td><td>{$row['chadan']}</td></tr>";
    }
	
	


?>
</table>
	
	


  
              
          </div>
          
        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
     출국국가 지도그래프
    ============================-->
   <section id="nationmap"><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Maps/nationmap.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>주요 입국 국가(출국 국가 상위 30개국 기준)별 분석</h4>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>총 120개 국가들 중 상위 30개국 주요 출국 국가를 분석한 후 지도그래프로 시각화한 결과</b><br>
			  <li> 미국이 1,849명으로 가장 높게 나타남</li>
			  <li> 체코가 30명으로 가장 낮게 나타남</li>
          </div>
        </div>

            </div>
    </section><br><br><!-- #about -->
	  

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

	</main>
	</body>
</html>
