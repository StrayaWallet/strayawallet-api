<?php
    /**************************************/
    /* Strayacoin Exchange Rate API       */
    /*                                    */
    /* Copyright 2018. AdelaideCreative   */
    /* www.adelaidecreative.com.au        */
    /**************************************/
     
     //Enter the $AUD price per NAH
     $AUD_NAH_RATE = '0.20';

    //make the api request for convert currency.
    function currencyConvert($from,$to,$amount){
    $url = "http://finance.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
    $request = curl_init(); 
    $timeOut = 0;
    curl_setopt ($request, CURLOPT_URL, $url); 
    curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 

    curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
    curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
    $response = curl_exec($request);
    //echo $response;
    curl_close($request);
    $regex  = '#\<span class=bld\>(.+?)\<\/span\>#s';
    preg_match($regex, $response, $converted);
    if(!empty($converted))
    return  strip_tags(preg_replace("/[^0-9,.]/", "", ($converted[0])?$converted[0]:0));

    }


// Add BTC Later on
// {"code":"BTC","n":'.currencyConvert('AUD','BTC', $AUD_NAH_RATE).',"price":"฿'.currencyConvert('AUD','BTC', $AUD_NAH_RATE).'","name":"Bitcoin"}

//Generate the converted rates into a string
$rates_pub = '

[{"code":"NAH","n":1,"name":"StrayaCoin"},
{"code":"AUD","n":'.$AUD_NAH_RATE.',"price":"AU$'.$AUD_NAH_RATE.'","name":"Australian Dollar"},
{"code":"NZD","n":'.currencyConvert('AUD','NZD', $AUD_NAH_RATE).',"price":"NZ$'.currencyConvert('AUD','NZD', $AUD_NAH_RATE).'","name":"New Zealand Dollar"},
{"code":"USD","n":'.currencyConvert('AUD','USD', $AUD_NAH_RATE).',"price":"$'.currencyConvert('AUD','USD', $AUD_NAH_RATE).'","name":"US Dollar"},
{"code":"GBP","n":'.currencyConvert('AUD','GBP', $AUD_NAH_RATE).',"price":"£'.currencyConvert('AUD','GBP', $AUD_NAH_RATE).'","name":"British Pound Sterling"},
{"code":"EUR","n":'.currencyConvert('AUD','EUR', $AUD_NAH_RATE).',"price":"€'.currencyConvert('AUD','EUR', $AUD_NAH_RATE).'","name":"Euro"},
{"code":"JPY","n":'.currencyConvert('AUD','JPY', $AUD_NAH_RATE).',"price":"¥'.currencyConvert('AUD','JPY', $AUD_NAH_RATE).'","name":"Japanese Yen"},
{"code":"BGN","n":'.currencyConvert('AUD','BGN', $AUD_NAH_RATE).',"price":"BGN'.currencyConvert('AUD','BGN', $AUD_NAH_RATE).'","name":"Bulgarian Lev"},
{"code":"CZK","n":'.currencyConvert('AUD','CZK', $AUD_NAH_RATE).',"price":"Kč'.currencyConvert('AUD','CZK', $AUD_NAH_RATE).'","name":"Czech Republic Koruna"},
{"code":"DKK","n":'.currencyConvert('AUD','DKK', $AUD_NAH_RATE).',"price":"Dkr'.currencyConvert('AUD','DKK', $AUD_NAH_RATE).'","name":"Danish Krone"},
{"code":"HUF","n":'.currencyConvert('AUD','HUF', $AUD_NAH_RATE).',"price":"Ft'.currencyConvert('AUD','HUF', $AUD_NAH_RATE).'","name":"Hungarian Forint"},
{"code":"PLN","n":'.currencyConvert('AUD','PLN', $AUD_NAH_RATE).',"price":"zł'.currencyConvert('AUD','PLN', $AUD_NAH_RATE).'PLN","name":"Polish Zloty"},
{"code":"RON","n":'.currencyConvert('AUD','RON', $AUD_NAH_RATE).',"price":"RON'.currencyConvert('AUD','RON', $AUD_NAH_RATE).'","name":"Romanian Leu"},
{"code":"SEK","n":'.currencyConvert('AUD','SEK', $AUD_NAH_RATE).',"price":"Skr'.currencyConvert('AUD','SEK', $AUD_NAH_RATE).'","name":"Swedish Krona"},
{"code":"CHF","n":'.currencyConvert('AUD','CHF', $AUD_NAH_RATE).',"price":"CHF'.currencyConvert('AUD','CHF', $AUD_NAH_RATE).'","name":"Swiss Franc"},
{"code":"NOK","n":'.currencyConvert('AUD','NOK', $AUD_NAH_RATE).',"price":"Nkr'.currencyConvert('AUD','NOK', $AUD_NAH_RATE).'","name":"Norwegian Krone"},
{"code":"HRK","n":'.currencyConvert('AUD','HRK', $AUD_NAH_RATE).',"price":"kn'.currencyConvert('AUD','HRK', $AUD_NAH_RATE).'","name":"Croatian Kuna"},
{"code":"RUB","n":'.currencyConvert('AUD','RUB', $AUD_NAH_RATE).',"price":"RUB'.currencyConvert('AUD','RUB', $AUD_NAH_RATE).'","name":"Russian Ruble"},
{"code":"TRY","n":'.currencyConvert('AUD','TRY', $AUD_NAH_RATE).',"price":"TL'.currencyConvert('AUD','TRY', $AUD_NAH_RATE).'","name":"Turkish Lira"},
{"code":"BRL","n":'.currencyConvert('AUD','BRL', $AUD_NAH_RATE).',"price":"R$'.currencyConvert('AUD','BRL', $AUD_NAH_RATE).'","name":"Brazilian Real"},
{"code":"CAD","n":'.currencyConvert('AUD','CAD', $AUD_NAH_RATE).',"price":"CA$'.currencyConvert('AUD','CAD', $AUD_NAH_RATE).'","name":"Canadian Dollar"},
{"code":"CNY","n":'.currencyConvert('AUD','CNY', $AUD_NAH_RATE).',"price":"CN¥'.currencyConvert('AUD','CNY', $AUD_NAH_RATE).'","name":"Chinese Yuan"},
{"code":"HKD","n":'.currencyConvert('AUD','HKD', $AUD_NAH_RATE).',"price":"HK$'.currencyConvert('AUD','HKD', $AUD_NAH_RATE).'","name":"Hong Kong Dollar"},
{"code":"IDR","n":'.currencyConvert('AUD','IDR', $AUD_NAH_RATE).',"price":"Rp'.currencyConvert('AUD','IDR', $AUD_NAH_RATE).'","name":"Indonesian Rupiah"},
{"code":"ILS","n":'.currencyConvert('AUD','ILS', $AUD_NAH_RATE).',"price":"₪'.currencyConvert('AUD','ILS', $AUD_NAH_RATE).'","name":"Israeli New Sheqel"},
{"code":"INR","n":'.currencyConvert('AUD','INR', $AUD_NAH_RATE).',"price":"Rs'.currencyConvert('AUD','INR', $AUD_NAH_RATE).'","name":"Indian Rupee"},
{"code":"KRW","n":'.currencyConvert('AUD','KRW', $AUD_NAH_RATE).',"price":"₩'.currencyConvert('AUD','KRW', $AUD_NAH_RATE).'","name":"South Korean Won"},
{"code":"MXN","n":'.currencyConvert('AUD','MXN', $AUD_NAH_RATE).',"price":"MX$'.currencyConvert('AUD','MXN', $AUD_NAH_RATE).'","name":"Mexican Peso"},
{"code":"MYR","n":'.currencyConvert('AUD','MYR', $AUD_NAH_RATE).',"price":"RM'.currencyConvert('AUD','MYR', $AUD_NAH_RATE).'","name":"Malaysian Ringgit"},
{"code":"PHP","n":'.currencyConvert('AUD','PHP', $AUD_NAH_RATE).',"price":"₱'.currencyConvert('AUD','PHP', $AUD_NAH_RATE).'","name":"Philippine Peso"},
{"code":"SGD","n":'.currencyConvert('AUD','SGD', $AUD_NAH_RATE).',"price":"S$'.currencyConvert('AUD','SGD', $AUD_NAH_RATE).'","name":"Singapore Dollar"},
{"code":"THB","n":'.currencyConvert('AUD','THB', $AUD_NAH_RATE).',"price":"฿'.currencyConvert('AUD','THB', $AUD_NAH_RATE).'","name":"Thai Baht"},
{"code":"ZAR","n":'.currencyConvert('AUD','ZAR', $AUD_NAH_RATE).',"price":"R'.currencyConvert('AUD','ZAR', $AUD_NAH_RATE).'","name":"South African Rand"},
{"code":"ISK","n":'.currencyConvert('AUD','ISK', $AUD_NAH_RATE).',"price":"Ikr'.currencyConvert('AUD','ISK', $AUD_NAH_RATE).'","name":"Icelandic Króna"}]

';
    
//Write the rates file for iOS & Android Apps to read
$file = 'index.php';

// Write the Updated Rates back to the file
file_put_contents($file, $rates_pub);

echo "Rates Updated!";
?>
