<?php

return PhpCsFixer\Config::create()
    ->setUsingCache(false)
    ->setRules(array(
        '@PSR2' => true,
        'full_opening_tag' => true,
    ))
    ->setFinder(PhpCsFixer\Finder::create()
                    ->in(__DIR__));


/*

–dry-run – pozwala na sprawdzenie błędów bez modyfikacji plików. Na końcu zostanie wyświetlona lista plików, które bez tego parametru, zostałby by naprawione.

–level – możemy zdecydować na jakim poziomie PHP-CS-Fixer sprawdzi nasz kod. Do dyspozycji są cztery poziomy: psr0, psr1, psr2, symfony.

–verbose – obok nazwy pliku wyświetli się lista błędów, które zostały naprawione (wymienione kolejno po przecinku)

–fixers – pozwala określić listę błędów, które mają zostać naprawione (lista dostępnych błędów w dokumentacji). W ten sposób możemy sami zdecydować co konkretnie ma zostać naprawione.


php-cs-fixer fix . --level=psr2 --dry-run
*/