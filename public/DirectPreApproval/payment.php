<?php

require '../bootstrap.php';

/*
 * Válido para plano charge=MANUAL
 *
 * Na data estipulada para cobrança, deve ser feita uma chamada a este serviço. Qualquer chamada que esteja divergente
 * das configurações do plano no qual a cobrança será efetuada - por exemplo, na data errada ou com outro valor - será
 * recusada.
 */

$plan = new \PagSeguro\Domains\Requests\DirectPreApproval\Payment();

/**
 * Código da recorrência obtido no método /pre-approvals.
 *
 * @var string $preApprovalCode
 */
$plan->setPreApprovalCode($preApprovalCode);

/**
 * Código/Identificador para fazer referência à recorrência em seu sistema.
 *
 * @var string $reference
 */
$plan->setReference($reference);

/**
 * Endereço de IP de origem da assinatura, relacionado ao assinante. Obrigatório se hash for nulo. Formato: 4 números,
 * de 0 a 255, separados por ponto
 *
 * @var string $ip
 */
$plan->setSenderIp($ip);

/**
 * Identificador (fingerprint) gerado pelo vendedor por meio do JavaScript do PagSeguro. Obrigatório se senderIp for
 * nulo. Formato: Obtido a partir do método Javascript PagseguroDirectPayment.getSenderHash()
 *
 * @var string $hash
 */
$plan->setSenderHash($hash);

$item = new \PagSeguro\Domains\DirectPreApproval\Item();

$item->withParameters(
    /**
     * Id do produto objeto da recorrência.
     *
     * @var string $id
     */
    $id,
    /**
     * Descrição do produto objeto da recorrência.
     *
     * @var string $description
     */
    $description,
    /**
     * Quantidade do produto.
     *
     * @var integer $quantity
     */
    $quantity,
    /**
     * Valor cobrado. Formato: Decimal, com duas casas decimais separadas por ponto (p.e, 1234.56).
     *
     * @var float $value
     */
    $value
);

$plan->addItems($item);

try {
    $response = $plan->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
