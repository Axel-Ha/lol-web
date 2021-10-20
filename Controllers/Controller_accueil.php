<?php
class Controller_accueil extends Controller{
  public function action_default(){
      $this->action_accueil();
  }

  public function action_accueil(){
    $m = Model::getModel();
    $data = $m->get_information();
    // $data = [];
    $this-> render("accueil",$data);
  }
}
?>
