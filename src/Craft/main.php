<?php

namespace Craft;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecuter;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\block\BlockIds;

class main extends PluginBase implements Listener{
    
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("Craftを読み込みました");
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "craft":
			if($sender instanceof Player){
			    if(!isset($args[0])){
			        $sender->sendMessage("use: /craft <クラフトID> <個数>");
			     }else{
			        switch($args[0]){
			             case "1":
				     $this->CraftSystem($sender, $args[1], 336, 0, 4, 45, 0, "レンガブロック");
			             break;
			             
			             case "2":
				     $this->CraftSystem($sender, $args[1], 5, 0, 6, 53, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "3":
				     $this->CraftSystem($sender, $args[1], 4, 0, 6, 67, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "4":
				     $this->CraftSystem($sender, $args[1], 45, 0, 6, 108, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "5":
				     $this->CraftSystem($sender, $args[1], 98, 0, 6, 109 0, "クォーツブロックのハーフ");
			             break;
			             
				     case "6":
				     $this->CraftSystem($sender, $args[1], 112, 0, 6, 114, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "7":
				     $this->CraftSystem($sender, $args[1], 24, 0, 6, 128, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "8":
				     $this->CraftSystem($sender, $args[1], 179, 0, 6, 180, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "9":
				     $this->CraftSystem($sender, $args[1], 5, 1, 6, 134, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "10":
				     $this->CraftSystem($sender, $args[1], 5, 2, 6, 135, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "11":
			             $this->CraftSystem($sender, $args[1], 5, 3, 6, 136, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "12":
				     $this->CraftSystem($sender, $args[1], 5, 4, 6, 163, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "13":
				     $this->CraftSystem($sender, $args[1], 5, 5, 6, 164, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "14":
				     $this->CraftSystem($sender, $args[1], 155, 0, 6, 156, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "15":
				     $this->CraftSystem($sender, $args[1], 201, 0, 6, 203, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "16":
				     $this->CraftSystem($sender, $args[1], 5, 0, 3, 158, 0, "クォーツブロックのハーフ");
			             break;
			             
			             case "17":
			             $this->CraftSystem($sender, $args[1], 5, 1, 3, 158, 1, "クォーツブロックのハーフ");
				     break;
			             
			             case "18":
			             $this->CraftSystem($sender, $args[1], 5, 2, 3, 158, 2, "クォーツブロックのハーフ");
			             break;
			             
			             case "19":
			             $this->CraftSystem($sender, $args[1], 5, 3, 3, 158, 3, "クォーツブロックのハーフ");
			             break;
			                
			             case "20":
			             $this->CraftSystem($sender, $args[1], 5, 4, 3, 158, 4, "クォーツブロックのハーフ");
			             break;
			                   
			             case "21":
			             $this->CraftSystem($sender, $args[1], 5, 5, 3, 158, 5, "クォーツブロックのハーフ");
			             break;
			              
			             case "22":
			             $this->CraftSystem($sender, $args[1], 98, 0, 3, 45, 5, "クォーツブロックのハーフ");
			             break;
			             
			             case "23":
			             $this->CraftSystem($sender, $args[1], 45, 0, 3, 44, 4, "クォーツブロックのハーフ");
			             break;
			             
			             case "24":
			             if(isset($args[1])){
			                 $this->CraftSystem($sender, $args[1], 155, 0, 3, 44, 6, "クォーツブロックのハーフ");
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			                
			             case "list":
			             if(!isset($args[1])){
			                 $sender->sendMessage("use /craft list <ページ数>");
			             }else{
			                 switch($args[1]){
			                     case "1":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <1/3>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| レンガブロック | レンガ×4 | 1 |");
			                     $sender->sendMessage("| オークの木の階段 | 木材×6 | 2 |");
			                     $sender->sendMessage("| 石の階段 | 丸石×6 | 3 |");
			                     $sender->sendMessage("| レンガの階段 | レンガブロック×6 | 4 |");
			                     $sender->sendMessage("| 石レンガの階段 | 石レンガブロック×6 | 5 |");
			                     $sender->sendMessage("| レザーレンガの階段 | 暗黒レンガブロック×6 | 6 |");
			                     $sender->sendMessage("| 砂岩の階段 | 砂岩×6 | 7 |");
			                     $sender->sendMessage("| 赤砂岩の階段 | 赤砂岩×6 | 8 |");
			                     break;
			                     
			                     case "2":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <2/3>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| マツの木の階段 | マツの木材×4 | 9 |");
			                     $sender->sendMessage("| シラカバの木の階段 | シラカバの木材×6 | 10 |");
			                     $sender->sendMessage("| ジャングルの木の階段 | ジャングルの木材×6 | 11 |");
			                     $sender->sendMessage("| アカシアの木の階段 | アカシアの木材×6 | 12 |");
			                     $sender->sendMessage("| ダークオークの木の階段 | ダークオーの木材×6 | 13 |");
			                     $sender->sendMessage("| クォーツブロックの階段 | ネザー水晶×6 | 14 |");
			                     $sender->sendMessage("| プルプァブロックの階段 | プルプァブロック×6 | 15 |");
			                     break;
			                     
			                     case "3":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <3/3>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| オークの木のハーフ | オークの木材×3 | 16 |");
			                     $sender->sendMessage("| マツの木のハーフ | マツの木材×4 | 17 |");
			                     $sender->sendMessage("| シラカバの木のハーフ | シラカバの木材×6 | 18 |");
			                     $sender->sendMessage("| ジャングルの木のハーフ | ジャングルの木材×6 | 19 |");
			                     $sender->sendMessage("| アカシアの木のハーフ | アカシアの木材×6 | 20 |");
			                     $sender->sendMessage("| ダークオークの木のハーフ | ダークオーの木材×6 | 21 |");
			                     $sender->sendMessage("| 石レンガのハーフ | 石レンガ×3 | 22 |");
			                     $sender->sendMessage("| レンガブロックのハーフ | レンガブロック×3 | 23 |");
			                     $sender->sendMessage("| クォーツブロックのハーフ | クォーツブロック×3 | 24 |");
			                     break;
			                     
			                     default:
			                     $sender->sendMessage("use: /craft list <ページ数>");
			                     break;
			                 }
			             }
			             break;
			             
			             default:
			             $sender->sendMessage("[§eCraft§f] そのクラフトIDは存在しません");
			             $sender->sendMessage("[§eCraft§f] クラフトIDを/craft listで確かめてください");
			             break;
			         }
			     }
			 }else{
			     $sender->sendMessage("[§eCraft§f] ゲーム内で実行してください");
			 }
		}
		return true;
     }
	
     public function CraftSystem(Player $sender, $args, $UseID, $UseDamage, $UseCount, $GetID, $GetDamage, $itemName){
	     if(isset($args)){
		     if(is_numeric($args) && $args >= 0){
			     $item = Item::get($UseID, $UseDamage, $UseCount * $args);
		             $getitem = Item::get($GetID, $GetDamage, $args);
			     if($sender->getInventory()->contains($item)){
				     $sender->getInventory()->removeItem($item);
			             $sender->getInventory()->addItem($getitem);
			             $sender->sendMessage("[§eCraft§f] {$itemName}を{$args}個 クラフトしました！");
		             }else{
			             $sender->sendMessage("[§eCraft§f] 指定したアイテムをクラフトするのに必要なアイテムが不足しています");
		             }
	             }else{
		             $sender->sendMessage("[§eCraft§f] 個数は整数で指定してください");
	             }
	     }else{
		     $sender->sendMessage("use: /carft <クラフトID> <個数>");
		     $sender->sendMessage("use: /craft list <ページ数>");
	     }
     }
}
