<?php
include "Calculator.php";
class CalculatorTest extends PHPUnit_Framework_TestCase
{
    private $calculator;
    private $arr;

    protected function setUp()
    {
        $this->calculator = new Calculator();
    }

    protected function tearDown()
    {
        $this->calculator = NULL;
    }
    /**
     * @dataProvider providerPlus
     */

    public function testPlus($x=false,$y=false,$z=false)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->plus());
    }
    public function providerPlus()
    {
        return array(
            array(2,4,6),
            array(4,16,20),
            array(5,25,30),
            array(6,36,42)
        );
    }

    /**
     * @dataProvider providerMinus
     */

    public function testMinus($x,$y,$z)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->minus());
    }
    public function providerMinus()
    {
        return array(
            array(8,6,2),
            array(25,16,9),
            array(5,3,2),
            array(6,5,1)
        );
    }
    /**
     * @dataProvider providerMnoj
     */

    public function testMnoj($x,$y,$z)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->mnoj());
    }
    public function providerMnoj()
    {
        return array(
            array(8,6,48),
            array(25,2,50),
            array(5,3,15),
            array(6,5,30)
        );
    }
    /**
     * @dataProvider providerDevide
     */

    public function testDevide($x,$y,$z)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->delete());
    }

    public function providerDevide()
    {
        return array(
            array(12,2,6),
            array(30,5,6),
            array(18,2,9),
            array(120,4,30)
        );

    }
    /**
     * @dataProvider providerSqrtA
     */

    public function testSqrtA($x,$y)
    {
        $this->calculator->setA($x);
        $this->assertEquals($y, $this->calculator->sqrtA());
    }
    public function providerSqrtA()
    {
        return array(
            array(9,3),
            array(36,6)

        );
    }

    /**
     * @dataProvider providerSqrtB
     */

    public function testSqrtB($x,$y)
    {
        $this->calculator->setB($x);
        $this->assertEquals($y, $this->calculator->SqrtB());
    }
    public function providerSqrtB()
    {
        return array(
            array(9,3),
            array(36,6)

        );
    }
    /**
     * @dataProvider providerMS
     */
    public function testMS($x,$y,$z)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->MS());
    }
    public function providerMS()
    {
        return array(
            array(50,2,52),
            array(25,8,33)
        );
    }

    public function testMC()
    {
        $this->assertEquals(NULL, $this->calculator->MC());
    }
    /**
     * @dataProvider providerProcent
     */
    public function testPercent($x, $y, $z)
    {
        $this->calculator->setA($x);
        $this->calculator->setB($y);
        $this->assertEquals($z, $this->calculator->procent());
    }
    public function providerProcent()
    {
        return array(
            array(50,2,2500),
            array(25,8,312.5),
            array(75,4,1875.0)
        );
    }
}
