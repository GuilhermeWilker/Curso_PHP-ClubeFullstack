<?php echo get('message'); ?>


<form action="/pages/forms/create_user.php" method="post">
  <!--  -->
  <div class="form-group mt-3">
    <label for="">Nome</label>
    <input type="text" class="form-control" name="nome" placeholder="" />
  </div>

  <div class="form-group mt-3">
    <label for="">Sobrenome</label>
    <input type="text" class="form-control" name="sobrenome" placeholder="" />
  </div>

  <div class="form-group mt-3">
    <label for="">Email</label>
    <input type="text" class="form-control" name="email" placeholder="" />
  </div>

  <div class="form-group mt-3">
    <label for="">Password</label>
    <input type="text" class="form-control" name="password" placeholder="" />
  </div>

  <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
