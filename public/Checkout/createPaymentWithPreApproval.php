<?php

require '../bootstrap.php';

$payment = new \PagSeguro\Domains\Requests\Payment();

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
$payment->setSender()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Document $document */
$payment->setSender()->setDocument()->instance($document);

/** @var \PagSeguro\Domains\Address $address */
$payment->setShipping()->setAddress()->instance($address);

/** @var \PagSeguro\Domains\ShippingCost $shippingCost */
$payment->setShipping()->setCost()->instance($shippingCost);

/** @var \PagSeguro\Domains\ShippingType $shippingType */
$payment->setShipping()->setType()->instance($shippingType);

/**
 * Lista de itens contidos na transação. O número de itens sob este elemento corresponde ao valor de itemCount.
 *
 * @var \PagSeguro\Domains\Item $item
 * @var array $items
 */
$items = [$item];

$payment->setItems($items);

/**
 * Moeda utilizada. Indica a moeda na qual o pagamento será feito. No momento, a única opção disponível é BRL (Real).
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Case sensitive. Somente o valor BRL é aceito.
 *
 * @var string $currency
 */
$payment->setCurrency($currency);

/**
 * Valor extra. Especifica um valor extra que deve ser adicionado ou subtraído ao valor total do pagamento. Esse valor
 * pode representar uma taxa extra a ser cobrada no pagamento ou um desconto a ser concedido, caso o valor seja
 * negativo.
 *
 * Presença: Opcional.
 * Tipo: Número.
 * Formato: Decimal (positivo ou negativo), com duas casas decimais separadas por ponto (p.e., 1234.56 ou -1234.56),
 * maior ou igual a -9999999.00 e menor ou igual a 9999999.00. Quando negativo, este valor não pode ser maior ou igual
 * à soma dos valores dos produtos.
 *
 * @var string $extraAmount
 */
$payment->setExtraAmount($extraAmount);

/**
 * Código de referência. Define um código para fazer referência ao pagamento. Este código fica associado à transação
 * criada pelo pagamento e é útil para vincular as transações do PagSeguro às vendas registradas no seu sistema.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Livre, com o limite de 200 caracteres.
 *
 * @var string $reference
 */
$payment->setReference($reference);

/**
 * URL de redirecionamento após o pagamento. Determina a URL para a qual o comprador será redirecionado após o final do
 * fluxo de pagamento. Este parâmetro permite que seja informado um endereço de específico para cada pagamento
 * realizado.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $redirectUrl
 */
$payment->setRedirectUrl($redirectUrl);

/**
 * URL para envio de notificações sobre o pagamento. Determina a URL para a qual o PagSeguro enviará os códigos de
 * notificação relacionados ao pagamento. Toda vez que houver uma mudança no status da transação e que demandar sua
 * atenção, uma nova notificação será enviada para este endereço.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato: Uma URL válida, com limite de 255 caracteres.
 *
 * @var string $notificationUrl
 */
$payment->setNotificationUrl($notificationUrl);

/*
 * Pre Approval info
 */
$payment->setPreApproval()->setCharge(PRE_APPROVAL_CHARGE);
$payment->setPreApproval()->setName(PRE_APPROVAL_NAME);
$payment->setPreApproval()->setDetails(PRE_APPROVAL_DETAILS);
$payment->setPreApproval()->setAmountPerPayment(PRE_APPROVAL_AMOUNT_PER_PAYMENT);
$payment->setPreApproval()->setMaxAmountPerPeriod(PRE_APPROVAL__AMOUNT_PER_PERIOD);
$payment->setPreApproval()->setPeriod(PRE_APPROVAL_PERIOD);
$payment->setPreApproval()->setMaxTotalAmount(PRE_APPROVAL_MAX_TOTAL_AMOUNT);
$payment->setPreApproval()->setInitialDate(PRE_APPROVAL_INTITIAL_DATE);
$payment->setPreApproval()->setFinalDate(PRE_APPROVAL_FINAL_DATE);

$payment->setReviewUrl($reviewUrl);

try {
    $response = $payment->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
