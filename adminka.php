<?php 
require __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;
session_start ();
$data = Yaml::parseFile('config.yaml');
$count = 0;
foreach ($data['users']  as $key => $uid) {
    if (isset($_SESSION['uid']) && $uid === $_SESSION['uid']) {
        $count++;
        if(isset($_POST['data_landing'])) {
            $data['data_landing'] = $_POST['data_landing'];
            $yaml = Yaml::dump($data);
            file_put_contents('config.yaml', $yaml);
        }

        if(!empty($_POST['exit'])) {
            session_unset();
            header("Location: login.php"); exit();
        }
        $loader = new Twig_Loader_Filesystem('templates');
        $twig = new Twig_Environment($loader);
        echo $twig->render('admin.html.twig',  ['data' => $data['data_landing']]);
        break;
    }
}
if (!$count) {
    session_unset();
    header("Location: login.php"); exit();
}
?>