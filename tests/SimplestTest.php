<?php
/**
 * Created by PhpStorm.
 * User: taras
 * Date: 11.03.19
 * Time: 17:23
 */

namespace App\Tests;


use PHPUnit\Framework\TestCase;

class SimplestTest extends TestCase
{
    public function testAddition()
    {
        $value = true;

        $array = [
            'key' => 'value'
        ];

        $this->assertEquals(5, 2+3, 'Five was expected to equal 3+2');
        $this->assertTrue($value);
        $this->assertArrayHasKey('key', $array);
        $this->assertEquals('value', $array['key']);
        $this->assertCount(1, $array);
    }
}