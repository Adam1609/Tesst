<?php

namespace Vips;

use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as C;
use pocketmine\item\Item;

class Vips extends PluginBase{
  //About Plugin Const
	
	/** @var string PRODUCER Plugin producer */
	const PRODUCER = "Godly";
	
	/** @var string MAIN_WEBSITE Plugin producer website */
	const MAIN_WEBSITE = "http://weelux.com";
	
	//Other Const
	
	/** @var string PREFIX Plugin prefix */
	const PREFIX = "&b[&aVI&cPs&b] ";
    public function onEnable(){
        $this->getLogger()->info("Vips by ChienDz enabled!");
        $this->saveDefaultConfig();
        $this->saveResource("config.yml");
    }
    public function onDisable(){
        $this->getLogger()->info("Vips disaled! :o");
    }
    public function onLoad(){
        $this->getLogger()->info("Vips by ChienDz!");
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        
        switch($cmd->getName()){
            case "vips":
            	if $sender->hasPermission("vips.cmd")){
            		$sender->sendMessage(C::ITALIC. C::YELLOW. "Vips Commands & Info!");
            		$sender->sendMessage(C::ITALIC. C::AQUA. "/vips or /dnt list -> See all the vips!");
            		if(isset($args[0])){
                           case "list":
                               if($sender->hasPermission("vips.cmd.list")){
                                   $sender->sendMessage(C::ITALIC. C::LIGHT_GREEN. "--==" . C::YELLOW . "VipS" . C::LIGHT_GREEN . "==--" );
                                   $sender->sendMessage(C::ITALIC. $this->getConfig()->get("custom_message"));
                                   return true;
                                   break;
            	                }
            		} 
            	}
        }  
    }
    
       
