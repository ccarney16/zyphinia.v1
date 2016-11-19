<?php 

namespace Craft;

class MinecraftStatus_MinecraftServerFieldType extends BaseFieldType {
    
    public function defineContentAttribute() {
        return [AttributeType::Mixed];
    }
    
    public function getName() {
        return Craft::t('Minecraft Server');
    }

    /**
    * @param string $name
    * @param mixed $value
    *
    * @return string
    */
    public function getInputHtml($name, $value) {
            return craft()->templates->render('minecraftstatus/_fieldtype/input', [
                'name' => $name,
                'value' => $value,
                'serverName' => isset($value['serverName']) ? $value['serverName'] : '',
                'serverIP' => isset($value['serverIP']) ? $value['serverIP'] : '',
                'serverPort' => isset($value['serverPort']) ? $value['serverPort'] : ''
            ]);
    }


    /**
    * @param mixed $value
    *
    * @return \Craft\MinecraftStatus_MinecraftServerModel|string
    */
    public function prepValue($value) {
        if (is_array($value)) {
            $link = new MinecraftStatus_MinecraftServerModel();
            
            $link->serverName = $value['serverName'];
            $link->serverIP = $value['serverIP'];
            $link->serverPort = $value['serverPort'];

            return $link;
        }

        return '';
    }
}