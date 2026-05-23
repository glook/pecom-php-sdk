<?php

namespace glook\PecomSdk\Generated\Model;

class SuggestAddressResponseResponseGeoObjectCollection
{
    /**
     * @var FeatureMember[]
     */
    protected $featureMember;

    /**
     * @var SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
     */
    protected $metaDataProperty;

    /**
     * @return FeatureMember[]
     */
    public function getFeatureMember(): array
    {
        return $this->featureMember;
    }

    /**
     * @param FeatureMember[] $featureMember
     */
    public function setFeatureMember(array $featureMember): self
    {
        $this->featureMember = $featureMember;

        return $this;
    }

    public function getMetaDataProperty(): SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty
    {
        return $this->metaDataProperty;
    }

    public function setMetaDataProperty(SuggestAddressResponseResponseGeoObjectCollectionMetaDataProperty $metaDataProperty): self
    {
        $this->metaDataProperty = $metaDataProperty;

        return $this;
    }
}
