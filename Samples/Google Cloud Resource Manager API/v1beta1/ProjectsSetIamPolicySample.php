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
// Unofficial sample for the Cloud Resource Manager v1beta1 API for PHP. 
// This sample is designed to be used with the Google PHP client library. (https://github.com/google/google-api-php-client)
// 
// API Description: The Google Cloud Resource Manager API provides methods for creating, reading, and updating project metadata.
// API Documentation Link https://cloud.google.com/resource-manager
//
// Discovery Doc  https://www.googleapis.com/discovery/v1/apis/Cloudresourcemanager/v1beta1/rest
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

print_r(setIamPolicy($service, $resource));

/**
* Sets the IAM access control policy for the specified Project. Replacesany existing policy.The following constraints apply when using `setIamPolicy()`:+ Project does not support `allUsers` and `allAuthenticatedUsers` as`members` in a `Binding` of a `Policy`.+ The owner role can be granted only to `user` and `serviceAccount`.+ Service accounts can be made owners of a project directlywithout any restrictions. However, to be added as an owner, a user must beinvited via Cloud Platform console and must accept the invitation.+ A user cannot be granted the owner role using `setIamPolicy()`. The usermust be granted the owner role using the Cloud Platform Console and mustexplicitly accept the invitation.+ Invitations to grant the owner role cannot be sent using`setIamPolicy()`; they must be sent only using the Cloud Platform Console.+ Membership changes that leave the project without any owners that haveaccepted the Terms of Service (ToS) will be rejected.+ If the project is not part of an organization, there must be at leastone owner who has accepted the Terms of Service (ToS) agreement in thepolicy. Calling `setIamPolicy()` to remove the last ToS-accepted ownerfrom the policy will fail. This restriction also applies to legacyprojects that no longer have owners who have accepted the ToS. Edits toIAM policies will be rejected until the lack of a ToS-accepting owner isrectified.+ Calling this method requires enabling the App Engine Admin API.Note: Removing service accounts from policies or changing their rolescan render services completely inoperable. It is important to understandhow the service account is being used before removing or updating itsroles.
* @service Authenticated Analyticsreporting service.

* @resource REQUIRED: The resource for which the policy is being specified.
See the operation documentation for the appropriate value for this field.
* @return Policy</returns>
*/
function setIamPolicy($service, $resource)
{
	try
	{
		// Parameter validation.
		if ($service == null)
			throw new Exception("service is required.");
		if (resource == null)
			throw new Exception("resource is required.");
		// Make the request and return the results.
		return $service->setIamPolicy($resource);
	}
	catch (Exception $ex)
	{
		print "An error occurred: " . $e->getMessage();
	}
}
?>
