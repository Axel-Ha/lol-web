<?php
class Controller_accueil extends Controller{
  public function action_default(){
      $this->action_accueil();
  }

  public function action_accueil(){
    $m = Model::getModel();
    $data = $m->get_information();
    $this-> render("accueil",$data);
  }
}
?>
