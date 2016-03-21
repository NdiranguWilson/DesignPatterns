<?php
/**
 * Cytonn Technologies
 * @author Ndirangu Wilson <wndirangu@cytonn.com>
 *
 */
interface Area{
/**
 * [returnArea a method that calculates the area of a given shape]
 * @param  [float] $dimension [variable that holds the length of either square or circle]
 * @return [float]            [Area of the given shape]
 */
  public function returnArea($dimension);
}

//classes that implement the strategy interface
class circle implements Area{

  public function returnArea($dimension){

    return pi() * 10 *10;//$radius * $radius ;
  }

}

class square implements Area{

  public function returnArea($dimension){

    return $dimension*$dimension; //$length * $height;
  }
}

// client classes that outputs the data
class calculateArea{
  private $shape;

  public function setShape(Area $shapeName){
    $this->shape= $shapeName;


  }

  public function obtainArea($dimension){

    return $this->shape->returnArea($dimension);
  }

}

$area= new calculateArea();
$area->setShape(new circle());
echo($area->obtainArea(10));



?>
