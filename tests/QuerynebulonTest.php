<?php
/**
 * Tests for QueryNebulon
 */

use PHPUnit\Framework\TestCase;
use Querynebulon\Querynebulon;

class QuerynebulonTest extends TestCase {
    private Querynebulon $instance;

    protected function setUp(): void {
        $this->instance = new Querynebulon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Querynebulon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
