<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="tasari/analytics.js?v=1504952612.0" charset="utf-8"></script>



<link rel="stylesheet" type="text/css" href="tasari/banner-styles.css?v=1504952612.0" />
<link rel="stylesheet" type="text/css" href="tasari/iconochive.css?v=1504952612.0" />

<title>Ücretsiz Teamspeak DNS Hizmeti » TS3.WEB.TR</title>

<?
if (isset($_GET['p'])){
        $action=$_GET['p'];
    } else {
        $action='';
    }
  
  switch ($action){
    case "":
            echo "";
            break;
    case 'basarili':
            require_once('basarili.php');
            $command=new controller_Welcome();
            break;
    case 'error':
            require_once('index.php');
            $command=new controller_Welcome();
            break;
      
    }
  if($action )
  {
  $command->execute();
  }else{
  }
  error_reporting(0);

include("config.php");

?>

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
						<form class="uk-form" action="index.php?p=basarili" method="POST">
							<div class="col_four_third nobottommargin">
							
								<div class="col_one_third nobottommargin">
									<input type="text" name="ip" id="port" class="form-control input-lg not-dark" value="" placeholder="127.0.0.1:9987" data-validation="alphanumeric" data-validation-help="127.0.0.1:9987 formatında giriş yapmalısınız" data-validation-allowing=":" onkeypress="return isNumberKey(event)">
								</div>
								
								<div class="col_one_third nobottommargin">
									<input type="text" name="subname" id="subname" class="form-control input-lg not-dark" value="" placeholder="Klan Adınız" data-validation="alphanumeric" data-validation-help="İsteğinize göre bir isim giriniz" data-validation-allowing="-_">
								</div>

								<div class="col_one_third col_last nobottommargin">
										<select name="select" class="form-control not-dark">
										
						<?php
foreach ($domains AS $domain) {
    echo '<option value="' . htmlspecialchars($domain) . '">' . htmlspecialchars($domain) . '</option>';
}
?>   

										</select>
								</div>
							</div>
							<div class="olustur">&nbsp;</div>
							<div class="olustur">
							<center>
								<div class="col_one_one col_last">
									<button class="btn btn-lg btn-danger btn-block" value="submit" type="submit">HEMEN KAYDET</button>
								</div>
							</center>
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