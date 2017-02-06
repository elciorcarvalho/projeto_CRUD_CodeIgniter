<?php
/**
*
*Este arquivo será a visão, 
*uma página no formato HTML que 
*fará a interface com o usuário (apresentação).
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title><?php echo $titulo; ?></title>
    <meta charset="UTF-8" />
</head>
<body>
   <?php echo form_open('pessoas/inserir', 'id="form-pessoas"'); ?>

   <label for="nome">Nome: </label><br>
   <input type="text" name="nome" value="<?php echo set_value('nome') ?>">
   <div class="error"><?php echo form_error('nome') ?></div>
   <label for="email">Email: </label><br>
   <input type="text" name="email" value="<?php echo set_value('email'); ?>">
   <div class="error"><?php echo form_error('email'); ?></div>
   <input type="submit" name="cadastrar" value="Cadastrar">

   <?php echo form_close(); ?>
</body>
</html>