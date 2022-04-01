# com.brand4impact.client

Este contrato se usara para generar los clientes con todos los servicios necesarios.

`!Uso exclusivo interno!`
             
---


For more information, please visit [http://www.brand4impact.com](http://www.brand4impact.com).

## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/com.brand4impact.client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: BearerAuthentication
$config = com.brand4impact.client.invoker\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new com.brand4impact.client.invoker\Api\AssetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string | The unique token for the asset.

try {
    $result = $apiInstance->getAsset($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAsset: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost:8080/backend*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AssetApi* | [**getAsset**](docs/Api/AssetApi.md#getasset) | **GET** /rest/platform/asset/{token} | Get a single asset
*AssetApi* | [**getAssets**](docs/Api/AssetApi.md#getassets) | **GET** /rest/platform/asset | Get a set of assets
*CampaignApi* | [**createCampaign**](docs/Api/CampaignApi.md#createcampaign) | **POST** /rest/platform/campaign | Create a new campaign
*CampaignApi* | [**getCampaign**](docs/Api/CampaignApi.md#getcampaign) | **GET** /rest/platform/campaign/{token} | Get a single campaign
*CampaignApi* | [**getCampaigns**](docs/Api/CampaignApi.md#getcampaigns) | **GET** /rest/platform/campaign | Get a set of campaigns
*CampaignApi* | [**switchCampaign**](docs/Api/CampaignApi.md#switchcampaign) | **PUT** /rest/platform/campaign/{token}/switch | Switch campaign status
*CampaignApi* | [**updateCampaign**](docs/Api/CampaignApi.md#updatecampaign) | **PUT** /rest/platform/campaign/{token} | Update a campaign
*CompanyApi* | [**createCompany**](docs/Api/CompanyApi.md#createcompany) | **POST** /rest/platform/company | Create a new Company
*CompanyApi* | [**getCompany**](docs/Api/CompanyApi.md#getcompany) | **GET** /rest/platform/company | Get your Company
*CompanyApi* | [**updateCompany**](docs/Api/CompanyApi.md#updatecompany) | **PUT** /rest/platform/company | Update Company data
*CompanyApi* | [**updateCompanyLegal**](docs/Api/CompanyApi.md#updatecompanylegal) | **PUT** /rest/platform/company/legal | Update legal Company info
*CompanyApi* | [**updateCompanyTopic**](docs/Api/CompanyApi.md#updatecompanytopic) | **PUT** /rest/platform/company/topic | Update selected topics for your Company
*InvoiceApi* | [**getInvoice**](docs/Api/InvoiceApi.md#getinvoice) | **GET** /rest/platform/invoice/{token} | Get a single invoice
*InvoiceApi* | [**getInvoices**](docs/Api/InvoiceApi.md#getinvoices) | **GET** /rest/platform/invoice | Get a set of invoices
*NgoApi* | [**createNgo**](docs/Api/NgoApi.md#createngo) | **POST** /rest/platform/ngo | Create a new NGO
*NgoApi* | [**getNgo**](docs/Api/NgoApi.md#getngo) | **GET** /rest/platform/ngo | Get your NGO
*NgoApi* | [**updateNgo**](docs/Api/NgoApi.md#updatengo) | **PUT** /rest/platform/ngo | Update NGO data
*NgoApi* | [**updateNgoBank**](docs/Api/NgoApi.md#updatengobank) | **PUT** /rest/platform/ngo/bank | Update bank NGO info
*NgoApi* | [**updateNgoLegal**](docs/Api/NgoApi.md#updatengolegal) | **PUT** /rest/platform/ngo/legal | Update legal NGO info
*NgoApi* | [**uploadNgoFiles**](docs/Api/NgoApi.md#uploadngofiles) | **PUT** /rest/platform/ngo/upload | Upload NGO files
*ProjectApi* | [**createProject**](docs/Api/ProjectApi.md#createproject) | **POST** /rest/platform/project | Create a new project
*ProjectApi* | [**getProject**](docs/Api/ProjectApi.md#getproject) | **GET** /rest/platform/project/{token} | Get a single project
*ProjectApi* | [**getProjects**](docs/Api/ProjectApi.md#getprojects) | **GET** /rest/platform/project | Get a set of projects
*ProjectApi* | [**switchProject**](docs/Api/ProjectApi.md#switchproject) | **PUT** /rest/platform/project/{token}/switch | Switch project status
*ProjectApi* | [**updateProject**](docs/Api/ProjectApi.md#updateproject) | **PUT** /rest/platform/project/{token} | Update a project
*SectorApi* | [**getSector**](docs/Api/SectorApi.md#getsector) | **GET** /rest/platform/sector/{token} | Get a single sector
*SectorApi* | [**getSectors**](docs/Api/SectorApi.md#getsectors) | **GET** /rest/platform/sector | Get a set of sectors
*SecurityApi* | [**getJWTToken**](docs/Api/SecurityApi.md#getjwttoken) | **GET** /security/jwt | get JWT token
*TopicApi* | [**getTopic**](docs/Api/TopicApi.md#gettopic) | **GET** /rest/platform/topic/{token} | Get a single topic
*TopicApi* | [**getTopics**](docs/Api/TopicApi.md#gettopics) | **GET** /rest/platform/topic | Get a set of topics
*UserApi* | [**changeUserPassword**](docs/Api/UserApi.md#changeuserpassword) | **PUT** /rest/platform/user/{token}/changepassword | Change user&#39;s password
*UserApi* | [**confirmUser**](docs/Api/UserApi.md#confirmuser) | **POST** /rest/platform/user/{token} | Activate a user
*UserApi* | [**getUser**](docs/Api/UserApi.md#getuser) | **GET** /rest/platform/user/{token} | Get a single user
*UserApi* | [**getUsers**](docs/Api/UserApi.md#getusers) | **GET** /rest/platform/user | Get a set of users
*UserApi* | [**inviteUser**](docs/Api/UserApi.md#inviteuser) | **POST** /rest/platform/user/invite | Invite a new user
*UserApi* | [**resetUserPassword**](docs/Api/UserApi.md#resetuserpassword) | **PUT** /rest/platform/user/resetpassword | Reset user&#39;s password
*UserApi* | [**switchUser**](docs/Api/UserApi.md#switchuser) | **PUT** /rest/platform/user/{token}/switch | Switch user&#39;s status
*UserApi* | [**updateUser**](docs/Api/UserApi.md#updateuser) | **PUT** /rest/platform/user/{token} | Update user data
*UserApi* | [**updateUserExt**](docs/Api/UserApi.md#updateuserext) | **PUT** /rest/platform/user/{token}/ext | Update sensitive user data
*UtilsApi* | [**getCountries**](docs/Api/UtilsApi.md#getcountries) | **GET** /rest/platform/utils/country | Get countries
*UtilsApi* | [**getCurrencies**](docs/Api/UtilsApi.md#getcurrencies) | **GET** /rest/platform/utils/currency | Get currencies
*UtilsApi* | [**getLanguages**](docs/Api/UtilsApi.md#getlanguages) | **GET** /rest/platform/utils/language | Get languages
*UtilsApi* | [**getRoles**](docs/Api/UtilsApi.md#getroles) | **GET** /rest/platform/utils/roles | Get roles
*UtilsApi* | [**getZones**](docs/Api/UtilsApi.md#getzones) | **GET** /rest/platform/utils/zone | Get zones
*VoucherApi* | [**downloadVoucherQr**](docs/Api/VoucherApi.md#downloadvoucherqr) | **GET** /rest/platform/voucher/{token}/qr | Download the voucher QR image
*VoucherApi* | [**downloadVouchersFile**](docs/Api/VoucherApi.md#downloadvouchersfile) | **GET** /rest/platform/voucher/campaign/{campaignToken}/file | Download a set of voucher&#39;s links file
*VoucherApi* | [**downloadVouchersQr**](docs/Api/VoucherApi.md#downloadvouchersqr) | **GET** /rest/platform/voucher/campaign/{campaignToken}/qr | Download a set of voucher QR images
*VoucherApi* | [**getVoucher**](docs/Api/VoucherApi.md#getvoucher) | **GET** /rest/platform/voucher/{token} | Get a single voucher
*VoucherApi* | [**getVouchers**](docs/Api/VoucherApi.md#getvouchers) | **GET** /rest/platform/voucher/campaign/{campaignToken} | Get a set of vouchers

## Models

- [ApiSort](docs/Model/ApiSort.md)
- [Pagination](docs/Model/Pagination.md)
- [PlatformAsset](docs/Model/PlatformAsset.md)
- [PlatformAssetItem](docs/Model/PlatformAssetItem.md)
- [PlatformAssetItemWrapper](docs/Model/PlatformAssetItemWrapper.md)
- [PlatformCampaign](docs/Model/PlatformCampaign.md)
- [PlatformCampaignItem](docs/Model/PlatformCampaignItem.md)
- [PlatformCampaignItemWrapper](docs/Model/PlatformCampaignItemWrapper.md)
- [PlatformCompany](docs/Model/PlatformCompany.md)
- [PlatformCompanyAddress](docs/Model/PlatformCompanyAddress.md)
- [PlatformCompanyLegal](docs/Model/PlatformCompanyLegal.md)
- [PlatformCompanyLegalAddress](docs/Model/PlatformCompanyLegalAddress.md)
- [PlatformCountry](docs/Model/PlatformCountry.md)
- [PlatformCurrency](docs/Model/PlatformCurrency.md)
- [PlatformInvoice](docs/Model/PlatformInvoice.md)
- [PlatformInvoiceEntry](docs/Model/PlatformInvoiceEntry.md)
- [PlatformInvoiceEntryBase](docs/Model/PlatformInvoiceEntryBase.md)
- [PlatformInvoiceItem](docs/Model/PlatformInvoiceItem.md)
- [PlatformInvoiceItemWrapper](docs/Model/PlatformInvoiceItemWrapper.md)
- [PlatformLanguage](docs/Model/PlatformLanguage.md)
- [PlatformNgo](docs/Model/PlatformNgo.md)
- [PlatformNgoAddress](docs/Model/PlatformNgoAddress.md)
- [PlatformNgoLegal](docs/Model/PlatformNgoLegal.md)
- [PlatformNgoLegalAddress](docs/Model/PlatformNgoLegalAddress.md)
- [PlatformProject](docs/Model/PlatformProject.md)
- [PlatformProjectItem](docs/Model/PlatformProjectItem.md)
- [PlatformProjectItemWrapper](docs/Model/PlatformProjectItemWrapper.md)
- [PlatformRole](docs/Model/PlatformRole.md)
- [PlatformSector](docs/Model/PlatformSector.md)
- [PlatformSectorItem](docs/Model/PlatformSectorItem.md)
- [PlatformSectorItemWrapper](docs/Model/PlatformSectorItemWrapper.md)
- [PlatformTopic](docs/Model/PlatformTopic.md)
- [PlatformTopicItem](docs/Model/PlatformTopicItem.md)
- [PlatformTopicItemWrapper](docs/Model/PlatformTopicItemWrapper.md)
- [PlatformUser](docs/Model/PlatformUser.md)
- [PlatformUserItem](docs/Model/PlatformUserItem.md)
- [PlatformUserItemWrapper](docs/Model/PlatformUserItemWrapper.md)
- [PlatformVoucher](docs/Model/PlatformVoucher.md)
- [PlatformVoucherItem](docs/Model/PlatformVoucherItem.md)
- [PlatformVoucherItemWrapper](docs/Model/PlatformVoucherItemWrapper.md)
- [PlatformZone](docs/Model/PlatformZone.md)
- [RestError](docs/Model/RestError.md)
- [SecurityUser](docs/Model/SecurityUser.md)

## Authorization

### BasicAuthentication

- **Type**: HTTP basic authentication


### BearerAuthentication

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

support@brand4impact.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `0.0.1`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
