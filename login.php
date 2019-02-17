<?php 
require __DIR__ . '/VK/VK.php';
require __DIR__ . '/VK/VKException.php';
require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;
$data = Yaml::parseFile('config.yaml');

$vk_config = array(
    'app_id'        => '6857044',
    'api_secret'    => 'uaCQPufHXHEksvEoSdYm',
    'callback_url'  => 'http://bort.local/login.php',
    'api_settings'  => 'friends' // In this example use 'friends'.
    // If you need infinite token use key 'offline'.
);
try {
    $vk = new VK\VK($vk_config['app_id'], $vk_config['api_secret']);

    if (!isset($_REQUEST['code']) ) {
        /**
         * If you need switch the application in test mode,
         * add another parameter "true". Default value "false".
         * Ex. $vk->getAuthorizeURL($api_settings, $callback_url, true);
         */
        $authorize_url = $vk->getAuthorizeURL(
            $vk_config['api_settings'], $vk_config['callback_url']);

        echo '<a href="' . $authorize_url . '">Sign in with VK</a>';
    } else {

        $access_token = $vk->getAccessToken($_REQUEST['code'], $vk_config['callback_url']);
        $data = Yaml::parseFile('config.yaml');
        foreach ($data['users']  as $key => $uid) {
            if ($uid === $access_token['user_id'] ) {
                session_start ();
                $_SESSION['uid']          = $access_token['user_id'];
                $_SESSION['access_token'] = $access_token['access_token'];
                $_SESSION['expires_in'] = $access_token['expires_in'];

                header("Location: adminka.php"); exit();
            }
        }
    }
} catch (VK\VKException $error) {
    echo $error->getMessage();
}

?>
