

<?php

try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=Boutique;charset=utf8', 'root', 'admin');
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}

   $reponse = $bdd->query('SELECT * 
   FROM produit');
?>
<div class="container">
         
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>N°</th>
        <th>product name</th>
        <th>price</th>
        <th>image</th>
        
      </tr>
    </thead>


<?php
while ($donnees = $reponse->fetch()) {
?>


<p>
   <td><?=$donnees['id']?></td>
   <td><?=$donnees['product_name']?></td>
   <td><?=$donnees["price"]?></td>
   <td><?=$donnees['image']?></td> 
   </tr>
   </tbody>
 
</div>
    <?php
}
$reponse->closeCursor();
?>
</table>