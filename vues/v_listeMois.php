<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" action="index.php?uc=etatFrais&action=validerConsultationFrais">
            <label>Mois :</label>
            <select name="listeMois">
               <?php
               foreach ($moisTab as $ligne){
                   echo '<option value ='.$ligne['mois'].'>'.$ligne['numMois'].'/'.$ligne['numAnnee'].'</option>';
                }       
                ?>
            </select>
            </br></br>
            <input type="submit"id="btnVal" href=""></input>
            <input type="reset"id="btnAnnul" href=""></input>
        </form>
        
    </body>
</html>
