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
class CurrentStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CurrentStatus';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CurrentStatus';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CurrentStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ClientStatus', $data) && $data['ClientStatus'] !== null) {
            $object->setClientStatus($data['ClientStatus']);
        }
        elseif (\array_key_exists('ClientStatus', $data) && $data['ClientStatus'] === null) {
            $object->setClientStatus(null);
        }
        if (\array_key_exists('ClientStatusLevel2', $data) && $data['ClientStatusLevel2'] !== null) {
            $object->setClientStatusLevel2($data['ClientStatusLevel2']);
        }
        elseif (\array_key_exists('ClientStatusLevel2', $data) && $data['ClientStatusLevel2'] === null) {
            $object->setClientStatusLevel2(null);
        }
        if (\array_key_exists('Id', $data) && $data['Id'] !== null) {
            $object->setId($data['Id']);
        }
        elseif (\array_key_exists('Id', $data) && $data['Id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('IsActive', $data) && $data['IsActive'] !== null) {
            $object->setIsActive($data['IsActive']);
        }
        elseif (\array_key_exists('IsActive', $data) && $data['IsActive'] === null) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('Tooltip', $data) && $data['Tooltip'] !== null) {
            $object->setTooltip($data['Tooltip']);
        }
        elseif (\array_key_exists('Tooltip', $data) && $data['Tooltip'] === null) {
            $object->setTooltip(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getClientStatus()) {
            $data['ClientStatus'] = $object->getClientStatus();
        }
        if (null !== $object->getClientStatusLevel2()) {
            $data['ClientStatusLevel2'] = $object->getClientStatusLevel2();
        }
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['IsActive'] = $object->getIsActive();
        }
        if (null !== $object->getTooltip()) {
            $data['Tooltip'] = $object->getTooltip();
        }
        return $data;
    }
}