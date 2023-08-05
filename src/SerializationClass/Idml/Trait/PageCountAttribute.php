<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a PageCount Attribute
 * The number of pages in the spread.
 */
trait PageCountAttribute {

    /**
     * @XmlAttribute
     * @SerializedName("PageCount")
     */
    private int $pageCount;


    /**
     * Get the value of pageCount
     */
    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    /**
     * Set the value of pageCount
     */
    public function setPageCount(int $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }
}