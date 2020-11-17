<?php

namespace tests; 

use PHPUnit\Framework\TestCase;

use User;

class TestingClass extends TestCase {
    /**
     * @test
     */
    public function test00() {
        $user = new User('Ibrahim', 'Xyz@example.com');
        $this->assertEquals('Ibrahim', $user->getUsername());
        $this->assertEquals('Xyz@example.com', $user->getEmail());
    }
    /**
     * @test
     */
    public function test01() {
        $this->assertTrue(false);
    }
}
