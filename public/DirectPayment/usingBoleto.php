<?php

require '../bootstrap.php';

$boleto = new \PagSeguro\Domains\Requests\DirectPayment\Boleto();

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
$boleto->setMode($paymentMode);

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
$boleto->setReceiverEmail($receiverEmail);

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
$boleto->setCurrency($currency);

/**
 * Lista de itens contidos na transação. O número de itens sob este elemento corresponde ao valor de itemCount.
 *
 * @var \PagSeguro\Domains\Item $item
 * @var array $items
 */
$items = [$item];

$boleto->setItems($items);

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
$boleto->setReference($reference);

/**
 * Valor extra. Informa um valor extra que foi somado ou subtraído do valor pago pelo comprador. Este valor é
 * especificado por você no pagamento e pode representar um valor que você quer cobrar separadamente do comprador ou um
 * desconto que quer dar a ele.
 *
 * Presença: Obrigatória.
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto (“.”).
 * Por exemplo, 1234.56 ou -1234.56.
 *
 * @var float $amount
 */
$boleto->setExtraAmount($amount);

/**
 * Nome completo do comprador. Informa o nome completo do comprador que realizou o pagamento.
 *
 * Presença: Opcional.
 * Tipo: Texto.
 * Formato:* No mínimo duas sequências de caracteres, com o limite total de 50 caracteres.
 *
 * @var string $senderName
 */
$boleto->setSender()->setName($senderName);

/**
 * E-mail do comprador. Informa o e-mail do comprador que realizou a transação.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: um e-mail válido (p.e., usuario\@site.com.br), com no máximo 60 caracteres.
 *
 * @var string $senderEmail
 */
$boleto->setSender()->setEmail($senderEmail);

/** @var \PagSeguro\Domains\Phone $phone */
$boleto->setSender()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Document $document */
$boleto->setSender()->setDocument()->instance($document);

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
$boleto->setSender()->setHash($senderHash);

/** @var \PagSeguro\Domains\Address $address */
$boleto->setShipping()->setAddress()->instance($address);

/**
 * Obrigatoriedade do endereço de entrega
 * Define a obrigatoriedade dos campos de endereço.
 *
 * Tipo: Boolean.
 * Formato: Somente os valores true e false são aceitos.
 * Presença: Obrigatória.
 *
 * @var string $shippingRequired
 * @options=['TRUE', 'FALSE']
 */
$boleto->setShipping()->setAddressRequired()->withParameters($shippingRequired);

try {
    /** @var \PagSeguro\Domains\Requests\Authorization $authorization */
    $response = $boleto->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
