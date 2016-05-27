
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
        //$calcsum= ('\Calculator', 'suma');
       //$this->assertEquals(94, $calc->suma());
    }
    

    public function testTotalResta() {
       //$this->assertEquals(894, $calc->resta());
    }


   public function testTotal() {
       //$this->assertEquals(761.85, $calc->());
    }
    
}