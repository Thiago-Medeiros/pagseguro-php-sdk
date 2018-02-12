<?php

require_once "../../vendor/autoload.php";

try {
    \PagSeguro\Library::initialize();
} catch (Exception $e) {
    die($e);
}
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
//\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

$authorization = new \PagSeguro\Domains\Requests\Authorization();

$authorization->setReference("AUTH_LIB_PHP_0001");
$authorization->setRedirectUrl("http://www.lojamodelo.com.br");
$authorization->setNotificationUrl("http://www.lojamodelo.com.br/nofitication");

$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::CREATE_CHECKOUTS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::SEARCH_TRANSACTIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::RECEIVE_TRANSACTION_NOTIFICATIONS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::MANAGE_PAYMENT_PRE_APPROVALS);
$authorization->addPermission(\PagSeguro\Enum\Authorization\Permissions::DIRECT_PAYMENT);

$person = new \PagSeguro\Domains\Authorization\Personal(
    'John Doe',
    new DateTime('10-10-1990'),
    new \PagSeguro\Domains\Document('CPF', '33315817472'),
    new \PagSeguro\Domains\Phone('12', '989051338', \PagSeguro\Enum\Authorization\PhoneEnum::MOBILE),
    new \PagSeguro\Domains\Address('Rua Um',
        '1',
        'Sem complemento',
        'Bairro',
        '14808550',
        'Cidade',
        'SP',
        'BRA'));

/**
 * Com o método a seguir é possível especificar outros telefones
 *
 * Os tipos de telefone permitidos são HOME, MOBILE e BUSINESS.
 */
$person->addPhones(new \PagSeguro\Domains\Phone('12', '13131313', \PagSeguro\Enum\Authorization\PhoneEnum::BUSINESS));
$person->addPhones(new \PagSeguro\Domains\Phone('12', '14141414', \PagSeguro\Enum\Authorization\PhoneEnum::HOME));

$account = new \PagSeguro\Domains\Authorization\Account('john@doe.com', $person);

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
