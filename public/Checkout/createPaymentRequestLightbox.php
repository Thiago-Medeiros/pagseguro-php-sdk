<?php

require '../bootstrap.php';

$payment = new \PagSeguro\Domains\Requests\Payment();

$payment->addItems()->withParameters(
    '0001',
    'Notebook prata',
    2,
    130.00
);

$payment->setCurrency('BRL');

$payment->setExtraAmount(11.5);

$payment->setReference($reference);

$payment->setRedirectUrl($redirectUrl);

$payment->setNotificationUrl($notificationUrl);

/*
 * Customer info
 */
$payment->setSender()->setName('John Doe');
$payment->setSender()->setEmail('john@doe.com');

/** @var \PagSeguro\Domains\Phone $phone */
$payment->setSender()->setPhone()->instance($phone);
/** @var \PagSeguro\Domains\Document $document */
$payment->setSender()->setDocument()->instance($document);

/*
 * Shipping info
 */
/** @var \PagSeguro\Domains\Address $address */
$payment->setShipping()->setAddress()->instance($address);
$payment->setShipping()->setCost()->withParameters(20.00);
$payment->setShipping()->setType()->withParameters(\PagSeguro\Enum\Shipping\Type::SEDEX);

/*
 * Custom info
 */
$payment->addParameter()->withParameters('itemId', '0003')->index(3);
$payment->addParameter()->withParameters('itemDescription', 'Notebook Amarelo')->index(3);
$payment->addParameter()->withParameters('itemQuantity', '1')->index(3);
$payment->addParameter()->withParameters('itemAmount', '200.00')->index(3);

/*
 * Set discount by payment method
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::DISCOUNT_PERCENT,
    10.00
);

/*
 * Set max installments without fee
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::MAX_INSTALLMENTS_NO_INTEREST,
    2
);

/*
 * Set max installments
 */
$payment->addPaymentMethod()->withParameters(
    PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    PagSeguro\Enum\PaymentMethod\Config\Keys::MAX_INSTALLMENTS_LIMIT,
    6
);

/*
 * Set accepted payments methods group
 */
$payment->acceptPaymentMethod()->groups(
    \PagSeguro\Enum\PaymentMethod\Group::CREDIT_CARD,
    \PagSeguro\Enum\PaymentMethod\Group::BALANCE
);

/*
 * Set accepted payments methods
 */
$payment->acceptPaymentMethod()->name(\PagSeguro\Enum\PaymentMethod\Name::DEBITO_ITAU);

/*
 * Exclude accepted payments methods group
 */
$payment->excludePaymentMethod()->group(\PagSeguro\Enum\PaymentMethod\Group::BOLETO);

try {
    /** @var \PagSeguro\Domains\Requests\Payment $payment */
    $response = $payment->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        true
    );
} catch (Exception $e) {
    die($e->getMessage());
}

?>
<!DOCTYPE html>
<html>
    <head>
        <?php if (\PagSeguro\Configuration\Configure::getEnvironment()->getEnvironment() == "sandbox") : ?>
                <!--Para integração em ambiente de testes no Sandbox use este link-->
                <script type="text/javascript"
                    src="https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
                </script>
        <?php else : ?>
                <!--Para integração em ambiente de produção use este link-->
                <script type="text/javascript"
                    src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js">
                </script>
        <?php endif; ?>
    </head>
    <body>
        <!-- A irá exibir o modal para pagamento -->
        <script>PagSeguroLightbox(<?= $response->getCode() ?>);</script>
    </body>
</html>