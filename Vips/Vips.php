<?php

namespace Vips;

use battlekits\command\BattleKitCommand;
use battlekits\economy\EconomyLoader;
use battlekits\economy\BaseEconomy;
use battlekits\kit\KitHistoryStore;
use battlekits\kit\KitPaymentController;
use Vips\vips\KitStore;
use battlekits\sign\SignListener;
use pocketmine\item\Item;

class Vips extends PluginBase{
  /** @var  EconomyLoader */
    private $economyLoader;
    /** @var  BaseEconomy */
    private $economy = false;
    /** @var  vipsStore */
    private $vipsStore;
    /** @var  vipsCommand */
    private $mainCommand;
    /** @var  vipsPaymentController */
    private $vipsPaymentController;
    /** @var  SignListener */
    private $signVips;
    /** @var  KitHistoryStore */
    private $vipsHistoryStore;
    public function onEnable(){
        $this->saveDefaultConfig();
        $this->economyLoader = new EconomyLoader($this);
        $this->economyLoader->load();
        $this->vipsStore = new vipsStore($this);
        $this->vipsHistoryStore = new VipsHistoryStore($this);
        $this->vipsPaymentController = new VipsPaymentController($this);
        
        $this->mainCommand = new VipsCommand($this);
        $this->getServer()->getCommandMap()->register("vips", $this->mainCommand);
        
        $this->signListener = new SignListener($this);
    }
    /**
     * @param \vips\economy\BaseEconomy $economy
     */
     public function setEconomy(BaseEconomy $economy){
        $this->economy = $economy;
     }/**
     * @return \vips\economy\BaseEconomy
     */
    public function getEconomy(){
        return $this->economy;
    }
    /**
     * @return bool
     */
    public function isLinkedToEconomy(){
        return $this->economy instanceof BaseEconomy;
    }
    /**
     * @return \vips\vips\VipsStore
     */
    public function getVipsStore(){
        return $this->vipsStore;
    }
    /**
     * @return \vips\command\VipsCommand
     */
    public function getMainCommand(){
        return $this->mainCommand;
    }
    /**
     * @return \vips\economy\EconomyLoader
     */
    public function getEconomyLoader(){
        return $this->economyLoader;
    }
    /**
     * @return \vipss\sign\SignListener
     */
    public function getSignListener(){
        return $this->signListener;
    }
    /**
     * @return \vips\vips\VipsPaymentController
     */
    public function getVipsPaymentController(){
        return $this->vipsPaymentController;
    }
    /**
     * @return \vips\vips\VipsHistoryStore
     */
    public function getVipsHistoryStore(){
        return $this->kitVipstoryStore;
    }
    public function reportEconomyLinkError(){
        $this->getLogger()->critical("The link to " . $this->economy->getName() . " has been lost. Paid vips are no longer available.");
        $this->economy = false;
    }
}

    
       
