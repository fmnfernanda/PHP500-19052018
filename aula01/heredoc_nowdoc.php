<?php

//heredoc

$nome = 'Fernanda';

$frase = <<< TXT
Meu nome é {$nome} e eu tenho 34 anos, trabalho com UNIX na T4F.
TXT;

echo $frase;

echo '<hr>';

//nowdoc

$nome = 'Fernanda';

$frase = <<< 'TXT'
Meu nome é {$nome} e eu tenho 34 anos, trabalho com UNIX na T4F.
TXT;

echo $frase;
