<?php

require '../bootstrap.php';

$creditCard = new \PagSeguro\Domains\Requests\DirectPayment\CreditCard();

/**
 * Modo do pagamento
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: aceita a opção default.
 *
 * @var string $paymentMode
 * @options=['default']
 */
$creditCard->setMode($paymentMode);

/**
 * Especifica o e-mail que vai receber o pagamento
 *
 * Presença:Obrigatória.
 * Tipo:Texto.
 * Presença:Obrigatória.
 * Formato:Um e-mail válido, com limite de 60 caracteres. O e-mail informado deve estar vinculado à conta PagSeguro que
 * está realizando a chamada.
 *
 * @var string $receiverEmail
 */
$creditCard->setReceiverEmail($receiverEmail);

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
$creditCard->setReference($reference);

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
$creditCard->setCurrency($currency);

/**
 * Lista de itens contidos na transação. O número de itens sob este elemento corresponde ao valor de itemCount.
 *
 * @var \PagSeguro\Domains\Item $item
 * @var array $items
 */
$items = [$item];

$creditCard->setItems($items);

/**
 * Nome completo do comprador. Informa o nome completo do comprador que realizou o pagamento.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato:* No mínimo duas sequências de caracteres, com o limite total de 50 caracteres.
 *
 * @var string $senderName
 */
$creditCard->setSender()->setName($senderName);

/**
 * E-mail do comprador. Informa o e-mail do comprador que realizou a transação.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: um e-mail válido (p.e., usuario\@site.com.br), com no máximo 60 caracteres.
 *
 * @var string $senderEmail
 */
$creditCard->setSender()->setEmail($senderEmail);

/** @var \PagSeguro\Domains\Phone $phone */
$creditCard->setSender()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Document $document */
$creditCard->setSender()->setDocument()->instance($document);

/**
 * Identificador do vendedor (fingerprint) gerado pelo JavaScript do PagSeguro.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Obtido a partir de uma chamada javascript PagseguroDirectPayment.getSenderHash().
 *
 * @var string $senderHash
 *
 * @see https://devpagseguro.readme.io/docs/checkout-web-usando-a-sua-tela#obter-indicacao-do-comprador
 */
$creditCard->setSender()->setHash($senderHash);


/** @var \PagSeguro\Domains\Address $address */
$creditCard->setShipping()->setAddress()->instance($address);

/** @var \PagSeguro\Domains\Address $address */
$creditCard->setBilling()->setAddress()->instance($address);

/**
 * Token do Cartão de Crédito. Token retornado no serviço de obtenção de token do cartão de crédito.
 *
 * Presença: Obrigatório para Cartão de Crédito.
 * Tipo: Texto.
 * Formato: Não tem limite de caracteres.
 *
 * @var string $token
 */
$creditCard->setToken($token);

/**
 * Quantidade de parcelas. Quantidade de parcelas escolhidas pelo cliente.
 *
 * Presença: Obrigatório para Cartão de Crédito.
 * Tipo: Inteiro.
 * Valores aceitos: [1, 18].
 *
 * @var integer $quantity
 */
/** @var float $value */
$creditCard->setInstallment()->withParameters($quantity, $value);

// Set the credit card holder information
$creditCard->setHolder()->setBirthdate('01/10/1979');
$creditCard->setHolder()->setName('João Comprador'); // Equals in Credit Card

/** @var \PagSeguro\Domains\Phone $phone */
$creditCard->setHolder()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Document $document */
$creditCard->setHolder()->setDocument()->instance($document);

try {
    $result = $creditCard->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
