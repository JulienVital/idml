<?php
namespace Jvital\Idml\SerializationClass\Idml\Ressources\Graphics;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Jvital\Idml\SerializationClass\Trait\NameAttribute;
use Jvital\Idml\SerializationClass\Trait\SelfAttribute;
use Jvital\Idml\SerializationClass\Trait\VisibleAttribute;

/** 
 * @XmlRoot("Color") 
*/
class Color {

    use SelfAttribute;
    use NameAttribute;
    /**
     * @SerializedName("Model")
     * @XmlAttribute
     */
    private string $model;

    /**
     * @SerializedName("Space")
     * @XmlAttribute
     */
    private string $space;

    /**
     * @SerializedName("ColorValue")
     * @XmlAttribute
     */
    private string $colorValue;

    /**
     * @SerializedName("ColorOverride")
     * @XmlAttribute
     */
    private string $colorOverride;

    /**
     * @SerializedName("SwatchColorGroupReference")
     * @XmlAttribute
     */
    private string $swatchColorGroupReference;
    /**
     * @SerializedName("SwatchCreatorID")
     * @XmlAttribute
     */
    private string $swatchCreatorID;

    use VisibleAttribute;

    /**
     * @SerializedName("ColorEditable")
     * @XmlAttribute
     */
    private bool $colorEditable;
    /**
     * @SerializedName("ColorRemovable")
     * @XmlAttribute
     */
    private bool $colorRemovable;
}