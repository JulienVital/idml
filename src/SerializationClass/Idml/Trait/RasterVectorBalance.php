<?php
namespace Jvital\Idml\SerializationClass\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\SerializationClass\Idml\Spread\RasterVectorBalance as SpreadRasterVectorBalance;
use Jvital\Idml\SerializationClass\Idml\Utils\Properties as UtilsProperties;

/**
 * This trait add a Properties child
 */
trait RasterVectorBalance {
    
    /**
     * @SerializedName("RasterVectorBalance")
     */
    private SpreadRasterVectorBalance $rasterVectorBalance;


    /**
     * Get the value of rasterVectorBalance
     */
    public function getRasterVectorBalance(): SpreadRasterVectorBalance
    {
        return $this->rasterVectorBalance;
    }

    /**
     * Set the value of rasterVectorBalance
     */
    public function setRasterVectorBalance(SpreadRasterVectorBalance $rasterVectorBalance): self
    {
        $this->rasterVectorBalance = $rasterVectorBalance;

        return $this;
    }
}

