<?php
$currency = "usd";
if(isset($_GET['currency']))
{
    $currency = $_GET['currency'];
}
$currency_lowercase = strtolower($currency);
$currency_uppercase = strtoupper($currency);
$data_base = array
(
'AED',
'AFN',
'ALL',
'AMD',
'ANG',
'AOA',
'ARS',
'AUD',
'AWG',
'AZN',
'BAM',
'BBD',
'BDT',
'BGN',
'BHD',
'BIF',
'BMD',
'BND',
'BOB',
'BRL',
'BSD',
'BTN',
'BWP',
'BYN',
'BYR',
'BZD',
'CAD',
'CDF',
'CHF',
'CLF',
'CLP',
'CNY',
'COP',
'CRC',
'CUC',
'CVE',
'CZK',
'DJF',
'DKK',
'DOP',
'DZD',
'EGP',
'ETB',
'EUR',
'FJD',
'FKP',
'GBP',
'GEL',
'GHS',
'GIP',
'GMD',
'GNF',
'GTQ',
'GYD',
'HKD',
'HNL',
'HRK',
'HTG',
'HUF',
'IDR',
'ILS',
'INR',
'IQD',
'ISK',
'JMD',
'JOD',
'JPY',
'KES',
'KGS',
'KHR',
'KMF',
'KRW',
'KWD',
'KYD',
'KZT',
'LAK',
'LBP',
'LKR',
'LRD',
'LSL',
'LYD',
'MAD',
'MDL',
'MGA',
'MKD',
'MMK',
'MNT',
'MOP',
'MUR',
'MVR',
'MWK',
'MXN',
'MYR',
'MZN',
'NAD',
'NGN',
'NIO',
'NOK',
'NPR',
'NZD',
'OMR',
'PAB',
'PEN',
'PGK',
'PHP',
'PKR',
'PLN',
'PYG',
'QAR',
'RON',
'RSD',
'RUB',
'RWF',
'SAR',
'SBD',
'SCR',
'SEK',
'SHP',
'SLL',
'SOS',
'SRD',
'SSP',
'STD',
'SVC',
'SZL',
'THB',
'TJS',
'TMT',
'TND',
'TOP',
'TRY',
'TTD',
'TWD',
'TZS',
'UAH',
'UGX',
'UYU',
'UZS',
'VES',
'VND',
'VUV',
'WST',
'XAF',
'XAG',
'XAU',
'XBA',
'XCD',
'XDR',
'XOF',
'XPD',
'XPF',
'XPT',
'XTS',
'YER',
'ZAR',
'ZMW',
'JEP',
'GGP',
'IMP',
'GBX',
'CNH',
'LTL',
'ZWD',
'ZWL',
'VEF',
'SGD',
'USD',
);

$currency_names = array
(
'United Arab Emirates Dirham (AED)',
'Afghan Afghani (AFN)',
'Albanian Lek (ALL)',
'Armenian Dram (AMD)',
'Netherlands Antillean Gulden (ANG)',
'Angolan Kwanza (AOA)',
'Argentine Peso (ARS)',
'Australian Dollar (AUD)',
'Aruban Florin (AWG)',
'Azerbaijani Manat (AZN)',
'Bosnia and Herzegovina Convertible Mark (BAM)',
'Barbadian Dollar (BBD)',
'Bangladeshi Taka (BDT)',
'Bulgarian Lev (BGN)',
'Bahraini Dinar (BHD)',
'Burundian Franc (BIF)',
'Bermudian Dollar (BMD)',
'Brunei Dollar (BND)',
'Bolivian Boliviano (BOB)',
'Brazilian Real (BRL)',
'Bahamian Dollar (BSD)',
'Bhutanese Ngultrum (BTN)',
'Botswana Pula (BWP)',
'Belarusian Ruble (BYN)',
'Belarusian Ruble (BYR)',
'Belize Dollar (BZD)',
'Canadian Dollar (CAD)',
'Congolese Franc (CDF)',
'Swiss Franc (CHF)',
'Unidad de Fomento (CLF)',
'Chilean Peso (CLP)',
'Chinese Renminbi Yuan (CNY)',
'Colombian Peso (COP)',
'Costa Rican Colón (CRC)',
'Cuban Convertible Peso (CUC)',
'Cape Verdean Escudo (CVE)',
'Czech Koruna (CZK)',
'Djiboutian Franc (DJF)',
'Danish Krone (DKK)',
'Dominican Peso (DOP)',
'Algerian Dinar (DZD)',
'Egyptian Pound (EGP)',
'Ethiopian Birr (ETB)',
'Euro (EUR)',
'Fijian Dollar (FJD)',
'Falkland Pound (FKP)',
'British Pound (GBP)',
'Georgian Lari (GEL)',
'Ghanaian Cedi (GHS)',
'Gibraltar Pound (GIP)',
'Gambian Dalasi (GMD)',
'Guinean Franc (GNF)',
'Guatemalan Quetzal (GTQ)',
'Guyanese Dollar (GYD)',
'Hong Kong Dollar (HKD)',
'Honduran Lempira (HNL)',
'Croatian Kuna (HRK)',
'Haitian Gourde (HTG)',
'Hungarian Forint (HUF)',
'Indonesian Rupiah (IDR)',
'Israeli New Sheqel (ILS)',
'Indian Rupee (INR)',
'Iraqi Dinar (IQD)',
'Icelandic Króna (ISK)',
'Jamaican Dollar (JMD)',
'Jordanian Dinar (JOD)',
'Japanese Yen (JPY)',
'Kenyan Shilling (KES)',
'Kyrgyzstani Som (KGS)',
'Cambodian Riel (KHR)',
'Comorian Franc (KMF)',
'South Korean Won (KRW)',
'Kuwaiti Dinar (KWD)',
'Cayman Islands Dollar (KYD)',
'Kazakhstani Tenge (KZT)',
'Lao Kip (LAK)',
'Lebanese Pound (LBP)',
'Sri Lankan Rupee (LKR)',
'Liberian Dollar (LRD)',
'Lesotho Loti (LSL)',
'Libyan Dinar (LYD)',
'Moroccan Dirham (MAD)',
'Moldovan Leu (MDL)',
'Malagasy Ariary (MGA)',
'Macedonian Denar (MKD)',
'Myanmar Kyat (MMK)',
'Mongolian Tögrög (MNT)',
'Macanese Pataca (MOP)',
'Mauritian Rupee (MUR)',
'Maldivian Rufiyaa (MVR)',
'Malawian Kwacha (MWK)',
'Mexican Peso (MXN)',
'Malaysian Ringgit (MYR)',
'Mozambican Metical (MZN)',
'Namibian Dollar (NAD)',
'Nigerian Naira (NGN)',
'Nicaraguan Córdoba (NIO)',
'Norwegian Krone (NOK)',
'Nepalese Rupee (NPR)',
'New Zealand Dollar (NZD)',
'Omani Rial (OMR)',
'Panamanian Balboa (PAB)',
'Peruvian Sol (PEN)',
'Papua New Guinean Kina (PGK)',
'Philippine Peso (PHP)',
'Pakistani Rupee (PKR)',
'Polish Złoty (PLN)',
'Paraguayan Guaraní (PYG)',
'Qatari Riyal (QAR)',
'Romanian Leu (RON)',
'Serbian Dinar (RSD)',
'Russian Ruble (RUB)',
'Rwandan Franc (RWF)',
'Saudi Riyal (SAR)',
'Solomon Islands Dollar (SBD)',
'Seychellois Rupee (SCR)',
'Swedish Krona (SEK)',
'Saint Helenian Pound (SHP)',
'Sierra Leonean Leone (SLL)',
'Somali Shilling (SOS)',
'Surinamese Dollar (SRD)',
'South Sudanese Pound (SSP)',
'São Tomé and Príncipe Dobra (STD)',
'Salvadoran Colón (SVC)',
'Swazi Lilangeni (SZL)',
'Thai Baht (THB)',
'Tajikistani Somoni (TJS)',
'Turkmenistani Manat (TMT)',
'Tunisian Dinar (TND)',
'Tongan Paʻanga (TOP)',
'Turkish Lira (TRY)',
'Trinidad and Tobago Dollar (TTD)',
'New Taiwan Dollar (TWD)',
'Tanzanian Shilling (TZS)',
'Ukrainian Hryvnia (UAH)',
'Ugandan Shilling (UGX)',
'Uruguayan Peso (UYU)',
'Uzbekistan Som (UZS)',
'Venezuelan Bolívar Soberano (VES)',
'Vietnamese Đồng (VND)',
'Vanuatu Vatu (VUV)',
'Samoan Tala (WST)',
'Central African Cfa Franc (XAF)',
'Silver (Troy Ounce) (XAG)',
'Gold (Troy Ounce) (XAU)',
'European Composite Unit (XBA)',
'East Caribbean Dollar (XCD)',
'Special Drawing Rights (XDR)',
'West African Cfa Franc (XOF)',
'Palladium (XPD)',
'Cfp Franc (XPF)',
'Platinum (XPT)',
'Codes specifically reserved for testing purposes (XTS)',
'Yemeni Rial (YER)',
'South African Rand (ZAR)',
'Zambian Kwacha (ZMW)',
'Jersey Pound (JEP)',
'Guernsey Pound (GGP)',
'Isle of Man Pound (IMP)',
'British Penny (GBX)',
'Chinese Renminbi Yuan Offshore (CNH)',
'Lithuanian Litas (LTL)',
'Zimbabwean Dollar (ZWD)',
'Zimbabwean Dollar (ZWL)',
'Venezuelan Bolívar (VEF)',
'Singapore Dollar (SGD)',
'US Dollar (USD)',
);

$currency_index = array_search($currency_uppercase, $data_base);
$currency_name = 'US Dollar (USD)';
if ($currency_index !== false) 
{
    $currency_name = $currency_names[$currency_index];
} 
else 
{
    $currency = "usd";
    $currency_lowercase = strtolower($currency);
    $currency_uppercase = strtoupper($currency);
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>KLAYswap Protocol (KSP) price in <?=$currency_name?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <meta content="KLAYswap Protocol (KSP) price in <?=$currency_name?>" name="description" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VLS7JPFSN9"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-VLS7JPFSN9');
    </script>
    <style>
    .wrapper {
        min-width: 500px;
    }
    </style>
</head>
<body>
    <div class="col-lg-8 mx-auto p-3 wrapper">
        <div class="text-center"><a href="https://cryptony.app"><img src="https://cryptony.app/img/cryptony-logo.png" width="80" height="80"/></a></div>
        <h1 class="text-center">Current KLAYswap Protocol (KSP) price in <?=$currency_name?></h1>
        <p class="text-center">Date: <span id="today">Loading...</span></p>
        <div class="text-center"><button class="btn btn-lg btn-secondary" onclick="window.print()"><i class="bi bi-filetype-pdf"></i> Print</button></div>
        <br/>
        
        <h2>Current KSP price in <?=$currency_uppercase?></h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="all" data-show-chart="false" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP stats</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="all" data-show-chart="false" data-show-stats="true" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (All time - ALL)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="all" data-show-chart="true" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (1 Year)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="year" data-show-chart="true" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (1 Month - 1M)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="month" data-show-chart="true" data-show-stats="true" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (1 Week - 1W)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="week" data-show-chart="true" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (24 Hours - 24H)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="day" data-show-chart="true" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <h2>KSP price in <?=$currency_uppercase?> (1 Hour - 1H)</h2>
        <div class="cb-widget" data-asset-symbol="KSP" data-asset-id="1969efb8-2739-5827-a31c-06f8ae26e3c6" data-period="hour" data-show-chart="true" data-show-stats="false" data-locale="en" data-country="US" data-base="<?=$currency_uppercase?>" data-slug="klayswap-protocol"></div><script async src="https://widget.coinbase.com/embed-v1.3.js"></script>
        <br/>
        
        <div class="text-center"><a href="/price/ksp"><button class="btn btn-lg btn-primary"><i class="bi bi-arrow-left-square"></i> See all KSP prices</button></a></div>
        <br/>
        
        <p>Made by <a href="https://cryptony.app/">cryptony.app</a> team. Contact us in <a href="https://cryptony.app/discord">Discord</a> if any issue.</p>
        
        <p>➡️ Try <a href="https://cryptony.app/wallet/">The fastest, easiest to use, one of a kind, browser-based Bitcoin wallet</a> - <a href="https://cryptony.app/wallet/">💼 Cryptony Wallet</a> </p>
        
        <p>💡 Register as a citizen for <a href="https://cryptony.app/">The World's First Digital Country</a> - <a href="https://cryptony.app/">⛰️ Cryptony</a> </p>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <br/>
    </div>
    <script>
        window.addEventListener('load', function () {
            var today = new Date();
            var date = today.getFullYear()+'.'+(today.getMonth()+1)+'.'+today.getDate();
            console.log(date);
            document.getElementById("today").innerHTML = date;
        });
    </script>
</body>
</html>