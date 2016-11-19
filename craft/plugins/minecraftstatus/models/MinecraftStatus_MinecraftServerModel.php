<?php 

namespace Craft;
use MinecraftServerStatus\MinecraftServerStatus;

//I really don't care how this is loaded, I just need it loaded
require dirname(__DIR__).'/lib/MinecraftServerStatus.php';

class MinecraftStatus_MinecraftServerModel extends BaseModel {
    protected function defineAttributes() {
        return [
            'serverName' => [AttributeType::String, 'default' => false],
            'serverIP' => [AttributeType::String, 'default' => false],
            'serverPort' => [AttributeType::Number, 'default' => false],
        ];
    }

    public function validate($attributes = null, $clearErrors = true) {
        parent::validate($attributes, $clearErrors);
    }

    //Returns the Minecraft Server status
    public function getQuery() {
        return MinecraftServerStatus::query($this->serverIP, $this->serverPort);
    }
}