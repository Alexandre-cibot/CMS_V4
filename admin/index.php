<?php
chdir($rootDir = dirname(__DIR__));
require_once "init.php";
$action = '';
if (isset($_GET['a'])) {
    $action = $_GET['a'];
}
//$action = $_GET['a'] ?? ''; // php 7
$page = new \Controller\PageController($pdo);
switch ($action) {
    case 'ajouter':
        $page->ajoutAction();
        break;
    case 'details':
        $page->detailsAction();
        break;
    case 'modifier':
        $page->modifierAction();
        break;
    case 'supprimer':
        $page->supprimerAction();
        break;
    default:
        $page->listeAction();
        break;
}