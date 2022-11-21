<?php
if(isset($_GET['p'])){
    
    
    switch($_GET['p']){
        case 'acc':
            include "./pages/acceuil.php";
            break;
        case 'hist':
            include './pages/histoire.php';
            break;
        case 'stand':
            include './pages/standard.php';
            break;
        case 'tene':
            include './pages/tenerife.php';
            break;
        case 'gran':
            include './pages/grancanaria.php';
                break;
        case 'maj':
            include './pages/majorero.php';
                break;
        case 'mine':
            include './pages/lem1.php';
                break;
        
        default:
                include "./pages/acceuil.php";
    } 
}else{
        include "./pages/acceuil.php";
    }
    
?>