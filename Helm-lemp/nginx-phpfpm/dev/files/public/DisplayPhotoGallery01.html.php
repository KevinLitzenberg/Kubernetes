<!-- <!DOCTYPE html> --> 
<html>

<?php
	session_start();	
	
	//echo $_GET['City'] ."<br>";
	//echo $_GET['Year'] ."<br>";
	
	function processURL(){
		switch($_GET['City']){
			case ('SanFran'):
				$_SESSION['City'] = "San Francisco, CA";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('ParisFrance'):
				$_SESSION['City'] = "Paris, France";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('BarcelonaSpain'):
				$_SESSION['City'] = "Barcelona, Spain";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('SoutheastAsia'):
			    $_SESSION['City'] = "Southeast Asia";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('NewYork'):
				$_SESSION['City'] = "New York, NY";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('LosAngeles'):
				$_SESSION['City'] = "Los Angeles, CA";
				$_SESSION['Year'] = $_GET['Year'];
				break;
			case ('CentralAmerica'):
				$_SESSION['City'] = "Central America";
				$_SESSION['Year'] = $_GET['Year'];	
				break;
			case ('SignsNotes'):
			    $_SESSION['City'] = "Signs and Notes";
			    $_SESSION['Year'] = $_GET['Year'];
			    break;	
		}	
	}	
	processURL();
	//echo $_SESSION['City'] ."<br>";
	//echo $_SESSION['Year'] ."<br>";

	
?>

<head> 

<!-- Source: http://www.htmlgoodies.com/html5/css/how-to-create-a-css3-based-image-gallery.html#fbid=VKkMHHD3IjS -->

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function() {
	$('.closed').click(function() {
	    $('a').blur();
		
	});
});			


</script>

<link rel="stylesheet" href="album-mod.css" type="text/css">
<link rel="icon" href="http://alpatriott.ru/wp-content/themes/softlink/images/favicon.ico" type="image/x-icon">

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



/*******************************Being Gallery Styles**********************************/


/**** Places images on the screen ****/

a{
    float: left;
    left: 2px;
    top: 2px;
	width: 158px;
	height: 158px;
    position: relative;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    margin: 20px 30px 50px 20px;
    /*TOP,RIGHT,BOTTOM,LEFT*/    
}

/**** Sets image size to %100 USING OPACITY ****/

a img{
    display: block;
    width: 100%;
    height:100%;
    /*margin: 10px 10px 10px 10px;
    border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5); */
    
    -webkit-transition-property: width, height; /* we specify, what properties we need to change*/
    -webkit-transition-duration: 300ms; /* we specify, with what speed it is necessary to return an image in its initial look*/
    -moz-transition-property: width, height;
    -moz-transition-duration: 300ms;
    -o-transition-property: width, height;
    -o-transition-duration: 300ms;
    position: absolute;
    opacity: 10.0; /* add opacity*/
    cursor: pointer;
     /* padding: 15px 15px 15px 15px;*/
    
    /*border: 4px solid #FFF;
    box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);*/       
}


/**** Adds the comment to the photo itself ****/
a:after {
    display: block;
    position: absolute;
    width: 100%;
    height: 100%;
    /*content: "Studio.com";*/
    color: #eaeaea;
    font-family: "Trebuchet MS";
    font-size: 16px;
    opacity: 0.5;
}

/**** This is the code that actually transforms the image ****/
a:focus img{
    width: 250%; /* we increased an image to this size */
    height: 250%;
    position: absolute;
    opacity: 1; /* transparency is not needed */
    z-index: 1; /* for a photo to enlarge over all images */
    -moz-box-shadow: 0 0 15px 2px #000;
    -webkit-box-shadow: 0 0 15px 2px #000;
    box-shadow: 0 0 15px 2px #000; /* we add some beauty */
    -webkit-transition-property: width, height; /* we decrease the image */
    -webkit-transition-duration: 2s; /* we specify, with what speed it is necessary to increase an image */
    -webkit-transition-delay: 0.3s; /* as a browser will process it, before enlarging a photo */
    -moz-transition-property: width, height;
    -moz-transition-duration: 2s;
    -moz-transition-delay: 0.3s;
    -o-transition-property:width, height;
    -o-transition-duration: 2s;
    -o-transition-delay: 0.3s;
    cursor: default;
}

/**** make the X for closing ****/
a .closed{
   display: block;
   position: absolute;  
   height: 0px;
   width: 10px;
   opacity: 0.0; /* add opacity*/
   -webkit-text-shadow: 0px 0px 5px #222;
  /* -moz-text-shadow: 0px 0px 5px #222; */
   text-shadow: 0px 0px 5px #222;
   -moz-transform: rotate(45deg);
   -o-transform: rotate(45deg);
   -webkit-transform: rotate(45deg);
  
  transition-property: opacity;
  transition-duration: 0ms;
  transition-timing-function: linear;
  transition-delay: 0s;
   

  /*Firefox 4*/
  -moz-transition-property: opacity;
  -moz-transition-duration: 0ms;
  -mos-transition-timing-function:linear;
  -moz-transition-delay: 0s;
   
  /*Safari and Chrome*/ 
  -webkit-transition-property: opacity;
  -webkit-transition-duration: 0ms;
  -webkit-transition-timing-function:linear;
  -webkit-transition-delay: 0s;
   
  /*Opera*/ 
  -o-transition-property: opacity;
  -o-transition-duration: 0ms; 
  -o-transition-timing-function:linear;
  -o-transition-delay: 0s;
 
  /* cursor: pointer;*/
}

a:focus .closed{
    position: absolute; 
	text-align: center;
    font-size:40px;
    font-weight: bold;
	/*background-color: black;*/
    color: white;
    display: block;
    height: 10px;
    width: 10px;
    -webkit-text-shadow: 0px 0px 5px #222;
    -moz-text-shadow: 15px 15px 5px #222;
    text-shadow: 0px 0px 5px #222;
    -moz-transform: rotate(45deg);
    -o-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
	    
    opacity: 1.0;
    
    transition-property: opacity;
    transition-duration: 10ms;
    transition-timing-function: linear;
    transition-delay: 2.3s;
   
    /*Firefox 4*/
    -moz-transition-property: opacity;
    -moz-transition-duration: 10ms;
    -mos-transition-timing-function:linear;
    -moz-transition-delay: 2.3s;
   
    /*Safari and Chrome*/ 
    -webkit-transition-property: opacity;
    -webkit-transition-duration: 10ms;
    -webkit-transition-timing-function:linear;
    -webkit-transition-delay: 2.3s;
   
    /*Opera*/ 
    -o-transition-property: opacity;
    -o-transition-duration: 300ms; 
    -o-transition-timing-function:linear;
    -o-transition-delay: 2.3s;
 
     cursor: default; 
     z-index: 2;
     }

/**** Code Pushes the size from the left and right ****/
/**** every fourth element starting with 3rd and 4th will be enlarged from the right border of browser window ****/
a:nth-child(4n+4) img, a:nth-child(4n+3) img{ 
    right: 0;
}

/**** all elements, starting with the ninth will begin to enlarge upwards ****/
a:nth-child(n+9) img{
    bottom: 0%;
}

/**** Set the closing x for the images MAX 36 Photos ****/
/**** First Set of Elements ****/
a:nth-child(-n+2) .closed{
    top: 2px;
    right: -236px;
}

/*Second Set of Elements*/
a:nth-child(n+3) .closed{
   top: 2px;
    right: 2px;
}

/*Third Set of Elements*/
a:nth-child(n+5) .closed{
    top: 2px;
    right: -236px;
}

/*Fourth Set of Elements*/
a:nth-child(n+7) .closed{
    top: 2px;
    right: 2px;
}
/* ********************** */

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


   $config = get_creds();
 
   $link = get_sqli_connect($config);
	
   //Connect and select db
   //$link = mysqli_connect("mysql", "phpfpm", "asdjI88387GHGsbyuXX9093", "wallfaces");
   //mysql_select_db("wallfaces");
					
   $result = mysqli_query($link, "SELECT * FROM faceimages");
					
   $total = mysqli_num_rows($result);
					
   for ($i=9; $i <= $total; $i=$i+2){					
      echo "a:nth-child(n+$i) .closed{ top: -236px; right: -236px;}";
      $i = $i + 2;
      echo "a:nth-child(n+$i) .closed{ top: -236px; right: -2px;}";
   }

   mysqli_free_result($result);
   mysqli_close($link);					
?>					


a stack_caption{
width: 898px;
top: 214px;
height: 35px;
border: 1px solid #DDDDDD;
position: relative;

}

#stack_caption_bottom{
width: 998px;
top: 478px;
height: 35px;
/*border: 1px solid #DDDDDD;*/
position: relative;
}


a stack_caption_text{
/*top: 21;*/
/*width: 25%; */
/*height: 95%;*/
/*border: 1px solid #DDDDDD;*/
/*margin-left:30px;*/
margin: -120px 100px 0px 30px;
/*TOP,RIGHT,BOTTOM,LEFT*/
display: block;
font-size:xx-small;
text-align:left;
font-family:arial,sans-serif;
float: left; /*justify*/
position: inherit;
}

a #container{
    
    position: absolute;
    top: 180;
    

    height: 23%;
    width: 90%;
    size: inherit;
    
    float: left;
    display: block;
            
    font-size:xx-small;
    text-align:left;
    font-family:arial,sans-serif;


    /*border: 1px solid #DDDDDD;*/
    
    margin: 0px 0px 0px 5px;
    /*TOP,RIGHT,BOTTOM,LEFT*/
    /*padding: */
    /* margin-bottom: 0px; */

    overflow: hidden;
}

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

<title>DisplayPhotoGallery01.html.php</title><!--DisplayPhotoGalleryDynamicQuery.html.php -->

</head> 

<body>

<div id="divContentTop">
		<div class="maintitle">
        www.facingsf.com
    </div><!--maintitle-->
    
    <div class="subheading">
        <?php
		    echo $_SESSION['City'] ." ". $_SESSION['Year'];
	    ?>
    </div><!--subheading-->
			
		
</div><!-- divContentTop -->


<div id="divContentTopBar">

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
            <!-- <li><a href="#url"><b class="top">Signs</b></a></li> -->
            <li><a href="DisplayPhotoGallery01.html.php?City=SignsNotes&Year=2004-Present"><b class="top">Signs</b></a></li>

        </ul>


        
    </div><!--menu-->        
</div><!--menu_container-->



</div>

<div id="divContentLeft">
</div>

<div id="divMainContent">



	<div class="gallery">
	
	<?php
           //Get credentials
           $config = get_creds();

           //Connect and select db 
           $link = get_sqli_connect($config);

	
	   //Check for Paris then Run a query
	   if($_SESSION['City'] == "Paris, France"){
	      $result = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = '". $_SESSION['City']. "' && `Notes`!='SIGNS and NOTES' ORDER BY `ImageDate` DESC");
	   }
					
	   //Check for Southeast Asia
	   else if($_SESSION['City'] == "Southeast Asia"){
	      //$result= mysql_query("SELECT * FROM faceimages WHERE `ImageLocation` = 'Bangkok, Thailand' OR `ImageLocation` = 'Chang Mai, Thailand' OR `ImageLocation` = 'Pantang, Malaysia' OR `ImageLocation` = 'Kula Lumpar, Malaysia' OR `ImageLocation` = 'Singapore, Singapore' ORDER BY `ImageDate` ASC");
	     $result= mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` LIKE '%Thailand' && `Notes`!='SIGNS and NOTES' OR `ImageLocation` LIKE '%Malaysia' && `Notes`!='SIGNS and NOTES' OR `ImageLocation` LIKE 'Singapore, Singapore'&& `Notes`!='SIGNS and NOTES' ORDER BY `ImageDate` DESC");
	  }
					
	   //Check for Central America
	   else if($_SESSION['City'] == "Central America"){
	     //$result= mysql_query("SELECT * FROM faceimages WHERE `ImageLocation` = 'San Juan Del Sur, Nicaragua' OR `ImageLocation` = 'Leon, Nicaragua' OR `ImageLocation` = 'Ensenada, Mexico' && `Notes`!='SIGNS and NOTES'");
             $result= mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` LIKE '%Nicaragua' && `Notes`!='SIGNS and NOTES'  OR `ImageLocation` LIKE '%Mexico' && `Notes`!='SIGNS and NOTES' ORDER BY `ImageDate` DESC");
           } 	

           //Check for Signs and Notes
	  else if($_SESSION['City'] == "Signs and Notes"){
             $result= mysqli_query($link, "SELECT * FROM faceimages WHERE `Notes` = 'SIGNS and NOTES' ORDER BY `ImageDate` DESC");
          }
                    				
	  else{
	    //$result = mysql_query("SELECT * FROM faceimages WHERE `ImageLocation` = '". $_SESSION['City']. "' && YEAR(`ImageDate`) = '". $_SESSION['Year']."' && `Notes`!='SIGNS and NOTES' ORDER BY `ImageDate` DESC");
	    $result = mysqli_query($link, "SELECT * FROM faceimages WHERE `ImageLocation` = '". $_SESSION['City']. "' && YEAR(`ImageDate`) = '". $_SESSION['Year']."' && `Notes`!='SIGNS and NOTES' OR `ImageLocation`= 'Oakland, CA' && YEAR(`ImageDate`) = '". $_SESSION['Year']."'&& `Notes`!='SIGNS and NOTES' ORDER BY `ImageDate` DESC");
          }
					
	  while ($row = mysqli_fetch_array($result)){
					
	    echo "<a tabindex=\"1\"><img src=\"". $row["FileLocation"] . $row["FileName"]. $row["FileType"]. "\"><div class=\"closed\">+</div>";
	    echo "<div id=\"container\">date: " . $row["ImageDate"] ."<br>name: ". $row["ImageName"]. "<br> location: ". $row["ImageLocation"]. "</div>";
	    echo "</a>";

	  } 	
				
					
	  mysqli_free_result($result);
          mysqli_close($link);
        ?>
	    
	</div>	<!-- gallery -->



</div> <!--divMainContent-->	

</body>

<!-- <span class="closed">+</span>
<span class="closed-layer">+</span> -->	
</html>
