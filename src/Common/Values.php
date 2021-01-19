<?php
namespace Worldline\Sips\Values\paymentMeanBrandSelectionStatus {

    const DEFAULT_MODE = 'APPLIED_DEFAULT';     // The cardholder accepted the default merchant choice
    const HOLDER = 'APPLIED_HOLDER';            // The cardholder selected a card brand different from the default merchant choice
    const NOT_APPLICABLE = 'NOT_APPLICABLE';    // Card number filled is not a cobadged card

}
namespace Worldline\Sips\Values\paymentPattern {

    const ONE_SHOT = 'ONE_SHOT';        // One shot payment (default value)
    const ISNTALMENT = 'INSTALMENT';    // Payment by instalment
    const RECURRING_1 = 'RECURRING_1';  // Recurring payment first payment
    const RECURRING_N = 'RECURRING_N';  // Recurring payment nth payment

}
namespace Worldline\Sips\Values\merchantCustomerAuthentMethod {

    const NOAUTHENT = 'NOAUTHENT';          //	No authentication of the customer by the merchant
    const OWNCREDENTIAL = 'OWNCREDENTIAL';  // 	Customer authentication by the merchant using his own system
    const FEDERATEDID = 'FEDERATEDID';      // 	Customer authentication by the merchant using an identifier federated (facebook, ...) (e.g. Facebook)
    const ISSUERID = 'ISSUERID';            // 	Customer authentication by the merchant using information of the issuer's payment mean
    const THIRDPARTY = 'THIRDPARTY';        // 	Customer authentication by the merchant using a third system
    const FIDO = 'FIDO';                    // 	Customer authentication by the merchant with FIDO (Fast IDentity Online) system

}
namespace Worldline\Sips\Values\challengeMode3DS {

    const CHALLENGE = 'CHALLENGE';                          // The merchant desired authentication challenge mode is to have a client authentication. In other words, it is a "challenge" request
    const CHALLENGE_MANDATE = 'CHALLENGE_MANDATE';          // The merchant need is to apply the regulatory mode to have a strong customer authentication (for example for the first payment of payment schedule)
    const NO_CHALLENGE = 'NO_CHALLENGE';                    // The merchant desired authentication challenge mode is to have no customer authentication. In other words, it is a "challenge" request
    const NO_CHALLENGE_TRA_ACQ = 'NO_CHALLENGE_TRA_ACQ';    // The merchant desired no authentication of the cardholder by invoking the TRA acquirer exemption. It's a request for "Frictionless".
    const NO_PREFERENCE = 'NO_PREFERENCE';                  // The merchant has no desired authentication challenge mode

}