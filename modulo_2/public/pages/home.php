<a href="?page=create_user">Cadastrar user</a>

<h2>Página inicial</h2>

<?php echo get('message'); ?>

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Sobrenome</th>
      <th>Email</th>
      <th></th>
      <th></th>
    </tr>
  </thead>

  <tbody>
    <?php
        $users = all('users');
foreach ($users as $user) {
    ?>

    <tr>
      <td><?php echo $user->id; ?></td>
      <td><?php echo $user->nome; ?></td>
      <td><?php echo $user->sobrenome; ?></td>
      <td><?php echo $user->email; ?></td>
      <td>
        <a href="?page=edit_user&id=<?php echo $user->id; ?>" class="btn btn-success">
            Editar
        </a>
      </td>
      <td>
        <a href="?page=delete_user&id=<?php echo $user->id; ?>" class="btn btn-danger">
            Deletar
        </a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
