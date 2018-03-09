<?php
  require_once("bolcheviques/modelo/clases/seteable.php");
  require_once("bolcheviques/modelo/clases/badge.php");
  require_once("bolcheviques/modelo/clases/clanChest.php");
  require_once("bolcheviques/modelo/clases/tracking.php");
  require_once("bolcheviques/modelo/clases/location.php");
  require_once("bolcheviques/modelo/clases/member.php");
  require_once("bolcheviques/modelo/clases/arena.php");

  class Clan extends Seteable {
    //hereda de seteable el metodo set
    public $tag;
    public $name;
    public $description;
    public $type;
    public $score;
    public $memberCount;
    public $requiredScore;
    public $donations;
    public $clanChest;
    public $badge;
    public $location;
    public $tracking;
    public $members;

    public function setMembers(){
      $aux = array();
      foreach ($this->members as $member) {
        $lista = $member;
        $member = new Member($lista);
        $aux[]=$member;
      }
      $this->members = $aux;
    }

    public function __construct($data){
        $this->clanChest = new ClanChest();
        $this->badge = new Badge();
        $this->location = new Location();
        $this->tracking = new Tracking;
        $this->members = array();
        $this->set($data);
        $this->setMembers();
    }

  }
?>
