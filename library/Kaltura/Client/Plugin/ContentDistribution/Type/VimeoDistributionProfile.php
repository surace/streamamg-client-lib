<?php
/**
 * Created by PhpStorm.
 * User: suresh.katwal
 * Date: 26/04/2018
 * Time: 16:58
 */

namespace Kaltura\Client\Plugin\ContentDistribution\Type;


class VimeoDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
{
    public function getKalturaObjectType()
    {
        return 'KalturaVimeoDistributionProfile';
    }

    public function __construct(\SimpleXMLElement $xml = null)
    {
        parent::__construct($xml);

        if(is_null($xml))
            return;

        $this->consumerkey= (string)$xml->consumerkey;
        $this->consumersecret = (string)$xml->consumersecret;
        $this->token= (string)$xml->token;
        $this->tokensecret = (string)$xml->tokensecret;
        $this->vimeouseremail = (string)$xml->vimeouseremail;
    }

    /**
     * @var string
     */
    public $consumerkey;

    /**
     * @var string
     */
    public $consumersecret;

    /**
     * @var string
     */
    public $vimeouseremail;

}