<!DOCTYPE html>
<html lang="en">
<head>
	<title>GNU-V</title>
  <meta charset="UTF-8">
        <link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;ver=5.7" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="preconnect" href="https://fonts.gstatic.com">
         <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <style type="text/css">
            .example{
            margin: 20px;
            }
        </style> 
  	  <link rel="stylesheet" type="fi/css" href="fi.css">
  		<style type="text/css">

          nav{
              background-color:#888844   ;
          }
          nav a{
              display:inline-block;
              padding:10px;
              font-size:20px;
              color:white;
              text-decoration:none;
          }
          nav a:hover{
              background-color: #ecc6d9  ;
              color: #3d3d5c;
              text-decoration:none;
              
          }
          p {
          margin-top: 0px;
          margin-bottom: 10px;
          margin-right: 10px;
          margin-left: 55px;
          text-decoration:none;
          color: #3d3d5c;
          text-decoration-line: none;
          size: 10px;
         
          }
                    * {
            box-sizing:border-box
          }
          h2 {
            text-align: center;
          }
          footer{
            display: block;
          }
          li{
            display: table-footer-group;
          }
          /* Slideshow container */
          .slideshow-container {
           /* max-width: 500px;*/
            position: relative;
            margin: auto;
          }
          /* Ẩn các slider */
          .mySlides {
              display: none;
          }
          /* Định dạng nội dung Caption */
          .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
            text-decoration:none;
          }
           
          /* định dạng các chấm chuyển đổi các slide */
          .dot {
            cursor:pointer;
            height: 13px;
            width: 13px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
          }
          /* khi được hover, active đổi màu nền */
          .active, .dot:hover {
            background-color: #717171;
          }
           
          /* Thêm hiệu ứng khi chuyển đổi các slide */
          .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1s;
            animation-name: fade;
            animation-duration: 5s;
          }
           
          @-webkit-keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
           
          @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
          }
              
     /* footer*/
     *{
     margin: 0;
     padding: 0;
     box-sizing: border-box;
     font-family: Roboto;
 }
body{
     display: flex;
     justify-content: flex-end;
     align-items: center;
     min-height: 100vh;
     flex-direction: column;
     background: url(https://niemvuilaptrinh.ams3.cdn.digitaloceanspaces.com/tao_footer_cho_website/Aare.svg);
 }
footer{
     position: relative;
     width: 100%;
     height: auto;
     padding: 50px 100px;
     background: #111;
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
 }
footer .container{
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
     flex-direction: row;
 }  
 /*Thiết Lập Cho Thành Phần Nội Dung Giới Thiệu*/
 footer .container .noi-dung{
     margin-right: 30px;
 }
footer  .container .noi-dung.about{
     width:40%;
 }
 footer .container .noi-dung.about h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 footer .container .noi-dung.about h2:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
footer .container .noi-dung.about p{
     color: #999;
 }
 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: #222;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background: #f00;
 }
.social-icon li a .fa{
     color: #fff;
     font-size: 20px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 .links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.links{
    position: relative;
    width: 25%;
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: #999;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: #fff;
 }
 .contact h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.contact{
     width: calc(35% - 60px);
     margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #fff;
     font-size: 20px;
     margin-right: 10px;
 }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: #999;
     text-decoration: none;
 }
 .btn {
     display: inline-block;
     background: transparent;
     color: inherit;
     font: inherit;
     border: 0;
     outline: 0;
     padding: 0;
     margin-top:16px;
     transition: all 200ms ease-in;
     cursor: pointer;
 }
 .btn--primary {
     background: #222;
     color: #fff;
     box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
     border-radius: 2px;
     padding: 8px 24px;
 }
 .btn--primary:hover {
     background: #f00;
 }
 .btn--primary:active {
     background: #f00;
     box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);
 }
.form__field {
     width: 90%;
     background: #fff;
     color: #a3a3a3;
     font: inherit;
     box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
     border: 0;
     outline: 0;
     padding: 8px 4px;
 }
 @media  (max-width: 768px){
     footer{
         padding: 40px;
              }
     footer .container{
         flex-direction: column;
     }
     footer .container .noi-dung{
         margin-right: 0;
         margin-bottom: 40px;
     }
     footer .container, .noi-dung.about, .links, .contact{
         width: 100%;
     }
 } 
 /* backgrourd*/
 /* Reset. */
body {
  margin: 0;
  background: #ecf3f3;
}

canvas {
  display: block;
  vertical-align: bottom;
}

/* Particle container. */
#particle-container {
  position: absolute;
  width: 100%;
  height: 100%;
}
 /**/

              </style>
          </head>


  <body >
<!-- header-->
<center>
<div class="slideshow-container">
 
  <div class="mySlides fade">
    <img  width="100%" src="gnuu.jpg">
    
  </div>
 
  <div class="mySlides fade">
    <img width="100%"  src="11323.png" >
    
  </div>
 
   <div class="mySlides fade">
    <img width="100%"  src="1.png" >
    
  </div>
</div>
</center>

<br>
<!--backgroud-->
<div id="particle-container"></div>
<script>
  particlesJS("particle-container", {
  "particles": {
    "number": {
      "value": 80,
      "density": {
        "enable": true,
        "value_area": 800
      }
    },
    "color": {
      "value": "random"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      "image": {
        "src": "img/github.svg",
        "width": 100,
        "height": 100
      }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 1,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": false,
        "mode": "repulse"
      },
      "onclick": {
        "enable": false,
        "mode": "push"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 400,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


Resources
</script>
<!--end-->
</div>
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(0)"></span> 
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> </div>
  <script>
  //khai báo biến slideIndex đại diện cho slide hiện tại
  var slideIndex;
  // KHai bào hàm hiển thị slide
  function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";  
      }
      for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
      }
 
      slides[slideIndex].style.display = "block";  
      dots[slideIndex].className += " active";
      //chuyển đến slide tiếp theo
      slideIndex++;
      //nếu đang ở slide cuối cùng thì chuyển về slide đầu
      if (slideIndex > slides.length - 1) {
        slideIndex = 0
      }    
      //tự động chuyển đổi slide sau 7s
      setTimeout(showSlides, 7000);
  }
  //mặc định hiển thị slide đầu tiên 
  showSlides(slideIndex = 0);
 
 
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
   </script>
   <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="101357485107560"
        theme_color="#ff7e29"
        logged_in_greeting="HELLO, Cảm ơn vì đã quan tâm đến Gnu chúng mình, cậu muốn hỏi những gì nào"
        logged_out_greeting="HELLO, Cảm ơn vì đã quan tâm đến Gnu chúng mình, cậu muốn hỏi những gì nào">
      </div>

<!-- menu-->
<center>
    <nav>
     <p>   <a href="covermusicaudio.com"> Trang chủ </a>
        <a href="http://localhost/gnu/video.php"> Video </a>
        <a href= "http://localhost/gnu/bxh.php" > Bảng xếp hạng </a>
        <a href="https://covermusicaudio.com/login.covermusicaudio.com"> Đăng kí/Tạo tài khoản </a>
        <a href="http://localhost/gnu/casting.html"> Casting </a>
        <a href="http://localhost/gnu/search.php"> Tìm kiếm </a>
        <a href="#"> Các hoạt động </a>
        <a href="https://covermusicaudio.com/singin.covermusicaudio.com"> Đăng nhập </a>
        
    </nav>
    </center>
    <br/>
     <center><h1> GNU TEAM - GNU VIDEO</h1></center>
    <h3><center>VIDEO THỊNH HÀNH</center></h3>

<!-- video đề xuất-->

    <p>
    <a href="http://localhost/gnu/video.php"><img width="30%" src="picho1.png" title="Vì một người-Hờơơ"></a>
    <a href="http://localhost/gnu/video.php"><img width="31.4%" src="picho2.png" title="Như những gì anh nói-Hờơơ"></a>
    <a href="http://localhost/gnu/video.php"><img width="29.5%" src="picho3.png" title="3107-hòooo"></a>
    <a href="http://localhost/gnu/video.php"><img width="30%" src="cut1.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><img height="318xp" width="403.3xp" src="phanh1.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><img height="318xp" width="379xp" src="cut2.png" title="#"></a>
    <a href="http://localhost/gnu/video.php"><h3><p style="color:#1affff" style="text-decoration-line: none;">MORE</h3></a></p>
   	 </div>
      </body>
      </html>
<footer>
     <div class="container">
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             <h2>ABOUT WE </h2>
             <p>GNU-TEAM là một team hoạt động hoàn toàn tự phát không phụ thuộc vào bất cứ tổ chức hay cá nhân nào, với muc đích đem lại cho những con tim đam mê âm nhạc một thế giới để họ đắm chìm vào đam mê</p>
             <ul class="social-icon">
                 <li><a href="https://www.facebook.com/GNU-V-101357485107560/"><i class="fa fa-facebook"></i></a></li>
                 <li><a href="!#"><i class="fa fa-twitter"></i></a></li>
                 <li><a href="https://www.instagram.com/__wings0202/"><i class="fa fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa fa-youtube"></i></a></li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h2>LINKS</h2>
             <ul>
                 <li><a href="covermusicaudio.com">Home</a></li>
                 <li><a href="#">About We</a></li>
                 <li><a href="https://www.facebook.com/wings0202">Information System</a></li>
              
                
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="noi-dung contact">
             <h2>Information System</h2>
             <ul class="info">
                 <li>
                     <span><i class="fa fa-map-marker"></i></span>
                     <span><br />
                         VIETNAM</span>
                 </li>
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="#">+84 699 566 57</a>
                         <br />
                         <a href="#">+84 6995 6657</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">lan43223@gmail.com</a></p>
                </li>
                 <li>
                     <form class="form">
                         <input type="email" class="form__field" placeholder="Email" />
                         <button type="button" class="btn btn--primary  uppercase">Send</button>
                     </form>
                 </li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Liên Hệ-->
         <center>
         <div class="social-icon" 
        style="color:  #ffe6e6"    >© 2020 Copyright:
    <a href="https://www.facebook.com/wings0202" style="color: #ffe6e6" style="text-decoration-line: none;">Nguyen Thi Minh Lan </a></p>
  </div>
</center>

     </div>
 </footer>