<?php
namespace Jvital\Idml\SerializationClass\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionDurationOptions;
use Jvital\Idml\SerializationClass\Idml\Enums\PageTransitionTypeOptions;

/**
 * This trait add a PageTransitionType Attribute
 * default value is MEDIUM
 */
trait PageTransitionDurationAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("PageTransitionDuration")
     */
    private string $pageTransitionDuration= PageTransitionDurationOptions::MEDIUM;



    /**
     * Get the value of pageTransitionDuration
     */
    public function getPageTransitionDuration(): string
    {
        return $this->pageTransitionDuration;
    }

    /**
     * Set the value of pageTransitionDuration
     */
    public function setPageTransitionDuration(string $pageTransitionDuration): self
    {
        $this->pageTransitionDuration = $pageTransitionDuration;

        return $this;
    }
}