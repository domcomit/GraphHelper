<?php
/**
 * Tests for GraphHelper
 */

use PHPUnit\Framework\TestCase;
use Graphhelper\Graphhelper;

class GraphhelperTest extends TestCase {
    private Graphhelper $instance;

    protected function setUp(): void {
        $this->instance = new Graphhelper(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Graphhelper::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
