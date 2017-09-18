<?php 
if(isset($_GET['p'])){
    $p = $_GET['p'];
}else{
    $p = 'index';
}
ob_start();
if($p === 'index'){
    include('./index.php');
}
if($p === 'requete'){
    include('./Template/requete.php');
}

include('./index.php');
?>