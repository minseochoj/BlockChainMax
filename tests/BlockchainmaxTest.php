<?php
/**
 * Tests for BlockChainMax
 */

use PHPUnit\Framework\TestCase;
use Blockchainmax\Blockchainmax;

class BlockchainmaxTest extends TestCase {
    private Blockchainmax $instance;

    protected function setUp(): void {
        $this->instance = new Blockchainmax(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockchainmax::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
