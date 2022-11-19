<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * This trait add a FooterRowCount Attribute
 * range 0-25
 */
trait FooterRowCountAttribute {
    
    /**
     * @SerializedName("FooterRowCount")
     * @XmlAttribute
     */
    private int $footerRowCount;

    /**
     * Get the value of footerRowCount
     */
    public function getFooterRowCount(): int
    {
        return $this->footerRowCount;
    }

    /**
     * Set the value of footerRowCount
     */
    public function setFooterRowCount(int $footerRowCount): self
    {
        $this->footerRowCount = $footerRowCount;

        return $this;
    }
}
