<?php
switch ($vd->getSottoPagina()) {
    case 'anagrafica':
        include_once 'anagrafica.php';
        break;

    case 'elencoFilm':
        include_once 'elencoFilm.php';
        break;
    
    case 'crea_film':
        include_once 'crea_film.php';
        break;

        ?>


<?php default: ?>
<h2>Pannello di Controllo</h2>
<p id="benv">
Benvenuto, <?= $user->getNome() ?>
</p>
<p>
Scegli una fra le seguenti sezioni:
</p>
<ul class="panel" id="panel"> 
<li><a id="anagraficaa" href="gestore/anagrafica">Anagrafica</a></li>
<li><a id="filmm" href="gestore/film">Film</a></li>
</ul>
<?php
        break;
}
?>
