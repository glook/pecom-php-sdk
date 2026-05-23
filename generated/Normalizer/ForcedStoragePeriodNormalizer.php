<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ForcedStoragePeriod;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ForcedStoragePeriodNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ForcedStoragePeriod' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ForcedStoragePeriod' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ForcedStoragePeriod();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoStatus', $data) && null !== $data['cargoStatus']) {
            $object->setCargoStatus($data['cargoStatus']);
        } elseif (\array_key_exists('cargoStatus', $data) && null === $data['cargoStatus']) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('costStorage', $data) && null !== $data['costStorage']) {
            $object->setCostStorage($data['costStorage']);
        } elseif (\array_key_exists('costStorage', $data) && null === $data['costStorage']) {
            $object->setCostStorage(null);
        }
        if (\array_key_exists('endDataNumber', $data) && null !== $data['endDataNumber']) {
            $object->setEndDataNumber($data['endDataNumber']);
        } elseif (\array_key_exists('endDataNumber', $data) && null === $data['endDataNumber']) {
            $object->setEndDataNumber(null);
        }
        if (\array_key_exists('endDate', $data) && null !== $data['endDate']) {
            $object->setEndDate($data['endDate']);
        } elseif (\array_key_exists('endDate', $data) && null === $data['endDate']) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('minStorageCost', $data) && null !== $data['minStorageCost']) {
            $object->setMinStorageCost($data['minStorageCost']);
        } elseif (\array_key_exists('minStorageCost', $data) && null === $data['minStorageCost']) {
            $object->setMinStorageCost(null);
        }
        if (\array_key_exists('rate', $data) && null !== $data['rate']) {
            $object->setRate($data['rate']);
        } elseif (\array_key_exists('rate', $data) && null === $data['rate']) {
            $object->setRate(null);
        }
        if (\array_key_exists('startDataNumber', $data) && null !== $data['startDataNumber']) {
            $object->setStartDataNumber($data['startDataNumber']);
        } elseif (\array_key_exists('startDataNumber', $data) && null === $data['startDataNumber']) {
            $object->setStartDataNumber(null);
        }
        if (\array_key_exists('startDate', $data) && null !== $data['startDate']) {
            $object->setStartDate($data['startDate']);
        } elseif (\array_key_exists('startDate', $data) && null === $data['startDate']) {
            $object->setStartDate(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargoStatus()) {
            $data['cargoStatus'] = $object->getCargoStatus();
        }
        if (null !== $object->getCostStorage()) {
            $data['costStorage'] = $object->getCostStorage();
        }
        if (null !== $object->getEndDataNumber()) {
            $data['endDataNumber'] = $object->getEndDataNumber();
        }
        if (null !== $object->getEndDate()) {
            $data['endDate'] = $object->getEndDate();
        }
        if (null !== $object->getMinStorageCost()) {
            $data['minStorageCost'] = $object->getMinStorageCost();
        }
        if (null !== $object->getRate()) {
            $data['rate'] = $object->getRate();
        }
        if (null !== $object->getStartDataNumber()) {
            $data['startDataNumber'] = $object->getStartDataNumber();
        }
        if (null !== $object->getStartDate()) {
            $data['startDate'] = $object->getStartDate();
        }

        return $data;
    }
}
