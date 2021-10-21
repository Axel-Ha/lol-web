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
    $personnage = $m->get_image_personnage($_GET["name"]);

    // var_dump($data);

    // $data = $m->get_information_personnages();
    // $personnage = $m->get_personnage($data,$nom);
    $this->render("details_personnages", $personnage);
  }
}
