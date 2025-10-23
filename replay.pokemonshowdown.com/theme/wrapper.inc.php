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
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?0.7529933440402634" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.43847750514938477" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6104812830689934" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?0.03336368711186122" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?0.3977987696788152" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?0.6493131869464366" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9921641638818088" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
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
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?0.4091090203663179"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?0.6611651461706944"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?0.0073973835058842585"></script>
	<script src="//asl-pokemon-showdown-dex-production.up.railway.app/js/panels.js?0.4281222546704422"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?0.541873085672079"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?0.34905430603742027"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?0.8888006435803901"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?995758be"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?0.9265479931430285"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?0.17675794967515612"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?0.466911520790509"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?0.7757036221795444"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?0.8106500499809077"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?0.7957377148108191"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?0.795133925854904"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?0.7949335331656018"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?0.12211908367694946"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?0.24369882542043864"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?0.626393378471167"></script>
	<script src="/js/replay.js?0.2371778053051985"></script>

</body></html>
<?php
}
