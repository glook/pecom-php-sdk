<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\Transfer;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\Transfer' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\Transfer' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Transfer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('costTotal', $data) && null !== $data['costTotal']) {
            $object->setCostTotal($data['costTotal']);
        } elseif (\array_key_exists('costTotal', $data) && null === $data['costTotal']) {
            $object->setCostTotal(null);
        }
        if (\array_key_exists('errorMessage', $data) && null !== $data['errorMessage']) {
            $object->setErrorMessage($data['errorMessage']);
        } elseif (\array_key_exists('errorMessage', $data) && null === $data['errorMessage']) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('estDeliveryTime', $data) && null !== $data['estDeliveryTime']) {
            $object->setEstDeliveryTime($data['estDeliveryTime']);
        } elseif (\array_key_exists('estDeliveryTime', $data) && null === $data['estDeliveryTime']) {
            $object->setEstDeliveryTime(null);
        }
        if (\array_key_exists('hasError', $data) && null !== $data['hasError']) {
            $object->setHasError($data['hasError']);
        } elseif (\array_key_exists('hasError', $data) && null === $data['hasError']) {
            $object->setHasError(null);
        }
        if (\array_key_exists('services', $data) && null !== $data['services']) {
            $values = [];
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CalculatorServiceItem', 'json', $context);
            }
            $object->setServices($values);
        } elseif (\array_key_exists('services', $data) && null === $data['services']) {
            $object->setServices(null);
        }
        if (\array_key_exists('transportingTypes', $data) && null !== $data['transportingTypes']) {
            $object->setTransportingTypes($data['transportingTypes']);
        } elseif (\array_key_exists('transportingTypes', $data) && null === $data['transportingTypes']) {
            $object->setTransportingTypes(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
            $values = [];
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
