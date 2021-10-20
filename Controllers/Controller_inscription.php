<?php
  class Controller_inscription extends Controller{
    public function action_default(){
      $this->action_inscription();

    }

    public function action_inscription(){
      $data = [];
      $this-> render("choixInscription", $data);
    }
  }
?>
