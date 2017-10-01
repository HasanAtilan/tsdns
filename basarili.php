 <?
 
 function umlautepas($string){
  $upas = Array("ä" => "ae", "ü" => "ue", "ö" => "oe", "Ä" => "Ae", "Ü" => "Ue", "Ö" => "Oe"); 
  return strtr($string, $upas);
  }
  
  
$datei = file("dnsler.data");

foreach($datei AS $ausgabe)
   {
   $zerlegen = explode("|", $ausgabe);
	
	if($zerlegen[1] == strtolower(umlautepas($_POST[subname])))
	{
	
	
	header('Location: index.php');
	exit;
	}
}
 
		?>


		
		
		
<?php
error_reporting(0);

include("config.php");

$domain = isset($_POST['select']) && in_array($_POST['select'], $domains) ? $_POST['select'] : '';

if (empty($domain)) die('hata domain secmediniz');

// Create a A-record for DNS

$ch = curl_init("https://www.cloudflare.com/api_json.html");
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);

// handling of -d curl parameter is here.
$param = array(
    'a' => 'rec_new',
    'tkn' => ''.$apikey.'',
    'email' => ''.$email.'',
    'z' => ''.$domain.'',
	'type' => 'A',
	'name' => ''.strtolower(umlautepas($_POST[subname])).'',
	'content' => ''.$_POST[ip].'',
	'ttl' => '120'
);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($param));

$result = curl_exec($ch);
curl_close($ch);



// Create a SRV for Teamspeak 3

$ch2 = curl_init("https://www.cloudflare.com/api_json.html");
curl_setopt($ch2, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER,false);

// handling of -d curl parameter is here.
$param2 = array(
    'a' => 'rec_new',
    'tkn' => ''.$apikey.'',
    'email' => ''.$email.'',
    'z' => ''.$domain.'',
	'type' => 'SRV',
	'name' => ''.$domain.'',
	'ttl' => '120',
	'prio' => '0',
	'service' => '_ts3',
	'srvname' => ''.strtolower(umlautepas($_POST[subname])).'',
	'protocol' => '_udp',
	'weight' => '5',
	'port' => ''.$_POST[port].'',
	'target' => ''.strtolower(umlautepas($_POST[subname])).'.'.$domain.''
);
curl_setopt($ch2, CURLOPT_POST, 1);
curl_setopt($ch2, CURLOPT_POSTFIELDS, http_build_query($param2));

$result2 = curl_exec($ch2);
curl_close($ch2);


// rec_id 


load_recs();

function load_recs() {

	global $apikey;
	global $email;
	global $domain;
	
    $url = "https://www.cloudflare.com/api_json.html";
    $data = array(
    "a" => "rec_load_all",
    "tkn" => "".$apikey."",
    "email" => "".$email."",
    "z" => "".$domain.""
    );
    $ch3 = curl_init();
    curl_setopt($ch3, CURLOPT_VERBOSE, 1);
    curl_setopt($ch3, CURLOPT_FORBID_REUSE, true); 
    curl_setopt($ch3, CURLOPT_URL, $url);
    curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch3, CURLOPT_POST, 1);
    curl_setopt($ch3, CURLOPT_POSTFIELDS, $data ); 
    curl_setopt($ch3, CURLOPT_TIMEOUT, 10);
    $test = curl_getinfo($ch3);
    $http_result = curl_exec($ch3);
    $error = curl_error($ch3);
    $http_code = curl_getinfo($ch3 ,CURLINFO_HTTP_CODE);	
    curl_close($ch3);
    $cloud_arr = json_decode($http_result,true); 
	
	
	
    if ($http_code != 200) {
        print "Error: $error\n";
    } else {
	foreach($cloud_arr[ "response" ][ "recs" ][ "objs" ] as $item) {
	
	if($item[ "type" ] == 'A' && $item[ "display_name" ] == strtolower(umlautepas($_POST[subname])))
	{
				if ( $entry[ "content" ] != $_POST[ip] )
                    {
                       // service_mode=1

					$ch4 = curl_init("https://www.cloudflare.com/api_json.html");
					curl_setopt($ch4, CURLOPT_RETURNTRANSFER,1);
					curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER,false);

					// handling of -d curl parameter is here.
					$param4 = array(
						'a' => 'rec_edit',
						'tkn' => ''.$apikey.'',
						'id' => ''.$item[ "rec_id" ].'',
						'email' => ''.$email.'',
						'z' => ''.$domain.'',
						'type' => 'A',
						'name' => ''.strtolower(umlautepas($_POST[subname])).'',
						'content' => ''.$_POST[ip].'',
						'service_mode' => '1',
						'ttl' => '1'
					);
					curl_setopt($ch4, CURLOPT_POST, 1);
					curl_setopt($ch4, CURLOPT_POSTFIELDS, http_build_query($param4));

					$result4 = curl_exec($ch4);
					curl_close($ch4);
                    }
	}
	
        

 
		}
    }
}



		
				$daten = "|".strtolower(umlautepas($_POST[subname]))."|".$domain."|".$_POST[port]."";

				$datenbank = "dnsler.data";

				$datei = fopen($datenbank,"a");

				fwrite($datei, $daten."\r\n");
						

		




 ?>
    




	
﻿ 

		
		
		
 		
		
		<meta content="ücretsiz dns, ts3 dns, teamspeak dns, ts3 yönlendirme, teamspeak, ts3, ts3 satın al, ts3 server, ts3, dns.ts3.web.tr" name="keywords"/>
<meta content="TS3.WEB.TR, Ücretsiz DNS Hizmeti. Sunucularınızı ücretsiz alan adlarımızı kullanarak yönlendirebilirsiniz." name="description"/>
<meta name="author" content="NEPİX"/>
<meta name="copyright" content="NEPİX"/>
<meta name="rating" content="General"/>
<meta name="revisit-after" content="5 days"/>
<meta name="robots" content="ALL"/>
<meta name="distribution" content="Global"/>
<meta http-equiv="Content-Language" content="tr"/>
<meta http-equiv="reply-to" content="info[at]nepix.net"/>
<meta http-equiv="pragma" content="no-cache"/> 
<meta http-equiv="Content-Type" content="text/html">
<meta name="content-type" content="text/html charset=utf-8"/>
<meta charset="utf-8"/><script type="text/javascript">
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Nunito|Josefin+Sans|Orbitron|Audiowide|Exo+2" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="tasari/bootstrap.css" type="text/css"/>
<link rel="stylesheet" href="tasari/style.css" type="text/css"/>
<link rel="stylesheet" href="tasari/dark.css" type="text/css"/>
<link rel="stylesheet" href="tasari/animate.css" type="text/css"/>
<link rel="stylesheet" href="tasari/cover.css" type="text/css">
<link rel="stylesheet" href="tasari/nepix.css" type="text/css"/>
<link rel="stylesheet" href="tasari/nepix.css" type="text/css"/>
<link rel="stylesheet" href="tasari/simple-switch.css" type="text/css"/>
<script type="text/javascript">
</script>
</head>
	<body>
<script type="text/javascript" src="tasari/timestamp.js?v=1504952612.0" charset="utf-8"></script>
<script type="text/javascript" src="tasari/graph-calc.js?v=1504952612.0" charset="utf-8"></script>
<script type="text/javascript" src="tasari/auto-complete.js?v=1504952612.0" charset="utf-8"></script>
<script type="text/javascript" src="tasari/toolbar.js?v=1504952612.0" charset="utf-8"></script>

<style type="text/css">
</style>
<div id="wm-ipp" lang="en" style="display:none;direction:ltr;">
<div style="position:fixed;left:0;top:0;right:0;">
<div id="wm-ipp-inside">
  <div style="position:relative;">
    <div id="wm-logo" style="float:left;width:130px;padding-top:10px;">
     
    </div>
    <div class="r" style="float:right;">
    
      </div>
      
	
      </div>
    </div>
    <table class="c" style="">
      <tbody>
	<tr>
	  
		
	
		
	      </tbody>
	    </table>
	  </td>
	</tr>
	<tr>
	  <td class="s">
	      	      
	      </div>
	  </td>
	  <td class="k">
	    <a href="" id="wm-graph-anchor">
	      <div id="wm-ipp-sparkline" title="" style="position: relative">
		<canvas id="wm-sparkline-canvas" width="550" height="27" border="0"></canvas>
	      </div>
	    </a>
	  </td>
	</tr>
      </tbody>
    </table>
    <div style="position:absolute;bottom:0;right:2px;text-align:right;">
     
    </div>
  </div>
    <div id="wm-capinfo" style="border-top:1px solid #777;display:none;">
           
    <div style="padding:3px;position:relative;">
            <div style="display:inline-block;vertical-align:top;width:50%;">

		<div style="max-height:75px;overflow:hidden;position:relative;">
	  <div style="position:absolute;top:0;left:0;width:100%;height:75px;background:linear-gradient(to bottom,rgba(255,255,255,0) 0%,rgba(255,255,255,0) 90%,rgba(255,255,255,255) 100%);"></div>
	 
	</div>
	      </div>
      <div style="display:inline-block;vertical-align:top;width:49%;">
		
	      </div>
    </div></div></div></div></div>
		<div class="bilgidiv">
			<div class="bilgi">

				
				<div class="cevap" style="display:none"></div>
			</div>
		</div>
		<div id="" class="">
			<header id="header" class="transparent-header page-section dark">
				<div id="header-wrap">
					<div class="container clearfix">
						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
						
						</div>
						<nav id="primary-menu">
							<ul class="one-page-menu sf-js-enabled" style="touch-action: pan-y;">

								
						</nav>
					</div>
				</div>
			</header><div id="" class="">		

		<div class="vertical-middle">
<div class="container clearf">
<div class="row">
						<div class="heading-block center nobottomborder">
							<h1>ÜCRETSİZ TEAMSPEAK 3 DNS HİZMETİ</h1>
														<span>TSDNS Hizmetimiz Ücretsizdir.</span>
													</div>
							<p></p><div id="loading">

							</div>
							<p></p>
						
						<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/css/bootstrap.css" />
 		<div class="jumbotron" style="border-radius: 0px; position:relative; top:-14px; border: 0px;">
			
	
			<center><div class="alert alert-success" role="alert">DNS Adresiniz Basariyla Olusturuldu <? echo strtolower(umlautepas($_POST[subname])).'.'.$domain.''; ?> </div></center>
				
				
		</div>
		
						</form>
</div>
</div>
</div>

</div>
		</div>
		<footer>
			<div class="altbolum"></div>
		</footer>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="tasari/notiny.js"></script>
		<script src="tasari/nepix.js"></script>
		<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="application/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="application/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.js"></script>
</body>
</html>
		
		
	