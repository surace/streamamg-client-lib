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
namespace Kaltura\Client\Plugin\ContentDistribution\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class DropboxDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
{
    public function getKalturaObjectType()
    {
        return 'KalturaDropboxDistributionProfile';
    }

    public function __construct(\SimpleXMLElement $xml = null)
    {
        parent::__construct($xml);

        //echo (string)$xml->username; exit();
        if(is_null($xml))
            return;
        $this->host = (string)$xml->host;
        $this->username = (string)$xml->username;
        $this->port = (string)$xml->port;
        $this->basePath = (string)$xml->basePath;
        $this->sftpPublicKey = (string)$xml->sftpPublicKey;
        $this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
        $this->channel = (string)$xml->channel;
        $this->category = (string)$xml->category;
        $this->privacy = (string)$xml->privacy;
        $this->notifysubscriber = (string)$xml->notifysubscriber;
        $this->enablecontentid = (string)$xml->enablecontentid;
        $this->ownership = (string)$xml->ownership;
        $this->usagepolicy = (string)$xml->usagepolicy;
        $this->matchpolicy = (string)$xml->matchpolicy;
    }

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $basePath;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $sftpPublicKey;

    /**
     * @var string
     */
    public $sftpPrivateKey;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $privacy;

    /**
     * @var string
     */
    public $notifysubscriber;

    /**
     * @var string
     */
    public $enablecontentid;

    /**
     * @var string
     */
    public $ownership;

    /**
     * @var string
     */
    public $usagepolicy;

    /**
     * @var string
     */
    public $matchpolicy;

}
