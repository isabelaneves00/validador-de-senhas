**Validador de Senhas em PHP**

Um validador de senhas é um programa que verifica se uma senha atende a determinados requisitos de segurança.

Neste exemplo, a senha precisa ter:

* Pelo menos 8 caracteres;
* Pelo menos uma letra maiúscula;
* Pelo menos uma letra minúscula;
* Pelo menos um número.

O PHP pode verificar essas condições usando `strlen()` e expressões regulares.

**Exemplo:**

```php
<?php

$senha = "Senha123";

if (strlen($senha) < 8) {
    echo "A senha deve ter pelo menos 8 caracteres.";
} elseif (!preg_match("/[A-Z]/", $senha)) {
    echo "A senha deve ter pelo menos uma letra maiúscula.";
} elseif (!preg_match("/[a-z]/", $senha)) {
    echo "A senha deve ter pelo menos uma letra minúscula.";
} elseif (!preg_match("/[0-9]/", $senha)) {
    echo "A senha deve ter pelo menos um número.";
} else {
    echo "Senha válida!";
}

?>
```

