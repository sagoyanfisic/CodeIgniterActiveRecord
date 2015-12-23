<?= form_open('/codigofacilito/recibirdatos') ?>

<?php
   $nomre = array(
       'name' => 'nombre',
       'placeholder' => 'Escribe tu nombre'
   );
    $videos = array(
    'name' => 'videos',
    'placeholder' => 'cantidad de video'
);


?>
<label>
    Nombre :
    <?= form_input($nomre) ?>
</label>
<br><br>
<label>
Número de vídeos :
    <?= form_input($videos) ?>
</label>
<br><br>x
<?= form_submit('','Subir curso') ?>
<?= form_close() ?>
</body>
</html>