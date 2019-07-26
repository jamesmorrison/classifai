<?php
/**
 * Testing for the ServicesManager class
 */

namespace Classifai\Tests\Services;

use \WP_UnitTestCase;
use Classifai\Services\ServicesManager;

/**
 * Class ServicesManagerTest
 * @package Classifai\Tests\Services
 *
 * @group services
 */
class ServicesManagerTest extends WP_UnitTestCase {

	protected $services_manager;

	/**
	 * setup method
	 */
	function setUp() {
		parent::setUp();

		$this->services_manager = new ServicesManager();
	}

	/**
	 * Tests the add_debug_information function.
	 */
	function test_add_debug_information() {
		$this->assertEquals( 2, count( $this->services_manager->add_debug_information( [] ) ) );

		$this->assertEquals(
			[
				[
					'label' => 'Valid license',
					'value' => 1,
				],
				[
					'label' => 'Email',
					'value' => 'my@email.com',
				]
			],
			$this->services_manager->add_debug_information(
				[],
				[
					'valid_license' => true,
					'email'         => 'my@email.com',
				]
			)
		);
	}
}
