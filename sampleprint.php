
<!doctype html>
<html lang="en">
<head>

    <!-- Basic -->
    <title>OJPMS</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <!-- BootstrapValidator CSS -->
    <link href="css/bootstrapValidator.min.css" rel="stylesheet"/>

    <!-- jQuery and Bootstrap JS -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js" ></script>

    <!-- BootstrapValidator -->
    <script src="js/bootstrapValidator.min.js" type="text/javascript"></script>

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

    <!-- Fonts -->
    <link href="fonts/ffonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/kaushan.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/droid.css" rel="stylesheet" type="text/css">
    <link href="fonts/ffonts/roboto.css" rel="stylesheet" type="text/css">

    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

    <!-- OJPMS CSS  -->
    <link rel="stylesheet" type="text/css" href="css/ojpms-style.css" media="screen">

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen"/>

    <!-- JS  -->
    <script type="text/javascript" src="js/jquery.migrate.js"></script>
    <script type="text/javascript" src="js/modernizrr.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/count-to.js"></script>
    <script type="text/javascript" src="js/jquery.textillate.js"></script>
    <script type="text/javascript" src="js/jquery.lettering.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <script type="text/javascript" src="js/jquery.parallax.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.js"></script>
</head>

<body>

    <div class ="container">
        <input name="b_print" type="button" class="btn-system btn-large"  onClick="printdiv('div_print');" value=" Print "> 
    <div id="div_print">
        <div class="container">
            <div class="row">
                <div class="col-xs-8">
                    <BR><BR><BR>
                    <label> Name: </label><BR>
                     <label> Address: </label><BR>
                     <label> Contact No. </label><BR>
                    <label>Email Address </label><BR>
                </div>
                <div class="col-xs-4">
                <div class="image-border" style = "width:192px; height: 192px;">
                    <img src="img/man-icon.png">
                 </div> 
                 </div>
            </div>
        </div>
         <div class="hr5" style="margin-top:35px;margin-bottom:40px;"></div>
        <div class = "col-xs-12">
                <label>Objective:</label>
                <p>One to two sentences long that describes the type of job you want, the type of organization you prefer and how you can contribute to the position/organization.<p>
        </div>
        <BR> <BR> 
        <div class = "col-xs-12">
                <label>Education:</label>
        </div>      
         <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <label style = "text-indent:100px;"> (Year Covered) </label>
                     <p style = "text-indent:100px;"> 20__ - 20__ </p><BR>
                     <p style = "text-indent:100px;"> 20__ - 20__ </p><BR>
                    
                </div>
                <div class="col-xs-8">
                     <label> STI College – (Campus) (for College) / STI (Campus) (for EC) </label>
                     <p> Degree / Diploma</p><BR>
                     <p> __________High School </p>
                    <p>High School Diploma </p>
                 </div>
            </div>
        </div>
        &nbsp;  
        <div class = "col-xs-12">
                <label>Work Experience (if applicable):</label>
                <ul style="list-style-type:disc">
                    <li>AASDSJFBJDFJ</li>
                    <li>JSDGFHJDGFJ</li>
                    <li>JSGFHJSDGFHJ</li>
                </ul> 
         <BR>
                <label>Skills:</label>
                <ul style="list-style-type:disc">
                    <li>AASDSJFBJDFJ</li>
                    <li>JSDGFHJDGFJ</li>
                    <li>JSGFHJSDGFHJ</li>
                </ul> 
         <BR>
                <label>Extra Curricular Activities</label>
                <ul style="list-style-type:disc">
                    <li>AASDSJFBJDFJ</li>
                    <li>JSDGFHJDGFJ</li>
                    <li>JSGFHJSDGFHJ</li>
                </ul> 
        <BR>
                <label>References:</label>
                <p>STI College – Caloocan </p>
        </div> 


    </div>      
    </div>
    <!-- End Content -->
<script type="text/javascript" src="js/script.js"></script>
<script language="javascript">
function printdiv(printpage)
{
var headstr = "<html><head><title></title></head><body>";
var footstr = "</body>";
var newstr = document.all.item(printpage).innerHTML;
var oldstr = document.body.innerHTML;
document.body.innerHTML = headstr+newstr+footstr;
window.print();
document.body.innerHTML = oldstr;
return false;
}
</script>

       


</body>
</html>
