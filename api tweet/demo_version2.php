<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" charset="utf-8"/>
        <script type="text/javascript" src="jquery-1.3.2.js"></script>
        
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        
        
        <link rel='stylesheet' id='demo-css'  href='twitterapi.css' type='text/css' media='all' />
       
    </head>
    
    <body>
  

        <div class="header"></div>
        <div class="scroll"></div>
                                
                        <?php
                    $consumer_key='dva9Y9gdPEcVOTVMxtKzwukj1'; //Provide your application consumer key
                    $consumer_secret='F4LFXaglwhNGvoPrjrozo7LXFY3bcarna5fo8lPm0QK5sZqWAb'; //Provide your application consumer secret
                    $oauth_token = '2893405781-ooi2dg0Kma7lqaLM94Q1Y1N8cy3Wl83vhc5hHod'; //Provide your oAuth Token
                    $oauth_token_secret = 'C3g1cpdk1kYt6EBIdqb5BSvyB71sLo09mPooj6CEeQ3m2';
                    
                    //Provide your oAuth Token Secret
                    ?> 
           

        
            
            
                
                
            <div id="legende1">  
            <?php
		    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {
                    require_once('twitteroauth/twitteroauth.php');
                    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $oauth_token, $oauth_token_secret);
                    $valeur_search = $_POST["search_valuer"];
                    $query = 'https://api.twitter.com/1.1/search/tweets.json?q=' . $valeur_search .'&result_type=popular&count=5' ;
                   // echo $query.'<br><br>';
                    $content = $connection->get($query);      
                    
                    }                   
                    echo  '<ul id="legende">';
                            
                    echo '<li class=""><a  title="legende"><img id="twitter_icones" src="icones/twitter2.png" />';
                    if(!empty($consumer_key) && !empty($consumer_secret) && !empty($oauth_token) && !empty($oauth_token_secret)) {                        
                            if(!empty($content)){ 
                                
                                foreach($content->statuses as $tweet){
                                 
                                echo '<div id="tweet"> ' . $tweet->text . '</div>';
                               
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
        <script type="text/javascript">
            $(function() {
                $('#navigation a').stop().animate({'marginTop':'-50px'},1000);

                $('#navigation > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'-30px'},200);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginTop':'-50px'},200);
                    }
                );
                    
                   $('#legende a').stop().animate({'marginLeft':'100px'},500);

                $('#legende > li').hover(
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'-450px'},1000);
                    },
                    function () {
                        $('a',$(this)).stop().animate({'marginLeft':'100px'},1000);
                    }
                );
                $('a.poplight[href^=#]').click(function() {
	var popID = $(this).attr('rel'); //Trouver la pop-up correspondante
	var popURL = $(this).attr('href'); //Retrouver la largeur dans le href

	//Récupérer les variables depuis le lien
	var query= popURL.split('?');
	var dim= query[1].split('&amp;');
	var popWidth = dim[0].split('=')[1]; //La première valeur du lien

	//Faire apparaitre la pop-up et ajouter le bouton de fermeture
	$('#' + popID).fadeIn().css({
		'width': Number(popWidth)
	})
	.prepend('<a href="#" class="close"><img src="close_pop.png" class="btn_close" title="Fermer" alt="Fermer" /></a>');

	//Récupération du margin, qui permettra de centrer la fenêtre - on ajuste de 80px en conformité avec le CSS
	var popMargTop = ($('#' + popID).height() + 80) / 2;
	var popMargLeft = ($('#' + popID).width() + 80) / 2;

	//On affecte le margin
	$('#' + popID).css({
		'margin-top' : -popMargTop,
		'margin-left' : -popMargLeft
	});

	//Effet fade-in du fond opaque
	$('body').append('<div id="fade"></div>'); //Ajout du fond opaque noir
	//Apparition du fond - .css({'filter' : 'alpha(opacity=80)'}) pour corriger les bogues de IE
	$('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn();

	return false;
});

//Fermeture de la pop-up et du fond
$('a.close, #fade').live('click', function() { //Au clic sur le bouton ou sur le calque...
	$('#fade , .popup_block').fadeOut(function() {
		$('#fade, a.close').remove();  //...ils disparaissent ensemble
	});
	return false;
});    
                    
            });
        </script>
    </body>
</html>