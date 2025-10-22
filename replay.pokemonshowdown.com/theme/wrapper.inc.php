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
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?0.051189250527834185" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5047222457882283" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7570188408217118" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?0.14464895705362024" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?0.6757305004586318" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?0.9355838775976668" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.08076075828715146" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
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
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?0.4650140461263057"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?0.24352686011186186"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?0.9883931522992839"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.43146451429589017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?0.6802612828741126"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?0.9736862448372627"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?0.46639801562547056"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?b72244b0"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?0.2066984488985364"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?0.26153224265295627"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?0.9933788219202482"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?0.3061000047620899"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?0.1407923195950911"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?0.7942925249236812"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?0.4283310784873815"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?0.12766140996224462"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?0.42176069642633807"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?0.49627437645741135"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?0.11428797696615556"></script>
	<script src="/js/replay.js?0.23289172064113406"></script>

</body></html>
<?php
}
