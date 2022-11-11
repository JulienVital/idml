<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Enums\PageTransitionDurationOptions;
use Jvital\Idml\Enums\PageTransitionTypeOptions;

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