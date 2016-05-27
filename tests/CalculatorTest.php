
<?php
include '/home/ubuntu/workspace/Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase {
    
    public function testResta() {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->resta(3,1));        
    }
    
    public function testSuma() {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->suma(3,1));        
    }
    
    public function testMutiply() {
        $calc = new Calculator();
        $this->assertEquals(-27, $calc->multiply(-3,9));        
    }

    public function testDivide() {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->divide(3,1));
    }
    
    public function testTotalSuma() {
       $this->markTestIncomplete('This test has not been implemented yet.');
    }
    

    public function testTotalResta() {
       $this->markTestIncomplete('This test has not been implemented yet.');
    }


   public function testTotal() {
       $this->markTestIncomplete('This test has not been implemented yet.');
    }
    
}