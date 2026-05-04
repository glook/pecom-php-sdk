<?php

namespace glook\PecomSdk\Generated\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ZoneByCoordinateNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ZoneByCoordinate';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ZoneByCoordinate';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ZoneByCoordinate();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bitrixId', $data)) {
            $object->setBitrixId($data['bitrixId']);
        }
        if (\array_key_exists('branchCode', $data)) {
            $object->setBranchCode($data['branchCode']);
        }
        if (\array_key_exists('branchTitle', $data)) {
            $object->setBranchTitle($data['branchTitle']);
        }
        if (\array_key_exists('branchUID', $data)) {
            $object->setBranchUID($data['branchUID']);
        }
        if (\array_key_exists('warehousePoint', $data)) {
            $object->setWarehousePoint($this->denormalizer->denormalize($data['warehousePoint'], 'glook\\PecomSdk\\Generated\\Model\\BranchesCoordinates', 'json', $context));
        }
        if (\array_key_exists('zoneId', $data)) {
            $object->setZoneId($data['zoneId']);
        }
        if (\array_key_exists('zoneName', $data)) {
            $object->setZoneName($data['zoneName']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['bitrixId'] = $object->getBitrixId();
        $data['branchCode'] = $object->getBranchCode();
        $data['branchTitle'] = $object->getBranchTitle();
        $data['branchUID'] = $object->getBranchUID();
        $data['warehousePoint'] = $this->normalizer->normalize($object->getWarehousePoint(), 'json', $context);
        $data['zoneId'] = $object->getZoneId();
        $data['zoneName'] = $object->getZoneName();
        return $data;
    }
}