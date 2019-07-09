<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* RiskDetectionTimingType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

use Microsoft\Graph\Core\Enum;

/**
* RiskDetectionTimingType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class RiskDetectionTimingType extends Enum
{
    /**
    * The Enum RiskDetectionTimingType
    */
    const NOT_DEFINED = "notDefined";
    const REALTIME = "realtime";
    const NEAR_REALTIME = "nearRealtime";
    const OFFLINE = "offline";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}