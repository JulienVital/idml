<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a ShowMasterItems Attribute
 * default value is true
 *     // If true, displays master page items on document pages in the spread.
 */
trait ShowMasterItemsAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("ShowMasterItems")
     */
    private bool $showMasterItems= true;

    /**
     * Get the value of showMasterItems
     */
    public function isShowMasterItems(): bool
    {
        return $this->showMasterItems;
    }

    /**
     * Set the value of showMasterItems
     */
    public function setShowMasterItems(bool $showMasterItems): self
    {
        $this->showMasterItems = $showMasterItems;

        return $this;
    }
}