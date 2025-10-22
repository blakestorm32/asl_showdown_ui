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
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?0.84853326789303" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.48475390170415666" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.42248282256726166" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?0.18359032215231963" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?0.9163406678953823" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?0.709903293214337" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5240584430319737" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
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
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?0.01871981814885837"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?0.8428150811825503"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?0.04529295515442833"></script>
	<script src="//asl-pokemon-showdown-dex-production.up.railway.app/js/panels.js?0.6443106497955551"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?0.37481438396634714"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?0.29345985508199046"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?0.7298221206409581"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?a492d081"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?0.35005434604023566"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?0.548205795950198"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?0.43038758444815417"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?0.11431705915542967"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?0.44145345800849056"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?0.06680649395813432"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?0.37648367903636126"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?0.515542381678953"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?0.014748439362547439"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?0.07911641359647392"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?0.6966075477296299"></script>
	<script src="/js/replay.js?0.9572638660234523"></script>

</body></html>
<?php
}
