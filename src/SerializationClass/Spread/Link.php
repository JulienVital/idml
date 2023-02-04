<?php
namespace Jvital\Idml\SerializationClass\Spread;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;

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
