<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectionnerMois':{
            $moisTab = $pdo->getLesMoisDisponibles($idVisiteur);
            include ("vues/v_listeMois.php");
                        break;
        }
        case 'validerConsultationFrais':{
            $mois=$_POST['listeMois'];
            echo $mois;
            $infoFrais = $pdo->getLesInfosFicheFrais($idVisiteur,$mois);
            $fraisHF = $pdo->getLesFraisHorsForfait($idVisiteur,$mois);
            $fraisForfait = $pdo->getLesFraisForfait($idVisiteur, $mois);
            $moisTab = $pdo->getLesMoisDisponibles($idVisiteur);
            include ("vues/v_listeMois.php");
            include ("vues/v_etatFrais.php");
            
                        break;
        }
}