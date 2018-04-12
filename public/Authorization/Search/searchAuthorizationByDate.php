<?php

require '../../bootstrap.php';

/*
 * Através desta consulta você poderá verificar todas as autorizações atreladas a sua aplicação dentro de um
 * determinado período. Para isso deve ser informado o range de data da consulta com o intervalo máximo de 90 dias.
 */

/**
 * Formato: Y-m-dTH:i
 *
 * @var string $initialDate
 */
$initialDate = INITIAL_DATE;
/**
 * Formato: Y-m-dTH:i
 *
 * @var string $finalDate
 */
$finalDate = FINAL_DATE;

/** @var integer $page */
$page = PAGE;

/** @var integer $maxPerPage */
$maxPerPage = MAX_PER_PAGE;

$options = [
    'initial_date' => $initialDate,
    'final_date'   => $finalDate,
    'page'         => $page,
    'max_per_page' => $maxPerPage,
];

try {
    $response = \PagSeguro\Services\Application\Search\Date::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        $options
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
