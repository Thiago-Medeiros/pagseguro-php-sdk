<?php

require '../bootstrap.php';

/*
 * A API de Notificações pode lhe enviar mensagens a cada mudança de status ocorrida em alguma recorrência.
 *
 * Para consultar os dados da recorrência em questão, utilize este método
 */

/** Página na qual se quer observar os resultados
 *
 * @var integer $page
 */
$page = PAGE;

/**
 * Número máximo de registros por página
 *
 * @var integer $maxPageResults
 */
$maxPageResults = MAX_PAGE_RESULTS;

/**
 * Quantidade de dias de intervalo Formato: Inteiro até 30
 *
 * @var integer $interval
 */
$interval = INITIAL_DATE;

$queryNotification = new \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification(
    $page,
    $maxPageResults,
    $interval
);

try {
    $response = $queryNotification->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
