<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionIPRangeCollection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* WindowsInformationProtectionIPRangeCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsInformationProtectionIPRangeCollection extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionIPRangeCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the ranges
    *
    * @return IpRange The ranges
    */
    public function getRanges()
    {
        if (array_key_exists("ranges", $this->_propDict)) {
            if (is_a($this->_propDict["ranges"], "Microsoft\Graph\Beta\Model\IpRange")) {
                return $this->_propDict["ranges"];
            } else {
                $this->_propDict["ranges"] = new IpRange($this->_propDict["ranges"]);
                return $this->_propDict["ranges"];
            }
        }
        return null;
    }

    /**
    * Sets the ranges
    *
    * @param IpRange $val The value to assign to the ranges
    *
    * @return WindowsInformationProtectionIPRangeCollection The WindowsInformationProtectionIPRangeCollection
    */
    public function setRanges($val)
    {
        $this->_propDict["ranges"] = $val;
         return $this;
    }
}