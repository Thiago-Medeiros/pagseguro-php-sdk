<?php

require '../../bootstrap.php';

/** @var string $notificationCode */
$notificationCode = NOTIFICATION_CODE;

try {
    $response = \PagSeguro\Services\Application\Search\Notification::search(
        /** @var \PagSeguro\Domains\ApplicationCredentials $credential */
        $credential,
        $notificationCode
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
