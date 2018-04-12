<?php

require '../bootstrap.php';

/*
 * Permite criar um plano de pagamento recorrente que concentra todas as configurações de pagamento.
 */

$plan = new \PagSeguro\Domains\Requests\DirectPreApproval\Plan();

/**
 * URL para onde o assinante será redirecionado após a finalização do fluxo de pagamento. Este valor somente será
 * utilizado caso queira utilizar este plano em um Pagamento Recorrente via botão.
 *
 * Opcional
 *
 * @var string $redirectUrl
 */
$plan->setRedirectURL($redirectUrl);

/**
 * Código/Identificador para fazer referência a assinatura em seu sistema.
 *
 * @var string $reference
 */
$plan->setReference($reference);

/**
 * URL para onde o assinante será redirecionado, durante o fluxo de pagamento, caso o mesmo queira alterar/revisar as
 * regras da assinatura. Este valor somente será utilizado caso queira utilizar este plano em um Pagamento Recorrente
 * via botão.
 *
 * Opcional
 *
 * @var string $preApprovalReviewUrl
 */
$plan->setReviewURL($preApprovalReviewUrl);

/**
 * Quantidade máxima de consumidores que podem aderir ao plano.
 *
 * Opcional
 *
 * @var integer $preApprovalMaxUses
 */
$plan->setMaxUses($preApprovalMaxUses);

/**
 * Especifica o e-mail que deve aparecer na tela de pagamento. Formato: Um e-mail válido, com limite de 60 caracteres.
 * O e-mail informado deve estar vinculado à conta PagSeguro que está realizando a chamada à API.
 *
 * @var string $receiverEmail
 */
$plan->setReceiver()->withParameters($receiverEmail);

/**
 * Nome/Identificador do plano. Formato: Livre, com limite de 100 caracteres.
 *
 * @var string $preApprovalName
 */
$plan->setPreApproval()->setName($preApprovalName);

/**
 * Indica o modelo de cobrança do pagamento recorrente. Use AUTO para o modelo pré-pago e MANUAL para o modelo pós-pago.
 *
 * @var string $preApprovalCharge
 * @options=['AUTO', 'MANUAL']
 */
$plan->setPreApproval()->setCharge($preApprovalCharge);

/**
 * Periodicidade da cobrança.
 *
 * @var string $preApprovalPeriod
 * @options=['WEEKLY', 'MONTHLY', 'BIMONTHLY', 'TRIMONTHLY', 'SEMIANNUALLY', 'YEARLY']
 */
$plan->setPreApproval()->setPeriod($preApprovalPeriod);

/**
 * Valor exato de cada cobrança. Obrigatório para o modelo AUTO. Formato: Decimal, com duas casas decimais separadas
 * por ponto (p.e, 1234.56). Deve ser um valor maior ou igual a 1.00 e menor ou igual a 2000.00.
 *
 * Opcional
 *
 * @var float $preApprovalAmountPerPayment
 */
$plan->setPreApproval()->setAmountPerPayment($preApprovalAmountPerPayment);

/**
 * Valor da taxa de adesão. Sempre será cobrada juntamente com a primeira parcela do pagamento, independente se o plano
 * é pré-pago ou pós-pago. Formato: Decimal, com duas casas decimais separadas por ponto (p.e, 1234.56), maior ou igual
 * a 0.00 e menor ou igual a 1000000.00.
 *
 * Opcional
 *
 * @var float $preApprovalMembershipFee
 */
$plan->setPreApproval()->setMembershipFee($preApprovalMembershipFee);

/**
 * Período de teste, em dias. A recorrência mantém o status INITIATED durante o período de testes, de modo que a
 * primeira cobrança só ocorrerá após esse período, permitindo que a recorrência mude para ACTIVE. No caso de pagamento
 * pré-pago, a cobrança se dá imediatamente após o fim do período de testes; no caso de pagamento pós-pago, a cobrança
 * ocorre após o período de cobrança somado ao período de testes. Formato: Inteiro, maior ou igual a 1 e menor ou igual
 * a 1000000.
 *
 * Opcional
 *
 * @var integer $preApprovalTrialPeriod
 */
$plan->setPreApproval()->setTrialPeriodDuration($preApprovalTrialPeriod);

$plan->setPreApproval()->setExpiration()->withParameters(
    /** @var integer $expirationUnit Um número inteiro maior ou igual a 1 e menor ou igual a 1000000. */
    $expirationUnit,
    /**
     * @var string $expirationvalue Combine com value para obter a duração da recorrência, ex: 2 YEARS.
     * @options=['DAYS', 'MONTHS', 'YEARS']
     */
    $expirationvalue
);

/**
 * Descrição do plano.
 *
 * Opcional
 *
 * @var string $preApprovalDetails
 */
$plan->setPreApproval()->setDetails($preApprovalDetails);

/**
 * Fim da vigência do plano. As cobranças cessarão após esta data. Formato: YYYY-MM-DDThh:mm:ss.sTZD. Valores aceitos:
 * Se preApprovalInitialDate for informado então preApprovalInitialDate < preApprovalFinalDate <=
 * preApprovalInitialDate + valor definido no perfil, caso contrário, data atual < preApprovalFinalDate <= data atual +
 * valor definido no perfil. Obrigatório se expiration for nulo, proibido se expiration não for nulo.
 *
 * Opcional
 *
 * @var string $preApprovalFinalDate
 */
$plan->setPreApproval()->setFinalDate($preApprovalFinalDate);

/**
 * Url para onde o assinante será redirecionado caso este solicite o cancelamento da assinatura no site do PagSeguro
 * (fluxo de retenção).
 *
 * Opcional
 *
 * @var string $preApprovalCancelurl
 */
$plan->setPreApproval()->setCancelURL($preApprovalCancelurl);

try {
    $response = $plan->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
