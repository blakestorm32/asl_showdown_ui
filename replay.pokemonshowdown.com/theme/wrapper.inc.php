<?php

// NOTE: this is Old Replays. Mostly unused except for `/manage`

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//aslshowdownui-production.up.railway.app/style/font-awesome.css?0.9935180481316539" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5563704142171173" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.11098401821836457" />
	<link rel="stylesheet" href="//aslshowdownui-production.up.railway.app/style/battle.css?0.16211887985979123" />
	<link rel="stylesheet" href="//aslshowdownui-production.up.railway.app/style/replay.css?0.0960338327501733" />
	<link rel="stylesheet" href="//aslshowdownui-production.up.railway.app/style/utilichart.css?0.5712968871624247" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.18471320234714805" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/">Replay</a></li>
				<li><a class="button purplebutton" href="//smogon.com/dex/" target="_blank">Strategy</a></li>
				<li><a class="button nav-last purplebutton" href="//smogon.com/forums/" target="_blank">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//aslshowdownui-production.up.railway.app/js/lib/jquery-1.11.0.min.js?0.5295193467883688"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/lib/lodash.core.js?0.14675444985583663"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/lib/backbone.js?0.750772521914475"></script>
	<script src="//asl-pokemon-showdown-dex-production.up.railway.app/js/panels.js?0.9802705195331995"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//aslshowdownui-production.up.railway.app/js/lib/jquery-cookie.js?0.5549051411507888"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/lib/html-sanitizer-minified.js?0.3797482353590249"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/battle-sound.js?0.25713964501299524"></script>
	<script src="//aslshowdownui-production.up.railway.app/config/config.js?0.03693439511756402"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/battledata.js?0.9281445319023338"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/pokedex-mini.js?0.3351274361574652"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/pokedex-mini-bw.js?0.5957958851181524"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/graphics.js?0.09538290889685208"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/pokedex.js?0.20005854398618061"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/items.js?0.5901586694103291"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/moves.js?0.5629389529335374"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/abilities.js?0.15934088070017727"></script>
	<script src="//aslshowdownui-production.up.railway.app/data/teambuilder-tables.js?0.10140271537886081"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/battle-tooltips.js?0.9918082714287528"></script>
	<script src="//aslshowdownui-production.up.railway.app/js/battle.js?0.9497858394024288"></script>
	<script src="/js/replay.js?0.9550595259003039"></script>

</body></html>
<?php
}
