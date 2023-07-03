<?php
/**
 * Plugin Name: TDD Exercise
 * Description: Test Driven Development in WordPress.
 * Version: 1.0.0
 * Author: faran
 * Text Domain: tdd-plugin
 *
 * @package TDD
 */

namespace Faran\TDD;

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// site-level auto-loading.
if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

$register = new Register();
$register->init();
