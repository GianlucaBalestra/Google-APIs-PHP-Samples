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
// Unofficial sample for the proximitybeacon v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: Registers, manages, indexes, and searches beacons.
// API Documentation Link https://developers.google.com/beacons/proximity/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Proximitybeacon/v1beta1/rest
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

print_r(delete($service, $attachmentName));

/**
* Deletes the specified attachment for the given beacon. Each attachment hasa unique attachment name (`attachmentName`) which is returned when youfetch the attachment data via this API. You specify this with the deleterequest to control which attachment is removed. This operation cannot beundone.Authenticate using an [OAuth access token](https://developers.google.com/identity/protocols/OAuth2)from a signed-in user with **Is owner** or **Can edit** permissions in theGoogle Developers Console project.
* @service Authenticated Analyticsreporting service.

* @attachmentName The attachment name (`attachmentName`) of
the attachment to remove. For example:
`beacons/3!893737abc9/attachments/c5e937-af0-494-959-ec49d12738`. For
Eddystone-EID beacons, the beacon ID portion (`3!893737abc9`) may be the
beacon's current EID, or its "stable" Eddystone-UID.
Required.
* @return Empty</returns>
*/
function delete($service, $attachmentName)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if (attachmentName == null)
			throw new Exception("attachmentName is required.");
		// Make the request and return the results.
		return $service->delete($attachmentName);
	}
	catch (Exception $ex)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
