<?php

namespace Study;

use pocketmine\Player;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\utils\TextFormat as C;
use pocketmine\utils\Config;

class Study extends PluginBase
{
  public function onLoad(){
    $this->getLogger()->info(C::AQUA . "School is openning");
  }
  public function onEnable(){
    @mkdir($this->getDataFolder());
    $this->classs = new Config($this->getDataFolder() . "classs.yml", Config::YAML);
    $this->getLogger()->info(C::GREEN . "Ready to Study on version " . $this->getDescription()->getVersion());
  }
    
  public function onDisable(){
    $this->classs->save();
    $this->getLogger()->info(C::RED . "School closed");
  }
  
  public function onJoin(PlayerJoinEvent $event){
    $stu = $event->getPlayer();
    $player = $event->getPlayer()->getName();
    if ($this->classs->exists($Player)){
      $stu->setDisplayName(TextFormat::LIGHT_PURPLE . "[HaveYourPussyItaLy] " . $stu->getDisplayName());
    }
  }
}
