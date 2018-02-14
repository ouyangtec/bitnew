<?php

namespace Longman\TelegramBot\Commands\UserCommands;

use Longman\TelegramBot\Commands\UserCommand;
use Longman\TelegramBot\Request;
use Longman\TelegramBot\Entities\Keyboard;
use Longman\TelegramBot\Entities\KeyboardButton;
use Longman\TelegramBot\DB;
use PDO;

class GosellCommand extends UserCommand
{
    protected $name = 'gosell';                      // Your command's name
    protected $description = 'A command for gosell'; // Your command description
    protected $usage = '/gosell';                    // Usage of your command
    protected $version = '1.0.0';                  // Version of your command

    public function execute()
    {
        $message = $this->getMessage();            // Get Message object
        $chat_id = $message->getChat()->getId();   // Get the current Chat ID
        $data = getorder($chat_id,2,0);
   
        return Request::sendMessage($data);        // Send message!
    }
}

