<?php
session_start();
  class Controller_sorts_d_invocateur extends Controller{
    public function action_default(){
      $this->action_sorts_d_invocateur();

    }

    public function action_sorts_d_invocateur(){
      $m = Model::getModel();
      $data = $m->get_summoner_spells();
      $this-> render("sorts_d_invocateur", $data);
    }
  }
?>
