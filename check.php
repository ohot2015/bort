<?php 
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $data = Yaml::parseFile('config.yaml');
    if ($data['users'][$_COOKIE['id']]['user_hash'] ===  $_COOKIE['hash']
        && !empty($data['users'][$_COOKIE['id']]['user_hash'])
        && !empty($data['users'][$_COOKIE['id']])) {

        if(isset($_POST['data_landing'])) {
            $data['data_landing'] = $_POST['data_landing'];
            $yaml = Yaml::dump($data);
            file_put_contents('config.yaml', $yaml);
        }
        if(!empty($_POST['exit'])) {
            setcookie("id", "", time() - 3600*24*30*12, "/");
            setcookie("hash", "", time() - 3600*24*30*12, "/");
            header("Location: login.php"); exit();
        }
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        echo $twig->render('admin.html.twig',  ['data' => $data['data_landing']]);
    }
    else {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
        header("Location: login.php"); exit();
    }
}
else
{
    header("Location: login.php"); exit();
}
?>