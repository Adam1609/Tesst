<?php

namespace Twitt;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

class Twitt extends PluginBase
{
  public function onLoad(){
    $this->getLogger()->info(C::AQUA . "Twitter is loading");
  }
  public function onEnable(){
    @mkdir($this->getDataFolder());
    $this->present = new Config($this->getDataFolder() . "present.yml", Config::YAML);
    $this->getLogger()->info(C::GREEN . "Ready to online on version " . $this->getDescription()->getVersion());
  }
    
  public function onDisable(){
    $this->classs->save();
    $this->getLogger()->info(C::RED . "Twitter has been hacked");
  }
}
