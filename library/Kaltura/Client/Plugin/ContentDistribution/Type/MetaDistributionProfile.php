<?php
/**
 * Created by PhpStorm.
 * User: suresh.katwal
 * Date: 26/04/2018
 * Time: 16:57
 */

namespace Kaltura\Client\Plugin\ContentDistribution\Type;


class MetaDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
{
    public function getKalturaObjectType()
    {
        return 'KalturaMetaDistributionProfile';
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

}