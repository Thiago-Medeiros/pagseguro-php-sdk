<?php

require_once "../../vendor/autoload.php";

/** @var string $appId */
$appId = YourAppID;
/** @var string $appId */
$appId = YourAppKey;
/** @var string $appReference */
$appReference = YourAppReference;
/** @var string $appRedirectUrl */
$appRedirectUrl = YourAppRedirectUrl;
/** @var string $appNotificationUrl */
$appNotificationUrl = YourAppNotificationUrl;

try {
    \PagSeguro\Library::initialize();
} catch (Exception $e) {
    die($e);
}

\PagSeguro\Library::cmsVersion()->setName('PHP')->setRelease(phpversion());
\PagSeguro\Library::moduleVersion()->setName("PHP-SDK-Example")->setRelease('4.x.x');

/**
 * Uncomment for set the default environment to sandbox
 *
 * Values: production, sandbox
 */
//\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$authorization = new \PagSeguro\Domains\Requests\Authorization();
$authorization->setReference($appReference);
$authorization->setRedirectUrl($appRedirectUrl);
$authorization->setNotificationUrl($appNotificationUrl);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::CREATE_CHECKOUTS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::SEARCH_TRANSACTIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::RECEIVE_TRANSACTION_NOTIFICATIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::MANAGE_PAYMENT_PRE_APPROVALS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::DIRECT_PAYMENT);

$partner = new \PagSeguro\Domains\Authorization\Partner(
    'John Doe',
    new DateTime(),
    new \PagSeguro\Domains\Document('CPF', '33315817472'),
    new \PagSeguro\Domains\Phone('12', '13141231', \PagSeguro\Enum\Authorization\PhoneEnum::HOME)
);

$person = new \PagSeguro\Domains\Authorization\Company(
    'John Doe',
    'http://www.example.com',
    new \PagSeguro\Domains\Document('CNPJ', '32137524000115'),
    new \PagSeguro\Domains\Phone('12', '13131313', \PagSeguro\Enum\Authorization\PhoneEnum::BUSINESS),
    new \PagSeguro\Domains\Address('Rua Um',
        '1',
        'Sem complemento',
        'Bairro',
        '00000000',
        'Cidade',
        'SP',
        'BRA'),
    $partner);

/**
 * Com o método a seguir é possível especificar outros telefones
 *
 * Os tipos de telefone permitidos são HOME, MOBILE e BUSINESS.
 */
$person->addPhones(new \PagSeguro\Domains\Phone('19', '989051338', \PagSeguro\Enum\Authorization\PhoneEnum::MOBILE));

$account = new \PagSeguro\Domains\Authorization\Account('john345@doe.com', $person);

$authorization->setAccount($account);

try {
    $response = $authorization->register(
        new \PagSeguro\Domains\ApplicationCredentials('teste12334', '8AC13EDC85851764442A6FBF0DE7C41B')
    );
    echo "<h2>Criando requisi&ccedil;&atilde;o de authorização</h2>"
        . "<p>URL do pagamento: <strong>$response</strong></p>"
        . "<p><a title=\"URL de Autorização\" href=\"$response\" target=\_blank\">"
        . "Ir para URL de authorização.</a></p>";
} catch (Exception $e) {
    die($e->getMessage());
}
