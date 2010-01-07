<?php
/*
Plugin Name: exYU Sociable
Plugin URI: http://blog.urosevic.net/wordpress/exyu-sociable/
Description: Adds ex-YU Sites to <a href="http://yoast.com/wordpress/sociable/">Sociable</a> Plugin.
Version: 0.7
Author: Aleksandar Urošević
Author URI: http://urosevic.net/

Based on Indian Sociable by Navjot Singh

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

load_plugin_textdomain('exyusoc', PLUGINDIR.'/'.dirname(plugin_basename(__FILE__)).'/languages', dirname(plugin_basename(__FILE__)).'/languages');

function exyusociable_sites( $known_sites ) {
	$exyupath = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/images/';

	$known_sites['Ukusno'] = Array(
		'favicon' => $exyupath.'ukusno.png',
		'url' => 'http://ukusno.com/submit.php?url=PERMALINK&amp;title=TITLE',
		'description' => __('Share on', 'exyusoc').' Ukusno!',
	);

	$known_sites['linke.rs'] = Array(
		'favicon' => $exyupath.'linkers.png',
		'url' => 'http://linke.rs/submit.php?url=PERMALINK',
		'description' => __('Share on', 'exyusoc').' linke.rs',
	);

	$known_sites['Erupcija'] = Array(
		'favicon' => $exyupath.'erupcija.png',
		'url' => 'http://www.erupcija.com/submit.php?url=PERMALINK',
		'description' => __('Share on', 'exyusoc').' Erupcija',
	);

	$known_sites['CroPortal'] = Array(
		'favicon' => $exyupath.'croportal.png',
		'url' => 'http://www.croportal.net/submit?url=PERMALINK&amp;title=TITLE',
		'description' => __('Share on', 'exyusoc').' CroPortal',
	);

	$known_sites['Kajmak.ot'] = Array(
		'favicon' => $exyupath.'kajmakot.png',
		'url' => 'http://kajmakot.softver.org.mk/prijavi/?url=PERMALINK',
		'description' => __('Share on', 'exyusoc').' Кајмак.от',
	);

	$known_sites['Prati.ba'] = Array(
		'favicon' => $exyupath.'pratiba.png',
		'url' => 'http://prati.ba/?objavi=PERMALINK',
		'description' => __('Share on', 'exyusoc').' Prati.ba',
	);

	$known_sites['DobarDabar'] = Array(
		'favicon' => $exyupath.'dabar.png',
		'url' => 'http://www.dobardabar.com/add_ext.html',
		'description' => __('Share on', 'exyusoc').' Dobar Dabar',
	);

	$known_sites['PingMK'] = Array(
		'favicon' => $exyupath.'pingmk.png',
		'url' => 'http://r.ping.mk/submit?url=PERMALINK',
		'description' => __('Share on', 'exyusoc').' ping.mk',
	);

	return $known_sites;

}
add_filter('sociable_known_sites', 'exyusociable_sites');
?>
