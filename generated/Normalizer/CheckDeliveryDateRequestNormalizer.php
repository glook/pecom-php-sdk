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
class CheckDeliveryDateRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CheckDeliveryDateRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CheckDeliveryDateRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CheckDeliveryDateRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($data['address']);
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        if (\array_key_exists('calculateDays', $data) && $data['calculateDays'] !== null) {
            $object->setCalculateDays($data['calculateDays']);
        }
        elseif (\array_key_exists('calculateDays', $data) && $data['calculateDays'] === null) {
            $object->setCalculateDays(null);
        }
        if (\array_key_exists('coordinates', $data) && $data['coordinates'] !== null) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\\PecomSdk\\Generated\\Model\\CoordinatesNumber', 'json', $context));
        }
        elseif (\array_key_exists('coordinates', $data) && $data['coordinates'] === null) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('requestDateTime', $data) && $data['requestDateTime'] !== null) {
            $object->setRequestDateTime(\DateTime::createFromFormat('Y-m-d', $data['requestDateTime'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('requestDateTime', $data) && $data['requestDateTime'] === null) {
            $object->setRequestDateTime(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAddress()) {
            $data['address'] = $object->getAddress();
        }
        if (null !== $object->getCalculateDays()) {
            $data['calculateDays'] = $object->getCalculateDays();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getRequestDateTime()) {
            $data['requestDateTime'] = $object->getRequestDateTime()->format('Y-m-d');
        }
        return $data;
    }
}