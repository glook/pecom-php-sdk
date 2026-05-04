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
class TransferNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Transfer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Transfer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Transfer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('costTotal', $data) && $data['costTotal'] !== null) {
            $object->setCostTotal($data['costTotal']);
        }
        elseif (\array_key_exists('costTotal', $data) && $data['costTotal'] === null) {
            $object->setCostTotal(null);
        }
        if (\array_key_exists('errorMessage', $data) && $data['errorMessage'] !== null) {
            $object->setErrorMessage($data['errorMessage']);
        }
        elseif (\array_key_exists('errorMessage', $data) && $data['errorMessage'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('estDeliveryTime', $data) && $data['estDeliveryTime'] !== null) {
            $object->setEstDeliveryTime($data['estDeliveryTime']);
        }
        elseif (\array_key_exists('estDeliveryTime', $data) && $data['estDeliveryTime'] === null) {
            $object->setEstDeliveryTime(null);
        }
        if (\array_key_exists('hasError', $data) && $data['hasError'] !== null) {
            $object->setHasError($data['hasError']);
        }
        elseif (\array_key_exists('hasError', $data) && $data['hasError'] === null) {
            $object->setHasError(null);
        }
        if (\array_key_exists('services', $data) && $data['services'] !== null) {
            $values = array();
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CalculatorServiceItem', 'json', $context);
            }
            $object->setServices($values);
        }
        elseif (\array_key_exists('services', $data) && $data['services'] === null) {
            $object->setServices(null);
        }
        if (\array_key_exists('transportingTypes', $data) && $data['transportingTypes'] !== null) {
            $object->setTransportingTypes($data['transportingTypes']);
        }
        elseif (\array_key_exists('transportingTypes', $data) && $data['transportingTypes'] === null) {
            $object->setTransportingTypes(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCostTotal()) {
            $data['costTotal'] = $object->getCostTotal();
        }
        if (null !== $object->getErrorMessage()) {
            $data['errorMessage'] = $object->getErrorMessage();
        }
        if (null !== $object->getEstDeliveryTime()) {
            $data['estDeliveryTime'] = $object->getEstDeliveryTime();
        }
        if (null !== $object->getHasError()) {
            $data['hasError'] = $object->getHasError();
        }
        if (null !== $object->getServices()) {
            $values = array();
            foreach ($object->getServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['services'] = $values;
        }
        if (null !== $object->getTransportingTypes()) {
            $data['transportingTypes'] = $object->getTransportingTypes();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}