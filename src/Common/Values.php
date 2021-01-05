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