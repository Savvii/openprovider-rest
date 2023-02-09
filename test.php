<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = \Savvii\OpenproviderRest\Configuration::getDefaultConfiguration();
$config->setApiKeyPrefix('Authorization', 'Bearer');
$config->setDebug(false);

$loginResult = (new \Savvii\OpenproviderRest\Api\AuthApi())->login(
    [
        'username' => 'dhm',
        'password' => 'BasMHguxUBOn4tfGu5pOheoNyPVRZYaM2b'
    ]
);

$config->setApiKey('Authorization', $loginResult->getData()->getToken());

$domainApi = new \Savvii\OpenproviderRest\Api\DomainServiceApi(config: $config);
$listResponse = $domainApi->listDomains(full_name: 'dhm-infra.nl', limit: 1);
$data = $listResponse->getData();
if (1 == $data->getTotal())
{
    $result = $data->getResults()[0];
    printf("ID: %d, Auth Code: %s\n\n", $result->getId(), $result->getAuthCode());
    $arrayResult = json_decode($result, true);
    var_dump($arrayResult);
}
