<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8"/>
	<title>My Portfolio Site</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage fixed header and footer." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fixed, header,footer, absolute, positioned,css" />
	<meta name="Resource-type" content="Document" />

<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css">
<link rel="stylesheet" type="text/css" href="css/examples.css">
<link rel="stylesheet" type="text/css" href="css/works.css">
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}
	.intro p{
		color: #fff;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}

	/* Fixed header and footer.
	* --------------------------------------- */
	#header{
		position:fixed;
		top:0px;
		left:0px;
		height: 80px;
		width: 100%;
		/*background: #333;*/
		z-index:9;
        color: 
	}
		#header::before{/*검은색 반투명 배경*/
			content: "";
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background-color: #000;
			opacity: 0.6;
		}
	/*로고*/
		#header>h1{
			position: absolute;
			font: 42px/80px Verdana, "sans-serif";
			color: #fff;
			margin: 0;
			padding: 0;
			margin-left: 20px;
		}
	/*메뉴*/
		#header>nav{
			position: absolute;
			right: 0;
		}
		#header>nav>ul>li{
			float: left;
		}
		#header>nav>ul>li>a{
			font-size: 22px;
			line-height: 80px;
			padding: 0 20px;
		}
		
		
		
		
	
	#footer{
		bottom:0px;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu {
		bottom: 80px;
	}
	#infoMenu li a {
		color: #fff;
		z-index: 999;
	}
	/*******************************/
	#section0{
		background:url(images/main.jpg) no-repeat;
		background-size:cover;
	}
	
		
		
	
	/**************************************/
	#section1{/*About*/
		background:url(images/about.jpg) no-repeat;
		background-size:cover;
	}
		#section1 p{
			color: #fff;
		}
	.me{
		position: relative;
		left: -80px;
		top: 100px;
		width:150px;
		height:150px;
		border-radius:50%;
		transform: rotateY(90deg);
		transition: transform .4s ease-out;
	}
	/***************************************/
	#section2{/*works*/
		background:url(images/works.jpg) no-repeat;
		background-size:cover;
	}
	
	#section3{/*Contact*/
		background:url(images/contact.jpg) no-repeat;
		background-size:cover;
	}
		
		.slide{/*가로 슬라이드 페이지*/
			position: relative;/*부모자격*/
		}
		
		/*1번 페이지 글자 타이틀*/
		#mtit{
			position: absolute;
			top: 50%;
			left: 50%;
			width: 950px;
			transform: translate(-50%,-50%);/*중앙*/
			font-family: arial;
			color: #fff;
			text-shadow: 0 0 3px #666;
/*			outline: 1px solid red;*/
		}
		#mtit li{/*각 글자 박스*/
			position: relative;
			top: -50px;
			left: 50px;
			font-size: 3em;
			opacity: 0;
			float: left;
		}
		/*작은타이틀*/
		#stit{
			position: absolute;
			top: 55%;
			left: 150%;
			transform: translateX(-50%);
			font: 1.5em arial;
			color: #fff;
			text-shadow: 0 0 3px #666;
		}
		
		/*작품 링크*/
		#section2 .slide:last-child a::before{/*박스비율*/
			content: "";
			display: block;
			padding-top: 70%;/*세로비율*/
		}
		#section2 .slide:last-child a::after{/*그림자효과*/
			content: "";
			display: block;
			position: absolute;
			width:100%;
			height: 30%;
			bottom: -35%;
			background: radial-gradient(#666,#666 20%,transparent 50%);
		}
		#w01{
			position: absolute;
			top: 30%;
			left: 10%;
			display: block;
			width:20%;
		}
		#w02{
			position: absolute;
			top: 10%;
			right: 40%;
			display: block;
			width:15%;
		}
		#w03{
			position: absolute;
			top: 25%;
			right: 10%;
			display: block;
			width: 8%;
		}
		#w04{
			position: absolute;
			bottom: 10%;
			right: 25%;
			display: block;
			width: 22%;
		}
		#section2 a img{
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border: 2px solid yellow;
			border-radius: 10px;
		}
		#w01:hover{	/*마우스 오버시 애니메이션*/	
			animation: wani1 .3s ease-out infinite alternate;
		}
		#w02:hover{	/*마우스 오버시 애니메이션*/	
			animation: wani2 .3s ease-out infinite alternate;
		}
		#w03:hover{	/*마우스 오버시 애니메이션*/	
			animation: wani3 .3s ease-out infinite alternate;
		}
		#w04:hover{	/*마우스 오버시 애니메이션*/	
			animation: wani4 .3s ease-out infinite alternate;
		}
		/*공통 그림자 애니메이션*/
		#section2 .slide:last-child a#w01:hover::after{	
			animation: shadow1 .3s ease-out infinite alternate;
		}
		#section2 .slide:last-child a#w02:hover::after{	
			animation: shadow2 .3s ease-out infinite alternate;
		}
		#section2 .slide:last-child a#w03:hover::after{	
			animation: shadow3 .3s ease-out infinite alternate;
		}
		#section2 .slide:last-child a#w04:hover::after{	
			animation: shadow4 .3s ease-out infinite alternate;
		}
		
		
		/*작품링크 애니설정*/
		@keyframes wani1{/*첫번째*/
			from{top: 30%;}
			to{top: 28%;}
		}
		@keyframes wani2{/*두번째*/
			from{top: 10%;}
			to{top: 8%;}
		}
		@keyframes wani3{/*세번째*/
			from{top: 25%;}
			to{top: 23%;}
		}
		@keyframes wani4{/*네번째*/
			from{bottom: 10%;}
			to{bottom: 12%;}
		}
		
		@keyframes shadow1{/*그림자1*/
			from{
				bottom: -35%;
				transform: scale(1);
				opacity:1;
			}
			to{
				bottom: -42%;
				transform:scale(0.9);
				opacity: 0.8;
			}
		}
		@keyframes shadow2{/*그림자2*/
			from{
				bottom: -35%;
				transform: scale(1);
				opacity:1;
			}
			to{
				bottom: -45%;
				transform:scale(0.9);
				opacity: 0.8;
			}
		}
		
		@keyframes shadow3{/*그림자3*/
			from{
				bottom: -35%;
				transform: scale(1);
				opacity:1;
			}
			to{
				bottom: -52%;
				transform:scale(0.9);
				opacity: 0.8;
			}
		}
		
		@keyframes shadow4{/*그림자4*/
			from{
				bottom: -35%;
				transform: scale(1);
				opacity:1;
			}
			to{
				bottom: -42%;
				transform:scale(0.9);
				opacity: 0.8;
			}
		}
		
		/*이메일 페이지*/
		.tit2{
			font-size:  38px;
			color: #fff;
		}
		.msgbox{
			position: relative;/*부모자격*/
			width: 50%;
			margin: 0 auto;
			padding: 40px;
			padding-top: 10px;
			margin-top: -20px;
/*			border: 20px solid #090;*/
			border-radius: 10px;
/*			box-shadow: 2px 2px 2px #666;*/
			overflow: hidden;
		}
		.msgbox>*{
			position: relative;
			z-index: 1;
		}
		.msgbox label{
			color: #fff;
			font-size: 0.7em;
		}
		.msgbox input[type=text]{
			width: 440px;
			height: 40px;
			font-size: 0.8em;
		}
		#msg{
			width: 440px;
			font-size: 0.8em;
		}
		#btnsend{
			width: 120px;
			height: 70px;
			border: 2px solid #999;
			border-radius: 5px;
			font-size: 0.8em;
			position: relative;
			z-index: 1;
			cursor: pointer;
		}
		
		/*메시지 테두리 애니메이션용 박스*/
		.inside{
			position: absolute;
			width: 100%;
			height: 100%;
			top: 0;
			left: 0;
		}
		/*메시지 박스에 4개의 선 만들기*/
		.msgbox::before{/*위쪽선*/
			content: "";
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			width: 0%;
			height: 20px;
			background-color: #090;
		}
		.msgbox::after{/*아래쪽선*/
			content: "";
			display: block;
			position: absolute;
			bottom: 0;
			right: 0;
			width: 0%;
			height: 20px;
			background-color: #090;
		}
		.inside::before{/*오른쪽선*/
			content: "";
			display: block;
			position: absolute;
			top: 0;
			right: 0;
			width: 20px;
			height: 0%;
			background-color: #090;
		}
		.inside::after{/*왼쪽선*/
			content: "";
			display: block;
			position: absolute;
			bottom: 0;
			left: 0;
			width: 20px;
			height: 0%;
			background-color: #090;
		}
		
		/*선그리기 애니메이션 class*/
		.line_ani1::before{/*위쪽선*/
			animation: hani .3s linear forwards;
		}
		.line_ani1::after{/*아래쪽선*/
			animation: hani .3s linear .6s forwards;
		}
		.line_ani2::before{/*오른쪽선*/
			animation: vani .3s linear .3s forwards;			
		}
		.line_ani2::after{/*왼쪽선*/
			animation: vani .3s linear .9s forwards;			
		}
		
		/*선그리기 애니메이션 keyframes*/
		@keyframes hani{/*가로선*/
			to{width: 100%;}
		}
		@keyframes vani{/*세로선*/
			to{height: 100%;}
		}
		
		
		

	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->
    <script src="js/jquery-1.8.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/jquery.fullPage.min.js"></script>
<script src="js/jquery.rotate.js"></script>
<script src="js/works.js"></script>


<script type="text/javascript">
	$(document).ready(function() {
		///fullpage 플러그인 적용하기///
		$("#fullpage").fullpage({
			menu:"#navi",
			anchors:["page1","page2","page3","page4"],
			
			//페이지에 도착하면 실행함수
			afterLoad:function(link,idx){//idx순번
				if(idx==2){//about me페이지
					$(".me").css({transform:"rotateY(0deg)"});
					
				}//if////
				else if(idx==4){/*메시지 페이지*/
					$(".msgbox").addClass("line_ani1");
					$(".inside").addClass("line_ani2");
				}//else if///
				
				
			}////afterLoad함수//////////
			
			
		});////fullpage///////////////////
		
		//글자 애니메이션
		setTimeout(aniTxt,2000);
		
		
		
		
	});///jQB/////////////////////////
	/*
		함수명: aniTxt
		기능: 글자하나씩 애니메이션 하기
	*/
	var txtnum = 0;//글자 li 박스 순번
	function aniTxt(){
		$("#mtit li").eq(txtnum)
		.animate({
			top:"0", left:"0",fontSize:"5em",opacity:1
		},500,"easeInExpo");
		txtnum++;//순번증가
		if(txtnum<26){//li 총 개수 보다 작을 동안 실행
		   setTimeout(aniTxt,40);//0.25초 간격으로 재귀호출
		}//if///
		else{//큰타이틀 등장 후 작은 타이틀 등장
			$("#stit").delay(600)
			.animate({left:"50%"},1000,"easeOutElastic")
		}///else///
		
	}///aniTxt함수//////
</script>
</head>
<body>

<div id="header">
	<h1>Helena</h1><!--logo-->
	<nav id="navi">
		<ul>
			<li><a href="#page1">Home</a></li>
			<li><a href="#page2">About</a></li>
			<li><a href="#page3">Works</a></li>
			<li><a href="#page4">Contact</a></li>			
		</ul>
	</nav>
</div>
<!--<div id="footer">Footer</div>-->

<div id="fullpage">
	<div class="section " id="section0">
		<ol id="mtit">
			<li>W</li>
			<li>h</li>
			<li>a</li>
			<li>t</li>
			<li>&nbsp;</li>
			<li>d</li>
			<li>o</li>
			<li>&nbsp;</li>
			<li>y</li>
			<li>o</li>
			<li>u</li>
			<li>&nbsp;</li>
			<li>t</li>
			<li>h</li>
			<li>i</li>
			<li>n</li>
			<li>k</li>
			<li>&nbsp;</li>
			<li>o</li>
			<li>f</li>
			<li>&nbsp;</li>
			<li>t</li>
			<li>h</li>
			<li>i</li>
			<li>s</li>
			<li>?</li>
		</ol>
		<h4 id="stit">Helena wants to know it.</h4>
	
	</div>
	<!--about me 페이지-->
	<div class="section" id="section1">
         	<h1>about me</h1>
         	<p>
         		<img src="images/face.jpg" alt="my face" class="me">
         		I'm a UX/UI Designer and Front End Developer from Sydney, Australia.<br><br>
I enjoy turning complex problems into simple, beautiful and intuitive<br>
 interface designs. When I'm not coding or pushing pixels, you'll find me<br>
 in the gym or on the court shooting hoops.
         	</p>
	</div>
	<!--Work 페이지-->
	<div class="section" id="section2">
		<!--작품 갤러리-->
		<div class="slide">			
			<h1 class="tit1">Portfolio Gallery</h1>
			<div id="gallery"></div>

			<!-- 큰이미지 보기 배경박스 -->
			<div id="dpbg">
				<div class="cbtn">×</div>
				<div class="abtn btnL">＜</div>
				<div class="abtn btnR">＞</div>
			</div>
			<!--큰이미지 박스-->
			<div id="dpbox"></div>

		</div>
		<!--작품 링크-->
		<div class="slide">
			<h1 class="tit1">Portfolio Links</h1>
			<a href="#" id="w01">
				<img src="images/link3.jpg" alt="works">
			</a>
			<a href="#" id="w02">
				<img src="images/link2.jpg" alt="works">
			</a>
			<a href="#" id="w03">
				<img src="images/link1.jpg" alt="works">
			</a>
			<a href="#" id="w04">
				<img src="images/link4.jpg" alt="works">
			</a>
		</div>	
	</div>
	<div class="section" id="section3">	
		<h1>Contact</h1>
		<form action="../Sendmail.php" method="post">
		<p class="msgbox">
				<span class="inside"></span>
				<span class="tit2">Send me a email</span><br><br>
				<label for="nm">Your Name : </label><br>
				<input type="text" id="nm"><br>
				<label for="email">Your email : </label><br>
				<input type="text" id="email"><br>
				<label for="email">Your Title : </label><br>
				<input type="text" id="title"><br>
				<label for="msg">Your Message : </label><br>
				<textarea id="msg" cols="40" rows="5"></textarea><br>
				<input type="button" value="Send" id="btnsend">
			</p>
		</form>
	</div>
</div>


</body>
</html>