<?php
/**
 *
 * Cytonn Technologies
 * @author Ndirangu Wilson <wndirangu@Cytonn.com>
 */

class areaFactory{

  public function areaOfshape($dimension){

    return $dimension* $dimension;
  }
}

$area= areaFactory::areaOfshape(10);

print($area);
?>
