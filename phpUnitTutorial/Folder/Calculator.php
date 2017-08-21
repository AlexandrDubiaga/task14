<?php
class Calculator
{
    protected $a;
    protected $b;
    protected $aMemory;
    public function setA($a)
    {
        $this->a = $a;
    }
    public function setB($b)
    {
        $this->b = $b;
    }
    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->b;
    }
    public function plus()
    {
        return $this->a + $this->b;
    }
    public function minus()
    {
        if($this->a < $this->b)
        {
            return $this->b - $this->a;
        }
        else{
            return $this->a - $this->b;
        }
    }
    public function mnoj()
    {
        return $this->a * $this->b;
    }
    public function delete()
    {
        if($this->a == 0 || $this->b == 0){
            return false;
        }else
        {
            return $this->a / $this->b;
        }
        return false;
    }
    public function sqrtA()
    {
        return sqrt($this->a);
    }
    public function sqrtB()
    {
        return sqrt($this->b);
    }
    public function MS()
    {
        return $this->aMemory = $this->plus();
    }
    public function MR()
    {
        return $this->plus();
    }
    public function MC()
    {
        $this->aMemory = NULL;
    }
    public function mPlus()
    {
        return $this->aMemory = $this->plus();
    }
    public function mMinus()
    {
        return $this->aMemory -$this->a;
    }
    public function procent()
    {
        return (($this->a / $this->b) * 100);
    }
}
?>