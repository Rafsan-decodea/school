
<?php 
  session_start();
 include ($_SERVER['DOCUMENT_ROOT']."/school/db/db.php");

 $db = new DB();


?>
<!DOCTYPE html>
<html lang="en-US">

<!-- Mirrored from themesbazar.net/educational/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 02 May 2022 06:09:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | Oxyzen School And Collage </title>  
      
      
<link rel="icon" href="<?php echo "/school/pages/wp-content/themes/educationaltheme/images/favicon.png " ; ?>" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo "/school/pages/wp-content/themes/educationaltheme/images/favicon.png";?>" type="image/x-icon" />       
             
<meta property="og:title" content="মো: আব্দুল হামিদ" /> 
<meta property="og:description" content="" />  
<meta property="og:image" content="/school/pages/wp-content/uploads/2018/04/13.gif" /> 
<meta property="og:video" content="" /> 
<meta property="og:video:width" content="560" />  
<meta property="og:video:height" content="340" />  
<meta property="og:video:type" content="application/x-shockwave-flash" />

        
        <title>Educational &#8211; A Premium WordPress Theme</title>
<ol style="display:none"><li><span>mail@helaluddin.info : admi2017 :  </span></li></ol><link rel='dns-prefetch' href='http://s.w.org/' />
<link rel="alternate" type="application/rss+xml" title="Educational &raquo; Feed" href="feed/index.html" />
<link rel="alternate" type="application/rss+xml" title="Educational &raquo; Comments Feed" href="comments/feed/index.html" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/themesbazar.net\/educational\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.3"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>

<link rel='stylesheet' id='bootstrap-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/css/bootstrap.min7bcd.css?ver=4.8.3";?>' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/css/font-awesome.min7bcd.css?ver=4.8.3";?>' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/css/responsive7bcd.css?ver=4.8.3";?>' type='text/css' media='all' />
<link rel='stylesheet' id='menu-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/css/menu7bcd.css?ver=4.8.3" ;?>' type='text/css' media='all' />
<link rel='stylesheet' id='stylesheet-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/css/stylesheet7bcd.html?ver=4.8.3";?>' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='<?php echo "/school/pages/wp-content/themes/educationaltheme/style7bcd.css?ver=4.8.3" ;?>' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo "/school/pages/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4";?>'></script>
<script type='text/javascript' src='<?php echo "/school/pages/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1"; ?>'></script>
<script type='text/javascript' src='<?php echo "/school/pages/wp-content/themes/educationaltheme/js/bootstrap.min7bcd.js?ver=4.8.3";?>'></script>
<link rel='https://api.w.org/' href='wp-json/index.html' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.8.3" />
		
<style>
   
body {
	width:100%;
	font-family: SolaimanLipiNormal;
	background: url(http://themesbazar.com/educational/wp-content/themes/educationaltheme/images/bg_body.gif) no-repeat top center;
	font-size: 17px}


.main_website{
	background:#ffffff;
	border-radius:2px;
}
.scrool_1{
	padding:7px;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
	color:#fff;
	font-size:17px;
	text-align:left;
	padding-left:10px;
}	
.catagory_title{
    padding: 7px;
	color:#fff;
	margin-bottom:10px!important;
	font-size:18px;
	font-weight:400;
	margin:0;
	overflow:hidden;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
}	
.catagory_title_5{
    padding: 7px;	
	margin-top:5px!important;
	color:#fff;
	font-size:18px;
	font-weight:400;
	margin:0;
	overflow:hidden;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
}
.social-link ul li a i {
	color: #fff;
	font-size: 16px;
	font-weight: 300;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
	text-align: center;
	width: 33px;
	height: 33px;
	line-height: 33px;
	background:#3987E6;
}	
.section_2{ 
	background:#0082CF;
	padding:10px;
}

.root{
	padding:10px;
}								
.root_01{  
	color:#fff;
	font-size:16px;
}
.root_02{
	text-align:right;
	color:#fff;	
	font-size:17px;
}
.root_02 a{
	color:#000;
	font-weight:800;
	text-decoration:none;
}
.root_02 a:hover{
	color:#fff;
}	
.facebook_title{
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
	padding:10px;
	margin-bottom:5px;
}
.fb-root{
	margin-bottom:5px;
}
.facebook_title a{
	color:#fff;
	font-size:16px;
	
}
.contact_us_hadding{
	color:#fff;
	font-size:20px;
	
	text-decoration:none;
	padding:7px;
	background:#138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
}

/*Widget Title=========*/
    .widget_area{ margin:5px 0px 5px 0px;}
    .widget_area li{margin:2px 0px 5px 0px;}
    .widget_area h3{
	padding: 7px;
	color:#fff;
	margin-bottom:10px!important;
	font-size:16px;
	text-align:left;
	margin:0;
	overflow:hidden;
	background: #138FDE;
	background: -webkit-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -o-linear-gradient(-90deg, #138FDE, #003CA9);
	background: -moz-linear-gradient(-90deg, #138FDE, #003CA9);
	background: linear-gradient(-90deg, #138FDE, #003CA9);
}
    #bs-example-navbar-collapse-1 {
    background-color: #013C57;
    font-size: 16px;
    }
    #nav .navbar-default .navbar-nav > li > a{color: #FFFFFF;
        padding: 7px 20px 7px 20px;}
   .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
    color: #fff !important; 
       margin: 0px;
       background-color: #74010D;}
#nav .navbar-collapse {padding: 0px; border-bottom : 2px solid #74010D;}


	  /* Goto Top============================ */
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: none; /* Remove borders */
    outline: none; /* Remove outline */
    background-color: #013C57; /* Set a background color */
    color: #fff; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 15px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

            
    #myBtn:hover {
    background-color: #013C57; /* Add a dark-grey background on hover */
        opacity: 0.5;
}
		</style>
		
    </head>
	<body>
	
	<!----------__________header start___________------------>
	
	<section class="section_1">
		<div class="container  card main_website">
			
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 logo">
					<a href="#"><img src="<?php echo "/school/pages/wp-content/themes/educationaltheme/images/banner.gif";?>" alt="Logo" width="100%"></a>
				</div>
			</div>
			
			<!----------__________menu start___________------------>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="" id="nav">
					<nav class="navbar navbar-default" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=		"#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">	
							 <div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav navbar-nav"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-74" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-74 active"><a title="প্রচ্ছদ" href="/school/index.php">প্রচ্ছদ</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-95" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-95 dropdown"><a title="প্রশাসন" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">প্রশাসন <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-113" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-113"><a title="শিক্ষকবৃন্দ" href="category/%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6/index.html">শিক্ষকবৃন্দ</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-110" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-110"><a title="পরিচালনা পরিষদ" href="category/%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%be%e0%a6%b2%e0%a6%a8%e0%a6%be-%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6/index.html">পরিচালনা পরিষদ</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-112" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112"><a title="ম্যানেজিং কমিটি" href="category/%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%9c%e0%a6%bf%e0%a6%82-%e0%a6%95%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%bf/index.html">ম্যানেজিং কমিটি</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-107" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-107"><a title="কর্মকর্তা কর্মচারী" href="category/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">কর্মকর্তা কর্মচারী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-111" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-111"><a title="প্রাক্তন প্রধান শিক্ষক" href="category/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%95/index.html">প্রাক্তন প্রধান শিক্ষক</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-108" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-108"><a title="কৃতি শিক্ষার্থী" href="category/%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf-%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a5%e0%a7%80/index.html">কৃতি শিক্ষার্থী</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-99" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-99 dropdown"><a title="শিক্ষার্থীদের তথ্য" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">শিক্ষার্থীদের তথ্য <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-101" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-101"><a title="৬ষ্ঠ শ্রেণী" href="category/%e0%a7%ac%e0%a6%b7%e0%a7%8d%e0%a6%a0-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">৬ষ্ঠ শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-102" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-102"><a title="৭ম শ্রেণী" href="category/%e0%a7%ad%e0%a6%ae-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">৭ম শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-103" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-103"><a title="৮ম শ্রেণী" href="category/%e0%a7%ae%e0%a6%ae-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">৮ম শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-104" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-104"><a title="৯ম শ্রেণী" href="category/%e0%a7%af%e0%a6%ae-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">৯ম শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-100" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-100"><a title="১০ম শ্রেণী" href="category/%e0%a7%a7%e0%a7%a6%e0%a6%ae-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">১০ম শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-106" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-106"><a title="একাদ্বশ শ্রেণী" href="category/%e0%a6%8f%e0%a6%95%e0%a6%be%e0%a6%a6%e0%a7%8d%e0%a6%ac%e0%a6%b6-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">একাদ্বশ শ্রেণী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-109" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-109"><a title="দ্বাদশ শ্রেণী" href="category/%e0%a6%a6%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%a6%e0%a6%b6-%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%a3%e0%a7%80/index.html">দ্বাদশ শ্রেণী</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-97" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-97 dropdown"><a title="ভর্তি" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">ভর্তি <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-84"><a title="ভর্তি তথ্য" href="%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af/index.html">ভর্তি তথ্য</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-85" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-85"><a title="ভর্তি ফরম" href="%e0%a6%ad%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf-%e0%a6%ab%e0%a6%b0%e0%a6%ae/index.html">ভর্তি ফরম</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-79" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79"><a title="ডাউনলোড" href="%e0%a6%a1%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a6%b2%e0%a7%8b%e0%a6%a1/index.html">ডাউনলোড</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-91" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-91"><a title="রুটিন" href="%e0%a6%b0%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%a8/index.html">রুটিন</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-82" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-82"><a title="ফলাফল" href="%e0%a6%ab%e0%a6%b2%e0%a6%be%e0%a6%ab%e0%a6%b2/index.html">ফলাফল</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-80" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-80"><a title="নোটিশ" href="%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6/index.html">নোটিশ</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a title="ব্লগ" href="%e0%a6%ac%e0%a7%8d%e0%a6%b2%e0%a6%97/index.html">ব্লগ</a></li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-98" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-98 dropdown"><a title="গ্যালারী" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">গ্যালারী <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a title="ফটোগ্যালারী" href="%e0%a6%ab%e0%a6%9f%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">ফটোগ্যালারী</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-86"><a title="ভিডিও গ্যালারী" href="%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93-%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a7%80/index.html">ভিডিও গ্যালারী</a></li>
</ul>
</li>
<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-96" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-96 dropdown"><a title="বিভিন্ন তথ্য" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">বিভিন্ন তথ্য <span class="caret"></span></a>
<ul role="menu" class=" dropdown-menu" >
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-75" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-75"><a title="কক্ষ সংখ্যা" href="%e0%a6%95%e0%a6%95%e0%a7%8d%e0%a6%b7-%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be/index.html">কক্ষ সংখ্যা</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-76"><a title="কম্পিউটার ব্যবহার" href="%e0%a6%95%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%be%e0%a6%b0-%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b9%e0%a6%be%e0%a6%b0/index.html">কম্পিউটার ব্যবহার</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-77" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77"><a title="ছাত্রছাত্রীর আসন সংখ্যা" href="%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%9b%e0%a6%be%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%b0-%e0%a6%86%e0%a6%b8%e0%a6%a8-%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be/index.html">ছাত্রছাত্রীর আসন সংখ্যা</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-87" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-87"><a title="ভৌতকাঠমো" href="%e0%a6%ad%e0%a7%8c%e0%a6%a4%e0%a6%95%e0%a6%be%e0%a6%a0%e0%a6%ae%e0%a7%8b/index.html">ভৌতকাঠমো</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-88" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-88"><a title="মাল্টিমিডিয়া ক্লাসরুম" href="%e0%a6%ae%e0%a6%be%e0%a6%b2%e0%a7%8d%e0%a6%9f%e0%a6%bf%e0%a6%ae%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a7%9f%e0%a6%be-%e0%a6%95%e0%a7%8d%e0%a6%b2%e0%a6%be%e0%a6%b8%e0%a6%b0%e0%a7%81%e0%a6%ae/index.html">মাল্টিমিডিয়া ক্লাসরুম</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-89" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-89"><a title="যানবাহন সুবিধা" href="%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a6%a8-%e0%a6%b8%e0%a7%81%e0%a6%ac%e0%a6%bf%e0%a6%a7%e0%a6%be/index.html">যানবাহন সুবিধা</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a title="শূণ্যপদের তালিকা" href="%e0%a6%b6%e0%a7%82%e0%a6%a3%e0%a7%8d%e0%a6%af%e0%a6%aa%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be/index.html">শূণ্যপদের তালিকা</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-78" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-78"><a title="ছুটির তালিকা" href="%e0%a6%9b%e0%a7%81%e0%a6%9f%e0%a6%bf%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be/index.html">ছুটির তালিকা</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93"><a title="সহপাঠ" href="%e0%a6%b8%e0%a6%b9%e0%a6%aa%e0%a6%be%e0%a6%a0/index.html">সহপাঠ</a></li>
	<li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-94" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94"><a title="সার্কুলার" href="%e0%a6%b8%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%95%e0%a7%81%e0%a6%b2%e0%a6%be%e0%a6%b0/index.html">সার্কুলার</a></li>
</ul>
</li>
<?php 
 if (isset($_SESSION["id"])) {
?>
<li><a href="/school/login/dashboard/index.php">Dashboard</a></li>
<?php } else{ ?>
<li><a href="/school/login">Login</a></li>
<?php }?>
</ul></div>						</div>
					</nav>
				</div>
				</div>
			</div>

			<!----------__________slider start___________------------>	
			
						
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">

					<div class="slider">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
								
								<div class="carousel-inner">
									
									<div class="item active">
										 <!-- Post Image Code Start--> 
								<a href="#">
								<img width="1000" height="300" src="<?php echo "/school/pages/wp-content/uploads/2018/04/04.gif";?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								</a>
								<!-- Post Image Code Close-->
			
										 
										 </h4>
									</div>
						<div class="item">
										 <!-- Post Image Code Start--> 
								<a href="#">
								<img width="1000" height="300" src="<?php echo "/school/pages/wp-content/uploads/2018/04/03.gif"; ?>" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" />								</a>
								<!-- Post Image Code Close-->
										 <!-- <h4 class="centered"><a href="home-photo/%e0%a6%b9%e0%a7%8b%e0%a6%ae%e0%a6%aa%e0%a7%87%e0%a6%9c-%e0%a6%ab%e0%a6%9f%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%a4%e0%a6%bf%e0%a6%a8/index.html">হোমপেজ ফটোগ্যালারী তিন</a></h4> -->
									</div>
																	
								
							 <!-- Left and right controls -->
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
								 </a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									<span class="sr-only">Next</span>
								 </a>
							</div>
					</div>

				</div>
			</div>
		
			   
						
			<!----------__________ scrool start ___________------------>
			<?php 
			  
			  $sql = "select * from posts ";
			  $result = $db->query($sql);
			  $data = mysqli_fetch_array($result);
			?>
			
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 scrool">							
					<div class="col-lg-2 col-md-2 col-sm-2 scrool_1">
						ঘোষনা					</div>
					<div class="col-lg-10 col-md-10 col-sm-10 scrool_2">
						<marquee direction = "left" scrollamount="4px" onmouseover="this.stop()" onmouseout="this.start()">
												<i class="fa fa-stop-circle"></i><?php echo $data['heading'];?></a>
												</marquee>
					</div>
				</div>
			</div>	