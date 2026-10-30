<?php
// TODO 25: valida o formato de um e-mail.
function validarEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

// TODO 26 (bônus): remove espaços no início e no fim do texto.
function limparTexto($texto) {
    return trim((string) $texto);
}
