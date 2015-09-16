<?php

namespace SurvivalGames\arena;

//Scheduled game resetting
//© 2015 PocketMineDevelopers

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

use SurvivalGames\arena\ChestRefill;
use SurvivalGames\SGMain;

class Timer extends PluginTask {

 public $plugin;
 public $refill;
 public $arena;

 public function __construct(SGMain $plugin, arena\ChestRefill $refill){
  $this->plugin = $plugin;
  $this->refill = $refill;
  parent::__construct($plugin);
 }

 $this->arena = array scandir($this->getDataFolder()."arena/");
 foreach ($this->arena as $arena){
  $config = new Config($arena,Config::YAML);
 //to be continued
 }
}
