<?php
session_start();
  class Controller_connexion extends Controller{
    public function action_default(){
      $this->action_connexion();

    }

    public function action_connexion(){
      $data = [];
      $this-> render("sorts_d_invocateur", $data);
    }
  }
?>
