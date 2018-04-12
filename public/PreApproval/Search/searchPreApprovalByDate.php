<?php

require '../../bootstrap.php';

/*
 * Obtém os dados das assinaturas dado um intervalo de datas.
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
    'final_date' => $finalDate,
    'page' => $page,
    'max_per_page' => $maxPerPage,
];

try {
    $response = \PagSeguro\Services\PreApproval\Search\Date::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        $options
    );

    echo "<pre>";
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
