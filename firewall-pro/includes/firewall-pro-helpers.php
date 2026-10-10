<?php
/**
 * Utilidades auxiliares para Firewall Pro.
 *
 * @package Firewall_Pro
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function firewall_pro_helper_defaults() {
	return array(
		'cache'      => true,
		'debug'      => false,
		'version'    => '1.0.0',
	);
}
