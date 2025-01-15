<?php

use PHPUnit\Framework\TestCase;

require_once '../src/sum.php'; // Carregar a função sum()

class ExampleTest extends TestCase
{
    public function testSum()
    {
        $result = sum(2, 3); // Função sum() está no arquivo src/sum.php
        $this->assertEquals(5, $result);
    }
}
