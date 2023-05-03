<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START cloudbuild_v1_generated_CloudBuild_UpdateBuildTrigger_sync]
use Google\ApiCore\ApiException;
use Google\Cloud\Build\V1\BuildTrigger;
use Google\Cloud\Build\V1\CloudBuildClient;

/**
 * Updates a `BuildTrigger` by its project ID and trigger ID.
 *
 * This API is experimental.
 *
 * @param string $projectId ID of the project that owns the trigger.
 * @param string $triggerId ID of the `BuildTrigger` to update.
 */
function update_build_trigger_sample(string $projectId, string $triggerId): void
{
    // Create a client.
    $cloudBuildClient = new CloudBuildClient();

    // Prepare the request message.
    $trigger = new BuildTrigger();

    // Call the API and handle any network failures.
    try {
        /** @var BuildTrigger $response */
        $response = $cloudBuildClient->updateBuildTrigger($projectId, $triggerId, $trigger);
        printf('Response data: %s' . PHP_EOL, $response->serializeToJsonString());
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $projectId = '[PROJECT_ID]';
    $triggerId = '[TRIGGER_ID]';

    update_build_trigger_sample($projectId, $triggerId);
}
// [END cloudbuild_v1_generated_CloudBuild_UpdateBuildTrigger_sync]
