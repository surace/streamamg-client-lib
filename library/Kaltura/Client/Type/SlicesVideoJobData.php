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
namespace Kaltura\Client\Type;

/**
 * @package Kaltura
 * @subpackage Client
 */
class SlicesVideoJobData extends \Kaltura\Client\Type\JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaSlicesVideoJobData';
	}
	
	public function __construct(\SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		$this->actualSrcFileSyncLocalPath = (string)$xml->actualSrcFileSyncLocalPath;
		$this->srcFileSyncRemoteUrl = (string)$xml->srcFileSyncRemoteUrl;
		if(count($xml->sliceParamsOutputId))
			$this->sliceParamsOutputId = (int)$xml->sliceParamsOutputId;
		$this->sliceAssetId = (string)$xml->sliceAssetId;
		$this->srcAssetId = (string)$xml->srcAssetId;
		$this->srcAssetType = (string)$xml->srcAssetType;
		$this->slicePath = (string)$xml->slicePath;
		if(count($xml->numberOfSlices))
			$this->numberOfSlices = (int)$xml->numberOfSlices;
		$this->srcType = (string)$xml->srcType;
		if(count($xml->width))
			$this->width = (int)$xml->width;
		if(count($xml->height))
			$this->height = (int)$xml->height;
	}
	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 *          
	 * @var string
	 */
	public $actualSrcFileSyncLocalPath = null;

	/**
	 * 
	 * @var string
	 */
	public $srcFileSyncRemoteUrl = null;

	/**
	 * 
	 * @var int
	 */
	public $sliceParamsOutputId = null;

	/**
	 * 
	 * @var string
	 */
	public $sliceAssetId = null;

	/**
	 * 
	 * @var string
	 */
	public $srcAssetId = null;

	/**
	 * 
	 * @var \Kaltura\Client\Enum\AssetType
	 */
	public $srcAssetType = null;

	/**
	 * 
	 * @var string
	 */
	public $slicePath = null;

	/**
	 * 
	 * @var int
	 */
	public $numberOfSlices = null;

	/**
	 * 
	 * @var string
	 */
	public $srcType = null;

	/**
	 * 
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 * @var int
	 */
	public $height = null;

}
