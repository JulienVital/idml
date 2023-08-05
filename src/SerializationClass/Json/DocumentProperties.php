<?php
namespace Jvital\Idml\SerializationClass\Json;
use JMS\Serializer\Annotation\SerializedName;

class DocumentProperties{
    /**
    * @SerializedName("backgroundColor")
    */
    private string $backgroundColor;
    
    private int $width;
    
    private int $height;

    /**
    * @SerializedName("measurementUnit")
    */
    private string $measurementUnit;

    public function getBackgroundColor():string{
        return $this->backgroundColor;
    }

    public function getWidth():int{
        return $this->width;
    }

    public function getHeight():int{
        return $this->height;
    }

    public function getMeasurementUnit():string{
        return $this->measurementUnit;
    }
}