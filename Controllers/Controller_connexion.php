<?php
session_start();
  class Controller_connexion extends Controller{
    public function action_default(){
      $this->action_connexion();

    }

    public function action_connexion(){
      $data = [];
      $this-> render("connexion", $data);
    }

    public function action_verification(){
      $m=Model::getModel();
      //on recup les infos de lutilisateur, son mdp et son mail
      $mail = $_POST["mail"];
      $mdp = $_POST["mdp"];

      $info = $m->verifco($mail,$mdp);

      if($info == null){
        $data = [];
        $this->render("connexion",$data);
      }
      else{
        $_SESSION['id'] = $info['id'];
        $_SESSION['mail'] = $info['mail'];
        $_SESSION['mdp'] = $info['mdp'];



        $this->render("accueil_test",$info);
      }
    }
  }
?>
