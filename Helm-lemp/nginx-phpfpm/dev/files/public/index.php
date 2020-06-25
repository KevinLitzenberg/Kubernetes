<html>

<?php
session_start();
$_SESSION["id"] = session_id();
$_SESSION["City"] = "None, Empty";

?>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">

/********************ImageStack01 ********************/
$(document).ready(function() {
$("#image_stack01").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo1').addClass('rotate1');
$('img#photo2').addClass('rotate2');
$('img#photo3').addClass('rotate3');
$('img#photo1').css("left","150px");
$('img#photo3').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo1').removeClass('rotate1');
$('img#photo2').removeClass('rotate2');
$('img#photo3').removeClass('rotate3');
$('img#photo1').css("left","");
$('img#photo3').css("left","");
});;
});

/********************ImageStack02 ********************/
$(document).ready(function() {
$("#image_stack02").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo4').addClass('rotate4');
$('img#photo5').addClass('rotate5');
$('img#photo6').addClass('rotate6');
$('img#photo4').css("left","150px");
$('img#photo6').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo4').removeClass('rotate4');
$('img#photo5').removeClass('rotate5');
$('img#photo6').removeClass('rotate6');
$('img#photo4').css("left","");
$('img#photo6').css("left","");
});;
});

/********************ImageStack03 ********************/
$(document).ready(function() {
$("#image_stack03").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo7').addClass('rotate7');
$('img#photo8').addClass('rotate8');
$('img#photo9').addClass('rotate9');
$('img#photo7').css("left","150px");
$('img#photo9').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo7').removeClass('rotate7');
$('img#photo8').removeClass('rotate8');
$('img#photo9').removeClass('rotate9');
$('img#photo7').css("left","");
$('img#photo9').css("left","");
});;
});

/********************ImageStack04 ********************/
$(document).ready(function() {
$("#image_stack04").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo10').addClass('rotate10');
$('img#photo11').addClass('rotate11');
$('img#photo12').addClass('rotate12');
$('img#photo10').css("left","150px");
$('img#photo12').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo10').removeClass('rotate10');
$('img#photo11').removeClass('rotate11');
$('img#photo12').removeClass('rotate12');
$('img#photo10').css("left","");
$('img#photo12').css("left","");
});;
});

/********************ImageStack05 ********************/
$(document).ready(function() {
$("#image_stack05").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo13').addClass('rotate13');
$('img#photo14').addClass('rotate14');
$('img#photo15').addClass('rotate15');
$('img#photo13').css("left","150px");
$('img#photo15').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo13').removeClass('rotate13');
$('img#photo14').removeClass('rotate14');
$('img#photo15').removeClass('rotate15');
$('img#photo13').css("left","");
$('img#photo15').css("left","");
});;
});

/********************ImageStack06 ********************/
$(document).ready(function() {
$("#image_stack06").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo16').addClass('rotate16');
$('img#photo17').addClass('rotate17');
$('img#photo18').addClass('rotate18');
$('img#photo16').css("left","150px");
$('img#photo18').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo16').removeClass('rotate16');
$('img#photo17').removeClass('rotate17');
$('img#photo18').removeClass('rotate18');
$('img#photo16').css("left","");
$('img#photo18').css("left","");
});;
});

/********************ImageStack07 ********************/
$(document).ready(function() {
$("#image_stack07").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo19').addClass('rotate19');
$('img#photo20').addClass('rotate20');
$('img#photo21').addClass('rotate21');
$('img#photo19').css("left","150px");
$('img#photo21').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo19').removeClass('rotate19');
$('img#photo20').removeClass('rotate20');
$('img#photo21').removeClass('rotate21');
$('img#photo19').css("left","");
$('img#photo21').css("left","");
});;
});

/********************ImageStack08 ********************/
$(document).ready(function() {
$("#image_stack08").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo22').addClass('rotate22');
$('img#photo23').addClass('rotate23');
$('img#photo24').addClass('rotate24');
$('img#photo22').css("left","150px");
$('img#photo24').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo22').removeClass('rotate22');
$('img#photo23').removeClass('rotate23');
$('img#photo24').removeClass('rotate24');
$('img#photo22').css("left","");
$('img#photo24').css("left","");
});;
});

/********************ImageStack09 ********************/
$(document).ready(function() {
$("#image_stack09").delegate('img', 'mouseenter', function() {
if ($(this).hasClass('current')) {
$('img#photo25').addClass('rotate25');
$('img#photo26').addClass('rotate26');
$('img#photo27').addClass('rotate27');
$('img#photo25').css("left","150px");
$('img#photo27').css("left","50px");
}
})
.delegate('img', 'mouseleave', function() {
$('img#photo25').removeClass('rotate25');
$('img#photo26').removeClass('rotate26');
$('img#photo27').removeClass('rotate27');
$('img#photo25').css("left","");
$('img#photo27').css("left","");
});;
});

</script>


<!-------------------------Begin Style Sheets ------------------------->
<style type="text/css">
/**** Page/Body Divider ****/

#divContentTop{ 
	position: absolute;
	left: 15; /*Set left value to divContentLeft*/
	right: 0;
	top: 2;
	width: 1100px;
	height: 167px; /*Height of top frame div*/
	text-indent: 15px;
	overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
	/*background-color: navy;*/
	color: white;
	background-image: url('MainTitle00.jpg');
    /*background-position: 50% 50%;*/
	border-top-left-radius: 15px 22px;
	border-top-right-radius: 15px 22px;
	border-bottom-right-radius: 15px 22px;
	border-bottom-left-radius: 15px 22px;
}

#divContentTop .maintitle{
    position: relative;
    float: left;
    top: 2px;
    left: 2px;
    font-size: 25px;
    color: white;
    text-align:left;
    font-family:arial,sans-serif;
}

#divContentTop .subheading{
    position: relative;
    float: right;
    top: 12px;
    right: 10px;
    font-size: 15px;
    color: white;
    text-align:left;
    font-family:arial,sans-serif;
}
		
#divContentTopBar{
    position:absolute;
	top: 190px;
	left: 100px;
	height: 250px;
	width: 950px;
	text-indent: 2px;
	overflow: hidden;	
	/*background-color: blue;
	color: white;*/		
}	
		
#divContentLeft{
	position: absolute; 
	top: 167px; 
	left: 0; 	
	width: 124px; /*Width of left frame div*/
	height: 80%;
	text-indent: 0px;
	overflow: hidden; /*Disable scrollbars. Set to "scroll" to enable*/
	/*background-image: url('square.jpg');*/
	/*background-color: #3399FF;
	color: white;*/
}

#divMainContent{
	position: absolute;
	margin-left: 10px;
	margin-right: 300px;
	text-indent: 0px;
	left: 125px;
	top: 237px;
	width: 900px;
	height: 100%;
	opacity: 1.0;
	/*right: 700px;*/
	/*overflow: auto;*/
}

/**** End Page/body Divider ****/

/**** The page wrap element ****/
#page_wrap {
    width: 1000px;
    height:1500px;
    margin-right: auto;
    margin-top:0px;
}
/**** End page wrap element ****/

/*Caption Elements*/

#stack_caption{
    width: 998px;
    top: 214px;
    height: 35px;
    /*border: 1px solid #DDDDDD;*/
    position: relative;
}

#stack_caption_mid01{
    width: 998px;
    top: 478px;
    height: 35px;
    /*border: 1px solid #DDDDDD;*/
    position: relative;
}

#stack_caption_mid02{
    width: 998px;
    top: 742px;
    height: 35px;
    /*border: 1px solid #DDDDDD;*/
    position: relative;
}

#stack_caption_text{
    width: 25%;
    height: 95%;
    /*border: 1px solid #DDDDDD;*/
    margin-left: 25px;
	margin-right: 58px;
    display: block;
    font-size:xx-small;
    text-align:left;
    font-family:arial,sans-serif;
    float: left; /*justify*/
    position: inherit;
}

/**** creates the parent image stack ****/
#image_stack01 {
    width: 400px;
    top: 15px;
    margin-left: -90px;
    position: relative;
}

#image_stack02 {
    width: 400px;
    top: 15px;
    margin-left: 245px;
    position: relative;
}

#image_stack03 {
    width: 400px;
    top: 15px;
    margin-left: 575px;
    position: relative;
}

#image_stack04 {
    width: 400px;
    top: 275px;
    margin-left: -90px;
    position: relative;
}

#image_stack05 {
    width: 400px;
    top: 275px;
    margin-left: 245px;
    position: relative;
}

#image_stack06 {
    width: 400px;
    top: 275px;
    margin-left: 575px;
    position: relative;
}

#image_stack07 {
    width: 400px;
    top: 535px;
    margin-left: -90px;
    position: relative;
}

#image_stack08 {
    width: 400px;
    top: 535px;
    margin-left: 245px;
    position: relative;
}

#image_stack09 {
    width: 400px;
    top: 535px;
    margin-left: 575px;
    position: relative;
}
/**** End creates the parent image stack ****/ 

/**** position the three elements : image_stack01 ****/
#image_stack01 #photo1 {
    top: 8px;
    left: 108px;
}
#image_stack01 #photo2 {
    top: 6px;
    left: 104px;
}
#image_stack01 #photo3 {
    top: 4px;
    left: 100px;
}


/**** position the three elements : image_stack02 ****/
#image_stack02 #photo4 {
    top: 8px;
    left: 108px;
}

#image_stack02 #photo5 {
    top: 6px;
    left: 104px;
}

#image_stack02 #photo6 {
    top: 4px;
    left: 100px;
}

/**** position the three elements : image_stack03 ****/
#image_stack03 #photo7 {
    top: 8px;
    left: 108px;
}

#image_stack03 #photo8 {
    top: 6px;
    left: 104px;
}
#image_stack03 #photo9 {
   top: 4px;
   left: 100px;
}

/**** position the three elements : image_stack04 ****/
#image_stack04 #photo10 {
    top: 8px;
    left: 108px;
}
#image_stack04 #photo11 {
    top: 6px;
    left: 104px;
}
#image_stack04 #photo12 {
    top: 4px;
    left: 100px;
}

/**** position the three elements : image_stack05 ****/
#image_stack05 #photo13 {
    top: 8px;
    left: 108px;
}

#image_stack05 #photo14 {
   top: 6px;
   left: 104px;
}
#image_stack05 #photo15 {
    top: 4px;
    left: 100px;
}

/**** position the three elements : image_stack06 ****/
#image_stack06 #photo16 {
    top: 8px;
    left: 108px;
}

#image_stack06 #photo17 {
   top: 6px;
   left: 104px;
}

#image_stack06 #photo18 {
   top: 4px;
   left: 100px;
}

/**** position the three elements : image_stack07 ****/
#image_stack07 #photo19 {
    top: 8px;
    left: 108px;
}

#image_stack07 #photo20 {
   top: 6px;
   left: 104px;
}

#image_stack07 #photo21 {
   top: 4px;
   left: 100px;
}

/**** position the three elements : image_stack08 ****/
#image_stack08 #photo22 {
    top: 8px;
    left: 108px;
}

#image_stack08 #photo23 {
   top: 6px;
   left: 104px;
}

#image_stack08 #photo24 {
   top: 4px;
   left: 100px;
}

/**** position the three elements : image_stack09 ****/
#image_stack09 #photo25 {
    top: 8px;
    left: 108px;
}

#image_stack09 #photo26 {
   top: 6px;
   left: 104px;
}

#image_stack09 #photo27 {
   top: 4px;
   left: 100px;
}

/**** Setup Image properties ****/
#image_stack01 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

#image_stack02 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

#image_stack03 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   z-index: 9999;
   -moz-transition: all 0.2s ease;
   -webkit-transition: all 0.2s ease;
   -o-transition: all 0.2s ease;
   transition: all 0.2s ease;
}

#image_stack04 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
   box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   z-index: 9999;
   -moz-transition: all 0.2s ease;
   -webkit-transition: all 0.2s ease;
   -o-transition: all 0.2s ease;
   transition: all 0.2s ease;
}

#image_stack05 img {
   border: none;
   text-decoration: none;
   position: absolute;
   margin-left:0px;
   width: 158px;
   height: 158px;
   position: absolute;
   border: 4px solid #FFF;
   box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
   z-index: 9999;
   -moz-transition: all 0.2s ease;
   -webkit-transition: all 0.2s ease;
   -o-transition: all 0.2s ease;
   transition: all 0.2s ease;
}

#image_stack06 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

#image_stack07 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

#image_stack08 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}

#image_stack09 img {
    border: none;
    text-decoration: none;
    position: absolute;
    margin-left:0px;
    width: 158px;
    height: 158px;
    position: absolute;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    z-index: 9999;
    -moz-transition: all 0.2s ease;
    -webkit-transition: all 0.2s ease;
    -o-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
/**** END Setup Image properties ****/

/**** transform the images upon mouseover : image_stack01 ****/
#image_stack01 .rotate1 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);	
}

#image_stack01 .rotate2 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);	
}

#image_stack01 .rotate3 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}


/**** transform the images upon mouseover : image_stack02 ****/
#image_stack02 .rotate4 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack02 .rotate5 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack02 .rotate6 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack03 ****/
#image_stack03 .rotate7 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack03 .rotate8 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack03 .rotate9 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack04 ****/
#image_stack04 .rotate10 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack04 .rotate11 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack04 .rotate12 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack05 ****/
#image_stack05 .rotate13 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack05 .rotate14 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack05 .rotate15 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack06 ****/
#image_stack06 .rotate16 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack06 .rotate17 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack06 .rotate18 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack07 ****/
#image_stack07 .rotate19 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack07 .rotate20 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack07 .rotate21 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack08 ****/
#image_stack08 .rotate22 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack08 .rotate23 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack08 .rotate24 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** transform the images upon mouseover : image_stack09 ****/
#image_stack09 .rotate25 {
    -webkit-transform: rotate(15deg);
    -moz-transform: rotate(15deg);
    transform: rotate(15deg);
}

#image_stack09 .rotate26 {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    transform: rotate(0deg);
}

#image_stack09 .rotate27 {
    -webkit-transform: rotate(-15deg);
    -moz-transform: rotate(-15deg);
    transform: rotate(-15deg);
    cursor: pointer;
}

/**** End Photo Stack*******************/

/************BEGIN-Menu Styles*****************/
.menu_container {
    width: 950px;
	height: 30px;
	background-color: 3a92d1;
	color: white;
	}

.menu {
    width:950px;
	height: 30px;
	margin:0 auto;
	padding-left: 25px;
	}

/**** Set up defaults ****/
/**** Top level always displayed ****/
.nav,
.nav ul {
    margin:0; 
    padding:0;
	list-style:none;
	}
	     
/**** Set the Characteristics of each top level link block ****/
/**** Also disengages all the photo a attributes ****/	     
.nav a {
    text-decoration:none;
	float: left;
    left: 0px;
    top: 1px;
	width: 100px;
	height: 28px;
    position: relative;
    border: 0px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    margin: 0px 0px 0px 0px;    
    }

.nav {
    width:150px; 
    float:left;
    margin-right:-1px;
    }

/**** Set up the widths ****/
.nav .drop {
    width:150px;
	}

/**** Margin is 1px less than the width ****/	
.nav a {
    width:150px;
	margin-right:-99px;
	margin-bottom:-1px; 
	} 

.nav ul li {
    max-width:100px;
    }

/**** Style the links using the b elements ****/
/**** See the Link Text ****/
.nav b {
    display:block; 
	font:normal 11px verdana, sans-serif;
	padding:6px 8px; 
	/*TOP,RIGHT,BOTTOM,LEFT*/
	border:1px solid #fff;
	cursor:pointer;
	}
	    
.nav b.top {
    height:26px; 
    line-height:26px;
    padding: 0px 0px;
    text-align: center
    }
            
.nav a.sub-link b {/*background:url(arrow.gif) no-repeat right bottom;*/}

/**** Style the list colors ****/
.nav a {color:#000; background:#d8dde3;}
.nav ul a {background:#c0c3ca;}
.nav ul ul a {background:#abb1bd;}
.nav ul ul ul a {background:#9299ac;}


/**** Style the hover, active and focus colors ****/
.nav a:hover,
.nav a:focus,
.nav a:active {
    background:#822;	
	color:#fff;
	}

/**** Style the path on hover in all browsers except IE5.5 and 6 ****/
.nav li:hover > a {/*background:#822;*/
                   background:#079203; 
				   color:#fff;
				   }

/**** Style the positions of the ul and also when the text spans two and three lines ****/
.nav {height:40px;}

.nav .drop {height:40px;}

/**** The dropdown ****/
.nav ul {
    position:relative; 
    left:0; 
	top:0; 
	z-index:10001;	 
	} 

/**** The right flyouts ****/		 
.nav ul ul {
    left:95px; 
    top:-26px;
    } 
            
.nav ul ul.two {top:-39px;}

.nav ul ul.three {top:-52px;}

/**** The left flyouts *****/
.nav li.left ul ul {
    left:auto; 
	right:95px;
	} 

/**** Do not change anything below this line ****/
/* ------------------------------------------------------------ */
.nav li,
.nav ul {float:left;}
.nav ul li {clear:left;}
.nav a {position:relative; display:block; z-index:10;}
.nav a.sub-link {float:left; margin-top:10000px;}
.nav .drop,
.nav .fly {margin-top:-10000px;}
.nav ul {margin-bottom:-5000px;}

/***** The bit that does all the work *****/
.nav a:hover,
.nav a:focus,
.nav a:active {margin-right:0;}

/**** IE5-7 fixes ****/
.nav .fly {width:150px;}
a:active {}

/**** OPERA fix ****/
.nav ul:hover {clear:left;}

/**************END - Menu Styles****************/


</style>
<!-------------------------End Style Sheets ------------------------->

</head>

<title>www.facingsf.com:home</title><!-- index2005_added.html.php --><!--FSF_PhotoStack_url_varibles02.html.php -->
<?php
    function get_creds(){
        $creds = parse_ini_file('../php_sql_config.ini');
        return $creds;
    }

   function get_sqli_connect($creds){
        if(!isset($connection)){
            $connection = mysqli_connect($creds['servername'], $creds['username'], $creds['password'], $creds['dbname']);
        }
        if($connection === false){
            return mysqli_connect_error();
        }
        return $connection;
   }
?>

<body>

<div id="divContentTop">
		<div class="maintitle">
        www.facingsf.com
    </div><!--maintitle-->
    
    <div class="subheading">
        Urban Art Photo Blog
    </div><!--subheading-->
</div><!-- divContentTop -->

<div id="divContentTopBar">
<?php
/* echo $_SESSION['City'] ." ". $_SESSION['Year'];*/
?>

<div class="menu_container">
    <div class="menu">
    
<!-- Home -->    
        <ul class="nav">
            <li><a href="index.php"><b class="top">Home</b></a></li>
        </ul>

<!-- San Francisco, CA -->
         <ul class="nav">
            <li class="drop"><a class="sub-link" href="#url"><b class="top">San Francisco, CA</b></a>
                <ul>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2004"><b>2004</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2005"><b>2005</b></a></li>
                    <!-- <li><a href="#url"><b>2007</b></a></li> -->
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2008"><b>2008</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2009"><b>2009</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2010"><b>2010</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2011"><b>2011</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SanFran&Year=2012"><b>2012</b></a></li>
                </ul>
            </li>
        </ul>

<!-- Los Angles, CA -->
         <ul class="nav">
            <li class="drop"><a class="sub-link" href="#url"><b class="top">Los Angeles, CA</b></a>
                <ul>
                    <li><a href="DisplayPhotoGallery01.html.php?City=LosAngeles&Year=2010"><b>2010</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=LosAngeles&Year=2011"><b>2011</b></a></li>
                    
                    
                </ul>                   
                </ul>
            </li>
        </ul>
        
<!-- New York, NY -->
         <ul class="nav">
            <li class="drop"><a class="sub-link" href="#url"><b class="top">New York, NY</b></a>
                <ul>
                    <!-- <li><a href="#url"><b>2005</b></a></li> -->
                    <li><a href="DisplayPhotoGallery01.html.php?City=NewYork&Year=2010"><b>2010</b></a></li>              
                </ul>
            </li>
        </ul>

<!-- World Wide -->
         <ul class="nav">
            <li class="drop"><a class="sub-link" href="#url"><b class="top">Worldwide</b></a>
                <ul>
                    <li><a href="DisplayPhotoGallery01.html.php?City=ParisFrance&Year=2005-2006"><b>Paris, France</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=BarcelonaSpain&Year=2006"><b>Barcelona, Spain</b></a></li>
                     <li><a href="DisplayPhotoGallery01.html.php?City=CentralAmerica&Year=2006-2008"><b>Central America</b></a></li>
                    <li><a href="DisplayPhotoGallery01.html.php?City=SoutheastAsia&Year=2008"><b>Southeast Asia</b></a></li>                    
                </ul>
            </li>
        </ul>

<!-- Signs -->    
        <ul class="nav">
            <li><a href="DisplayPhotoGallery01.html.php?City=SignsNotes&Year=2004-Present"><b class="top">Signs</b></a></li>
        </ul>


        
    </div><!--menu-->        
</div><!--menu_container-->





</div>

<div id="divContentLeft">
</div>

<div id="divMainContent">

    <div id="page_wrap">
    <!-- <div id="text">Google+ Stack Effect</div> -->
    <!--Loads the element that will finally hold the row of three -->

           <div id="image_stack01">
               <a href=DisplayPhotoGallery01.html.php?City=SanFran&Year=2012>
	          <?php
                     //Get credentials
                     $config = get_creds();
 
		     //Connect and select db 
                     $link = get_sqli_connect($config);
                     //$link = mysqli_connect('mysql', 'phpfpm', 'asdjI88387GHGsbyuXX9093j', 'wallfaces');

		     //Run a queryi 
		     $resultSF = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'San Francisco, CA' AND YEAR(`ImageDate`)= '2012' AND `Notes` = 'splash' AND `Notes` != 'SIGNS and NOTES' ORDER BY `ImageDate` DESC LIMIT 3");			

		     //Photo1
		     $row = mysqli_fetch_row($resultSF);
		     echo "<img id=\"photo1\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultSF);
	             echo "<img id=\"photo2\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultSF);
	             echo "<img id=\"photo3\"  src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //php7.0 free the result
		     mysqli_free_result($resultSF);
		     mysqli_close($link);
		?>
									
		</a>
          </div>
		
	   <div id="image_stack02">
	       <a href=DisplayPhotoGallery01.html.php?City=SanFran&Year=2011>
	          <?php
                     //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);

	             //Run a query
	             $resultSF = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'San Francisco, CA' AND YEAR(`ImageDate`)= '2011' AND `Notes`='splash' ORDER BY `ImageDate` DESC LIMIT 3");

		     //Photo1
		     $row = mysqli_fetch_row($resultSF);
	             echo "<img id=\"photo4\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultSF);
	             echo "<img id=\"photo5\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultSF);
	             echo "<img id=\"photo6\"  src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
	             //php7.0 free the result
                     mysqli_free_result($resultSF);
	             mysqli_close($link);	
		  ?>
	      </a>							
	  </div>
		    
          <div id="image_stack03">
	      <a href=DisplayPhotoGallery01.html.php?City=SanFran&Year=2010>
		 <?php
                    //Get credentials
                    $config = get_creds();

                    //Connect and select db 
                    $link = get_sqli_connect($config);
	
		    //Run a query
	            $resultSF = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'San Francisco, CA' AND YEAR(`ImageDate`)= '2010' AND `Notes`='splash' ORDER BY `ImageDate` DESC LIMIT 3");
					
	            //Photo1
	            $row = mysqli_fetch_row($resultSF);
		    echo "<img id=\"photo7\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
	            //Photo2
	            $row = mysqli_fetch_row($resultSF);
		    echo "<img id=\"photo8\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
	            //Photo3
	            $row = mysqli_fetch_row($resultSF);
		    echo "<img id=\"photo9\"  src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
	            //php7.0 free the result
                    mysqli_free_result($resultSF);
		    mysqli_close($link);	
		?>
	      </a>	
	  </div>
            

	
	    <div id="stack_caption">
	    
		    <div id="stack_caption_text">
		        San Francisco, CA<br> 
		        Year: 2012
		    </div>
		
			<div id="stack_caption_text">
		        San Francisco, CA<br> 
		        Year: 2011
		    </div>
		
		    <div id="stack_caption_text">
		        San Francisco, CA<br> 
		        Year: 2010
		    </div>
		
	   </div><!--stack_caption-->
	    
	   <div id="image_stack04">
	       <a href=DisplayPhotoGallery01.html.php?City=LosAngeles&Year=2010>
                  <?php
                     //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);

	             //Run a query
		     $resultLA = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'Los Angeles, CA' AND YEAR(`ImageDate`)= '2010' AND `Notes`='splash' ORDER BY `ImageDate` ASC LIMIT 3");

		     //Photo1
		     $row = mysqli_fetch_row($resultLA);
		     echo "<img id=\"photo10\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultLA);
		     echo "<img id=\"photo11\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultLA);
		     echo "<img id=\"photo12\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultLA);
		     mysqli_close($link);	
		  ?>
		</a>		
           </div>
        
        
           <div id="image_stack05">
               <a href=DisplayPhotoGallery01.html.php?City=NewYork&Year=2010>
	          <?php
	             //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);

	             //Run a query
		     $resultNY = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'New York, NY' AND YEAR(`ImageDate`)= '2010' AND `Notes`='splash' ORDER BY `ImageDate` ASC LIMIT 3");
					
		     //Photo1
		     $row = mysqli_fetch_row($resultNY);
	             echo "<img id=\"photo13\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultNY);
		     echo "<img id=\"photo14\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultNY);
		     echo "<img id=\"photo15\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultNY);
	             mysqli_close($link);	
		  ?>
		</a>		
            </div>

           <div id="image_stack06">
               <a href=DisplayPhotoGallery01.html.php?City=SoutheastAsia&Year=2008>
	          <?php
	             //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);

		     //Run a query
		     $resultSEastAsia = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'Bangkok, Thailand' AND `Notes`='splash' OR `ImageLocation` = 'Chang Mai, Thailand' AND `Notes`='splash' OR `ImageLocation` = 'Pantang, Malaysia' AND `Notes`='splash' OR `ImageLocation` = 'Kula Lumpar, Malaysia' AND `Notes`='splash' OR `ImageLocation` = 'Singapore, Singapore' AND `Notes`='splash' ORDER BY `ImageDate` DESC LIMIT 3");
					
		     //Photo1
		     $row = mysqli_fetch_row($resultSEastAsia);
	             echo "<img id=\"photo16\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultSEastAsia);
	             echo "<img id=\"photo17\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
	             //Photo3
		     $row = mysqli_fetch_row($resultSEastAsia);
	             echo "<img id=\"photo18\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultSEastAsia);
	             mysqli_close($link);	
		   ?>
		</a>		
        </div>
        
         <div id="stack_caption_mid01">
	    
		    <div id="stack_caption_text">
		        Los Angeles, CA<br> 
		        Year: 2010
		    </div>
		
		
		    <div id="stack_caption_text">
		        New York, NY<br> 
		        Year: 2010
		    </div>
		
		    <div id="stack_caption_text">
		        South East Asia<br> 
		        Year: 2008
		    </div>
		</div> <!--stack_caption_bottom -->	
	 
	   <div id="image_stack07">
	       <a href=DisplayPhotoGallery01.html.php?City=CentralAmerica&Year=2010>	
	          <?php
                     //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);
	
		     //Run a query
                     $resultCTA = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` LIKE '%Nicaragua' AND `Notes`='splash' AND `Notes` != 'SIGNS and NOTES' OR`ImageLocation` LIKE '%Mexico'AND `Notes`='splash' AND `Notes` != 'SIGNS and NOTES' ORDER BY `ImageDate` ASC LIMIT 3");

		     //Photo1
		     $row = mysqli_fetch_row($resultCTA);
	             echo "<img id=\"photo19\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultCTA);
	             echo "<img id=\"photo20\"  class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultCTA);
	             echo "<img id=\"photo21\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultCTA);
	             mysqli_close($link);	
		   ?>
									
		</a>
           </div>
		
	   <div id="image_stack08">
	       <a href=DisplayPhotoGallery01.html.php?City=BarcelonaSpain&Year=2006>
	          <?php
		     //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);

		     //Run a query
		     $resultSpain = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'Barcelona, Spain' AND `Notes`='splash' ORDER BY `ImageDate` DESC LIMIT 3");
		     //Photo1
		     $row = mysqli_fetch_row($resultSpain);
	             echo "<img id=\"photo22\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultSpain);
		     echo "<img id=\"photo23\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultSpain);
	             echo "<img id=\"photo24\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultSpain);
		     mysqli_close($link);	
	           ?>
		</a>		
	   </div>
		    
           <div id="image_stack09">
	       <a href=DisplayPhotoGallery01.html.php?City=ParisFrance&Year=2005-2006>
		  <?php
                     //Get credentials
                     $config = get_creds();

                     //Connect and select db 
                     $link = get_sqli_connect($config);
	
		     //Run a query
		     $resultFrance = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = 'Paris, France' LIMIT 3");
					
		     //Photo1
		     $row = mysqli_fetch_row($resultFrance);
		     echo "<img id=\"photo25\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
					
		     //Photo2
		     $row = mysqli_fetch_row($resultFrance);
		     echo "<img id=\"photo26\" class=\"current\" src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
				
		     //Photo3
		     $row = mysqli_fetch_row($resultFrance);
		     echo "<img id=\"photo27\"  src=\"" .$row[2]/*FileLocation*/ .$row[1]/*FileName*/ .$row[10]/*FileType*/ ."\" >";
			
		     //php7.0 free the result
                     mysqli_free_result($resultFrance);
		     mysqli_close($link);	
		  ?>

		</a>
	   </div>
		
		 <div id="stack_caption_mid02">
	    
		    <div id="stack_caption_text">
		        Central America<br> 
		        Year: 2008 and 2010
		    </div>
		
		
		    <div id="stack_caption_text">
		        Barcelona, Spain<br> 
		        Year: 2006
		    </div>
		
		    <div id="stack_caption_text">
		        Paris, France<br> 
		        Years: 2005-2006
		    </div>
		</div> <!--stack_caption_mid02 -->	
	 	
		
		



	 
    </div><!--page wrap-->
</div><!--MainContent-->


<body>

</html>
