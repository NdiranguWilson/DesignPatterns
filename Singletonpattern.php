<?php
/**
 * Cytonn Technologies
 * @author Ndirangu Wilson <wndirangu@cytonn.com>
 *
 */

class Session
{
private static $instance;
private function __construct(){
  $this->instance= True;
}

public function getInstance(){
if(!isset(self::$instance)){
  self::$instance=new Session;

}
  return self::$instance;
}

}


$session= Session::getInstance();

?>
