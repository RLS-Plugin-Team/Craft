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
use pocketmine\utils\Config;

class main extends PluginBase implements Listener{
    
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		if(!file_exists($this->getDataFolder())){
			@mkdir($this->getDataFolder(), 0744, true);
		}
		$this->data = new Config($this->getDataFolder() . "data.yml", Config::YAML);
		$this->getServer()->getLogger()->info("Craftを読み込みました");
	}
	
	public function onCommand(CommandSender $sender, Command $command, string $label, array $args) : bool{
		switch($command->getName()){
			case "craft":
			if($sender instanceof Player){
			    if(!$this->data->exists($sender->getName())){
				$sender->sendMessage("§d注意 §f: §eクラフトIDが一部変更されています");
				$this->data->set($sender->getName(),count($this->data->getAll())+1);
			        $this->data->save();
			    }
			    if(!isset($args[0])){
			        $sender->sendMessage("use: /craft <クラフトID> <個数>");
				$sender->sendMessage("use: /craft list <ページ数>");
			     }elseif($args[0] != "list" && !isset($args[1])){
                                $sender->sendMessage("use: /craft <クラフトID> <個数>");
				$sender->sendMessage("use: /craft list <ページ数>");
                             }else{
			        switch($args[0]){
			             case "1":
				     $this->CraftSystem($sender, $args[1], 5, 0, 6, 53, 0, "オークの木の階段");
			             break;
			             
			             case "2":
				     $this->CraftSystem($sender, $args[1], 4, 0, 6, 67, 0, "石の階段");
			             break;
			             
			             case "3":
				     $this->CraftSystem($sender, $args[1], 45, 0, 6, 108, 0, "レンガの階段");
			             break;
			             
			             case "4":
				     $this->CraftSystem($sender, $args[1], 98, 0, 6, 109, 0, "石レンガの階段");
			             break;
			             
				     case "5":
				     $this->CraftSystem($sender, $args[1], 112, 0, 6, 114, 0, "レザーレンガの階段");
			             break;
			             
			             case "6":
				     $this->CraftSystem($sender, $args[1], 24, 0, 6, 128, 0, "砂岩の階段");
			             break;
			             
			             case "7":
				     $this->CraftSystem($sender, $args[1], 179, 0, 6, 180, 0, "赤砂岩の階段");
			             break;
			             
			             case "8":
				     $this->CraftSystem($sender, $args[1], 5, 1, 6, 134, 0, "マツの木の階段");
			             break;
			             
			             case "9":
				     $this->CraftSystem($sender, $args[1], 5, 2, 6, 135, 0, "シラカバの木の階段");
			             break;
			             
			             case "10":
			             $this->CraftSystem($sender, $args[1], 5, 3, 6, 136, 0, "ジャングルの木の階段");
			             break;
			             
			             case "11":
				     $this->CraftSystem($sender, $args[1], 5, 4, 6, 163, 0, "アカシアの木の階段");
			             break;
			             
			             case "12":
				     $this->CraftSystem($sender, $args[1], 5, 5, 6, 164, 0, "ダークオークの木の階段");
			             break;
			             
			             case "13":
				     $this->CraftSystem($sender, $args[1], 155, 0, 6, 156, 0, "クォーツブロックの階段");
			             break;
			             
			             case "14":
				     $this->CraftSystem($sender, $args[1], 201, 0, 6, 203, 0, "プルプァブロックの階段");
			             break;
			             
			             case "15":
				     $this->CraftSystem($sender, $args[1], 5, 0, 3, 158, 0, "オークの木のハーフ");
			             break;
			             
			             case "16":
			             $this->CraftSystem($sender, $args[1], 5, 1, 3, 158, 1, "マツの木のハーフ");
				     break;
			             
			             case "17":
			             $this->CraftSystem($sender, $args[1], 5, 2, 3, 158, 2, "シラカバの木のハーフ");
			             break;
			             
			             case "18":
			             $this->CraftSystem($sender, $args[1], 5, 3, 3, 158, 3, "ジャングルの木のハーフ");
			             break;
			                
			             case "19":
			             $this->CraftSystem($sender, $args[1], 5, 4, 3, 158, 4, "アカシアの木のハーフ");
			             break;
			                   
			             case "20":
			             $this->CraftSystem($sender, $args[1], 5, 5, 3, 158, 5, "ダークオークの木のハーフ");
			             break;
			              
			             case "21":
			             $this->CraftSystem($sender, $args[1], 98, 0, 3, 45, 5, "石レンガのハーフ");
			             break;
			             
			             case "22":
			             $this->CraftSystem($sender, $args[1], 45, 0, 3, 44, 4, "レンガブロックのハーフ");
			             break;
			             
			             case "23":
			             $this->CraftSystem($sender, $args[1], 155, 0, 3, 44, 6, "クォーツブロックのハーフ");
			             break;
					     
				     case "24":
				     $this->CraftSystem($sender, $args[1], 336, 0, 4, 45, 0, "レンガブロック");
			             break;
					   
				     case "25":
				     $this->CraftSystem2($sender, $args[1], 86, 0, 1, 50, 0, 1, 91, 0, "ジャック・オ・ランタン");
				     break;
						
				     case "26":
				     $this->CraftSystem($sender, $args[1], 336, 0, 3, 390, 0, "植木鉢");
				     break;
				     
				     case "31":
			             $this->CraftSystem($sender, $args[1], 265, 0, 9, 42, 0, "鉄ブロック");
			             break;
					     
				     case "32":
				     $this->CraftSystem($sender, $args[1], 266, 0, 9, 41, 0, "金ブロック");
			             break;
						
				     case "33":
				     $this->CraftSystem($sender, $args[1], 331, 0, 9, 152, 0, "レッドストーンブロック");
			             break;
						
				     case "34":
				     $this->CraftSystem($sender, $args[1], 386, 0, 9, 133, 0, "エメラルドブロック");
				     break;
					
				     case "35":
				     $this->CraftSystem($sender, $args[1], 351, 4, 9, 22, 0, "ラピスラズリブロック");
				     break;
						
				     case "36":
				     $this->CraftSystem($sender, $args[1], 263, 0, 9, 173, 0, "石炭ブロック");
				     break;
							
				     case "38":
				     $this->CraftSystem($sender, $args[1], 5, 0, 8, 17, 0, "オークの原木");
			             break;
			             
			             case "39":
			             $this->CraftSystem($sender, $args[1], 5, 1, 8, 17, 1, "マツの木の原木");
				     break;
			             
			             case "40":
			             $this->CraftSystem($sender, $args[1], 5, 2, 8, 17, 2, "シラカバの原木");
			             break;
			             
			             case "41":
			             $this->CraftSystem($sender, $args[1], 5, 3, 8, 17, 3, "ジャングルの原木");
			             break;
			                
			             case "42":
			             $this->CraftSystem($sender, $args[1], 5, 4, 8, 162, 0, "アカシアの原木");
			             break;
			                   
			             case "43":
			             $this->CraftSystem($sender, $args[1], 5, 5, 8, 162, 1, "ダークオークの原木");
			             break;
						
				     case "44":
			             $this->CraftSystem($sender, $args[1], 237, 0, 3, 236, 0, "白色のコンクリート");
			             break;
						
				     case "45":
			             $this->CraftSystem($sender, $args[1], 237, 8, 3, 236, 8, "薄灰色のコンクリート");
			             break;
						
				     case "46":
			             $this->CraftSystem($sender, $args[1], 237, 7, 3, 236, 7, "灰色のコンクリート");
			             break;
			                
				     case "47":
			             $this->CraftSystem($sender, $args[1], 237, 15, 3, 236, 15, "黒色のコンクリート");
			             break;
						
				     case "48":
			             $this->CraftSystem($sender, $args[1], 237, 12, 3, 236, 12, "茶色のコンクリート");
			             break;
						
				     case "49":
			             $this->CraftSystem($sender, $args[1], 237, 14, 3, 236, 14, "赤色のコンクリート");
			             break;
						
				     case "50":
			             $this->CraftSystem($sender, $args[1], 237, 1, 3, 236, 1, "オレンジ色のコンクリート");
			             break;
						
				     case "51":
			             $this->CraftSystem($sender, $args[1], 237, 4, 3, 236, 4, "黄色のコンクリート");
			             break;
						
				     case "52":
			             $this->CraftSystem($sender, $args[1], 237, 5, 3, 236, 5, "黄緑色のコンクリート");
			             break;
			                
				     case "53":
			             $this->CraftSystem($sender, $args[1], 237, 13, 3, 236, 13, "緑色のコンクリート");
			             break;
						
				     case "54":
			             $this->CraftSystem($sender, $args[1], 237, 9, 3, 236, 9, "水色のコンクリート");
			             break;
						
				     case "55":
			             $this->CraftSystem($sender, $args[1], 237, 3, 3, 236, 3, "空色のコンクリート");
			             break;
						
				     case "56":
			             $this->CraftSystem($sender, $args[1], 237, 11, 3, 236, 11, "青色のコンクリート");
			             break;
			                
				     case "57":
			             $this->CraftSystem($sender, $args[1], 237, 10, 3, 236, 10, "紫色のコンクリート");
			             break;
						
				     case "58":
			             $this->CraftSystem($sender, $args[1], 237, 2, 3, 236, 2, "赤紫色のコンクリート");
			             break;
						
				     case "59":
			             $this->CraftSystem($sender, $args[1], 237, 6, 3, 236, 6, "ピンク色のコンクリート");
			             break;
						
			             case "list":
			             if(!isset($args[1])){
			                 $sender->sendMessage("§cuse: /craft list <ページ数>");
					 $sender->sendMessage("§a<クラフト可能アイテム一覧>  <1/9>");
			                 $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                 $sender->sendMessage("| オークの木の階段 | 木材×6 | 1 |");
			                 $sender->sendMessage("| 石の階段 | 丸石×6 | 2 |");
			                 $sender->sendMessage("| レンガの階段 | レンガブロック×6 | 3 |");
			                 $sender->sendMessage("| 石レンガの階段 | 石レンガブロック×6 | 4 |");
			                 $sender->sendMessage("| レザーレンガの階段 | 暗黒レンガブロック×6 | 5 |");
			                 $sender->sendMessage("| 砂岩の階段 | 砂岩×6 | 6 |");
			                 $sender->sendMessage("| 赤砂岩の階段 | 赤砂岩×6 | 7 |"); 
			             }else{
			                 switch($args[1]){
			                     case "1":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <1/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| オークの木の階段 | 木材×6 | 1 |");
			                     $sender->sendMessage("| 石の階段 | 丸石×6 | 2 |");
			                     $sender->sendMessage("| レンガの階段 | レンガブロック×6 | 3 |");
			                     $sender->sendMessage("| 石レンガの階段 | 石レンガブロック×6 | 4 |");
			                     $sender->sendMessage("| レザーレンガの階段 | 暗黒レンガブロック×6 | 5 |");
			                     $sender->sendMessage("| 砂岩の階段 | 砂岩×6 | 6 |");
			                     $sender->sendMessage("| 赤砂岩の階段 | 赤砂岩×6 | 7 |");
			                     break;
			                     
			                     case "2":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <2/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| マツの木の階段 | マツの木材×4 | 8 |");
			                     $sender->sendMessage("| シラカバの木の階段 | シラカバの木材×6 | 9 |");
			                     $sender->sendMessage("| ジャングルの木の階段 | ジャングルの木材×6 | 10 |");
			                     $sender->sendMessage("| アカシアの木の階段 | アカシアの木材×6 | 11 |");
			                     $sender->sendMessage("| ダークオークの木の階段 | ダークオーの木材×6 | 12 |");
			                     $sender->sendMessage("| クォーツブロックの階段 | ネザー水晶×6 | 13 |");
			                     $sender->sendMessage("| プルプァブロックの階段 | プルプァブロック×6 | 14 |");
			                     break;
			                     
			                     case "3":
			                     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <3/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
			                     $sender->sendMessage("| オークの木のハーフ | オークの木材×3 | 15 |");
			                     $sender->sendMessage("| マツの木のハーフ | マツの木材×3 | 16 |");
			                     $sender->sendMessage("| シラカバの木のハーフ | シラカバの木材×3 | 17 |");
			                     $sender->sendMessage("| ジャングルの木のハーフ | ジャングルの木材×3 | 18 |");
			                     $sender->sendMessage("| アカシアの木のハーフ | アカシアの木材×3 | 19 |");
			                     $sender->sendMessage("| ダークオークの木のハーフ | ダークオークの木材×3 | 20 |");
			                     $sender->sendMessage("| 石レンガのハーフ | 石レンガ×3 | 21 |");
			                     $sender->sendMessage("| レンガブロックのハーフ | レンガブロック×3 | 22 |");
			                     $sender->sendMessage("| クォーツブロックのハーフ | クォーツブロック×3 | 23 |");
			                     break;
					     
					     case "4":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <4/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
				             $sender->sendMessage("| レンガブロック | レンガ×4 | 24 |");
					     $sender->sendMessage("| ジャック・オ・ランタン | かぼちゃ×1 松明×1 | 25 |");
					     $sender->sendMessage("| 植木鉢 | レンガ×3 | 26 |");
					     $sender->sendMessage("| 未設定 | - | 27 |");
					     $sender->sendMessage("| 未設定 | - | 28 |");
					     $sender->sendMessage("| 未設定 | - | 29 |");
				             $sender->sendMessage("| 未設定 | - | 30 |");
					     break;
							 
					     case "5":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <5/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
				             $sender->sendMessage("| 鉄ブロック | 鉄インゴット×9 | 31 |");
					     $sender->sendMessage("| 金ブロック | 金インゴット×9 | 32 |");
					     $sender->sendMessage("| レッドストーンブロック | レッドストーン×9 | 33 |");
					     $sender->sendMessage("| エメラルドブロック | エメラルド×9 | 34 |");
					     $sender->sendMessage("| ラピスラズリブロック | ラピスラズリ×9 | 35 |");
					     $sender->sendMessage("| 石炭ブロック | 石炭×9 | 36 |");
				             $sender->sendMessage("| 未設定 | - | 37 |");
					     break;
							 
					     case "6":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <6/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
					     $sender->sendMessage("| オークの原木 | オークの木材×8 | 38 |");
			                     $sender->sendMessage("| マツの原木 | マツの木材×8 | 39 |");
			                     $sender->sendMessage("| シラカバの原木 | シラカバの木材×8 | 40 |");
			                     $sender->sendMessage("| ジャングルの原木 | ジャングルの木材×8 | 41 |");
			                     $sender->sendMessage("| アカシアのの原木 | アカシアの木材×8 | 42 |");
			                     $sender->sendMessage("| ダークオークの原木 | ダークオークの木材×8 | 43 |");
					     break;
							 
					     case "7":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <7/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
					     $sender->sendMessage("| 白色のコンクリート | 白色のコンクリート パウダー×3 | 44 |");
			                     $sender->sendMessage("| 薄灰色のコンクリート| 薄灰色のコンクリート　パウダー×3 | 45 |");
			                     $sender->sendMessage("| 灰色のコンクリート | 灰色のコンクリート　パウダー×3 | 46 |");
			                     $sender->sendMessage("| 黒色のコンクリート | 黒色のコンクリート　パウダー×3 | 47 |");
			                     $sender->sendMessage("| 茶色のコンクリート　| 茶色のコンクリート　パウダー×3 | 48 |");
			                     $sender->sendMessage("| 赤色のコンクリート | 赤色のコンクリート　パウダー×3 | 49 |");
					     break;
							 
					     case "8":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <8/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
					     $sender->sendMessage("| オレンジ色のコンクリート | オレンジ色のコンクリート パウダー×3 | 50 |");
			                     $sender->sendMessage("| 黄色のコンクリート| 黄色のコンクリート　パウダー×3 | 51 |");
			                     $sender->sendMessage("| 黄緑色のコンクリート | 黄緑色のコンクリート　パウダー×3 | 52 |");
			                     $sender->sendMessage("| 緑色のコンクリート | 緑色のコンクリート　パウダー×3 | 53 |");
			                     $sender->sendMessage("| 水色のコンクリート　| 水色のコンクリート　パウダー×3 | 54 |");
			                     $sender->sendMessage("| 空色のコンクリート | 空色のコンクリート　パウダー×3 | 55 |");
					     break;
							 
					     case "9":
					     $sender->sendMessage("§a<クラフト可能アイテム一覧>  <9/9>");
			                     $sender->sendMessage("§a| アイテム名 | 使用アイテム | クラフトID |");
					     $sender->sendMessage("| 青色のコンクリート | 青色のコンクリート パウダー×3 | 56 |");
			                     $sender->sendMessage("| 紫色のコンクリート| 紫色のコンクリート　パウダー×3 | 57 |");
			                     $sender->sendMessage("| 赤紫色のコンクリート | 赤紫色のコンクリート　パウダー×3 | 58 |");
			                     $sender->sendMessage("| ピンクのコンクリート | ピンクのコンクリート　パウダー×3 | 59 |");
			                     $sender->sendMessage("| 未設定 | - | 60 |");
			                     $sender->sendMessage("| 未設定 | - | 61 |");
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
				     if($sender->getInventory()->canAddItem($getitem)){
					     $sender->getInventory()->removeItem($item);
			                     $sender->getInventory()->addItem($getitem);
			                     $sender->sendMessage("[§eCraft§f] {$itemName}を{$args}個 クラフトしました！");
				     }else{
					     $sender->sendMessage("[§eCraft§f] インベントリの空きが不足しています");
				     }
		             }else{
			             $sender->sendMessage("[§eCraft§f] 指定したアイテムをクラフトするのに必要なアイテムが不足しています");
		             }
	             }else{
		             $sender->sendMessage("[§eCraft§f] 個数は整数で指定してください");
	             }
	     }else{
		     $sender->sendMessage("use: /carft <クラフトID> <個数>");
	     }
     }
		
     public function CraftSystem2(Player $sender, $args, $UseID, $UseDamage, $UseCount, $UseID2, $UseDamage2, $UseCount2, $GetID, $GetDamage, $itemName){
	     if(isset($args)){
		     if(is_numeric($args) && $args >= 0){
			     $item = Item::get($UseID, $UseDamage, $UseCount * $args);
			     $item2 = Item::get($UseID2, $UseDamage2, $UseCount2 * $args);
		             $getitem = Item::get($GetID, $GetDamage, $args);
			     if($sender->getInventory()->contains($item) && $sender->getInventory()->contains($item2)){
				     if($sender->getInventory()->canAddItem($getitem)){
					     $sender->getInventory()->removeItem($item);
				             $sender->getInventory()->removeItem($item2);
			                     $sender->getInventory()->addItem($getitem);
			                     $sender->sendMessage("[§eCraft§f] {$itemName}を{$args}個 クラフトしました！");
				     }else{
					     $sender->sendMessage("[§eCraft§f] インベントリの空きが不足しています");
				     }
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
