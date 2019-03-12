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
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(336, 0, 4 * $args[1]);
			                    $getitem = Item::get(45, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("レンガブロックを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "2":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 0, 6 * $args[1]);
			                    $getitem = Item::get(53, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("オークの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "3":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(4, 0, 6 * $args[1]);
			                    $getitem = Item::get(67, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("石の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "4":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(45, 0, 6 * $args[1]);
			                    $getitem = Item::get(108, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("レンガの階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "5":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(98, 0, 6 * $args[1]);
			                    $getitem = Item::get(109, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("石レンガの階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "6":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(112, 0, 6 * $args[1]);
			                    $getitem = Item::get(114, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("ネザーレンガの階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "7":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(24, 0, 6 * $args[1]);
			                    $getitem = Item::get(128, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("砂岩の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "8":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(179, 0, 6 * $args[1]);
			                    $getitem = Item::get(180, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("赤砂岩の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "9":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 1, 6 * $args[1]);
			                    $getitem = Item::get(134, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("マツの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "10":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 2, 6 * $args[1]);
			                    $getitem = Item::get(135, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("シラカバの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "11":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 3, 6 * $args[1]);
			                    $getitem = Item::get(136, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("ジャングルの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "12":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 4, 6 * $args[1]);
			                    $getitem = Item::get(163, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("アカシアの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "13":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 5, 6 * $args[1]);
			                    $getitem = Item::get(164, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("ダークオークの木の階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "14":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(155, 0, 6 * $args[1]);
			                    $getitem = Item::get(156, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("クォーツブロックの階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "15":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(201, 0, 6 * $args[1]);
			                    $getitem = Item::get(203, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("プルプァブロックの階段を{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "16":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 0, 3 * $args[1]);
			                    $getitem = Item::get(158, 0, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("オークの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "17":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 1, 3 * $args[1]);
			                    $getitem = Item::get(158, 1, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("マツの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "18":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 2, 3 * $args[1]);
			                    $getitem = Item::get(158, 2, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("シラカバの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "19":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 3, 3 * $args[1]);
			                    $getitem = Item::get(158, 3, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("ジャングルの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			                
			             case "20":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 4, 3 * $args[1]);
			                    $getitem = Item::get(158, 4, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("アカシアの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			                   
			             case "21":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(5, 5, 3 * $args[1]);
			                    $getitem = Item::get(158, 5, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("ダークオークの木のハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			              
			             case "22":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(98, 0, 3 * $args[1]);
			                    $getitem = Item::get(44, 5, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("石レンガのハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "23":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(45, 0, 3 * $args[1]);
			                    $getitem = Item::get(44, 4, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("レンガブロックのハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
			             }else{
			                 $sender->sendMessage("use: /carft <クラフトID> <個数>");
			             }
			             break;
			             
			             case "24":
			             if(isset($args[1])){
			                 if(is_numeric($args[1]) && $args[1] >= 0){
			                    $item = Item::get(155, 0, 3 * $args[1]);
			                    $getitem = Item::get(44, 6, $args[1]);
			                    for ($id = 0; $id < $args[1]; $id++){
			                        if($sender->getInventory()->contains($item)){
			                            $sender->getInventory()->removeItem($item);
			                            $sender->getInventory()->addItem($getitem);
			                            $sender->sendMessage("クォーツブロックのハーフを{$args[1]}個 クラフトしました！");
			                        }else{
			                            $sender->sendMessage("指定したアイテムをクラフトするのに必要なアイテムが不足しています");
			                        }
			                        break;
			                    }
			                 }else{
			                     $sender->sendMessage("個数は整数で指定してください");
			                 }
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
			                     $sender->sendMessage("| マツの木のハーフ | マツの木材×4 | 9 |");
			                     $sender->sendMessage("| シラカバの木のハーフ | シラカバの木材×6 | 10 |");
			                     $sender->sendMessage("| ジャングルの木のハーフ | ジャングルの木材×6 | 11 |");
			                     $sender->sendMessage("| アカシアの木のハーフ | アカシアの木材×6 | 12 |");
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
			             $sender->sendMessage("そのクラフトIDは存在しません");
			             $sender->sendMessage("クラフトIDを/craft listで確かめてください");
			             break;
			         }
			     }
			 }else{
			     $sender->sendMessage("ゲーム内で実行してください");
			 }
		}
		return true;
     }
}
