<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BranchesNearestdepartmentsPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBody' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BranchesNearestdepartmentsPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && null !== $data['address']) {
            $object->setAddress($data['address']);
        } elseif (\array_key_exists('address', $data) && null === $data['address']) {
            $object->setAddress(null);
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\BranchesNearestdepartmentsPostBodyCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('departmentOperation', $data)) {
            $object->setDepartmentOperation($data['departmentOperation']);
        }
        if (\array_key_exists('limit', $data)) {
            $object->setLimit($data['limit']);
        }
        if (\array_key_exists('maxDimension', $data) && null !== $data['maxDimension']) {
            $object->setMaxDimension($data['maxDimension']);
        } elseif (\array_key_exists('maxDimension', $data) && null === $data['maxDimension']) {
            $object->setMaxDimension(null);
        }
        if (\array_key_exists('maxWeightPerPlace', $data) && null !== $data['maxWeightPerPlace']) {
            $object->setMaxWeightPerPlace($data['maxWeightPerPlace']);
        } elseif (\array_key_exists('maxWeightPerPlace', $data) && null === $data['maxWeightPerPlace']) {
            $object->setMaxWeightPerPlace(null);
        }
        if (\array_key_exists('searchRadius', $data)) {
            $object->setSearchRadius($data['searchRadius']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('volume', $data) && null !== $data['volume']) {
            $object->setVolume($data['volume']);
        } elseif (\array_key_exists('volume', $data) && null === $data['volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        $data['departmentOperation'] = $object->getDepartmentOperation();
        $data['limit'] = $object->getLimit();
        if (null !== $object->getMaxDimension()) {
            $data['maxDimension'] = $object->getMaxDimension();
        }
        if (null !== $object->getMaxWeightPerPlace()) {
            $data['maxWeightPerPlace'] = $object->getMaxWeightPerPlace();
        }
        $data['searchRadius'] = $object->getSearchRadius();
        $data['type'] = $object->getType();
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }

        return $data;
    }
}
