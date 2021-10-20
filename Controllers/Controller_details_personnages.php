<?php
class Controller_details_personnages extends Controller
{
  public function action_default()
  {
    $this->action_details_personnages();
  }

  public function action_details_personnages()
  {
    $m = Model::getModel();
    $data = $m->get_information_personnages();
    $personnage = $m->get_personnage($data,$_GET["name"]);
    $this->render("details_personnages", $personnage);
  }
}
