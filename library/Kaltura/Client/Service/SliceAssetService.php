<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2011  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================


/**
 * @namespace
 */
namespace Kaltura\Client\Service;

/**
 * Retrieve information and invoke actions on Slice Asset
 *
 * @package Kaltura
 * @subpackage Client
 */
class SliceAssetService extends \Kaltura\Client\ServiceBase
{
    function __construct(\Kaltura\Client\Client $client = null)
    {
        parent::__construct($client);
    }

    /**
     * Add slicenail asset
     *
     *
     * @return \Kaltura\Client\Type\SliceAsset
     */
    function add($entryId, \Kaltura\Client\Type\SliceAsset $sliceAsset)
    {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->addParam($kparams, "sliceAsset", $sliceAsset->toParams());
        $this->client->queueServiceActionCall("sliceasset", "add", "KalturaSliceAsset", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSliceAsset");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SliceAsset");
        return $resultObject;
    }

    /**
     * Update slice asset
     *
     *
     * @return \Kaltura\Client\Type\SliceAsset
     */
    function update($id, \Kaltura\Client\Type\SliceAsset $sliceAsset)
    {
        $kparams = array();
        $this->client->addParam($kparams, "id", $id);
        $this->client->addParam($kparams, "sliceAsset", $sliceAsset->toParams());
        $this->client->queueServiceActionCall("sliceasset", "update", "KalturaSliceAsset", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSliceAsset");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SliceAsset");
        return $resultObject;
    }


    /**
     *
     * @return \Kaltura\Client\Type\SliceAsset
     */
    function get($sliceAssetId)
    {
        $kparams = array();
        $this->client->addParam($kparams, "sliceAssetId", $sliceAssetId);
        $this->client->queueServiceActionCall("sliceasset", "get", "KalturaSliceAsset", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSliceAsset");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SliceAsset");
        return $resultObject;
    }

    /**
     *
     * @return array
     */
    function getByEntryId($entryId)
    {
        $kparams = array();
        $this->client->addParam($kparams, "entryId", $entryId);
        $this->client->queueServiceActionCall("sliceasset", "getByEntryId", "KalturaSliceAsset", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaSliceAsset");
        $this->client->validateObjectType($resultObject, "array");
        return $resultObject;
    }

    /**
     * List Slice Assets by filter and pager
     *
     *
     * @return \Kaltura\Client\Type\SliceAssetListResponse
     */
    function listAction(\Kaltura\Client\Type\AssetFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
    {
        $kparams = array();
        if ($filter !== null)
            $this->client->addParam($kparams, "filter", $filter->toParams());
        if ($pager !== null)
            $this->client->addParam($kparams, "pager", $pager->toParams());
        $this->client->queueServiceActionCall("sliceasset", "list", "KalturaSliceAssetListResponse", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSliceAssetListResponse");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Type\\SliceAssetListResponse");
        return $resultObject;
    }

    /**
     *
     * @return
     */
    function delete($sliceAssetId)
    {
        $kparams = array();
        $this->client->addParam($kparams, "sliceAssetId", $sliceAssetId);
        $this->client->queueServiceActionCall("sliceasset", "delete", null, $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
    }

    /**
     * Get download URL for the asset
     *
     *
     * @return string
     */
    function getUrl($id, $storageId = null)
    {
        $kparams = array();
        $this->client->addParam($kparams, "id", $id);
        $this->client->addParam($kparams, "storageId", $storageId);
        $this->client->queueServiceActionCall("sliceasset", "getUrl", null, $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = (String)\Kaltura\Client\ParseUtils::unmarshalSimpleType($resultXmlObject->result);
        return $resultObject;
    }
}
