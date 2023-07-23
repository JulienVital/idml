<?php

namespace Jvital\Idml\JsonClass;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

class Page
{
    private string $name;
    /**
     * @SerializedName("pagePosition")
     */
    private int $pagePosition;


    /**
     * @Type("array<Jvital\Idml\JsonClass\Elements\Element>")
     * @var Element[]
     */
    private array $elements;
    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of pagePosition
     */
    public function getPagePosition(): int
    {
        return $this->pagePosition;
    }

    /**
     * Set the value of pagePosition
     */
    public function setPagePosition(int $pagePosition): self
    {
        $this->pagePosition = $pagePosition;

        return $this;
    }

    /**
     * Get the value of elements
     */
    public function getElements(): array
    {
        return $this->elements;
    }

    /**
     * Set the value of elements
     */
    public function setElements(array $elements): self
    {
        $this->elements = $elements;

        return $this;
    }
}
