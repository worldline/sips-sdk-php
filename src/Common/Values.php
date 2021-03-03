<?php

namespace Worldline\Sips\Values\PanType {

    const CSE = 'CSE';              // The PAN provided is encrypted by CSE Javascript library (Client Side Encryption)
    const PAN = 'PAN';              // The PAN is provided in clear text
    const TOKEN_PAN = 'TOKEN_PAN';  // The PAN provided is a token

}

namespace Worldline\Sips\Values\CscType {

    const CSE = 'CSE';              // The CSC (Card Security Code) provided is encrypted by the CSE (Client Side Encryption) Javascript library
    const PLAIN = 'PLAIN';          // The CSC (Card Security Code) is provided in clear text. It is the default value

}

namespace Worldline\Sips\Values\paymentMeanBrandSelectionStatus {

    const DEFAULT_MODE = 'APPLIED_DEFAULT';     // The cardholder accepted the default merchant choice
    const HOLDER = 'APPLIED_HOLDER';            // The cardholder selected a card brand different from the default merchant choice
    const NOT_APPLICABLE = 'NOT_APPLICABLE';    // Card number filled is not a cobadged card

}

namespace Worldline\Sips\Values\PaymentPattern {

    const ONE_SHOT = 'ONE_SHOT';        // One shot payment (default value)
    const ISNTALMENT = 'INSTALMENT';    // Payment by instalment
    const RECURRING_1 = 'RECURRING_1';  // Recurring payment first payment
    const RECURRING_N = 'RECURRING_N';  // Recurring payment nth payment

}

namespace Worldline\Sips\Values\MerchantCustomerAuthentMethod {

    const NOAUTHENT = 'NOAUTHENT';          //	No authentication of the customer by the merchant
    const OWNCREDENTIAL = 'OWNCREDENTIAL';  // 	Customer authentication by the merchant using his own system
    const FEDERATEDID = 'FEDERATEDID';      // 	Customer authentication by the merchant using an identifier federated (facebook, ...) (e.g. Facebook)
    const ISSUERID = 'ISSUERID';            // 	Customer authentication by the merchant using information of the issuer's payment mean
    const THIRDPARTY = 'THIRDPARTY';        // 	Customer authentication by the merchant using a third system
    const FIDO = 'FIDO';                    // 	Customer authentication by the merchant with FIDO (Fast IDentity Online) system

}

namespace Worldline\Sips\Values\ChallengeMode3DS {

    const CHALLENGE = 'CHALLENGE';                          // The merchant desired authentication challenge mode is to have a client authentication. In other words, it is a "challenge" request
    const CHALLENGE_MANDATE = 'CHALLENGE_MANDATE';          // The merchant need is to apply the regulatory mode to have a strong customer authentication (for example for the first payment of payment schedule)
    const NO_CHALLENGE = 'NO_CHALLENGE';                    // The merchant desired authentication challenge mode is to have no customer authentication. In other words, it is a "challenge" request
    const NO_CHALLENGE_TRA_ACQ = 'NO_CHALLENGE_TRA_ACQ';    // The merchant desired no authentication of the cardholder by invoking the TRA acquirer exemption. It's a request for "Frictionless".
    const NO_PREFERENCE = 'NO_PREFERENCE';                  // The merchant has no desired authentication challenge mode

}

namespace Worldline\Sips\Values\Country {

    const ARUBA = 'ABW';
    const AFGHANISTAN = 'AFG';
    const ANGOLA = 'AGO';
    const ANGUILLA = 'AIA';
    const ALAND_ISLANDS = 'ALA';
    const ALBANIA = 'ALB';
    const ANDORRA = 'AND';
    const UNITED_ARAB_EMIRATES = 'ARE';
    const ARGENTINA = 'ARG';
    const ARMENIA = 'ARM';
    const AMERICAN_SAMOA = 'ASM';
    const ANTARCTICA = 'ATA';
    const FRENCH_SOUTHERN_TERRITORIES = 'ATF';
    const ANTIGUA_AND_BARBUDA = 'ATG';
    const AUSTRALIA = 'AUS';
    const AUSTRIA = 'AUT';
    const AZERBAIJAN = 'AZE';
    const BURUNDI = 'BDI';
    const BELGIUM = 'BEL';
    const BENIN = 'BEN';
    const BONAIRE_SINT_EUSTATIUS_AND_SABA = 'BES';
    const BURKINA_FASO = 'BFA';
    const BANGLADESH = 'BGD';
    const BULGARIA = 'BGR';
    const BAHRAIN = 'BHR';
    const BAHAMAS = 'BHS';
    const BOSNIA_AND_HERZEGOVINA = 'BIH';
    const SAINT_KITTS_AND_NEVIS = 'BLM';
    const BELARUS = 'BLR';
    const BELIZE = 'BLZ';
    const BERMUDA = 'BMU';
    const BOLIVIA_PLURINATIONAL_STATE_OF = 'BOL';
    const BRAZIL = 'BRA';
    const BARBADOS = 'BRB';
    const BRUNEI_DARUSSALAM = 'BRN';
    const BHUTAN = 'BTN';
    const BOUVET_ISLAND = 'BVT';
    const BOTSWANA = 'BWA';
    const CENTRAL_AFRICAN_REPUBLIC = 'CAF';
    const CANADA = 'CAN';
    const COCOS_KEELING_ISLANDS = 'CCK';
    const SWITZERLAND = 'CHE';
    const CHILE = 'CHL';
    const CHINA = 'CHN';
    const COTE_D_IVOIRE = 'CIV';
    const CAMEROON = 'CMR';
    const CONGO_THE_DEMOCRATIC_REPUBLIC_OF_THE = 'COD';
    const CONGO = 'COG';
    const COOK_ISLANDS = 'COK';
    const COLOMBIA = 'COL';
    const COMOROS = 'COM';
    const CAPE_VERDE = 'CPV';
    const COSTA_RICA = 'CRI';
    const CUBA = 'CUB';
    const CURACAO = 'CUW';
    const CHRISTMAS_ISLAND = 'CXR';
    const CAYMAN_ISLANDS = 'CYM';
    const CYPRUS = 'CYP';
    const CZECH_REPUBLIC = 'CZE';
    const GERMANY = 'DEU';
    const DJIBOUTI = 'DJI';
    const DOMINICA = 'DMA';
    const DENMARK = 'DNK';
    const DOMINICAN_REPUBLIC = 'DOM';
    const ALGERIA = 'DZA';
    const ECUADOR = 'ECU';
    const EGYPT = 'EGY';
    const ERITREA = 'ERI';
    const WESTERN_SAHARA = 'ESH';
    const SPAIN = 'ESP';
    const ESTONIA = 'EST';
    const ETHIOPIA = 'ETH';
    const FINLAND = 'FIN';
    const FIJI = 'FJI';
    const FALKLAND_ISLANDS_MALVINAS = 'FLK';
    const FRANCE = 'FRA';
    const FAROE_ISLANDS = 'FRO';
    const MICRONESIA_FEDERATED_STATES_OF = 'FSM';
    const GABON = 'GAB';
    const UNITED_KINGDOM = 'GBR';
    const GEORGIA = 'GEO';
    const GUERNSEY = 'GGY';
    const GHANA = 'GHA';
    const GIBRALTAR = 'GIB';
    const GUINEA = 'GIN';
    const GUADELOUPE = 'GLP';
    const GAMBIA = 'GMB';
    const GUINEA_BISSAU = 'GNB';
    const EQUATORIAL_GUINEA = 'GNQ';
    const GREECE = 'GRC';
    const GRENADA = 'GRD';
    const GREENLAND = 'GRL';
    const GUATEMALA = 'GTM';
    const FRENCH_GUIANA = 'GUF';
    const GUAM = 'GUM';
    const GUYANA = 'GUY';
    const HONG_KONG = 'HKG';
    const HEARD_ISLAND_AND_MCDONALD_ISLANDS = 'HMD';
    const HONDURAS = 'HND';
    const CROATIA = 'HRV';
    const HAITI = 'HTI';
    const HUNGARY = 'HUN';
    const INDONESIA = 'IDN';
    const ISLE_OF_MAN = 'IMN';
    const INDIA = 'IND';
    const BRITISH_INDIAN_OCEAN_TERRITORY = 'IOT';
    const IRELAND = 'IRL';
    const IRAN_ISLAMIC_REPUBLIC_OF = 'IRN';
    const IRAQ = 'IRQ';
    const ICELAND = 'ISL';
    const ISRAEL = 'ISR';
    const ITALY = 'ITA';
    const JAMAICA = 'JAM';
    const JERSEY = 'JEY';
    const JORDAN = 'JOR';
    const JAPAN = 'JPN';
    const KAZAKHSTAN = 'KAZ';
    const KENYA = 'KEN';
    const KYRGYZSTAN = 'KGZ';
    const CAMBODIA = 'KHM';
    const KIRIBATI = 'KIR';
    const SAINT_BARTH_LEMY = 'KNA';
    const KOREA_REPUBLIC_OF = 'KOR';
    const KUWAIT = 'KWT';
    const LAO_PEOPLE_S_DEMOCRATIC_REPUBLIC = 'LAO';
    const LEBANON = 'LBN';
    const LIBERIA = 'LBR';
    const LIBYA = 'LBY';
    const SAINT_HELENA_ASCENSION_AND_TRISTAN_DA_CUNHA = 'LCA';
    const LIECHTENSTEIN = 'LIE';
    const SRI_LANKA = 'LKA';
    const LESOTHO = 'LSO';
    const LITHUANIA = 'LTU';
    const LUXEMBOURG = 'LUX';
    const LATVIA = 'LVA';
    const MACAO = 'MAC';
    const SAINT_MARTIN_FRENCH_PART = 'MAF';
    const MOROCCO = 'MAR';
    const MONACO = 'MCO';
    const MOLDOVA_REPUBLIC_OF = 'MDA';
    const MADAGASCAR = 'MDG';
    const MALDIVES = 'MDV';
    const MEXICO = 'MEX';
    const MARSHALL_ISLANDS = 'MHL';
    const MACEDONIA_THE_FORMER_YUGOSLAV_REPUBLIC_OF = 'MKD';
    const MALI = 'MLI';
    const MALTA = 'MLT';
    const MYANMAR = 'MMR';
    const MONTENEGRO = 'MNE';
    const MONGOLIA = 'MNG';
    const NORTHERN_MARIANA_ISLANDS = 'MNP';
    const MOZAMBIQUE = 'MOZ';
    const MAURITANIA = 'MRT';
    const MONTSERRAT = 'MSR';
    const MARTINIQUE = 'MTQ';
    const MAURITIUS = 'MUS';
    const MALAWI = 'MWI';
    const MALAYSIA = 'MYS';
    const MAYOTTE = 'MYT';
    const NAMIBIA = 'NAM';
    const NEW_CALEDONIA = 'NCL';
    const NIGER = 'NER';
    const NORFOLK_ISLAND = 'NFK';
    const NIGERIA = 'NGA';
    const NICARAGUA = 'NIC';
    const NIUE = 'NIU';
    const NETHERLANDS = 'NLD';
    const NORWAY = 'NOR';
    const NEPAL = 'NPL';
    const NAURU = 'NRU';
    const NEW_ZEALAND = 'NZL';
    const OMAN = 'OMN';
    const PAKISTAN = 'PAK';
    const PANAMA = 'PAN';
    const PITCAIRN = 'PCN';
    const PERU = 'PER';
    const PHILIPPINES = 'PHL';
    const PALAU = 'PLW';
    const PAPUA_NEW_GUINEA = 'PNG';
    const POLAND = 'POL';
    const PUERTO_RICO = 'PRI';
    const KOREA_DEMOCRATIC_PEOPLE_S_REPUBLIC_OF = 'PRK';
    const PORTUGAL = 'PRT';
    const PARAGUAY = 'PRY';
    const PALESTINIAN_TERRITORY_OCCUPIED = 'PSE';
    const FRENCH_POLYNESIA = 'PYF';
    const QATAR = 'QAT';
    const REUNION = 'REU';
    const ROMANIA = 'ROU';
    const RUSSIAN_FEDERATION = 'RUS';
    const RWANDA = 'RWA';
    const SAUDI_ARABIA = 'SAU';
    const SUDAN = 'SDN';
    const SENEGAL = 'SEN';
    const SINGAPORE = 'SGP';
    const SOUTH_GEORGIA_AND_THE_SOUTH_SANDWICH_ISLANDS = 'SGS';
    const SAN_MARINO = 'SHN';
    const SVALBARD_AND_JAN_MAYEN = 'SJM';
    const SOLOMON_ISLANDS = 'SLB';
    const SIERRA_LEONE = 'SLE';
    const EL_SALVADOR = 'SLV';
    const SINT_MAARTEN_DUTCH_PART = 'SMR';
    const SOMALIA = 'SOM';
    const HOLY_SEE_VATICAN_CITY_STATE = 'SPM';
    const SERBIA = 'SRB';
    const SOUTH_SUDAN = 'SSD';
    const SAO_TOME_AND_PRINCIPE = 'STP';
    const SURINAME = 'SUR';
    const SLOVAKIA = 'SVK';
    const SLOVENIA = 'SVN';
    const SWEDEN = 'SWE';
    const SWAZILAND = 'SWZ';
    const SAINT_PIERRE_AND_MIQUELON = 'SXM';
    const SEYCHELLES = 'SYC';
    const SYRIAN_ARAB_REPUBLIC = 'SYR';
    const TURKS_AND_CAICOS_ISLANDS = 'TCA';
    const CHAD = 'TCD';
    const TOGO = 'TGO';
    const THAILAND = 'THA';
    const TAJIKISTAN = 'TJK';
    const TOKELAU = 'TKL';
    const TURKMENISTAN = 'TKM';
    const TIMOR_LESTE = 'TLS';
    const TONGA = 'TON';
    const TRINIDAD_AND_TOBAGO = 'TTO';
    const TUNISIA = 'TUN';
    const TURKEY = 'TUR';
    const TUVALU = 'TUV';
    const TAIWAN_PROVINCE_OF_CHINA = 'TWN';
    const TANZANIA_UNITED_REPUBLIC_OF = 'TZA';
    const UGANDA = 'UGA';
    const UKRAINE = 'UKR';
    const UNITED_STATES_MINOR_OUTLYING_ISLANDS = 'UMI';
    const URUGUAY = 'URY';
    const UNITED_STATES = 'USA';
    const UZBEKISTAN = 'UZB';
    const SAINT_VINCENT_AND_THE_GRENADINES = 'VAT';
    const SAINT_LUCIA = 'VCT';
    const VENEZUELA_BOLIVARIAN_REPUBLIC_OF = 'VEN';
    const VIRGIN_ISLANDS_BRITISH = 'VGB';
    const VIRGIN_ISLANDS_U_S = 'VIR';
    const VIET_NAM = 'VNM';
    const VANUATU = 'VUT';
    const WALLIS_AND_FUTUNA = 'WLF';
    const SAMOA = 'WSM';
    const YEMEN = 'YEM';
    const SOUTH_AFRICA = 'ZAF';
    const ZAMBIA = 'ZMB';
    const ZIMBABWE = 'ZWE';
}

namespace Worldline\Sips\Values\Region {
    const USA_CA_HI_NV = '1';   // 	USA: California, Hawaii, Nevada
    const USA_WEST_EXCEPT_CA_HI_NV = '2';   // 	USA: West except California, Hawaii, Nevada
    const USA_CENTRAL_NORTH = '3';   // 	USA: Central North
    const USA_CENTRAL_SOUTH = '4';   // 	USA: Central South
    const USA_GREAT_LAKES = '5';   // 	USA: Great Lakes states
    const USA_SOUTH_EST = '6';   // 	USA: South East
    const USA_EXTREME_NORTH_EAST = '7';   // 	USA: Extreme North East
    const USA_NORTH_EST = '8';   // 	USA: North East
    const USA_FL_GA = '9';   // 	USA: Florida and Georgia
    const CANADA = 'A';   // 	Canada
    const SOUTH_AMERICA = 'B';   // 	South America
    const OCEANIA_ASIA = 'C';   // 	Oceania Asia
    const EUROPE = 'D';   // 	Europe
    const AFRICA_MIDDLE_EAST = 'E';   // 	Africa and middle east

}

namespace Worldline\Sips\Values\CardScheme {
    const ACCORD = 'ACCORD';            // 	Accord scheme
    const AMEX = 'AMEX';                // 	American Express scheme
    const BCMC = 'BCMC';                // 	Bancontact scheme
    const CB = 'CB';                    // 	Bank Card scheme
    const MASTERCARD = 'MASTERCARD';    // 	Mastercard scheme (Example of cards on the Mastercard scheme: Mastercard, Maestro)
    const SOFINCO = 'SOFINCO';          // 	Sofinco scheme
    const VISA = 'VISA';                // 	Visa scheme (Example of cards on the Visa scheme: Visa, Vpay, Visa Electron)
}

namespace Worldline\Sips\Values\CardCorporateIndicator {
    const YES = 'Y';    // The card is a corporate card
    const NO = 'N';     // The card is not a corporate card
}

namespace Worldline\Sips\Values\CardEffectiveDateIndicator {
    const YES = 'Y';
    const NO = 'N';
}

namespace Worldline\Sips\Values\CardSeqNumberIndicator {
    const LENGTH_1 = '1';   // 	Card issue number of length 1
    const LENGTH_2 = '2';   // 	Card issue number of length 2
    const LENGTH_3 = '3';   // 	Card issue number of length 3
    const NONE = 'N';       // 	No card issue number

}

namespace Worldline\Sips\Values\PanCheckAlgorithm {
    const LUHN_KEY = 'L';  // 	PAN control with Lühn Key algorithm
    const NO_CONTROL = 'N';  // 	No PAN control algorithm
    const VISA_MODULUS = 'V';  // 	PAN control with Visa Modulus 10 algorithm
}

namespace Worldline\Sips\Values\CardProductProfile {
    const CREDIT = 'C';  // 	Credit (pay after)
    const DEBIT = 'D';  // 	Debit (pay now)
    const CHARGE_CARD = 'H';  // 	Charge card (UK specific)
    const PREPAID = 'P';  // 	Prepaid
}

namespace Worldline\Sips\Values\VirtualCardIndicator {
    const YES = 'Y';
    const NO = 'N';
}

namespace Worldline\Sips\Values\CardProductUsageLabel {
    const COMMERCIAL = 'COMMERCIAL'; //  Business card
    const DEBIT = 'DEBIT';          // 	Debit card
    const CREDIT = 'CREDIT';        // 	Credit card
    const PREPAID = 'PREPAID';      // 	Prepaid card
}

namespace Worldline\Sips\Values\CaptureMode {
    const AUTHOR_CAPTURE = 'AUTHOR_CAPTURE';    //	Cancellation mode: automatic authorisation and payment collection (default value)
    const IMMEDIATE = 'IMMEDIATE';              // 	Immediate mode: online payment collection at the time of the authorisation request (available for a restricted list of payment methods)
    const VALIDATION = 'VALIDATION';            // 	Validation mode: payment collection following validation of the merchant
}

namespace Worldline\Sips\Values\CurrencyCode {
    const ARGENTINEAN_PESO = '032';         // 	Argentinean Peso
    const AUSTRALIAN_DOLLAR = '036';        // 	Australian Dollar
    const BAHRAIN_DINAR = '048';            // 	Bahrain Dinar
    const CAMBODIAN_RIEL = '116';           // 	Cambodian Riel
    const CANADIAN_DOLLAR = '124';          // 	Canadian Dollar
    const SRI_LANKA_RUPEE = '144';          // 	Sri Lanka Rupee
    const CHINA_YUAN_RENMINBI = '156';      // 	China Yuan Renminbi
    const CROATIA_KUNA = '191';             // 	Croatia Kuna
    const CZECH_REPUBLIC_KORUNA = '203';    // 	Czech Republic Koruna
    const DANES_CROWN = '208';              // 	Danes crown
    const HONG_KONG_DOLLAR = '344';         // 	Hong Kong dollar
    const HUNGARY_FORINT = '348';           // 	Hungary Forint
    const ICELAND_RUPEE = '352';            // 	Iceland Rupee
    const INDIAN_REPUU = '356';             // 	Indian rupee
    const ISRAEL_SHEKEL = '376';            // 	Israel Shekel
    const JAPANESE_YEN = '392';             // 	Japanese Yen
    const SOUTH_KOREAN_WON = '410';         // 	South Korean Won
    const KUWAIT_DINAR = '414';             // 	Kuwait Dinar
    const MALAYSIA_RINGGIT = '458';         // 	Malaysia Ringgit
    const MAURITIUS_RUPEE = '480';          // 	Mauritius Rupee
    const MEXICAN_PESO = '484';             // 	Mexican Peso
    const NEPAL_RUPEE = '524';              // 	Nepal Rupee
    const NEW_ZEALAND_DOLLAR = '554';       // 	New Zealand Dollar
    const NORWEGIAN_CROWN = '578';          // 	Norwegian crown
    const QATAR_RIYAL = '634';              // 	Qatar Riyal
    const RUSSIA_RUBLE = '643';             // 	Russia Ruble
    const SAUDI_ARADIA_RIYAL = '682';       // 	Saudi Arabia Riyal
    const SINGAPORE_DOLLAR = '702';         // 	Singapore Dollar
    const SOUTH_AFRICA_RAND = '710';        // 	South Africa Rand
    const SWEDISH_CROWN = '752';            // 	Swedish crown
    const SWISS_FRANC = '756';              // 	Swiss Franc
    const THAILAND_BATH = '764';            // 	Thailand Baht
    const UNITED_ARAD_EMIRATES_DIRHAM = '784';    // 	United Arab Emirates Dirham
    const TUNISIA_DINAR = '788';            // 	Tunisia Dinar
    const POUND = '826';                    // 	Pound
    const US_DOLLAR = '840';                // 	American Dollar
    const TAIWAN_DOLLAR = '901';            // 	Taiwan Dollar
    const SERBIAN_DINAR = '941';            // 	Serbian Dinar
    const ROUMANIA_NEW_LEU = '946';         // 	Roumania New Leu
    const NEW_TURKISH_LIRA = '949';         // 	New Turkish Lira
    const CFA_FRANC = '952';                // 	CFA Franc
    const CFP_FRANC = '953';                // 	CFP Franc
    const BULGARIA_LEV = '975';             // 	Bulgaria Lev
    const EURO = '978';                     // 	Euro
    const UKRAINE_HRYVNIA = '980';          // 	Ukraine Hryvnia
    const POLAND_ZLOTY = '985';             // 	Poland Zloty
    const BRAZILIAN_REAL = '986';           // 	Brazilian Real

}


namespace Worldline\Sips\Values\CustomerLanguage {
    const BULGARIAN = 'bg';     // 	Bulgarian
    const BRETON = 'br';        // 	Breton
    const CZECH = 'cs';         // 	Czech
    const DANISH = 'da';        // 	Danish
    const GERMAN = 'de';        // 	German
    const GREEK = 'el';         // 	Greek
    const ENGLISH = 'en';       // 	English
    const SPANISH = 'es';       // 	Spanish
    const ESTONIAN = 'et';      // 	Estonian
    const FINNISH = 'fi';       // 	Finnish
    const FRENCH = 'fr';        // 	French
    const HINDI = 'hi';         // 	Hindi
    const CROATIAN = 'hr';      // 	Croatian
    const HUNGARIAN = 'hu';     // 	Hungarian
    const ITALIAN = 'It';       // 	Italian
    const JAPANESE = 'Ja';      // 	Japanese
    const KOREAN = 'ko';        // 	Korean
    const LITHUANIAN = 'lt';    // 	Lithuanian
    const LATVIAN = 'lv';       // 	Latvian
    const DUTCH = 'nl';         // 	Dutch
    const NORWEGIAN = 'no';     // 	Norwegian
    const POLISH = 'pl';        // 	Polish
    const PORTUGUESE = 'pt';    // 	Portuguese
    const ROMANIAN = 'ro';      // 	Romanian
    const RUSSIAN = 'ru';       // 	Russian
    const SLOVAK = 'sk';        // 	Slovak
    const SLOVENE = 'sl';       // 	Slovene
    const SWEDISH = 'sv';       // 	Swedish
    const TURKISH = 'tr';       // 	Turkish
    const UKRAINIAN = 'uk';     // 	Ukrainian
    const CHINESE = 'zh';       // 	Chinese
}


namespace Worldline\Sips\Values\HashAlgorithm {
    const SHA_1 = 'SHA-1';          // 	SHA_1 cryptographic function structure (SHA: secure hash algorithm)
    const SHA_256 = 'SHA-256';    // 	SHA_256 cryptographic function structure (SHA: secure hash algorithm)
    const SHA_512 = 'SHA-512';    // 	SHA_512 cryptographic function structure (SHA: secure hash algorithm)
}

namespace Worldline\Sips\Values\PaymentMeanBrandType {
    const ONEEUROCOM  = 'ONLINE_CREDIT';      // 	Cofidis Pay 5x10x20x
    const THREEXCBCOFINOGA  = 'CARD';       // 	Cofinoga 3xCB
    const ACCEPTGIRO  = 'CREDIT_TRANSFER';      // 	AcceptGiro
    const ACCORD  = 'CARD';     // 	Oney card
    const ACCORD_KDO  = 'CARD';     // 	Oney gift card
    const ACCORD_3X  = 'ONLINE_CREDIT';     // 	Facily Pay Payment 3 times
    const ACCORD_4X  = 'ONLINE_CREDIT';     // 	Facily Pay Payment 4 times
    const AMEX  = 'CARD';       // 	American Express card
    const AURORE  = 'CARD';     // 	Aurore CPAY
    const BCACB_3X  = 'ONLINE_CREDIT';      // 	Banque Casino CB payment 3 times
    const BCACB_4X  = 'ONLINE_CREDIT';      // 	Banque Casino CB payment 4 times
    const BCACUP  = 'CARD';     // 	CUP Card of Banque Casino
    const BCMC  = 'CARD';       // 	Bancontact
    const CACF_3X  = 'ONLINE_CREDIT';       // 	CACF Payment 3 times
    const CACF_4X  = 'ONLINE_CREDIT';       // 	CACF Payment 4 times
    const CADHOC  = 'CARD';     // 	Cadhoc
    const CADOCARTE  = 'CARD';      // 	Cado Card
    const CB  = 'CARD';     // 	Carte Bancaire
    const CBCONLINE  = 'CREDIT_TRANSFER';       // 	PayButton CBC Online
    const CETELEM_3X  = 'ONLINE_CREDIT';        // 	Cetelem 3xCB
    const CETELEM_4X  = 'ONLINE_CREDIT';        // 	Cetelem 4xCB
    const COFIDIS_3X  = 'ONLINE_CREDIT';        // 	Cofidis 3xCB
    const COFIDIS_4X  = 'ONLINE_CREDIT';        // 	Cofidis 4xCB
    const CONECS  = 'VOUCHER';      // 	Titles restaurants dematerialized Conecs
    const CUP  = 'CARD';        // 	China Union Pay card
    const CVA  = 'CARD';        // 	Visa Aurore card
    const CVCO  = 'VOUCHER';        // 	Chèque-Vacances Connect
    const DINERS  = 'CARD';     // 	Diners club international card
    const ECV  = 'VOUCHER';     // 	e-Chèque-Vacances
    const ELV  = 'DIRECT_DEBIT';        // 	Elektronisches LastschriftVerfahren
    const FIVORY  = 'WALLET';       // 	Lyf Pay
    const FRANFINANCE_3X  = 'ONLINE_CREDIT';        // 	Franfinance 3xCB
    const FRANFINANCE_4X  = 'ONLINE_CREDIT';        // 	Franfinance 4xCB
    const GIROPAY  = 'CREDIT_TRANSFER';     // 	Giropay
    const IDEAL  = 'CREDIT_TRANSFER';       // 	iDeal
    const ILLICADO  = 'CARD';       // 	Illicado
    const INCASSO  = 'DIRECT_DEBIT';        // 	Incasso
    const INGHOMEPAY  = 'CREDIT_TRANSFER';      // 	PayButton ING Home’Pay
    const JCB  = 'CARD';        // 	Japan credit bureau card
    const KBCONLINE  = 'CREDIT_TRANSFER';       // 	PayButton KBC Online
    const LEPOTCOMMUN  = 'CARD';        // 	Le Pot Commun
    const LYDIA  = 'PROVIDER';      // 	Lydia
    const MAESTRO  = 'CARD';        // 	Maestro card (Mastercard)
    const MASTERCARD  = 'CARD';     // 	Mastercard card
    const PASSCADO  = 'CARD';       // 	Pass Cadeau
    const PAY_BY_BANK  = 'CREDIT_TRANSFER';     // 	SEPA bank transfer
    const PAYPAL  = 'WALLET';       // 	Paypal
    const PAYTRAIL  = 'CREDIT_TRANSFER';        // 	Paytrail
    const POSTFINANCE  = 'CARD';        // 	PostFinance card
    const PRESTO  = 'ONLINE_CREDIT';        // 	Presto Plus
    const SEPA_DIRECT_DEBIT  = 'DIRECT_DEBIT';      // 	SDD (SEPA Direct Debit)
    const SOFINCO  = 'CARD';        // 	Sofinco card
    const SOFORTUBERWEISUNG  = 'CREDIT_TRANSFER';       // 	Sofortüberweisung (Sofort Banking)
    const SPIRITOFCADEAU  = 'CARD';     // 	Spirit Of Cadeau
    const VISA  = 'CARD';       // 	Visa card
    const VISA_ELECTRON  = 'CARD';      // 	Visa Electron card
    const VPAY  = 'CARD';       // 	VPAY card (Visa)
}
