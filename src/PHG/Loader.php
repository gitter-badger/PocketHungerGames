<?php

namespace PHG;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class PHG extends PluginBase{
	
	const CONVERT_COEFFICIENT = 20;
	const DEFAULT_COIN = 12;
	const LINE_BREAK = 45;

	private $backup = array("world" => array(), "chest" => array());
	private $switch = array();
	private $schedule = array();
	private $count_id = 0;
	private $s_id = array(); //schedule_id
	protected $status = false;
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents(new EventListener($this), $this);
		$this->getLogger()->info(TextFormat::DARK_GREEN . "I've been enabled!");
    }

	public function onDisable(){
		$this->getLogger()->info(TextFormat::DARK_RED . "I've been disabled!");
	}
	
	
}
