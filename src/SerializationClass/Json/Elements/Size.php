<?php

namespace Jvital\Idml\SerializationClass\Json\Elements;

class Size
{
    private string $width;
    private string $left;
    private string $top;
    private string $height;

    public function __construct($left, $top, $width,  $height)
    {
        $this->left = $left;
        $this->top = $top;
        $this->width = $width;
        $this->height = $height;
    }
    /**
     * Get the value of width
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     */
    public function setWidth($width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of left
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * Set the value of left
     */
    public function setLeft($left): self
    {
        $this->left = $left;

        return $this;
    }

    /**
     * Get the value of top
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * Set the value of top
     */
    public function setTop($top): self
    {
        $this->top = $top;

        return $this;
    }

    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     */
    public function setHeight($height): self
    {
        $this->height = $height;

        return $this;
    }
}
