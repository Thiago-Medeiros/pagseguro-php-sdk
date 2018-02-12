<?php

define('EXAMPLES_PATH', __DIR__);

require EXAMPLES_PATH . '/../vendor/autoload.php';

try {
    \PagSeguro\Library::initialize();
} catch (Exception $e) {
    die($e);
}
\PagSeguro\Library::cmsVersion()->setName('PHP')->setRelease(phpversion());
\PagSeguro\Library::moduleVersion()->setName("Lib-Php-Example")->setRelease('4.x.x');

/*
 *
 * O modelo de aplicações do PagSeguro permite que sua aplicação crie checkouts, receba notificações de pagamento entre
 * outras funções em nome do cliente sem a necessidade de configurar tokens, URL de retorno e outras informações na
 * conta PagSeguro que você estiver utilizando.
 *
 * Assim, o seu cliente pode se cadastrar em sua plataforma, autorizá-la e começar a vender sem a necessidade de
 * inserir informações ou entrar na conta PagSeguro para efetuar configurações.
 *
 * O modelo de aplicações do PagSeguro está disponível para contas do tipo Vendedor e Empresarial.
 *
 */
/** @var string $appId */
$appId = YourAppID;
/** @var string $appId */
$appKey = YourAppKey;

$appCredential = new \PagSeguro\Domains\ApplicationCredentials($appId, $appKey);

/*
 * Para gerar seu token acesse:
 * https://pagseguro.uol.com.br/preferencias/integracoes.jhtml
 *
 * Para utilizar o ambiente sandbox use seu vendedor de testes que se encontra em
 * https://sandbox.pagseguro.uol.com.br/vendedor/configuracoes.html
 */
/** @var string $appId */
$accountEmail = YourAppID;
/** @var string $appId */
$accountToken = YourAppKey;

$accountCredential = new \PagSeguro\Domains\AccountCredentials($accountEmail, $accountToken);

/*
 * Descomente a linha abaixo para utilizar o ambiente sandbox
 */
//\PagSeguro\Configuration\Configure::setEnvironment('sandbox');

/*
 * Descomente as linhas abaixo para habilitar o log
 * é necessário que o "PHP" tenha permissão de escrita nesse arquivo
 */
$logPath = EXAMPLES_PATH . '/log';
if (!file_exists($logPath)) {
    try {
        fopen($logPath, 'wb');
        chmod($logPath, 0777);
    } catch (Exception $exception) {
        die($exception);
    }
    \PagSeguro\Configuration\Configure::setLog(true, $logPath);
}

/** @var string $appReference */
$reference = 'PHP-SDK-Examples';
/** @var string $appRedirectUrl */
$redirectUrl = 'http://www.example.com';
/** @var string $appNotificationUrl */
$noficationUrl = 'http://www.example.com/notification';