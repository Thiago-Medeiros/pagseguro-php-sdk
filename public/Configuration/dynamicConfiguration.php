<?php
/**
 * 2007-2016 [PagSeguro Internet Ltda.]
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author    PagSeguro Internet Ltda.
 * @copyright 2007-2016 PagSeguro Internet Ltda.
 * @license   http://www.apache.org/licenses/LICENSE-2.0
 *
 */

require_once "../../vendor/autoload.php";

try {
    \PagSeguro\Library::initialize();
} catch (Exception $e) {
    die($e);
}
\PagSeguro\Library::cmsVersion()->setName($cmsVersion)->setRelease($cmsRelease);
\PagSeguro\Library::moduleVersion()->setName($moduleVersion)->setRelease($moduleRelease);

/*
 * To do a dynamic configuration of the library credentials you have to use the set methods
 * from the static class \PagSeguro\Configuration\Configure. 
 */

/**
 *
 * @see https://sandbox.pagseguro.uol.com.br/#rmcl
 *
 * @var string $environment
 * @options=['production', 'sandbox']
 */
\PagSeguro\Configuration\Configure::setEnvironment($environment);//production or sandbox

\PagSeguro\Configuration\Configure::setAccountCredentials(
    /**
     * @see https://devpagseguro.readme.io/v1/docs/autenticacao#section-obtendo-suas-credenciais-de-conta
     *
     * @var string $accountEmail
     */
    $accountEmail,
    /**
     * @see https://devpagseguro.readme.io/v1/docs/autenticacao#section-obtendo-suas-credenciais-de-conta
     *
     * @var string $accountToken
     */
    $accountToken
);

/**
 *
 * @see https://devpagseguro.readme.io/docs/endpoints-da-api#section-formato-de-dados-para-envio-e-resposta
 *
 * @var string $charset
 * @options=['UTF-8', 'ISO-8859-1']
 */
\PagSeguro\Configuration\Configure::setCharset($charset);

/**
 * Path do arquivo de log, tenha certeza de que o php terá permissão para escrever no arquivo
 *
 * @var string $logPath
 */
\PagSeguro\Configuration\Configure::setLog(true, $logPath);

try {
    $response = \PagSeguro\Services\Session::create(
        \PagSeguro\Configuration\Configure::getAccountCredentials()
    );
} catch (Exception $e) {
    die($e->getMessage());
}

print_r($response);
