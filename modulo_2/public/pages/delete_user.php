<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$deletado = delete('users', 'id', $id);

if ($deletado) {
    return redirectToHome();
}

flash('message', 'Error ao deletar');
redirectToHome();
