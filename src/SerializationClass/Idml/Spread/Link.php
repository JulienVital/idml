<?php
namespace Jvital\Idml\SerializationClass\Idml\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Trait\SelfAttribute;

/** 
 * @XmlRoot("Link") 
 */
class Link
{
    use SelfAttribute;
    
    /**
     * @XmlAttribute
     * @SerializedName("AssetID")
     */
    private string $assetID;

        /**
         * @XmlAttribute
         * @SerializedName("LinkResourceURI")
         */
    private string $linkResourceURI;

    /**
     * @XmlAttribute
     * @SerializedName("AssetURL")
     */
    private string $assetURL='$ID/';
}
