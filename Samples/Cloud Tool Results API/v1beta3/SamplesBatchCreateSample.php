﻿<?php
// Copyright 2017 DAIMTO ([Linda Lawton](https://twitter.com/LindaLawtonDK)) :  [www.daimto.com](http://www.daimto.com/)
//
// Licensed under the Apache License, Version 2.0 (the "License"); you may not use this file except in compliance with
// the License. You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on
// an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the License for the
// specific language governing permissions and limitations under the License.
//------------------------------------------------------------------------------
// <auto-generated>
//     This code was generated by DAIMTO-Google-apis-Sample-generator 1.0.0
//     Template File Name:  methodTemplate.tt
//     Build date: 2017-09-21
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Tool Results v1beta3 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Reads and publishes results from Firebase Test Lab.
// API Documentation Link https://firebase.google.com/docs/test-lab/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Toolresults/v1beta3/rest
//
//------------------------------------------------------------------------------
// Installation
//
// The preferred method is via https://getcomposer.org. Follow the installation instructions https://getcomposer.org/doc/00-intro.md 
// if you do not already have composer installed.
//
// Once composer is installed, execute the following command in your project root to install this library:
//
// composer require google/apiclient:^2.0
//
//------------------------------------------------------------------------------  
// Load the Google API PHP Client Library.
require_once __DIR__ . '/vendor/autoload.php';
/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following for Oauth2 authencation.
//require_once __DIR__ . '/Oauth2Authentication.php';
//$_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
****************************************************/

session_start();

print_r(batchCreate($service, $projectId, $historyId, $executionId, $stepId, $sampleSeriesId));

/**
* Creates a batch of PerfSamples - a client can submit multiple batches of Perf Samples through repeated calls to this method in order to split up a large request payload - duplicates and existing timestamp entries will be ignored. - the batch operation may partially succeed - the set of elements successfully inserted is returned in the response (omits items which already existed in the database).May return any of the following canonical error codes: - NOT_FOUND - The containing PerfSampleSeries does not exist
* @service Authenticated Analyticsreporting service.

* @executionId A tool results execution ID.
* @historyId A tool results history ID.
* @projectId The cloud project
* @sampleSeriesId A sample series id
* @stepId A tool results step ID.
* @return BatchCreatePerfSamplesResponse</returns>
*/
function batchCreate($service, $projectId, $historyId, $executionId, $stepId, $sampleSeriesId)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if (executionId == null)
			throw new Exception("executionId is required.");
		if (historyId == null)
			throw new Exception("historyId is required.");
		if (projectId == null)
			throw new Exception("projectId is required.");
		if (sampleSeriesId == null)
			throw new Exception("sampleSeriesId is required.");
		if (stepId == null)
			throw new Exception("stepId is required.");
		// Make the request and return the results.
		return $service->batchCreate($projectId, $historyId, $executionId, $stepId, $sampleSeriesId);
	}
	catch (Exception $ex)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
