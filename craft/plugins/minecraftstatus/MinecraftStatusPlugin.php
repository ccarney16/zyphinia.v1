<?php 

namespace Craft;

class MinecraftStatusPlugin extends BasePlugin {
    function getName() {
        return Craft::t('Minecraft Status');
    }

    function getVersion() {
        return '0.1';
    }

    function getDeveloper() {
        return 'Cameron Carney & Other';
    }

    function getDeveloperUrl() {
        return 'https://zyphinia.cf/';
    }
}