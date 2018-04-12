<?php

require '../bootstrap.php';

/*
 * A adesão é o mecanismo que une o consumidor ao plano, possibilitando que ele faça os pagamentos de forma recorrente,
 * de acordo com o que foi estipulado no plano ao qual ele está aderindo.
 */

$preApproval = new \PagSeguro\Domains\Requests\DirectPreApproval\Accession();

/**
 * Código do plano ao qual a assinatura será vinculada. Formato: Obtido no método /pre-approvals/request.
 *
 * @var string $preApprovalPlan
 */
$preApproval->setPlan($preApprovalPlan);

/**
 * Código de referência da assinatura no seu sistema. Formato: Livre, com no mínimo 1 e no máximo 200 caracteres.
 *
 * @var string $preApprovalReference
 */
$preApproval->setReference($preApprovalReference);

/**
 * Nome completo do consumidor. Formato: Livre, com no mínimo duas sequências de strings e limite total de 50
 * caracteres.
 *
 * @var string $senderName
 */
$preApproval->setSender()->setName($senderName);

/**
 * E-mail do consumidor. Formato: Um e-mail válido, com limite de 60 caracteres.
 *
 * @var string $senderEmail
 */
$preApproval->setSender()->setEmail($senderEmail);

/**
 * Endereço de IP de origem do consumidor. Obrigatório se hash for nulo. Formato: 4 números, de 0 a 255, separados por
 * ponto.
 *
 * @var string $senderIp
 */
$preApproval->setSender()->setIp($senderIp);

/*
 * Endereço do consumidor.
 */
$preApproval->setSender()->setAddress()->withParameters(
    $street,
    $number,
    $district,
    $postalCode,
    $city,
    $state,
    $country
);

/** @var \PagSeguro\Domains\DirectPreApproval\Document $document Documentos do consumidor */
$preApproval->setSender()->setDocuments($document);

$preApproval->setSender()->setPhone()->withParameters(
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

/**
 * Token retornado no método Javascript PagSeguroDirectPayment.createCardToken().
 *
 * @var string $creditCardtoken
 */
$preApproval->setPaymentMethod()->setCreditCard()->setToken($creditCardtoken);

/**
 * Nome conforme impresso no cartão de crédito. Formato: No mínimo 1 e no máximo 50 caracteres.
 *
 * @var string $creditCardholderName
 */
$preApproval->setPaymentMethod()->setCreditCard()->setHolder()->setName($creditCardholderName);

/**
 * Data de nascimento do dono do cartão de crédito. Formato: dd/MM/yyyy.
 *
 * @var string $creditCardholderBirthdate
 */
$preApproval->setPaymentMethod()->setCreditCard()->setHolder()->setBirthDate($creditCardholderBirthdate);

/** @var \PagSeguro\Domains\DirectPreApproval\Document $document Documentos do consumidor */
$preApproval->setPaymentMethod()->setCreditCard()->setHolder()->setDocuments($document);

$preApproval->setPaymentMethod()->setCreditCard()->setHolder()->setPhone()->withParameters(
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
$preApproval->setPaymentMethod()->setCreditCard()->setHolder()->setBillingAddress()->withParameters(
    $street,
    $number,
    $district,
    $postalCode,
    $city,
    $state,
    $country
);

try {
    $response = $preApproval->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
