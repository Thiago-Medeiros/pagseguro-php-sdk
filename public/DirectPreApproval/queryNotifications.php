<?php
require_once "../../vendor/autoload.php";

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName("Nome")->setRelease("1.0.0");
\PagSeguro\Library::moduleVersion()->setName("Nome")->setRelease("1.0.0");
/**
 *  Para usa o ambiente de testes (sandbox) descomentar a linha abaixo
 */
\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/**
 * QueryNotificationRequest constructor.
 *
 * @param int  $page
 * @param int  $maxPageResults
 * @param      $interval
 * @param null $notificationCode
 */
$queryNotification = new \PagSeguro\Domains\Requests\DirectPreApproval\QueryNotification(null, null, 20, 'DC1A336C2727159CC42E2F827B8B3E62');

try {
    $response = $queryNotification->register(
        new \PagSeguro\Domains\AccountCredentials('thiago.pixelab@gmail.com', '9D72B35DFD8A4FDC89F6D69BD75D8F6F')
    );

    echo '<pre>';
    print_r($response);
} catch (Exception $e) {
    die($e->getMessage());
}

