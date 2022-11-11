<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlList;
use JMS\Serializer\Annotation\Type;
use Jvital\Idml\Spread\Page as SpreadPage;

/**
 * This trait add Page value
 */
trait Page {
    
    /**
     * @SerializedName("Page")
     * @Type("array<Jvital\Idml\Spread\Page>")
     * @XmlList(inline = true, entry = "Page")
     */
    private array $page;

}

