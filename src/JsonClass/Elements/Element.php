<?php

namespace Jvital\Idml\JsonClass\Elements;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Discriminator;
use JMS\Serializer\Annotation\Type;

/** 
 * @Discriminator(field = "type", 
 *    map = {
 *       "TEXT": "Jvital\Idml\JsonClass\Elements\Text", 
 *       "TABLE": "Jvital\Idml\JsonClass\Elements\Table", 
 *       "BLOCK": "Jvital\Idml\JsonClass\Elements\Block", 
 *       "PICTURE": "Jvital\Idml\JsonClass\Elements\Picture", 
 * }) 
 */
abstract class Element
{

    /**
     * @SerializedName("id")
     */
    private string $id;

    /**
     * @SerializedName("label")
     */
    private string $label;

    /**
     * @SerializedName("parentId")
     */
    private string $parentId;

    /**
     * @SerializedName("styleName")
     */
    private string $styleName;

    private Size $size;

    /**
     * @Type("array<string, string>")
     */
    private array $properties;
    /**
     * Get the value of id
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of label
     */
    public function getLabel(): ?string
    {
        return $this->label ?? null;
    }

    /**
     * Set the value of label
     */
    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get the value of parentId
     */
    public function getParentId(): ?string
    {
        return $this->parentId ?? null;
    }

    /**
     * Set the value of parentId
     */
    public function setParentId(string $parentId): self
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get the value of styleName
     */
    public function getStyleName(): string
    {
        return $this->styleName;
    }

    /**
     * Set the value of styleName
     */
    public function setStyleName(string $styleName): self
    {
        $this->styleName = $styleName;

        return $this;
    }

    /**
     * Get the value of size
     */
    public function getSize(): Size
    {
        return $this->size;
    }

    /**
     * Set the value of size
     */
    public function setSize(Size $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of properties
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * Set the value of properties
     */
    public function setProperties(array $properties): self
    {
        $this->properties = $properties;

        return $this;
    }
}
