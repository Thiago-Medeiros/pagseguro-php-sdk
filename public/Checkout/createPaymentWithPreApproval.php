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
$payment->setSender()->setName(SENDER_NAME);
$payment->setSender()->setEmail(SENDER_EMAIL);

/** @var \PagSeguro\Domains\Phone $phone */
$payment->setSender()->setPhone()->instance($phone);

/** @var \PagSeguro\Domains\Document $document */
$payment->setSender()->setDocument()->instance($document);

/*
 * Shipping info
 */
/** @var \PagSeguro\Domains\Address $address */
$payment->setShipping()->setAddress()->instance($address);

/** @var \PagSeguro\Domains\ShippingCost $shippingCost */
$payment->setShipping()->setCost()->instance($shippingCost);

/** @var \PagSeguro\Domains\ShippingType $shippingType */
$payment->setShipping()->setType()->instance($shippingType);

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
    /** @var \PagSeguro\Domains\Requests\Payment $payment */
    $response = $payment->register(
        /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
