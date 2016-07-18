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
use School\Study;

class Study extends PluginCommand
{
  public $plugin;
  
  public function __construct(Study $pl) {
    $this->plugin = $pl;
  }
  
  public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
    if($sender instanceof Player) {
      $player = $event->getPlayer()->getName();
			if(strtolower($command->getName('school'))) {
			    if(empty($args)) {
			         $sender->sendMessage($thís->plugin->formatMessage("§l§5> §r§eBấm help để xem giúp đỡ."));
			         return true;
			    }
			    if(count($args == 2)) {
			    
			    ///////////CLASSES////////////
			    if($args[0] == "classses") {
						if(!isset($args[1])) {
							$sender->sendMessage($this->plugin->formatMessage("§6- §3Cú pháp: /school classes <Lớp muốn gia nhập>"));
							return true;
						}
					}
				}
			}
		}
	}
  
  
