<?php 
if(isset($_GET['p'])){
    
    
    switch($_GET['p']){
        case 'form':
            include "contact.php";
            break;
        case 'cult':
            include 'culture.php';
            break;
        case 'gal':
            include 'galerie.php';
            break;
        case 'geo':
            include 'geographie.php';
            break;
        case 'hist':
            include 'histoire.php';
                break;
        case 'link':
            include 'lien.php';
                break;
        
        default:
                include "acceuil.php";
    } 
}else{
        include "acceuil.php";
    }
    
    