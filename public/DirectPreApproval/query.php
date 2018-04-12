<?php

require '../bootstrap.php';

/*
 * Esta consulta possibilita o acesso aos dados de todas as recorrências criadas dentro do intervalo de datas fornecido
 * como parâmetro. Note que a consulta não retorna resultados para datas anteriores a 6 (seis) meses da data atual.
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
 * Data inicial do intervalo. Formato: YYYY-MM-DDThh:mm:ss.sTZD, o formato oficial do W3C para datas.
 *
 * @var string $initialDate
 */
$initialDate = INITIAL_DATE;

/**
 * Data final do intervalo. Formato: YYYY-MM-DDThh:mm:ss.sTZD, o formato oficial do W3C para datas.
 *
 * @var string $finalDate
 */
$finalDate = FINAL_DATE;

$queryPreApproval = new \PagSeguro\Domains\Requests\DirectPreApproval\Query(
    $page,
    $maxPageResults,
    $initialDate,
    $finalDate
);

try {
    $response = $queryPreApproval->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
