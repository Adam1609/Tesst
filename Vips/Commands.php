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
