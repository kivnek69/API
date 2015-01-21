

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>     
      <head>
        <meta charset="UTF-8">
        <title>API Tweet </title>       
        <link type="text/css" rel="stylesheet" href="css/style.css">
<style type="text/css">
<!--
/**
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 */
.javascript  {font-family: 'Andale Mono', Consolas, monospace; font-size: 11px}
.javascript .imp {font-weight: bold; color: red;}
.javascript .kw1 {color: #000066; font-weight: bold;}
.javascript .kw2 {color: #003366; font-weight: bold;}
.javascript .kw3 {color: #000066;}
.javascript .kw5 {color: #FF0000;}
.javascript .co1 {color: #006600; font-style: italic;}
.javascript .co2 {color: #009966; font-style: italic;}
.javascript .coMULTI {color: #006600; font-style: italic;}
.javascript .es0 {color: #000099; font-weight: bold;}
.javascript .br0 {color: #009900;}
.javascript .sy0 {color: #339933;}
.javascript .st0 {color: #3366CC;}
.javascript .nu0 {color: #CC0000;}
.javascript .me1 {color: #660066;}
.javascript span.xtra { display:block; }
/**
 * GeSHi (C) 2004 - 2007 Nigel McNie, 2007 - 2008 Benny Baumann
 * (http://qbnz.com/highlighter/ and http://geshi.org/)
 */
.html4strict  {font-family: 'Andale Mono', Consolas, monospace; font-size: 11px}
.html4strict .imp {font-weight: bold; color: red;}
.html4strict .kw2 {color: #000000; font-weight: bold;}
.html4strict .kw3 {color: #000066;}
.html4strict .es0 {color: #000099; font-weight: bold;}
.html4strict .br0 {color: #66cc66;}
.html4strict .sy0 {color: #66cc66;}
.html4strict .st0 {color: #ff0000;}
.html4strict .nu0 {color: #cc66cc;}
.html4strict .sc-2 {color: #404040;}
.html4strict .sc-1 {color: #808080; font-style: italic;}
.html4strict .sc0 {color: #00bbdd;}
.html4strict .sc1 {color: #ddbb00;}
.html4strict .sc2 {color: #009900;}
.html4strict span.xtra { display:block; }
div#cmsg {
 position: absolute;
 top: 300px;
 left: 180px;
 width: 160px;
 padding: 6px;
 border: 4px solid #aaa;
 background-color: #eee;
 text-align: center
}
div#cmsg:hover { opacity: 0.5 }
-->
</style>

<script type="text/javascript">
//<![CDATA[
var oopts = {
 textFont: 'Impact,Arial Black,sans-serif',
 textHeight: 20,
 maxSpeed: 0.1,
 decel: 0.9,
 depth: 0.99,
 outlineColour: '#f6f',
 outlineThickness: 3,
 pulsateTo: 0.2,
 pulsateTime: 0.5,
 wheelZoom: false
}, ttags = 'taglist', lock, shape = 'sphere';
window.onload = function() {
 TagCanvas.textFont = 'Trebuchet MS, Helvetica, sans-serif';
 $tab_colors= array("#3087F8", "#7F814E", "#EC1E85","#14E414","#9EA0AB", "#9EA414");
 $color=rand(0,count($tab_colors)-1); 
 TagCanvas.textColour =  $color;
 TagCanvas.textHeight = 25;
 TagCanvas.outlineMethod = 'block';
 TagCanvas.outlineColour = '#acf';
 TagCanvas.maxSpeed = 0.03;
 TagCanvas.minBrightness = 0.2;
 TagCanvas.depth = 0.92;
 TagCanvas.pulsateTo = 0.6;
 TagCanvas.initial = [0.1,-0.1];
 TagCanvas.decel = 0.98;
 TagCanvas.reverse = true;
 TagCanvas.hideTags = false;
 TagCanvas.shadow = '#ccf';
 TagCanvas.shadowBlur = 3;
 TagCanvas.weight = false;
 TagCanvas.imageScale = null;
 TagCanvas.fadeIn = 1000;
 TagCanvas.clickToFront = 600;
 try {
  TagCanvas.Start('tagcanvas','taglist');
  TagCanvas.Start('smallCanvas','moreTags', oopts);
  f('options');
 } catch(e) {
  document.getElementById('cmsg').style.display='none';
  document.getElementsByTagName('canvas')[0].style.border='0';
 }
};
function BGImage(e) {
 document.getElementById('tagcanvas').style.backgroundImage = (e.checked ? 'url(images/canvas_bg1.png)' : 'none');
}
function f(a) {
 TagCanvas.Start('otherCanvas',a,oopts);
 return false;
}
function restart() {
 TagCanvas.shape = shape;
 TagCanvas.lock = lock;
 TagCanvas.Start('tagcanvas',ttags);
}
function changetags(t) {
 ttags = t;
 restart();
}
function changeshape(s) {
 var locks = { hcylinder: 'x', vcylinder: 'y', hring: 'x', vring: 'y', sphere: '' };
 lock = locks[s] || '';
 shape = s;
 TagCanvas.initial = (lock == 'x' && [0,0.2]) || (lock == 'y' && [0.2,0]) || [0.2,0.2];
 restart();
}
function tpu(s) {
 document.getElementById('sout').innerHTML = s.innerHTML;
 return false;
}
//]]>
</script>
<script src="tagcanvas.min.js"></script>
</head>
     
<body>
    <form class="form-4" action="#" method="post" style="padding-left: 140px;">
	   
            </form>
    
              
</br> </br>
        <div style="margin-left:120px; width: 850px;" >    
            <canvas id="tagcanvas" width="1200px" height="1200px" style="">
                <img src="images/tagcanvas.png" width="1200px" height="1200px">
            </canvas>
            <div style="display: none; " >
              <div id="taglist">
                   <ul style="display: block; width: 200px; float: left">
                         <?php
                    $consumer_key='dva9Y9gdPEcVOTVMxtKzwukj1'; //Provide your application consumer key
                    $consumer_secret='F4LFXaglwhNGvoPrjrozo7LXFY3bcarna5fo8lPm0QK5sZqWAb'; //Provide your application consumer secret
                    $oauth_token = '2893405781-ooi2dg0Kma7lqaLM94Q1Y1N8cy3Wl83vhc5hHod'; //Provide your oAuth Token
                    $oauth_token_secret = 'C3g1cpdk1kYt6EBIdqb5BSvyB71sLo09mPooj6CEeQ3m2';
                    ?> 

            <?php
		    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {
                    require_once('twitteroauth/twitteroauth.php');
                    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
                    $valeur_search = $_POST["search_valuer"];
                    $query = 'https://api.twitter.com/1.1/search/tweets.json?q=' . $valeur_search .'&result_type=popular&count=5' ;
                   // echo $query.'<br><br>';
                    $content = $connection->get($query);    
                    }                  
                    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {                        
                            if(!empty($content)){                                 
                                foreach($content->statuses as $tweet){                                 
                                echo '<li><a href="#fake6" onclick="return tpu(this)" style="color:$color">' . $tweet->text . '</a></li>';                               
                                 }}
                        
                    } else {
                        echo'<p>Please update your settings to provide valid credentials</p>';
                    }
                    echo '</a></li>';
                    echo '</ul>';
                ?>
        </div>
        <?php
function parseTweet($text) {
    $text = preg_replace('#http://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Link
    $text = preg_replace('#@([a-z0-9_]+)#i', '@<a  target="_blank" href="http://twitter.com/$1">$1</a>', $text); //usernames
    $text = preg_replace('# \#([a-z0-9_-]+)#i', ' #<a target="_blank" href="http://search.twitter.com/search?q=%23$1">$1</a>', $text); //Hashtags
    $text = preg_replace('#https://[a-z0-9._/-]+#i', '<a  target="_blank" href="$0">$0</a>', $text); //Links
    return $text;
}
?>
		</ul>    
              </div>
      </div>
</body>
</html>
