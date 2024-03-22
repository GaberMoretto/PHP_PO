<?php

$emails = [
    "john@gmail.com",
    "ozzy@gmail.com",
    "zakk@gmail.com",
    "tommy@gmasdfsailcom"
];

/**
 * O filter_var serve para validar se todos os dados dentro do array é
 * um email ou não
 */
var_dump(filter_var($emails, FILTER_VALIDATE_EMAIL, FILTER_REQUIRE_ARRAY));
?>