<?php
//TEST FOR "Falabella Corporate Services"
class Main
{
  public $rmindr3;
  public $rmindr5;
  public $rmindr35;
  public $num;
  
public  function index(){
      for($i =1; $i <=100;$i++)
      {
          $this->num = $i;
          $this->rmindr3  = $this->getremin($i,3);
          $this->rmindr5  = $this->getremin($i,5);
          $this->rmindr35 = $this->sumremin($this->rmindr3,$this->rmindr5);
          $this->printresult();
      }
  }
 public function getremin($count,$val )
    {
        return $count % $val;
    }
 public function sumremin($numthree,$numfive)
    {
        return $numthree +  $numfive;
    }
  
 public function printresult()
    {
        switch (true) {
            case ($this->rmindr35 == 0 ):
                echo "Linianos";
                break;
            case ($this->rmindr5 == 0):
                echo "IT";
                break;
            case ($this->rmindr3==0):
                echo "Linio";
                break;
            default:
                echo $this->num;
        }
    echo "</br>";
    }
}

$newobj=new main();
$newobj->index();
?>
