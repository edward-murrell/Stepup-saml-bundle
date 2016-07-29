<?php

/**
 * Copyright 2014 SURFnet bv
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Surfnet\SamlBundle\Entity;

/**
 * Provides a common interface for determining if a service provider is
 * supported and retrieving the ServiceProvider configuration object associated
 * with the SAML entity ID.
 *
 * TODO : Explain what a SAML entity ID is here.
 *
 * TODO : Add example of ServiceProviderRepository implmentation.
 *
 * The implementation can be as simple as a hardcoded list, or interrogate a
 * number of databases for the configuration.
 */
interface ServiceProviderRepository
{
    /**
     * Retrieve the ServiceProvider object configured associated with $entityId.
     *
     * @param string $entityId
     *   SAML entity ID to search for.
     *
     * @return ServiceProvider|null
     *   Configured ServiceProvider object. Returns null if not found.
     */
    public function getServiceProvider($entityId);

    /**
     * @param string $entityId
     * @return bool
     */
    public function hasServiceProvider($entityId);
}
