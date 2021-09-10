<?php

namespace Tests\Unit;

use App\Http\Controllers\NumberController;
use phpDocumentor\Reflection\Types\Mixed_;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }

    /**
     * test method 1
     */
    public function test_number_controller_method_one()
    {
        $numberController = new NumberController();
        $this->assertFalse($numberController->one(1));
        $this->assertTrue($numberController->one(2));
    }

    public function test_number_controller_method_two()
    {
        $numberController = new NumberController();
        $this->assertTrue($numberController->two(4));
        $this->assertFalse($numberController->two(6));
        $this->assertFalse($numberController->two(0));
    }

    public function test_number_controller_method_three()
    {
        $numberController = new NumberController();
        $this->assertTrue($numberController->three(9));
        $this->assertFalse($numberController->three(6));
        $this->assertTrue($numberController->three(27));
        $this->assertFalse($numberController->three(0));
        $this->assertTrue($numberController->three(729));
    }

    public function test_number_controller_method_four()
    {
        $numberController = new NumberController();
        $this->assertTrue($numberController->four(16));
        $this->assertFalse($numberController->four(6));
        $this->assertTrue($numberController->four(64));
        $this->assertFalse($numberController->four(0));
        $this->assertTrue($numberController->four(256));
    }

    public function test_number_controller_method_five()
    {
        $numberController = new NumberController();
//        dd($numberController->five(16.432));
        $this->assertEqualsWithDelta(0.25, $numberController->five(16), 0.1);
        $this->assertEqualsWithDelta(0.2, $numberController->five(25), 0.1);
        $this->assertEqualsWithDelta(0.3, $numberController->five(9), 0.1);
    }

    /**
     * @dataProvider fizzbuzzData
     * @param int $input
     * @param string $expected
     */
    public function test_number_controller_fizzbuzz(string $input, string $expected)
    {
        $numberController = new NumberController();
        $this->assertEquals($expected, $numberController->fizzbuzz($input));
    }

    /**
     * @return string[][]
     */
    public function fizzbuzzData(): array
    {
        return [
            ['0', '0'],
            ['3', 'fizz'],
            ['6', 'fizz'],
            ['5', 'buzz'],
            ['10', 'buzz'],
            ['15', 'fizzbuzz'],
            ['30', 'fizzbuzz'],
        ];
    }

    /**
     * @dataProvider numberReverseData
     * @param $input
     * @param $expected
     */
    public function test_number_controller_numberReverse($input, $expected)
    {
        $numberController = new NumberController();
//        dd(gettype($numberController->numberReverse($input)));
        $this->assertEquals($expected, $numberController->numberReverse($input));
    }

    /**
     * @return int[][]
     */
    public function numberReverseData(): array
    {
        return [
            [123, 321],
            [1234, 4321],
            [12345, 54321],
            [1122121, 1212211],
            [753, 357],
            [12399885, 58899321],
            [12375391, 19357321],
            [12358525, 52585321],
            [107, 701],
        ];
    }

    /**
     * @dataProvider numberSumData
     * @param int $input
     * @param int $expected
     */
    public function test_number_controller_number_sum(int $input, int $expected)
    {
        $numberController = new NumberController();
        $this->assertEquals($expected, $numberController->numberSum($input));
    }

    /**
     * @return int[][]
     */
    public function numberSumData(): array
    {
        return [
            [0, 0],
            [3, 6],
            [1, 1],
            [10, 55],
            [100, 5050],
        ];
    }

    /**
     * @dataProvider numberSquareData
     * @param int $input
     * @param int $expected
     */
    public function test_number_controller_number_square(int $input, int $expected)
    {
        $numberController = new NumberController();
        $this->assertEquals($expected, $numberController->numberSquare($input));
    }

    /**
     * @return int[][]
     */
    public function numberSquareData(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 5],
            [3, 14],
            [4, 30],
            [5, 55],
            [6, 91],
            [7, 140],
            [10, 385],
        ];
    }

    /**
     * @dataProvider numberFactorialData
     * @param int $input
     * @param int $expected
     */
    public function test_number_controller_factorial(int $input, int $expected)
    {
        $numberController = new NumberController();
        $this->assertEquals($expected, $numberController->factorial($input));
    }

    /**
     * @return int[][]
     */
    public function numberFactorialData(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 2],
            [3, 6],
            [5, 120],
            [10, 3628800],
        ];
    }
}

