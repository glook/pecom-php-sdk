<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CalculatorServiceItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CalculatorServiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CalculatorServiceItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CalculatorServiceItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CalculatorServiceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cost', $data) && null !== $data['cost']) {
            $object->setCost($data['cost']);
        } elseif (\array_key_exists('cost', $data) && null === $data['cost']) {
            $object->setCost(null);
        }
        if (\array_key_exists('info', $data) && null !== $data['info']) {
            $object->setInfo($data['info']);
        } elseif (\array_key_exists('info', $data) && null === $data['info']) {
            $object->setInfo(null);
        }
        if (\array_key_exists('insuranceTerm', $data) && null !== $data['insuranceTerm']) {
            $object->setInsuranceTerm($data['insuranceTerm']);
        } elseif (\array_key_exists('insuranceTerm', $data) && null === $data['insuranceTerm']) {
            $object->setInsuranceTerm(null);
        }
        if (\array_key_exists('senderCity', $data) && null !== $data['senderCity']) {
            $object->setSenderCity($data['senderCity']);
        } elseif (\array_key_exists('senderCity', $data) && null === $data['senderCity']) {
            $object->setSenderCity(null);
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
        if (\array_key_exists('serviceType', $data) && null !== $data['serviceType']) {
            $object->setServiceType($data['serviceType']);
        } elseif (\array_key_exists('serviceType', $data) && null === $data['serviceType']) {
            $object->setServiceType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCost()) {
            $data['cost'] = $object->getCost();
        }
        if (null !== $object->getInfo()) {
            $data['info'] = $object->getInfo();
        }
        if (null !== $object->getInsuranceTerm()) {
            $data['insuranceTerm'] = $object->getInsuranceTerm();
        }
        if (null !== $object->getSenderCity()) {
            $data['senderCity'] = $object->getSenderCity();
        }
        if (null !== $object->getServices()) {
            $values = [];
            foreach ($object->getServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['services'] = $values;
        }
        if (null !== $object->getServiceType()) {
            $data['serviceType'] = $object->getServiceType();
        }

        return $data;
    }
}
