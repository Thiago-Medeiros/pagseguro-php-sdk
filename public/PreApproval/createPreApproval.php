<?php

require '../bootstrap.php';

$preApproval = new \PagSeguro\Domains\Requests\PreApproval();

/**
 * Moeda utilizada. Indica a moeda na qual o pagamento será feito. No momento, a única opção disponível é BRL (Real).
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Somente o valor BRL é aceito.
 *
 * @var string $currency
 * @options=['BRL']
 */
$preApproval->setCurrency($currency);

/**
 * Código de referência da transação. Informa o código que foi usado para fazer referência ao pagamento. Este código
 * foi fornecido no momento do pagamento e é útil para vincular as transações do PagSeguro às vendas registradas no seu
 * sistema.
 *
 * Presença: Opcional.
 * Formato: Livre, com o limite de 200 caracteres.
 * Tipo: Texto.
 *
 * @var string $reference
 */
$preApproval->setReference($reference);

/** @var \PagSeguro\Domains\ShippingType $shippingType */
$preApproval->setShipping()->setType()->instance($shippingType);

/** @var \PagSeguro\Domains\Address $address */
$preApproval->setShipping()->setAddress()->instance($address);

/**
 * Nome completo do comprador. Especifica o nome completo do comprador que está realizando o pagamento. Este campo é
 * opcional e você pode enviá-lo caso já tenha capturado os dados do comprador em seu sistema e queira evitar que ele
 * preencha esses dados novamente no PagSeguro.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: No mínimo duas sequências de caracteres, com o limite total de 50 caracteres.
 *
 * @var string $senderName
 */
$payment->setSender()->setName($senderName);

/**
 * E-mail do comprador. Especifica o e-mail do comprador que está realizando o pagamento. Este campo é opcional e você
 * pode enviá-lo caso já tenha capturado os dados do comprador em seu sistema e queira evitar que ele preencha esses
 * dados novamente no PagSeguro.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: um e-mail válido (p.e., usuario@site.com.br), com no máximo 60 caracteres.
 *
 * @var string $senderEmail
 */
$payment->setSender()->setEmail($senderEmail);

/** @var \PagSeguro\Domains\Phone $phone */
$preApproval->setSender()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Address $address */
$preApproval->setShipping()->setAddress()->instance($address);

/**
 * Indica se a assinatura será gerenciada pelo PagSeguro (auto) ou pelo Vendedor (manual). Neste caso usaremos o valor
 * "auto".
 *
 * Presença: Opcional. Se não for informado assume-se que seu valor é
 * manual (gerenciado pelo vendedor)
 * Tipo: Texto.
 * Formato: Aceita os valores "auto" ou "manual".
 *
 * @var string $preApprovalCharge
 */
$preApproval->setPreApproval()->setCharge($preApprovalCharge);

/**
 * Nome/Identificador da assinatura.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Livre, com limite de 100 caracteres.
 *
 * @var string $preApprovalName
 */
$preApproval->setPreApproval()->setName($preApprovalName);

/**
 * Detalhes/Descrição da assinatura.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Livre, com limite de 255 caracteres.
 *
 * @var string $preApprovalDetails
 */
$preApproval->setPreApproval()->setDetails($preApprovalDetails);

/**
 * Valor exato de cada cobrança.
 *
 * Presença: Obrigatório para o modelo automático.
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto
 * (p.e, 1234.56). Deve ser um valor maior ou igual a 1.00 e menor ou
 * igual a 2000.00
 * Obs.: Não pode ser utilizado em conjunto com
 * preApprovalMaxAmountPerPayment
 *
 * @var float $preApprovalAmountPerPayment
 */
$preApproval->setPreApproval()->setAmountPerPayment($preApprovalAmountPerPayment);

/**
 * Valor máximo que pode ser cobrado por mês de vigência da
 * assinatura, independente de sua periodicidade.
 *
 * Presença: Obrigatória quando a assinatura é gerenciada pelo
 * vendedor (charge = manual). Não é utilizada quando a assinatura é
 * gerenciada pelo PagSeguro (charge = auto).
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto
 * (p.e, 1234.56). Deve ser um valor maior ou igual a 1.00 e menor ou
 * igual a 2000.00
 *
 * @var float $preApprovalAmountPerPeriod
 */
$preApproval->setPreApproval()->setMaxAmountPerPeriod($preApprovalAmountPerPeriod);

/**
 * Periodicidade da cobrança.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Case insensitive. Reconhece os valores WEEKLY,
 * MONTHLY, BIMONTHLY, TRIMONTHLY, SEMIANNUALLY, YEARLY.
 *
 * @var string $preApprovalPeriod
 */
$preApproval->setPreApproval()->setPeriod($preApprovalPeriod);

/**
 * Valor máximo que pode ser cobrado durante a vigência da
 * assinatura.
 *
 * Presença: Obrigatória.
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto
 * (p.e, 1234.56). Deve ser um valor maior ou igual a 1.00 e menor ou
 * igual a 35000.00
 *
 * @var float $preApprovalMaxTotalAmount
 */
$preApproval->setPreApproval()->setMaxTotalAmount($preApprovalMaxTotalAmount);

/**
 * Início da vigência da assinatura.
 *
 * Presença: Opcional, podendo ser utilizado apenas quando a
 * assinatura é gerenciada pelo vendedor (charge = manual).
 * Tipo: Data/Hora.
 * Formato: YYYY-MM-DDThh:mm:ss.sTZD. Assume valores maiores
 * que a data atual e menores ou iguais a data atual + 2 anos.
 *
 * @var string $preApprovalInitialDate
 */
$preApproval->setPreApproval()->setInitialDate($preApprovalInitialDate);

/**
 * Fim da vigência da assinatura.
 *
 * Presença: Obrigatória.
 * Tipo: Data/Hora.
 * Formato: YYYY-MM-DDThh:mm:ss.sTZD. Assume valores maiores
 * que a data atual ou maiores que o valor definido em
 * preApprovalInitialDate, não podendo ter uma diferença superior a 2
 * anos da data de início.
 *
 * @var string $preApprovalFinalDate
 */
$preApproval->setPreApproval()->setFinalDate($preApprovalFinalDate);

/**
 * URL de redirecionamento após o pagamento. Determina a URL para a qual o comprador será redirecionado após o final do
 * fluxo de pagamento. Este parâmetro permite que seja informado um endereço de específico para cada pagamento
 * realizado.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $preApprovalRedirectUrl
 */
$preApproval->setRedirectUrl($preApprovalRedirectUrl);

/**
 * URL para onde o comprador será redirecionado, durante o fluxo de
 * aprovação, caso deseje alterar/revisar as regras da assinatura.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $preApprovalReviewUrl
 */
$preApproval->setReviewUrl($preApprovalReviewUrl);

try {
    $response = $preApproval->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
