<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionTypeOptions;

/**
 * This trait add a PageTransitionType Attribute
 * default value is None
 */
trait PageTransitionTypeAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("PageTransitionType")
     */
    private string $pageTransitionType= PageTransitionTypeOptions::NONE;




    /**
     * Get the value of pageTransitionType
     */
    public function getPageTransitionType(): string
    {
        return $this->pageTransitionType;
    }

    /**
     * Set the value of pageTransitionType
     */
    public function setPageTransitionType(string $pageTransitionType): self
    {
        $this->pageTransitionType = $pageTransitionType;

        return $this;
    }
}