<?php

namespace SurvivalGames\arena;

//Scheduled game resetting
//© 2015 PocketMineDevelopers

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use SurvivalGames\arena\ChestRefill;

class Timer extends PluginTask {

 public $refill;
 public $arena;

 //Arena data...
 private $running;
 $this->running = [];

 public function __construct(ChestRefill $refill){
  $this->refill = $refill;
  parent::__construct($refill);
 }

 public function onRun($t){
  $this->arena = array scandir($this->getDataFolder()."arena/");
  foreach ($this->arena as $arena){
   $config = new Config($arena,Config::YAML);
   $temparray = [
    $config->get("arena-name") => $config->getAll()
   ];
   $this->running = merge_array(
  }
 }
}
