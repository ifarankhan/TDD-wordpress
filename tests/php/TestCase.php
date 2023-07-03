<?php
/**
 * Tests Case class.
 *
 * @package TDD
 */

namespace Faran\TDD;

use Mockery;
use WP_Mock;

/**
 * Tests class extends.
 */
class TestCase extends WP_Mock\Tools\TestCase {

	use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

}
