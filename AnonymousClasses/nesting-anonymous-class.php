<?php
class Outer{
    private $prop = 1;
    protected $prop2 = 2;

    protected function outerClassFunction1(){
        return 3;
    }

    public function outerClassFunction2(){
        return new class($this->prop) extends Outer{
            private $prop3;

            public function __construct($prop){
                $this->prop3 = $prop;
            }

            public function innerFunction1(){
                return $this->prop2+$this->prop3+$this->outerClassFunction1();
            }
        };
    }
}

echo (new Outer)->outerClassFunction2()->innerFunction1();