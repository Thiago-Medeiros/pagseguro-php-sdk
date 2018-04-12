<?php

require '../bootstrap.php';

/*
 * Durante a vigência de uma adesão ativa é possível atualizar os dados de pagamento da adesão.
 */

$changePayment = new \PagSeguro\Domains\Requests\DirectPreApproval\ChangePayment();

/**
 * Código da recorrência
 *
 * @var string $preApprovalCode
 */
$changePayment->setPreApprovalCode($preApprovalCode);

/**
 * Identificador (fingerprint) gerado pelo vendedor por meio do JavaScript do PagSeguro. Obrigatório se ip for nulo.
 * Formato: Obtido a partir do método Javascript PagseguroDirectPayment.getSenderHash()
 *
 * @var string $senderHash
 */
$changePayment->setSender()->setHash($senderHash);

/**
 * Endereço de IP de origem da assinatura, relacionado ao assinante. Obrigatório se hash for nulo. Formato: 4 números,
 * de 0 a 255, separados por ponto
 *
 * Opcional
 *
 * @var string $senderIp
 */
$changePayment->setSender()->setIp($senderIp);


/**
 * Token retornado no método Javascript PagSeguroDirectPayment.createCardToken().
 *
 * @var string $creditCardtoken
 */
$changePayment->setCreditCard()->setToken($creditCardtoken);


/**
 * Nome conforme impresso no cartão de crédito. Formato: No mínimo 1 e no máximo 50 caracteres.
 *
 * @var string $creditCardholderName
 */
$changePayment->setCreditCard()->setHolder()->setName($creditCardholderName);

/**
 * Data de nascimento do dono do cartão de crédito. Formato: dd/MM/yyyy.
 *
 * @var string $creditCardholderBirthdate
 */
$changePayment->setCreditCard()->setHolder()->setBirthDate($creditCardholderBirthdate);

/** @var \PagSeguro\Domains\DirectPreApproval\Document $document Documentos do consumidor */
$changePayment->setCreditCard()->setHolder()->setDocuments($document);

$changePayment->setCreditCard()->setHolder()->setPhone()->withParameters(
    /**
     * DDD do comprador. Formato: Um número de 2 dígitos correspondente a um DDD válido.
     *
     * @var string $areaCode
     */
    $areaCode,
    /**
     * Número do telefone do comprador. Formato: Um número entre 7 e 9 dígitos.
     *
     * @var string $number
     */
    $number
);

/*
 * Endereço de Cobrança.
 */
$changePayment->setCreditCard()->setHolder()->setBillingAddress()->withParameters(
    $street,
    $number,
    $district,
    $postalCode,
    $city,
    $state,
    $country
);
try {
    $response = $changePayment->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
