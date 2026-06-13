<?php
/**
 * Tests for BlockN
 */

use PHPUnit\Framework\TestCase;
use Blockn\Blockn;

class BlocknTest extends TestCase {
    private Blockn $instance;

    protected function setUp(): void {
        $this->instance = new Blockn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
