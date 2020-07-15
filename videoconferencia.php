<?php
require("OpenTok/API_Config.php");
require("OpenTok/OpenTokArchive.php");
require("OpenTok/OpenTokSDK.php");
require("OpenTok/OpenTokSession.php");
$apiObj = new OpenTokSDK (API_Config::API_KEY, API_Config::API_SECRET) ;
// Configuramos el objeto
$session = $apiObj -> create_session() ;
$sessionId = $session -> getSessionId() ;
$token = $apiObj -> generate_token($sessionId) ;
?>