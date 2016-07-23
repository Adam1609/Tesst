<?php

namespace Vips;

use pocketmine\command\CommandExecutor;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as X;

class Vips extends PluginBase {
  public function onLoad(){
    $this->getLogger()->info(X::AQUA . "Vips Is Loading...");
  }
  public function onEnable(){
    $this->getLogger()->info(X::LIGHT_GREEN . "Vips loading sucsses Made by Godly.");
  }
  public function onDisable(){
    $this->getLogger()->info(X::RED . "Plugin Is Disable.");
  }
  public function onCommand(CommandSender $sender, Command $command, $label, array $args){
    $this->vCommand->onCommand($sender, $command, $label, $args);
  }
}


