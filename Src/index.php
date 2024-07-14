<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta property="og:title" content="Guilherme Branco Stracini - Portfolio" />
	<meta property="og:description" content="My old portfolio from 2007" /> 
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://zerocool.com.br/" />
	<meta property="og:image" content="https://zerocool.com.br/portfolio/imagens/icone.png" />
	<meta property="og:site_name" content="ZeroCool" />
	<meta property="fb:admins" content="1614826774" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<base href="https://zerocool.com.br/portfolio/" />
	<title>Guilherme Branco Stracini - Portfolio</title>
	<link rel="stylesheet" type="text/css" href="scripts/estilos.css?update=<?php echo filemtime("scripts/estilos.css"); ?>"/>
	<script type="text/javascript" src="https://platform.twitter.com/widgets.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-2816366-13']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "https://connect.facebook.net/pt_BR/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="cabecalho">
		<div id="topo">
			<div id="socialIcones">
				<a href="https://twitter.com/share" class="twitter-share-button" data-url="https://zerocool.com.br/sms" data-text="Send free SMS" data-via="GuiBranco" data-lang="pt">Tweet</a>
				<a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fzerocool.com.br%2Fsms%2F&media=http%3A%2F%2Fzerocool.com.br%2Fsms%2Fimagens%2Ficone.png&description=Send%20free%20real%20SMS%20over%20the%20internet%20to%20any%20handset%20over%20the%20world" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>
			</div>
			<div id="socialLinks">
				<ul>
					<li>
						<a href="https://www.twitter.com/GuiBranco" title="GuiBranco no Twitter" target="_blank">
							<img src="imagens/twitter.png" width="24" height="24" alt="GuiBranco no Twitter" />
						</a>
					</li>
					<li>	
						<a href="https://www.facebook.com/guilherme.stracini" title="Guilherme Branco Stracini no Facebook" target="_blank">
							<img src="imagens/facebook.png" width="24" height="24" alt="Guilherme Branco Stracini no Facebook" />
						</a>
					</li>
					<li>
						<a href="https://www.youtube.com/@GuilhermeBrancoStracini" title="Canal @GuilhermeBrancoStracini no Youtube" target="_blank">
							<img src="imagens/youtube.png" width="24" height="24" alt="Canal @GuilhermeBrancoStracini no Youtube" />
						</a>
					</li>
					<li>
						<a href="https://pinterest.com/guibranco/" title="Guilherme Branco Stracini no Pinterest" target="_blank">
							<img src="imagens/pinterest.png" width="24" height="24" alt="Guilherme Branco Stracini no Pinterest" />
						</a>
					</li>
					<li>
						<a href="https://soundcloud.com/guilherme-stracini" title="Guilherme Branco Stracini no SoundCloud" target="_blank">
							<img src="imagens/soundcloud.png" width="24" height="24" alt="Guilherme Branco Stracini no SoundCloud" />
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/guilhermestracini/" title="Guilherme Branco Stracini no LinkedIn" target="_blank">
							<img src="imagens/linkedin.png" width="24" height="24" alt="Guilherme Branco Stracini no LinkedIn" />
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="geral">
		<div id="projetos">
			<h1>Projects</h1>
			<div class="links">
			<?php
                            $baseDir = "/home/zerocool/public_html/";
			$o = opendir($baseDir);
			$proibidos = array("cgi-bin","inovacao","portfolio", "static",".htpasswds",".well-known");
			while($item = readdir($o)) {
			    if(is_dir($baseDir.$item) && $item != "." && $item != ".." && !in_array($item, $proibidos)) {
			        echo "<a href='https://guilhermebranco.com.br/".$item."/?utm_source=zerocool&utm_medium=projetos&utm_campaign=old_portfolio'>".ucwords(str_replace("_", " ", $item))."</a><br />";
			    }
			}
			closedir($o);
			?>
			</div>
		</div>

		<div id="mensagens">
			<a href="https://guilhermebranco.com.br/sms/?utm_source=zerool&utm_medium=mensagens&utm_campaign=old_portfolio">Free SMS sending</a>
		</div>

		<div id="novo_portfolio">
			<a href="https://guilhermebranco.com.br//?utm_source=zerocool&utm_medium=mensagens&utm_campaign=old_portfolio">New portfolio</a>
		</div>
	</div>

	<script type="text/javascript">
		window.___gcfg = {lang: 'pt-BR'};
		  (function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
	</script>
	<script type="text/javascript" src="https://assets.pinterest.com/js/pinit.js"></script>
</body>
</html>
