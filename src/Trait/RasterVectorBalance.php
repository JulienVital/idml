<?php
namespace Jvital\Idml\Trait;

use JMS\Serializer\Annotation\SerializedName;
use Jvital\Idml\Spread\RasterVectorBalance as SpreadRasterVectorBalance;
use Jvital\Idml\Utils\Properties as UtilsProperties;

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

