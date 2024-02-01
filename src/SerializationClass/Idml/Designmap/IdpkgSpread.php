<?php
namespace Jvital\Idml\SerializationClass\Idml\Designmap;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("idPkg:Spread") 
 */
class IdpkgSpread
{
    
    /**
     * @SerializedName("src")
     * @XmlAttribute
     */
    private string $src;

    /**
     * Get the value of src
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * Set the value of src
     */
    public function setSrc(string $src): self
    {
        $this->src = "Spreads/Spread_$src.xml";
        
        return $this;
    }
}

