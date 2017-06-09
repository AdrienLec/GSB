<table>
    <tr>
        <?php
            foreach($fraisForfait as $unFraisForfait){
                echo ('<td>'.$unFraisForfait['libelle'].'</td>');
            }
        ?>
    </tr><tr>
        <?php
            foreach($fraisForfait as $unFraisForfait){
                echo '<td>'.$unFraisForfait['quantite'].'</td>';
            }
        ?>
    </tr>
        
</table>
<table>
    <th>
    <td>date</td>
    <td>libelle</td>
    <td>montant</td>
    </th>
    <?php
    foreach($fraisHF as $unFraisHF){
        echo '<tr>';
        echo '<td>'.$unFraisHF['date'].'</td>';
        echo '<td>'.$unFraisHF['libelle'].'</td>';
        echo '<td>'.$unFraisHF['montant'].'</td>';
    }
    ?>
</table>
