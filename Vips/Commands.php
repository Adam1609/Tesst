<?php

namespace Vips;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Vips{
  public $plugin;
	
	public function __construct(Vips $pg) {
		$this->plugin = $pg;
	}
        public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
		if($sender instanceof Player) {
			$player = $sender->getPlayer()->getName();
			if(strtolower($command->getName("vips")))  {
				if(empty($args)) {
					$sender->sendMessage($this->plugin->formatMessage("§e✅>§d §aĐể biết thêm chi tiết nhấn /vips help"));
					return true;
				}
			}
		}
        } 
