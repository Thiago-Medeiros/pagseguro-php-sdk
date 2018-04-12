<?php

require '../bootstrap.php';

/*
 * A cada intervalo de recorrência nos planos automáticos, o PagSeguro irá gerar uma Ordem de Pagamento. Ela indica a
 * necessidade de cobrança da próxima parcela. Na data de vencimento da ordem de pagamento, será gerada uma Transação,
 * que é a cobrança dessa ordem.
 *
 * Se a transação for bem sucedida, a Ordem de Pagamento fica com o status 5 (Paga). Caso contrário, podem ser geradas
 * novas tentativas de cobrança, através de novas Transações, dentro da mesma Ordem de Pagamento.
 *
 * Com este método é possível verificar todas as Ordens de Pagamento geradas para uma adesão, bem como as Transações
 * associadas a cada Ordem de Pagamento. A partir destes dados pode-se verificar se as cobranças foram efetuadas ou
 * não, e por qual motivo.
 */

/**
 * Representa um código de ordem de pagamento na assinatura em questão.
 *
 * @var string $preApprovalCode
 */
$preApprovalCode = PRE_APPROVAL_CODE;
/** Status em que se encontra a ordem de pagamento.
 *
 * @var integer $status
 */
$status = STATUS;

$queryPreApproval = new \PagSeguro\Domains\Requests\DirectPreApproval\QueryPaymentOrder($preApprovalCode, $status);

try {
    $response = $queryPreApproval->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
