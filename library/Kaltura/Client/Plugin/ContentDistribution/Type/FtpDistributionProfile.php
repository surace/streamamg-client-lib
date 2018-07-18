<?php
/**
 * Created by PhpStorm.
 * User: suresh.katwal
 * Date: 26/04/2018
 * Time: 16:54
 */

namespace Kaltura\Client\Plugin\ContentDistribution\Type;


class FtpDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
{
    public function getKalturaObjectType()
    {
        return 'KalturaFtpDistributionProfile';
    }

    public function __construct(\SimpleXMLElement $xml = null)
    {
        parent::__construct($xml);

        if(is_null($xml))
            return;
        $this->protocol = (string)$xml->protocol;
        $this->host = (string)$xml->host;
        $this->username = (string)$xml->username;
        $this->password = (string)$xml->password;
        $this->port = (string)$xml->port;
        $this->basePath = (string)$xml->basePath;
        $this->passphrase = (string)$xml->passphrase;
        $this->sftpPublicKey = (string)$xml->sftpPublicKey;
        $this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
        $this->disableMetadata = (string)$xml->disableMetadata;
        $this->metadataFilenameXslt = (string)$xml->metadataFilenameXslt;
        $this->flavorAssetFilenameXslt = (string)$xml->flavorAssetFilenameXslt;
        $this->thumbnailAssetFilenameXslt = (string)$xml->thumbnailAssetFilenameXslt;
        $this->assetFilenameXslt = (string)$xml->assetFilenameXslt;
        $this->asperaPublicKey = (string)$xml->asperaPublicKey;
        $this->asperaPrivateKey = (string)$xml->asperaPrivateKey;
        $this->sendMetadataAfterAssets = (string)$xml->sendMetadataAfterAssets;
    }

    /**
     * @var KalturaDistributionProtocol
     */
    public $protocol;

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
    public $password;

    /**
     * @var string
     */
    public $passphrase;

    /**
     * @var string
     */
    public $sftpPublicKey;

    /**
     * @var string
     */
    public $sftpPrivateKey;

    /**
     * @var bool
     */
    public $disableMetadata;

    /**
     * @var string
     */
    public $metadataXslt;

    /**
     * @var string
     */
    public $metadataFilenameXslt;

    /**
     * @var string
     */
    public $flavorAssetFilenameXslt;

    /**
     * @var string
     */
    public $thumbnailAssetFilenameXslt;

    /**
     * @var string
     */
    public $assetFilenameXslt;

    /**
     * @var string
     */
    public $asperaPublicKey;

    /**
     * @var string
     */
    public $asperaPrivateKey;

    /**
     * @var bool
     */
    public $sendMetadataAfterAssets;
}