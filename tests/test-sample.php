<?php
use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase {
    public function test_plugin_constant() {
        $this->assertTrue( defined('AI_GUARDIAN_VERSION') );
    }
}
