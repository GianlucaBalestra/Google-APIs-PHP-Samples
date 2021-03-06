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
//     Build date: 2017-10-08
//     PHP generator version: 1.0.0
//     
//     Changes to this file may cause incorrect behavior and will be lost if
//     the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------  
// About 
// 
// Unofficial sample for the Cloud RuntimeConfig v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: The Runtime Configurator allows you to dynamically configure and expose variables through Google Cloud Platform. In addition, you can also set Watchers and Waiters that will watch for changes to your data and return based on certain conditions.
// API Documentation Link https://cloud.google.com/deployment-manager/runtime-configurator/
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/runtimeconfig/v1beta1/rest
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
session_start();

/***************************************************
* Include this line for service account authencation.  Note: Not all APIs support service accounts.  
//require_once __DIR__ . '/ServiceAccount.php';     
* Include the following four lines Oauth2 authencation.
* require_once __DIR__ . '/Oauth2Authentication.php';
* $_SESSION['mainScript'] = basename($_SERVER['PHP_SELF']);   // Oauth2callback.php will return here.
* $client = getGoogleClient();
* $service = new Google_Service_Cloudruntimeconfig($client); 
****************************************************/

// Option paramaters can be set as needed.
 $optParams = array(
            
  //'requestId' => '[YourValue]',  // An optional but recommended unique `request_id`. If the serverreceives two `create()` requests  with the same`request_id`, then the second request will be ignored and thefirst resource created and stored in the backend is returned.Empty `request_id` fields are ignored.It is responsibility of the client to ensure uniqueness of the`request_id` strings.`request_id` strings are limited to 64 characters.
  'fields' => '*'
);
// Single Request.
$results = variablesCreateExample($service, $parent, $optParams);


/**
* Creates a variable within the given configuration. You cannot createa variable with a name that is a prefix of an existing variable name, or aname that has an existing variable name as a prefix.To learn more about creating a variable, read the[Setting and Getting Data](/deployment-manager/runtime-configurator/set-and-get-variables)documentation.
* @service Authenticated Cloudruntimeconfig service.
* @optParams Optional paramaters are not required by a request.
* @parent The path to the RutimeConfig resource that this variable should belong to.
The configuration must exist beforehand; the path must be in the format:

`projects/[PROJECT_ID]/configs/[CONFIG_NAME]`
* @return Variable
*/
function variablesCreateExample($service, $parent, $optParams)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if ($optParams == null)
			throw new Exception("optParams is required.");
		if (parent == null)
			throw new Exception("parent is required.");
		// Make the request and return the results.
		return $service->variables->CreateVariables($parent, $optParams);
	}
	catch (Exception $e)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
