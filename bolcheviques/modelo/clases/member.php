<?php
  class Member extends Seteable{
    public $name;
    public $tag;
    public $rank;
    public $previousRank;
    public $role;
    public $expLevel;
    public $trophies;
    public $clanChestCrowns;
    public $donations;
    public $donationsRecived;
    public $donationsDelta;
    public $arena;
    public $donationsPercent;

    public function __construct($data){
      $this->arena = new Arena();
      $this->set($data);
    }

  }
?>
