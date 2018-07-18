<?php
/**
 * Created by PhpStorm.
 * User: suresh.katwal
 * Date: 18/04/2018
 * Time: 12:59
 */

namespace Kaltura\Client\Plugin\FileSync\Service;


use Kaltura\Client\Plugin\FileSync\Type\FileSync;

class FileSyncService extends \Kaltura\Client\ServiceBase
{
    function __construct(\Kaltura\Client\Client $client = null)
    {
        parent::__construct($client);
    }

    /**
     * Allows you to add a metadata object and metadata content associated with Kaltura object
     *
     *
     * @return \Kaltura\Client\Plugin\FileSync\Type\FileSync
     */
    function add($objectId, FileSync $fileSync )
    {
        $kparams = array();
        $this->client->addParam($kparams, "objectId", $objectId);
        $this->client->addParam($kparams, "fileSync", $fileSync->toParams());
        $this->client->queueServiceActionCall("filesync_filesync", "add", "KalturaFileSync", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileSync");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\FileSync\\Type\\FileSync");
        return $resultObject;
    }




    /**
     * List metadata objects by filter and pager
     *
     *
     * @return \Kaltura\Client\Plugin\FileSync\Type\FileSyncListResponse
     */
    function listAction(\Kaltura\Client\Plugin\FileSync\Type\FileSyncFilter $filter = null, \Kaltura\Client\Type\FilterPager $pager = null)
    {
        $kparams = array();
        if ($filter !== null)
            $this->client->addParam($kparams, "filter", $filter->toParams());
        if ($pager !== null)
            $this->client->addParam($kparams, "pager", $pager->toParams());
        $this->client->queueServiceActionCall("filesync_filesync", "list", "FileSyncListResponse", $kparams);
        if ($this->client->isMultiRequest())
            return $this->client->getMultiRequestResult();
        $resultXml = $this->client->doQueue();
        $resultXmlObject = new \SimpleXMLElement($resultXml);
        \Kaltura\Client\ParseUtils::checkIfError($resultXmlObject->result);
        $resultObject = \Kaltura\Client\ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFileSyncListResponse");
        $this->client->validateObjectType($resultObject, "\\Kaltura\\Client\\Plugin\\FileSync\\Type\\FileSyncListResponse");
        return $resultObject;
    }

}