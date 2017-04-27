<?php
$phpc_server = $_SERVER['SERVER_NAME'];
if(!empty($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] != 80)
	$phpc_server .= ":{$_SERVER["SERVER_PORT"]}";

// Protcol ex. http or https
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off'
		|| $_SERVER['SERVER_PORT'] == 443
		|| isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
		|| isset($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
    $phpc_proto = "https";
} else {
    $phpc_proto = "http";
}

$phpc_home_url = $phpc_proto."://".$phpc_server;
?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html manifest="example.appcache">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="description" content="Groz" />
<meta name="keywords" content="Groz" />
<meta name="robots" content="index, follow"/>
<!--<meta http-equiv="refresh" content="10; url=<?php echo $phpc_home_url;?>/groz"/>-->


<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />

<!--only this works in html5-->
<meta http-equiv="expires" content="Mon, 21 May 2012 1:00:00 GMT" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel='shortcut icon' type='images/x-icon' href="images/favicon.ico" />
<title>GROZ</title>

<link href="css/boilerplate.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<link href="css/gindexcss.css" rel="stylesheet" type="text/css">
<!--<link href="css/jquery1110/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="css/jquery1110/jquery-ui.structure.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery1110/jquery-ui.theme.min.css" rel="stylesheet" type="text/css">-->
<script type='text/javascript'  src='js/jquery-1.10.2.js'></script>
<!--<script type='text/javascript'  src="js/jquery-ui-1.10.4.jquery.ui.js"></script>
<script type='text/javascript' src='js/menu_jquery.js'>-->
<script type='text/javascript'>
var jq = $.noConflict();
jq( document ).ready(function() {
jq('#cssmenu > ul > li > a').click(function() {
  jq('#cssmenu li').removeClass('active');
  jq(this).closest('li').addClass('active');	
  jq('#cssmenu ul ul:visible').slideUp('fast');
  var checkElement = jq(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    jq(this).closest('li').removeClass('active');
    checkElement.slideUp('fast');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    jq('#cssmenu ul ul:visible').slideUp('fast');
    checkElement.slideDown('fast');
  }
  if(jq(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});</script>

<script src="js/respond.min.js"></script>
<script type="text/javascript">
function flvS3(v1){//v1.0
var v2=MM_findObj(v1),v3=0,v4=0,v5=0,v6=0;if (!v2){this.x=this.y=this.h=this.w=0;return;}var v7=(document.layers)?v2:v2.style;v3=v7.left;v4=v7.top;if ((v3==""||v4=="")&&document.all&&!window.opera){if (v3==""){v3=v2.offsetLeft;}if (v4==""){v4=v2.offsetTop;}}if (v2.offsetHeight){v5=v2.offsetHeight;v6=v2.offsetWidth;}else if (document.layers){v5=v7.clip.height;v6=v7.clip.width;}this.x=parseInt(v3);this.y=parseInt(v4);this.h=parseInt(v5);this.w=parseInt(v6);}

function flvS8(v1,v2,v3){//v1.0
var v4=(document.layers)?v1:v1.style;var v5=flvS5();eval("v4.left='"+v2+v5+"'");eval("v4.top='"+v3+v5+"'");}

function flvS5(){//v1.0
var v1=((parseInt(navigator.appVersion)>4||navigator.userAgent.indexOf("MSIE")>-1)&&(!window.opera))?"px":"";return v1;}

function flvXAS1(){
var v1=arguments,v2=v1.length,v3='AutoScrollContainer',v4='AutoScrollContent';var v5=MM_findObj(v3),v6=MM_findObj(v4);if (!v5){return;}if (v5.XAS1!=null){clearTimeout(v5.XAS1);}var v7=(v2>0)?parseInt(v1[0]):1;if (v7){var v8=(v2>1)?parseInt(v1[1]):1,v9=(v2>2)?parseInt(v1[2]):50,v10=(v2>3)?parseInt(v1[3]):1;var v11=new flvS3(v3),v12=new flvS3(v4);var v13=v12.x,v14=v12.y,v15=0,v16=0;if (v10==1){var v17=-1*v12.h;v15=v12.x;if (v14>=v17){v16=v12.y-v8;}else {v16=v11.h;}}else {var v18=-1*v12.w;v16=v12.y;if (v13>=v18){v15=v12.x-v8;}else {v15=v11.w;}}flvS8(v6,v15,v16);v5.XAS1=setTimeout("flvXAS1("+v7+","+v8+","+v9+","+v10+")",v9);}}
function P7_JumpMenu(selObj,restore){ //v1.7 by Project Seven
	var theFullString = selObj.options[selObj.selectedIndex].value;
	if (restore) selObj.selectedIndex=0;
	var theLength = theFullString.length;
	var endPos = theFullString.lastIndexOf("~");
	var theUrl, theTarget, theParent;
	if (endPos > 0) {theUrl = theFullString.substring(0,endPos);}
	else {theUrl = theFullString;}
	endPos++
	if (endPos < theLength) {theTarget = theFullString.substring(endPos,theLength)}
	else {theTarget = "window:Main";}
	if (theTarget == "window:New") {window.open(theUrl);}
	else if (theTarget == "window:Main") {eval("parent.location='"+theUrl+"'");}
	else {eval("parent.frames[\'"+theTarget+"\'].location='"+theUrl+"'");}
}
function P7_JumpMenuGo(selName,restore){ //v1.7 by Project Seven
  var selObj = MM_findObj(selName); if (selObj) P7_JumpMenu(selObj,restore);
}
function calllogout()
{
	window.location='index.php?doLogout=true';
}
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value.trim())!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
</head>
<body onload="flvXAS1(1,1,30,1)" >
<div class="gridContainer clearfix"> 
   	<div id="gheader">
   		<div id="logo"><a href='<?php echo $phpc_home_url?>' target="_blank"></a></div>             
	</div>
  <div id="gmenu">
      		<div id='cssmenu'>
            <ul>              
                <li><a href='<?php echo $phpc_home_url?>/lms'><span>LMS</span></a></li>
                <li><a href='<?php echo $phpc_home_url?>/groz'><span>Intranet</span></a></li>
                <li><a href='http://www.groz-tools.com'><span>Groz-Tools</span></a></li>
				<li><a href='<?php echo $phpc_home_url?>/groz/contact.php'><span>Contact</span></a></li>            </ul>
      </div>	
  </div>
      
      
  <div id="advertisement" >
     <!-- Begin DWUser_EasyRotator -->     
    <script type="text/javascript" src="js/easy_rotator.min.js"></script>
    <div ID = "AdMainDiv" class="dwuserEasyRotator"  data-erconfig="{autoplayEnabled:true, autoplayStopOnInteraction:false, autoplayPauseOnHover:false, lpp:'102-105-108-101-58-47-47-47-68-58-47-99-117-114-114-101-110-116-37-50-48-100-97-116-97-47-68-111-99-117-109-101-110-116-115-47-69-97-115-121-82-111-116-97-116-111-114-80-114-101-118-105-101-119-47-112-114-101-118-105-101-119-95-115-119-102-115-47', wv:1}" data-ername="GROZ" data-ertid="{lwvt6qf7sy0174193739931}">
      <div data-ertype="content" style="display: none;">
        <ul data-erlabel="Main Category">
          <li><img class="main" src="images/slider/pic4.jpg" alt="GET" /> <img class="thumb" src="images/slider/pic4.jpg" /> <span class="title">GET</span> <span class="desc">Groz Engineering Tools Private Limited</span></li>
          <li><img class="main" src="images/slider/pic3.jpg" alt="GNI" /><img class="thumb" src="images/slider/pic3.jpg" /> <span class="title">GNI</span> <span class="desc">Groz Net Industries</span></li>
          <li><img class="main" src="images/slider/pic2.jpg" alt="APT" /> <img class="thumb" src="images/slider/pic2.jpg" /> <span class="title">APT</span> <span class="desc">A.P.Tools</span></li>
          <li><img class="main" src="images/slider/Pic1.jpg" alt="ACR" /> <img class="thumb" src="images/slider/Pic1.jpg" /> <span class="title">ACR</span> <span class="desc">Accurate Product Corporation Private Limited</span></li>
        </ul>
      </div>
      <div data-ertype="layout" data-ertemplatename="NONE" style="">
        <!-- bg -->
        <!--Monish changed Shadow  style_real="box-shadow: 0 1px 3px #666;" to style_real="box-shadow: 0 5px 0 #999;"  for modify the shadow from all side to only bottom-->
        <!--style_real="box-shadow: 0 5px 0 #999;"-->
        <div style="position:absolute; left: 0; right: 0; top:0; bottom:0;"  class="erFixCSS3"></div>
        <!--Monish changed bottom:85px to bottom:0 for full images, can also change arrowButtonMode:'rollover' to always -->
        <div class="erimgMain" style="position: absolute; left:0;right:0;top:0;bottom:0px;" data-erconfig="{___numTiles:3, scaleMode:'fillArea', imgType:'main', __loopNextButton:false, arrowButtonMode:'rollover'}">
          <div class="erimgMain_slides" style="position: absolute; left:0; top:0; bottom:0; right:0;">
            <div class="erimgMain_slide">
              <div class="erimgMain_img" style="position: absolute; left: 0; right: 0; top: 0; bottom: 0;"></div>
              <div class="erimgMain_customField" data-erfield="videoOverlay" style="position: absolute; left: 0; right: 0; top: 0; bottom: 0;"></div>
            </div>
          </div>
          <div class="erimgMain_arrowLeft" style="position:absolute; left: 10px; top: 50%;" data-erconfig="{image:'circleSmall', image2:'circleSmall'}"></div>
          <div class="erimgMain_arrowRight" style="position:absolute; right: 10px; top: 50%;"></div>
        </div>
        <!--Monish changed style="position: absolute; left:0; right:0; bottom:0; height:95px;" to style="position: absolute; right:27px;width:900px;bottom:20px;height:80px;" for title rotator--> 
        <div id = "AdTitleRotateDiv" class="erimgMain rotatorTileNav"   data-erconfig="{numTiles:4, scaleMode:'fillArea', imgType:'thumb', loopNextButton:false, arrowButtonMode:'rollover', __slideLinkEvent:'rollover'}" >
        
          <!--Monish Unwanted DIV 
          <div style="position: absolute; left: 0; top: 10px; right: 0; bottom: 0;"></div>-->
          <div class="erimgMain_slides" style="position: absolute; left:0; top:0; bottom:0; right:0;">
            <div class="erimgMain_slide">
              <!--Monish Already Commented but can uncomment for images on title rotator-->
              <!-- <div class="erimgMain_img" style="position: absolute; left: 0; right: 0; top: 10px; bottom: 0; margin: 2px 1px;"></div> -->
              <!--Monish IMP changed class = "" to blackgradient and Left : 0PX to 10Px as these are the small divs  represented each title-->
             <div class="blackgradient" 
							style="position: absolute; left: 10px; right: 0; top: 10px; bottom: 0; padding: 5px; color: #FFF; font-family: 'Helvetica Neue',Helvetica,Arial,_sans; font-size: 14px; border: 1px dotted #F60;"
							style_erinjection=".erimgMain_slide_selected THIS { background:#000; } THIS:hover .erimgMain_title { color:#FF6600; }">
                <p class="erimgMain_title" 
								style="padding: 0 10px; font-weight: normal; margin: 0 0 3px 0; font-size: 13px; color: #FFF;"
								style_erinjection=".erimgMain_slide_selected THIS { color:#FF6600; }"></p>
                <p class="erimgMain_desc" 
								style="padding: 0 10px; font-weight: normal; margin: 0; font-size: 11px; line-height: 1.4em; color: #CCC;"
								style_erinjection=".erimgMain_slide_selected THIS { color:#FFF; }"></p>
              </div>
              <div class="selectionArrow visibleWhenSelected" style="position: absolute; top: 0; left: 50%; margin-left: -10px; width: 20px; height: 10px; background-image: url('/images/FFF_arrow10_export.png');"></div>
            </div>
          </div>
          <div class="erimgMain_arrowLeft" style="position:absolute; left: 5px; top: 50%;" data-erconfig="{image:'circleSmall', image2:'circleSmall'}"></div>
          <div class="erimgMain_arrowRight" style="position:absolute; right: 5px; top: 50%;"></div>
        </div>
        <div class="erabout erFixCSS3" style="display:none;"><a href="http://www.dwuser.com/"></a></div>
        <script type="text/javascript">/*Avoid IE gzip bug*/(function(b,c,d){try{if(!b[d]){b[d]="temp";var a=c.createElement("script");a.type="text/javascript";a.src="js/easy_rotator.min.js";c.getElementsByTagName("head")[0].appendChild(a)}}catch(e){alert("EasyRotator fail; contact support.")}})(window,document,"er_$144");</script>
      </div>
    </div>
    <!-- End DWUser_EasyRotator -->  
    </div>
          
  <div id="gscroll">  			
          <div id="AutoScrollContainer" style="position:absolute; top:10px; left:10px; width:100%; height:205px; clip:rect(0,200,200,0); overflow:hidden;  visibility:visible;">
            <!-- Do NOT define (additional) styles for the following nested layer here. 
       If required, modify the inline styles in the head section -->
            <div id="AutoScrollContent">
            <table width='96%' cellpadding='2' border='0' cellspacing='0'>                
          	<tr> 
            <td>
            	
            </td>          	        
            </tr>          		
            </table>
            </div>
          </div>
      <div id = "selectdiv">
      <form name="form1" id="form1">
      <select name="grozjumpmenu">
        <option value="" selected="selected">Select</option>
        <option value="<?php echo $phpc_home_url?>/lms/~window:New">LMS</option>        
        <option value="http://www.groz-tools.com~window:New">GROZ-TOOLS</option>
         <option value="<?php echo $phpc_home_url?>/groz/contact.php~window:New">CONTACT</option>               
      </select>
      <input type="button" name="Button1" value="Go" onclick="P7_JumpMenuGo('grozjumpmenu',0)"  style = "border: 1px solid #F60; color: #FFF" class = "blackgradient"/>
    </form>
     </div>    	
     <!-- End absolute positioned Cross-browser AutoScroller -->     
    
  </div>  
</div>
</body>
</html>
