/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'fis-icons\'">' + entity + '</span>' + html;
	}
	var icons = {
		'fis-seg-trab': '&#xe600;',
		'fis-logistica': '&#xe601;',
		'fis-fis-unicolor': '&#xe602;',
		'fis-fislogocolor': '&#xe603;',
		'fis-instagram': '&#xe60d;',
		'fis-hashtag': '&#xe60e;',
		'fis-calendario': '&#xe60f;',
		'fis-tv': '&#xe615;',
		'fis-farmacia': '&#xe61b;',
		'fis-contruodeedificios': '&#xe61c;',
		'fis-redesdecomputadores': '&#xe61d;',
		'fis-administrao': '&#xe61e;',
		'fis-cinciascontabeis': '&#xe61f;',
		'fis-enfermagem': '&#xe620;',
		'fis-fisioterapia': '&#xe624;',
		'fis-direito': '&#xe625;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/fis-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
