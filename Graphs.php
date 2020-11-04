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
          <li><a href="#Graphs12">해외유입자/ 성별</a></li>
          <li><a href="#Graphs34">연령대별/ 출국국가</a></li>
          <li><a href="#Graphs5">하차지/ 격리지이동</a></li>
          <li><a href="#Graphs67">유학생/ 시간대별</a></li>
		  <li><a href="#Graphs89">강원도민/ 내외국인</a></li>
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
          <h2>Covid-19<br>강원도 해외입국자<br><span>그래프 분석</span></h2>
          <div>
            <a href="#Graphs12" class="btn-get-started scrollto">시작하기</a>
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
     1) 월별 해외유입자, 2)성별(남, 여) 기준 분석
    ============================-->
      
   
              
          
      
              
   <section id="Graphs12"><br><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Graphs/month.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>해외유입자 이동수단 분석(자차, 버스)</h4>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>월별 해외 유입자 이동수단을 분석한 후 막대그래프로 시각화한 결과</b><br>
			  <li> 자차는 8월이 732명으로 제일 높게 나타났고 집계중인 9월을 제외하고 5월이 539명으로 제일 낮게 나타남.</li>
			  <li> 버스는 4월이 905명으로 제일 높게 나타났고 집계중인 9월을 제외하고 7월이 561명으로 제일 낮게 나타남.</li><br>
              
              
              
              <i class="fa fa-object-group" style="color: #f058dc;"></i> <b>월별 탑승인원 표</b><br>
<table width=600 border=1>
	<tr>
	<th>월</th>
	<th>자차 인원수(명)</th>
    <th>버스 인원수(명)</th>
    <th>전체 인원수(명)</th>    
	</tr>

<?php
	$conn = mysqli_connect("localhost", "root", "123456", "numdb");

	$sql = "select * from monthtable";
	$result = mysqli_query($conn, $sql);
	
	while($row = mysqli_fetch_array($result)) {
		echo "<tr><td>{$row['Month']}</td><td>{$row['PopulationCar']}</td><td>{$row['PopulationBus']}</td><td>{$row['PopulationAll']}</td></tr>";
    }
	

?>

</table>

              
              
          </div>
        </div>

          
          
        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Graphs/sex.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>성별(남, 여) 기준 분석</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도를 격리지로 선택한 후 이동한 전체 사람들 중 성 비율을 분석한 후 원형그래프로 시각화한 결과</b>
				<li>남성 50.81%</li> <li>여성 49.19%</li> <li>남성이 1.62% 더 많은 비율로 나타남</li><br> 
			  
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>자차를 이용하여 격리지로 이동한 사람들 중 성 비율을 분석한 후 원형 그래프로 시각화한 결과</b>
				<li>남성 49.68%</li> <li>여성 50.32%</li> <li>여성이 0.64% 더 많은 비율로 나타남</li><br>
				
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>버스를 이용하여 격리지로 이동한 사람들 중 성 비율을 분석한 후 원형 그래프로 시각화한 결과</b>
				<li>남성 52.54%</li> <li>여성 47.46%</li> <li>남성이 5.08% 더 많은 비율로 나타남</li> 
          </div>
          
        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
     3)연령대별 기준 분석, 4)주요 입국 국가(출국 국가 상위 30개국 기준)별 분석
    ============================-->
   <section id="Graphs34"><br><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Graphs/age.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>연령대별 기준 분석</h4>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>생년월일 기준 및 연령별 구분을 분석한 후 꺾은선 그래프로 시각화한 결과</b><br>
			  <li> 20대 1,922명</li>
			  <li> 30대 1,333명</li>
			  <li> 40대 1,137명</li>
			  <li> 50대 865명</li>
			  <li> 60대 502명 등의 순서로 인구의 연령대가 집중됨</li><br>
			  
			 <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>연령별 분석 및 시각화 결과에서 보는 바와 같이 연령층이 20대, 30대 그리고 40대 등의 순서대로 가장 높은 이동 인구 비율을 나타낸 것은 아무래도 젊은 연령층이 해외 이동량이 많다는 것을 가장 확실하게 보여주는 사례임</b><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>특이한 것은 영유아와 60대 인구의 해외 이동 비율이 비슷하게 나타남</b><br>
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Graphs/nation.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>주요 입국 국가(출국 국가 상위 30개국 기준)별 분석</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>총 120개 국가들 중 상위 30개국 주요 출국 국가를 분석한 후 지도 및 그래프로 시각화한 결과</b>
			  <li>미국이 1,849명으로 가장 높게 나타남</li>
			  <li>체코가 30명으로 가장 낮게 나타남</li>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->
	  
    <!--==========================
      격리지별 분석(하차지 이동 현황, 격리지 이동 현황)
    ============================-->
      <section id="Graphs5"><br><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Graphs/hacha.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>격리지별 분석(하차지 이동 현황)</h4>
			    <i class="fa fa-object-group" style="color: #ffb774;"></i> <b>본 하차지 현황 데이터는 인천국제공항 간 수송 버스의 중간 하차지 및 최종 종착지(하차지)를 반영환 결과임</b><br><br>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도 유입 해외 입국자들의 하차지 이동 현황을 분석한 후 그래프로 시각화한 결과</b><br>
			  <li> 원주 1,814명으로 가장 높게 나타났으며</li>
			  <li> 양구 14명으로 가장 낮게 나타남</li>
			  <li> 강원 지역 외의 도착 후 재유입 인원들은 기타로 분류(4명)</li>
			  <li> 버스 및 자차이용 건으로 버스 이용자 수로 인한 하차지 이동자가 많음</li>
			  
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Graphs/solo.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>격리지별 분석(격리지 이동 현황)</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>인천국제공항을 통해 입국한 해외 입국자 중 강원도 지역으로 격리지를 선택하고 이동한 현황을 분석한 후 막대그래프로 시각화한 결과</b><br>
			  <li>원주 1,643명으로 제일 높게 나타났으며,</li>
			  <li>춘천 1,490명</li>
			  <li>강릉 1,013명</li>
			  <li>평창 421명</li>
			  <li>속초 399명 등의 순서로 인구수가 집중됨</li>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      유학생 입국현황 분석, 탑승 시간대별 분석
    ============================-->
      <section id="Graphs67"><br><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Graphs/student.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>유학생 입국 현황 분석</h4>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도로 유입된 해외 입국자 중 전체 유학생의 비율을 분석한 후 원형 그래프로 시각화한 결과</b><br>
			  <li> 해외에서 유입되는 유학생인 사람 15.65%</li>
			  <li> 유학생이 아닌 사람 84.35%</li>
			  <li> 순수 입국 일반인(노약자 및 어린이 포함)이 약 68.8% 더 많게 나타남</li><br>
			  
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도 전체에서 지난 5개월 동안 해외에서 입국한 사람들 중에서 유학생의 비율이 15%를 넘었다는 것은 강원도 내에서도 해외 유학생이 상당수 존재하고 있다는 것을 확증해주고 있음</b><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>유학생을 제외한 입국자 84% 중 순수 입국 일반인(노약자 및 어린이 포함)이 약 69%를 나타내고 있음은 여러 가지 이유로 강원도를 잠시 다녀가거나 하는 등의 사람들이 약 15%라는 것을 말해주고 있음</b><br>
			  
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Graphs/time.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>탑승 시간대별 분석 : 자차 & 버스 이용자 이동시간대별</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>강원도로 유입된 해외 입국자들 중 버스 및 자차 이용자들의 탑승 시간대별 통계를 분석한 후 막대그래프로 시각화한 결과</b><br>
			  <li>자차 : 오후에 1,719명으로 제일 높게 나타났으며, 야간에 344명으로 제일 낮게 나타남</li>
			  <li>버스 : 오전에 1,463며으로 제일 높게 나타났으며, 오후와 야간이 비슷하게 나타남</li><br>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>버스 이용 승차시간이 자차 이용 승차시간보다 대체적으로 높게 나왔는데, 특히 버스 이용 승차 시간의 겨우 오후와 야간이 매우 유사하게 나타남</b>
          </div>
          
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      강원도민, 내외국인
    ============================-->
      <section id="Graphs89"><br><br><br>
      <div class="container">

        <div class="row feature-item">
          <div class="col-lg-6 wow fadeInUp">
            <img src="img/Pictures/Graphs/domin.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
            <h4>타 시도 자가 격리자 강원도 유입 현황 분석</h4>
				<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>타 시도에서 유입된 자가 격리자 현황을 분석한 후 시각화한 결과</b><br>
			  <li> 실 주소지가 강원도민인 자가 격리자 비율은 4,742명(66.84%)</li>
			  <li> 외국인과 타 시도의 자가 격리자 유입 인구수 및 비율은 2,353명(33.16%)으로 나타남</li>
			  <li> 순수 입국 일반인(노약자 및 어린이 포함)이 약 68.8% 더 많게 나타남</li><br>
			  
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>실 주소지가 강원도민인 경우, 해외여행이나 여러 가지 공적, 사적 업무 관계로 해외를 방문한 후 거주지로 다시 복귀하는 경우라 볼 수 있음</b><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>외국인과 타 시도 거주민이 자가 격리지를 강원도로 선택하여 유입한 비율이 약 33%라는 것은 공기 좋고 물 맑은 강원도에서 자가 격리를 시행하면서 건강을 회복하겠다는 의도로 볼 수 있음</b><br>
			  
          </div>
        </div>

        <div class="row feature-item mt-5 pt-5">
          <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <img src="img/Pictures/Graphs/korean.jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
            <h4>내외국인 유입 현황 분석</h4>
			<i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>타 시도에서 유입된 자가 격리자 현황을 분석한 후 시각화한 결과</b><br>
			  <li>내국인의 비율은 5,586명(78.48%)</li>
			  <li>외국인의 비율은 1,526명(21.52%)으로 나타남</li><br>
			  <i class="ion-android-checkmark-circle" style="color: #f058dc;"></i> <b>실 주소지가 강원도민인 경우, 해외여행이나 여러 가지 공적, 사적 업무 관계로 해외를 방문한 후 거주지로 다시 복귀하는 경우라 볼 수 있음</b><br>
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
