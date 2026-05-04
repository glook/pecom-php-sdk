<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponseGeoObjectCollection
{
    /**
     * 
     *
     * @var FeatureMember[]
     */
    protected $featureMember;
    /**
     * 
     *
     * @var SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
     */
    protected $metaDataProperty;
    /**
     * 
     *
     * @return FeatureMember[]
     */
    public function getFeatureMember() : array
    {
        return $this->featureMember;
    }
    /**
     * 
     *
     * @param FeatureMember[] $featureMember
     *
     * @return self
     */
    public function setFeatureMember(array $featureMember) : self
    {
        $this->featureMember = $featureMember;
        return $this;
    }
    /**
     * 
     *
     * @return SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
     */
    public function getMetaDataProperty() : SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
    {
        return $this->metaDataProperty;
    }
    /**
     * 
     *
     * @param SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty $metaDataProperty
     *
     * @return self
     */
    public function setMetaDataProperty(SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty $metaDataProperty) : self
    {
        $this->metaDataProperty = $metaDataProperty;
        return $this;
    }
}