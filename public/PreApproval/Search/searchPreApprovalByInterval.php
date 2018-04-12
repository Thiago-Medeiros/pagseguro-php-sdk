<?php

require '../../bootstrap.php';

/*
 * Permite o acesso aos dados de todas as assinaturas que tiveram algum tipo de notificação dentro de um intervalo de
 * tempo (em dias) definido.
 */
try {
    $response = \PagSeguro\Services\PreApproval\Search\Interval::search(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        /** @var integer $days */
        $days
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
