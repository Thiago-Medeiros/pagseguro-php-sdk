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

$credential = $accountCredential;
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
$notificationUrl = 'http://www.example.com/notification';
/** @var string $appNotificationUrl */
$reviewUrl = 'http://www.example.com/review';

/** @var \PagSeguro\Domains\Address $address */
$address = new \PagSeguro\Domains\Address(
    STREET,
    NUMBER,
    COMPLEMENT,
    DISTRICT,
    POSTALCODE,
    CITY,
    STATE,
    COUNTRY
);

/** @var \PagSeguro\Domains\Phone $phone */
$phone = new \PagSeguro\Domains\Phone(
    AREA,
    NUMBER
);

/** @var \PagSeguro\Domains\Document $phone */
$document = new \PagSeguro\Domains\Document(
    TYPE,
    IDENTIFIER
);

/**
 * Custos de frete dos itens. Representam os custos de frete de cada item sendo pago. Caso este custo seja
 * especificado, o PagSeguro irá assumi-lo como o custo do frete do item e não fará nenhum cálculo usando o peso do
 * item.
 *
 * Presença: Opcional.
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto (p.e., 1234.56), maior que 0.00 e menor ou igual a
 * 9999999.00.
 *
 * @var \PagSeguro\Domains\ShippingCost $shippingCost
 */
$shippingCost = new \PagSeguro\Domains\ShippingCost();
$shippingCost->setCost(10.00);

/**
 * Tipo de frete. Informa o tipo de frete a ser usado para o envio do produto. Esta informação é usada pelo PagSeguro
 * para calcular, junto aos Correios, o valor do frete a partir do peso dos itens. A tabela abaixo descreve os valores
 * aceitos e seus significados:
 * 1 - Encomenda normal (PAC).
 * 2 - SEDEX
 * 3 - Tipo de frete não especificado.
 *
 * Presença: Opcional.
 * Tipo: Número.
 * Formato: Um número inteiro de acordo com a tabela acima.
 *
 * @var \PagSeguro\Domains\ShippingType $shippingType
 */
$shippingType = new \PagSeguro\Domains\ShippingType();
$shippingType->setType(\PagSeguro\Enum\Shipping\Type::SEDEX);

$authorizationPartner = new \PagSeguro\Domains\Authorization\Partner(
    'John Doe',
    new DateTime('10-10-1990'),
    $document,
    new \PagSeguro\Domains\Phone('12', '13141231', \PagSeguro\Enum\Authorization\PhoneEnum::HOME)
);

$authorizationCompany = new \PagSeguro\Domains\Authorization\Company(
    'John Doe',
    'http://www.example.com',
    new \PagSeguro\Domains\Document('CNPJ', '32137524000115'),
    new \PagSeguro\Domains\Phone('12', '13131313', \PagSeguro\Enum\Authorization\PhoneEnum::BUSINESS),
    new \PagSeguro\Domains\Address($address),
    $authorizationPartner);

$accountCompany = new \PagSeguro\Domains\Authorization\Account('john@doe.com', $authorizationCompany);

$authorizationSeller = new \PagSeguro\Domains\Authorization\Seller(
    'John Doe',
    new DateTime('10-10-1990'),
    $document,
    new \PagSeguro\Domains\Phone('13', '13141516', \PagSeguro\Enum\Authorization\PhoneEnum::MOBILE),
    $address);

$accountSeller = new \PagSeguro\Domains\Authorization\Account('john123@doe.com', $authorizationSeller);

$item = new \PagSeguro\Domains\Item();

/**
 * Identificadores dos itens. Identificam os itens sendo pagos. Você pode escolher códigos que tenham significado para
 * seu sistema e informá-los nestes parâmetros. O PagSeguro não realiza qualquer validação sobre esses identificadores,
 * mas eles não podem se repetir em um mesmo pagamento.
 *
 * Presença: Obrigatória.
 * Tipo: Texto.
 * Formato: Livre, com limite de 100 caracteres.
 *
 * @var string $itemId
 */
$item->setId($itemId);

/**
 * Valores unitários dos itens. Representam os preços unitários de cada item sendo pago. Além de poder conter vários
 * itens, o pagamento também pode conter várias unidades do mesmo item. Este parâmetro representa o valor de uma
 * unidade do item, que será multiplicado pela quantidade para obter o valor total dentro do pagamento.
 *
 * Presença: Obrigatória.
 * Tipo: Número.
 * Formato: Decimal, com duas casas decimais separadas por ponto (p.e., 1234.56), maior que 0.00 e menor ou igual a
 * 9999999.00.
 *
 * @var string $description
 */
$item->setDescription($description);

/**
 * Quantidades dos itens. Representam as quantidades de cada item sendo pago. Além de poder conter vários itens, o
 * pagamento também pode conter várias unidades do mesmo item. Este parâmetro representa a quantidade de um item, que
 * será multiplicado pelo valor unitário para obter o valor total dentro do pagamento.
 *
 * Presença: Obrigatória.
 * Tipo: Número.
 * Formato: Um número inteiro maior ou igual a 1 e menor ou igual a 999.
 *
 *
 * @var string $amount
 */
$item->setAmount($amount);

/**
 * @var \PagSeguro\Domains\ShippingCost $shippingCost
 */
$item->setShippingCost($amount);

/**
 * Quantidades dos itens. Representam as quantidades de cada item sendo pago. Além de poder conter vários itens, o
 * pagamento também pode conter várias unidades do mesmo item. Este parâmetro representa a quantidade de um item, que
 * será multiplicado pelo valor unitário para obter o valor total dentro do pagamento. Formato: Um número inteiro maior
 * ou igual a 1 e menor ou igual a 999.
 *
 * @var integer $quantity
 */
$item->setQuantity($quantity);

/**
 * Pesos dos itens. Correspondem ao peso (em gramas) de cada item sendo pago. O PagSeguro usa o peso do item para
 * realizar o cálculo do custo de frete nos Correios, exceto se o custo de frete do item já for especificado
 * diretamente.
 *
 * Presença: Opcional.
 * Tipo: Número.
 * Formato: Um número inteiro correspondendo ao peso em gramas do item. A soma dos pesos de todos os produtos não pode
 * ultrapassar 30000 gramas (30 kg).
 *
 * @var integer $weight
 */
$item->setWeight($weight);
