<?php
namespace Jvital\Idml\JsonClass;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Styles{

    private string $name;

    /**
     * @Type("array<string, string>")
     * @SerializedName("styleValue")
     */
    private array $styleValue;


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
     * Get the value of styleValue
     */
    public function getStyleValue(): array
    {
        return $this->styleValue;
    }

    /**
     * Set the value of styleValue
     */
    public function setStyleValue(array $styleValue): self
    {
        $this->styleValue = $styleValue;

        return $this;
    }
}