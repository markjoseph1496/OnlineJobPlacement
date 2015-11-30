<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Job Placement Managements</title>

    <!-- Bootstrap Core CSS -->
    <link href="css2/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="css2/agency.css" rel="stylesheet">
	<link href="css2/stylemain.css" rel = "stylesheet">
	<link href = "css2/style.css" rel = "stylesheet">
	
	<!--Javascript-->
	<script src="./js/jquery.min.js"></script>
	<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

	
	<!--Fonts-->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

<script>
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

$(document).ready(function() {
	var stickyNavTop = $('.coverinfo').offset().top;
	
	var stickyNav = function(){
		var scrollTop = $(window).scrollTop();
			
		if (scrollTop > stickyNavTop) { 
			$('.coverinfo').addClass('sticky');
		} else {
			$('.coverinfo').removeClass('sticky'); 
		}
	};
	
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
});

</script>	
	
	
</meta>

<style>

.sticky {
    position: fixed;
    width: 100%;
    left: 0;
    top: 115;
    z-index: 100;
    border-top: 0;
}


#fadeMenu{
	padding-top: 100px;
	display: block;

}
.container12{
margin-top: -105px;
margin-left: 250px;
}


.header {
background-image: url (./img/aa.jpg);
}

#resumehead {
background: #006681;
display: none;
position: fixed;
right: 0;
top: 0;
width: 100%;
height: 50px;
z-index: 99999;
}
.container{ width:1000px; margin:0 auto;}
.content{ padding:10px 20px 10px;}

.coverinfo {
	padding:10px;
	background-color: #006681;
	margin-top: -120px;

}

.row {
  margin-right: -15px;
  margin-left: -15px;
}

.col-md-4 {
  width: 33.33333333%;
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  }

 .container1{
 	width:1200px;
 	margin:0 auto;
 } 

.name {
	position: relative;
	margin-left: 400px;
}

.name1 {
	margin-left: 440px;
}

.progress {
	width: 300px;
			
	background-color: #fed136;
	color:#006681;
}

.progress-bar {
	background-color: #006681;

}
</style>


</head>




<body>



    <!-- Header -->
 
  <header style= "background-image: url(./img/aa.jpg)">   
 <div class="container">
	      <div class="intro-text">
                <div class="intro-lead-in">Welcome To Our Company Profile!</div>
                
                <a id="down" href="#topinfo" class=" btn btn-xl"> View </a>
            </div>
        </div>
    </header>


<div class="resumehead" name="topinfo">
<div class = "coverinfo">
<div class = "container">
	<div class = "row">

	<div class="imgcover" style="background-image: url(./img/a.jpg)"></div>
	<ul>
	<h1 class = "name">JCO Company</h1>
	
	<p class = "name1">http://jcolangot.com </p>
	
	</ul>
	
	</div> 
</div>
 </div>
 </div>
 
<br>

<!-- PERSONAL INFO -->
<div class = "content">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4  ">
			<h3> <img src = "./img/icons/profile.png" width = "60px;" height = "60px;"> Company Information </h3>
			</div>
			<div class="col-md-8 col-sm-8">
				<table class = "infotable">
				<tbody>
				<tr>
				<td> Date of Birth </td>
				<td> March 14, 1996 </td>
				</tr>
				
				<tr>
				<td> Status </td>
				<td> Single</td>
				</tr>
				
				<tr>
				<td> Address </td>
				<td> 2890 A. Pablo St. Karuhatan, Valenzuela City Valenzuela City, NCR 1440 </td>
				</tr>
				
				<tr>
				<td> Nationality </td>
				<td> Filipino</td>
				</tr>
				
				<tr>
				<td> Objective </td>
				<td> Willing to work to earn money</td>
				</tr>
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
<!-- PERSONAL INFO -->

<!-- CONTACT INFO -->
<div class = "content1">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4 col-sm-4">
			<h3> <img src = "./img/icons/contact.png" width = "60px;" height = "60px;"> Contact Information </h3>
			</div>
			<div class="col-md-8 col-sm-8">
				<table class = "infotable">
				<tbody>
				<tr>
				<td> Mobile </td>
				<td> 09355585931 </td>
				</tr>
				
				<tr>
				<td> Email </td>
				<td> markjoseph1496@yahoo.com </td>
				</tr>
				
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>

<!-- CONTACT INFO -->

<!-- EDUCATION -->
<div class = "content3">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4">
			<h3> <img src = "./img/icons/education.png" height = "60px" width = "60px"> Requirements </h3>
			</div>
			<div class="col-md-8">
			<h3 class="unit">Bachelor's/College Degree</h3>
			<div class="ui clearing divider"></div>
				<table class = "infotable">
				<tbody>
				<tr>
				<td> School </td>
				<td> STI College Caloocan </td>
				</tr>
				
				<tr>
				<td> Graduated </td>
				<td> May 2015 </td>
				</tr>
				
				<tr>
				<td> Major </td>
				<td> Bachelor of Science in Computer Science </td>
				</tr>
				
				<tr>
				<td> Field of Study </td>
				<td> Computer Science/Information Technology </td>
				</tr>
				
				
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>	

<!-- EDUCATION -->

<!-- LANGUAGES-->
<div class = "content1">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4 col-sm-4">
			<h3> <img src = "./img/icons/language.png" width = "60px;" height = "60px;"> Requirements </h3>
			</div>
			<div class="col-md-8 col-sm-8">
				<table class = "infotable">
				<tbody>
				<tr>
				<td><b> Filipino</b> </td>
				<td> 
					<div class="progress">
  					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100"
  							aria-valuemin="0" aria-valuemax="100" style="width:100%">
   						 100% 
  					</div>
					</div>
				</td>
				</tr>
				
				<tr>
				<td><b> Nihonggo </b> </td>
				<td> 
					<div class="progress">
  					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90"
  							aria-valuemin="0" aria-valuemax="100" style="width:90%">
   						 90% 
  					</div>
					</div>
				</td>
				</tr>

				<tr>
				<td><b> Mandarin </b></td>
				<td> 
					<div class="progress">
  					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75"
  							aria-valuemin="0" aria-valuemax="100" style="width:75%">
   						 75% 
  					</div>
					</div>
				</td>
				</tr>
				
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>
<!-- lANGUAGES -->

<!-- SKILLS-->
<div class = "content3">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4">
			<h3> <img src = "./img/icons/skills.png" height = "60px" width = "60px"> Requirements</h3>
			</div>
			<div class="col-md-8 col-sm-8">
				<table class = "infotable">
				<tbody>
				<tr>
				<td> Magaling maguhgas ng pinggan  </td>
				<td> 
					<div class="progress">
  					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60"
  							aria-valuemin="0" aria-valuemax="100" style="width:60%">
   						 60% 
  					</div>
					</div>
				</td>
				</tr>
				
				
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>	
<!-- SKILLS -->

<!-- ACHIEVEMENTS -->
<div class = "content1">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4 col-sm-4">
			<h3> <img src = "./img/icons/achievements.png" width = "60px;" height = "60px;">Requirements </h3>
			</div>
			<div class="col-md-8 col-sm-8">
				<table class = "infotable">
				<tbody>
				<tr><br>	
				<td> Top 1 in Math Class </td>
				</tr>
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>

<!-- ACHIEVEMENTS -->

<!-- REFERRENCE -->
<div class = "content3">
	<div class = "container1">
		<div class = "row">
			<div class = "col-md-4">
			<h3> <img src = "./img/icons/referrence.png" height = "60px" width = "60px"> Requirements </h3>
			</div>
			<div class="col-md-8">
			<h3 class="unit">ASDASDASD</h3>
			<div class="ui clearing divider"></div>
				<table class = "infotable">
				<tbody>
				<tr>
				<td> Company </td>
				<td> STI College Caloocan </td>
				</tr>
				
				<tr>
				<td> Relationship </td>
				<td> Forever </td>
				</tr>
				
				
				</tbody>
				</table>	
			</div>
		</div>
	</div>
</div>	

<!-- REFERRENCE-->
<br><br>

</body>

</html>