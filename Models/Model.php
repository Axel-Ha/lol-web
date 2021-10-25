<?php

class Model
{


  /**
   * Attribut contenant l'instance PDO
   */
  private $bd;


  /**
   * Attribut statique qui contiendra l'unique instance de Model
   */
  private static $instance = null;


  /**
   * Constructeur : effectue la connexion à la base de données.
   */
  private function __construct()
  {

    try {
      include 'Utils/credentials.php';
      $this->bd = new PDO("$driver:host=$host;dbname=$dbname", $user, $login);
      $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $this->bd->query("SET nameS 'utf8'");
    } catch (PDOException $e) {
      die('Echec connexion, erreur n°' . $e->getCode() . ':' . $e->getMessage());
    }
  }


  /**
   * Méthode permettant de récupérer un modèle car le constructeur est privé (Implémentation du Design Pattern Singleton)
   */
  public static function getModel()
  {
    if (is_null(self::$instance)) {
      self::$instance = new Model();
    }
    return self::$instance;
  }

  public function get_informations(): ?array
  {
    $obj = json_decode(file_get_contents('http://ddragon.leagueoflegends.com/cdn/11.20.1/data/fr_FR/champion.json'), true);
    $index = 0;
    foreach ($obj["data"] as $cle => $value) {
      $informations[$cle] = $value;
      $index++;
    }
    return $informations;
  }

  public function get_informations_personnage($id): ?array
  {
    $adresse = "http://ddragon.leagueoflegends.com/cdn/11.20.1/data/fr_FR/champion/". $id. ".json";
    $obj = json_decode(file_get_contents($adresse), true);
    $index = 0;
    foreach ($obj["data"] as $cle => $value) {
      $informations[$cle] = $value;
      $index++;
      $informations["name"] = $cle;
    }
    return $informations;
  }

  public function get_summoner_spells(): ?array
  {
    $adresse = "http://ddragon.leagueoflegends.com/cdn/11.21.1/data/fr_FR/summoner.json";
    $obj = json_decode(file_get_contents($adresse), true);
    return $obj;
  }


}
