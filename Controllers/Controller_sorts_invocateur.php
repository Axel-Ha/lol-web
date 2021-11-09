<?php
session_start();
  class Controller_sorts_invocateur extends Controller{
    public function action_default(){
      $this->action_sorts_invocateur();

    }

    public function action_sorts_invocateur(){
      $m = Model::getModel();
      $data = $m->get_sorts_invocateur();
      $this-> render("sorts_invocateur", $data);
    }
  }
?>
