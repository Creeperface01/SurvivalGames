<?php

namespace SurvivalGames;

//© 2015 PocketMineDevelopers Team

use SurvivalGames\ChestRefill;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

use pocketmine\event\Listener;

class SGMain extends PluginBase implements Listener{

 public function onEnable(){
  $this->getLogger()->info(TextFormat::DARK_GREEN."SurvivalGames ENABLED!");
  $this->getLogger()->notice(TextFormat::GRAY."Copyright 2015 PocketMineDevelopers");
  
 }


}
