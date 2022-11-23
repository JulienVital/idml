<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Enums\PageTransitionDirectionOptions;

/**
 * This trait add a PageTransitionDirectionAttribute
 * default value is NOT_APPLICABLE
 */
trait PageTransitionDirectionAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("PageTransitionDirection")
     */
    private string $pageTransitionDirection= PageTransitionDirectionOptions::NOT_APPLICABLE;


    /**
     * Get the value of pageTransitionDirection
     */
    public function getPageTransitionDirection(): string
    {
        return $this->pageTransitionDirection;
    }

    /**
     * Set the value of pageTransitionDirection
     */
    public function setPageTransitionDirection(string $pageTransitionDirection): self
    {
        $this->pageTransitionDirection = $pageTransitionDirection;

        return $this;
    }
}