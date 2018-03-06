# Sips Library

This package provides a PHP implementation for Sips, the Woirldline e-payments gateway.

>:warning: This library was written for Sips 2.0 and is not comptible with Sips 1.0!

## Installation
The recommanded way to install this Sips Library is through [Composer](http://getcomposer.org).

Run the composer commmand to install the latest stable version of the package:
```bash
composer require worldline/sips-payment-sdk
```
After installing the package, you need to require Composer's autoloader:
```php
require 'vendor/autoload.php'
```

## Usage
>:bulb: Currently the labrary only supports Sips in paypage mode.
### Initialization
First, create a client for the desired environment using your merchant ID, key version & secret key.  

```php
//these parameters should not be hardcoded.
$sipsClient = new SipsClient(
    new SipsEnvironment("SIMU"), 
    "002001000000001", 
    "002001000000001_KEY1",
    1
    );
```
    
Next, set up the request to initialize a session on the Sips server. 

```php
$paypageRequest = new PaypageRequest();
$paypageRequest->setAmount(200);
$paypageRequest->setCurrencyCode("EUR");
$paypageRequest->setNormalReturnUrl('http://lib.wl.be//return.php');
$paypageRequest->setOrderChannel("INTERNET");
```

Add a unique reference for the transaction.
```php
$paymentRequest.setTransactionReference("myUniqueIdentifier");
``` 
:bulb: If no reference is provided by you, the plugin will generate one.

And finaly submit the request to the server to initialize the transaction.
```php
$initializationResponse = $sipsClient->initialize($paypageRequest);
```
The `initializationResponse` you'll receive grom the server contains all information needed to continue handling the transaction.
If your initialization was seccessful, your response will contain `redirectionStatusCode = '00'`  

### Redirection to the paypage
In case your initialization was successful, you have to use the redirectionUrl received to perform a POST request with both the redirectionData and seal as parameters.
Since this should redirect the customer to the Sips payment page, the cleanest exampleis a simpleHTML form:
```html
<form action="<?= $sipsResponse->getRedirectionUrl() ?>">
    <input type="hidden" name="redirectionVersion" value="<?= $sipsResponse->getRedirectionVersion() ?>">
    <input type="hidden" name="redirectionData" value="<?= $sipsResponse->getRedirectionData() ?>">
    <input type="submit" value="Go to PayPage">
</form>
```

### Verifying the payment
When the customer is done, he will be able to return to your application. This is done via a form, making a POST request to the normalReturnUrl provided during the initialization of your payment.
This POST request contains details on the payment.
You can simple decode these responses and create a `PaypageResult` object by calling the `decodeResponse` function:

```php
$sipsClient = new SipsClient( new SipsEnvironment("SIMU"), "002001000000001", "002001000000001_KEY1", 1 );
$paypageResponse = $sipsClient->decodeResponse();

```

> :warning: Since the customer is not always redirecting back (e.g. he closes the confirmation page), it's a good practice
to include an `automaticResponseUrl`. Sips will always POST details of the transaction to this URL, even if a customer
doesn't redirect back to your website.

