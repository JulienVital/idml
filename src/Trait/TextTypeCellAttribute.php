<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\SerializedName;

/**
 * This trait add a TextTypeCell Attribute
 * 	
 * The content type of cell.
 * default value is 1
 */
trait TextTypeCellAttribute {
    
    /**
     * @XmlAttribute
     * @SerializedName("CellType")
     * default TextTypeCell
     */
    private string $cellType= "TextTypeCell";

}
