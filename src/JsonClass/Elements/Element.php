<?php

namespace Jvital\Idml\JsonClass\Elements;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Discriminator;


class Element
{
    /**
     * @SerializedName("type")

     */
    private string $type;

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

    /**
     * Set the value of type
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

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
    public function getLabel(): string
    {
        return $this->label ?? $this->id;
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
}
