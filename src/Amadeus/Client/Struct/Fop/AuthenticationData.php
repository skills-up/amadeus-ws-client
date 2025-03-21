<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
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
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Fop;

/**
 * AuthenticationData
 *
 * @package Amadeus\Client\Struct\Fop
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class AuthenticationData
{
    /**
     * @var AuthenticationDataDetails
     */
    public $authenticationDataDetails;

    /**
     * Version of the 3DS protocol
     * @var string
     */
    public $tdsVersion;

    /**
     * AuthenticationData constructor.
     *
     * @param string|null $veresStatus
     * @param string|null $paresStatus
     * @param string|null $company
     * @param string|null $transactionsStatus
     * @param string|null $authenticationIndicator
     * @param string|null $tdsVersion
     */
    public function __construct(
        $veresStatus,
        $paresStatus,
        $company,
        $transactionsStatus,
        $authenticationIndicator,
        $tdsVersion,
    ) {
        if (false === empty($tdsVersion)) {
            $this->tdsVersion = $tdsVersion;
        }

        $this->authenticationDataDetails = new AuthenticationDataDetails(
            $veresStatus,
            $paresStatus,
            $company,
            $transactionsStatus,
            $authenticationIndicator
        );
    }
}
