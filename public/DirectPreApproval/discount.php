<?php

require '../bootstrap.php';

/*
 * É possível conceder desconto para a próxima parcela da adesão. O desconto se aplica somente à cobrança subsequente,
 * não se aplicando às demais cobranças futuras.
 */
$status = new \PagSeguro\Domains\Requests\DirectPreApproval\Discount();
$status->setPreApprovalCode('código da assinatura');

/**
 * Tipo do desconto a ser aplicado
 *
 * @var string $type
 * @options=['DISCOUNT_PERCENT', 'DISCOUNT_AMOUNT']
 */
$status->setType($type);

/**
 * Valor do desconto a ser aplicado, de acordo com o tipo. Formato: Decimal, com duas casas decimais separadas por
 * ponto, maior que 0.00 e deve ser compatível com o valor a ser descontado. Por exemplo: não é possível aplicar um
 * desconto fixo de 11.00 para uma cobrança de 10.00, tal como não é possível informar uma porcentagem acima de 100.00.
 *
 * @var string $value
 */
$status->setValue($value);

try {
    $response = $plan->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
