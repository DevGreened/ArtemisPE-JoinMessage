<?php


declare(strict_types=1);

namespace Void2Stepping\JoinMessage;

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;

use pocketmin\event\player\PlayerJoinEvent;

class main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("APJoinMessage by Void has been enabled");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);

    }
    public function onJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $lines = [
            "-----------ArtemisPE------------",
            "&fWelcome to &3Artemis Factions",
            "",
            "> Vote: https://bit.ly/30ZeHKp",
            "> Store: Coming Soon",
            "",
            "------------ArtemisPE-------------"
        ];
        $player->sendMessage(implode("\n", $lines));
    }

    public function onQuit(PlayerQuitEvent $event)
    {
        $player = $this->getServer()->getPlayer();
        if (!$player->isOp())
        {
            $event->setQuitMessage( quitMessage TextFormat :: RED . "The Staff-Member" . $player . TextFormat ::BLUE . "left the server");
            {
            else
                {
                    $event->setQuitMessage( quitMessage TextFormat::GREEN . "The Player" . $player . TextFormat::AQUA . "left the server");
                }
            }
        }

    }
    public function onDisable()
    {
        $this->getLogger()->info("APJoinMesssage by Void has been disabled.");
    }
}
