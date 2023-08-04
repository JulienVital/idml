<?php
namespace Jvital\Idml\JsonClass;
use JMS\Serializer\Annotation\Type;

class Document{

    private string $name;

    private string $id;

    private DocumentProperties $properties;
    
    /**
     * @Type("array<Jvital\Idml\JsonClass\Styles>")
     * @var Styles[]
     */
    private array $styles;

    /**
     * @Type("array<Jvital\Idml\JsonClass\PageJson>")
     * @var PageJson[]
     */
    private array $pages = [];
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
     * Get the value of properties
     */
    public function getProperties():DocumentProperties
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

    /**
     * Get the value of styles
     */
    public function getStyles(): array
    {
        return $this->styles;
    }

    /**
     * Set the value of styles
     */
    public function setStyles(array $styles): self
    {
        $this->styles = $styles;

        return $this;
    }

    /**
     * Get the value of pages
     */
    public function getPages(): array
    {
        return $this->pages;
    }

    /**
     * Set the value of pages
     */
    public function setPages(array $pages): self
    {
        $this->pages = $pages;

        return $this;
    }

    public function addPages(array $pages): self
    {

        if (!$pages){
            return $this;
        }
        $this->pages = $pages;

        return $this;
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
}