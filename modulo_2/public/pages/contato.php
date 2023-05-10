
<h2 class='my-3'>Contato</h2>

<div class='my-4'>
<?php echo get('message'); ?>
</div>

<hr>

<form action="/pages/forms/contato.php" method="post">

  <div class="form-group">
    <label class="mt-2" for="name">Nome</label>
    <input name="name" type="text" class="form-control" placeholder="Digite seu nome.." />
  </div>

  <div class="form-group">
    <label class="mt-2" for="email">Email</label>
    <input name="email" type="email" class="form-control" placeholder="Digite seu email.." />
  </div>

  <div class="form-group">
    <label class="mt-2" for="subject">Assunto</label>
    <input
      name="subject"
      type="text"
      class="form-control"
      placeholder="Digite o assunto.."
    />
  </div>

  <div class="form-group">
    <label class="mt-2" for="message">Mensagem</label>
    <textarea
      name="message"
      class="form-control"
      cols="30"
      rows="10"
      placeholder="Digite sua mensagem.."
    ></textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-2">Enviar</button>
</form>
