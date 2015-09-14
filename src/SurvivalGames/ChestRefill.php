<?php

namespace SurvivalGames;

//Automatic chest refilling, X minutes after arena start and at the end of the arena.
// © 2015 PocketMineDevelopers

use SurvivalGames\SGMain;

use pocketmine\tile\Tile;
use pocketmine\tile\Chest;

class ChestRefill {

private $plugin;

public function __construct(SGMain $plugin){
$this->plugin = $plugin;
parent::__construct($plugin);
}

public function refillChests($arena){
  if ($this->plugin->isRunning($arena)){
   $items = $this->plugin->getItems();
   //there are still many things to do
  }
}

}
