<?php

namespace Study;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

class Study extends PluginBase implements Listener
{
  public function onLoad(){
    $this->getLogger()->info(C::RED . "School is openning");
  }
  public function onEnable(){
    $this->getLogger()->info(C::GREEN . "Ready to Study on version" . $this->getDescription()->getVersion());
    $this->saveDataConfig();
  }
    
  public function onDisable(){
    $this->getLogger()->info(C::AQUA . "School closed");
  }
}
