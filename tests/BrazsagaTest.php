<?php
/**
 * Tests for BrazSaga
 */

use PHPUnit\Framework\TestCase;
use Brazsaga\Brazsaga;

class BrazsagaTest extends TestCase {
    private Brazsaga $instance;

    protected function setUp(): void {
        $this->instance = new Brazsaga(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Brazsaga::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
