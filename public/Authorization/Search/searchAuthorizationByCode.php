<?php

require_once EXAMPLES_PATH . 'bootstrap.php';

/**
 * @var string $code
 *
 * Código identificador da notificação. Informa o código da notificação que você quer consultar. O código deve ser
 * informado no caminho da URL. Você deve usar o código que recebeu pelo parâmetro notificationCode no envio da
 * notificação.
 */
$code = YOUR_TRANSACTION_CODE;

try {
    $response = \PagSeguro\Services\Application\Search\Code::search(
    /** @var \PagSeguro\Domains\AccountCredentials | \PagSeguro\Domains\ApplicationCredentials $auth */
        $auth,
        $code
    );
} catch (Exception $e) {
    $response = $e->getMessage();
}

echo "<pre>";
print_r($response);
