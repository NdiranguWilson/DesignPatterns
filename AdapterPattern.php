<?php
/**
 * Cytonn Technologies
 * @author Ndirangu Wilson <wndirangu@cytonn.com>
 *
 */
class Profile {

 public function NewAccount($name,$title){
        $user = new User();
        $user->AddUser($name);
         
        $profile = new Occupation();
        $profile->AddOccupation($title);
    }
}

class User {

  public function AddUser($name){

  }
}

class Occupation {

public function AddOccupation($title)
{

}
}


 ?>
