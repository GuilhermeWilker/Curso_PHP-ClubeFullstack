<?php echo get('message'); ?>


<?php
  $user = find('users', 'id', $_GET['id']);

?>


<form action="/pages/forms/update_user.php" method="post">
  <input type="hidden" name="id" value="<?php echo $user->id; ?>">
  
  <div class="form-group mt-3">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="" value="<?php echo $user->nome; ?>"/>
  </div>

  <div class="form-group mt-3">
    <label for="">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" placeholder="" value="<?php echo $user->sobrenome; ?>"/>
  </div>

  <div class="form-group mt-3">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" placeholder="" value="<?php echo $user->email; ?>"/>
  </div>

  <div class="form-group mt-3">
    <label for="">Password</label>
    <input type="text" class="form-control" name="password" placeholder="" />
  </div>
  
  <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
  
</form>
