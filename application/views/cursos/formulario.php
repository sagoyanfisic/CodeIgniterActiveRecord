<?= form_open('/cursos/recibirdatos') ?>

<?php
   $nombre = array(
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
    <?= form_input($nombre) ?>
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