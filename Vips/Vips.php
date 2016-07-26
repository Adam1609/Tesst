<?php

namespace Vips;

use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use Vips\Commands
use pocketmine\utils\TextFormat as TF;

class Vips extends PluginBase {
  public function onLoad(){
    $this->getLogger()->info(TF::AQUA . "Vips Is Loading...");
  }
  public function onEnable(){
    $this->getLogger()->info(TF::LIGHT_GREEN . "Loading sucessful! Created by Godly.");
  }
  public function onDisable(){
    $this->getLogger()->info(TF::RED . "Plugin Is Disable.");
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $this->vCommand->onCommand($sender, $command, $label, $args);
  }
}


