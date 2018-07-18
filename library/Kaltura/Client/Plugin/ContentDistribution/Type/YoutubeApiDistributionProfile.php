<?php
/**
 * Created by PhpStorm.
 * User: suresh.katwal
 * Date: 26/04/2018
 * Time: 17:00
 */

namespace Kaltura\Client\Plugin\ContentDistribution\Type;


class YoutubeApiDistributionProfile extends \Kaltura\Client\Plugin\ContentDistribution\Type\DistributionProfile
{
    public function getKalturaObjectType()
    {
        return 'KalturaYoutubeApiDistributionProfile';
    }

    public function __construct(\SimpleXMLElement $xml = null)
    {
        parent::__construct($xml);

        if(is_null($xml))
            return;

        $this->username = (string)$xml->username;
        $this->password = (string)$xml->password;
        $this->defaultCategory = (string)$xml->defaultCategory;
        $this->allowComments = (string)$xml->allowComments;
        $this->allowEmbedding = (string)$xml->allowEmbedding;
        $this->allowRatings = (string)$xml->allowRatings;
        $this->allowResponses = (string)$xml->allowResponses;
    }
    /**
     *
     *
     * @var string
     */
    public $username = null;

    /**
     *
     *
     * @var string
     */
    public $password = null;

    /**
     *
     *
     * @var string
     */
    public $defaultCategory = null;

    /**
     *
     *
     * @var string
     */
    public $allowComments = null;

    /**
     *
     *
     * @var string
     */
    public $allowEmbedding = null;

    /**
     *
     *
     * @var string
     */
    public $allowRatings = null;

    /**
     *
     *
     * @var string
     */
    public $allowResponses = null;
}