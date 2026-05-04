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
class CalculatorServiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CalculatorServiceItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CalculatorServiceItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CalculatorServiceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cost', $data) && $data['cost'] !== null) {
            $object->setCost($data['cost']);
        }
        elseif (\array_key_exists('cost', $data) && $data['cost'] === null) {
            $object->setCost(null);
        }
        if (\array_key_exists('info', $data) && $data['info'] !== null) {
            $object->setInfo($data['info']);
        }
        elseif (\array_key_exists('info', $data) && $data['info'] === null) {
            $object->setInfo(null);
        }
        if (\array_key_exists('insuranceTerm', $data) && $data['insuranceTerm'] !== null) {
            $object->setInsuranceTerm($data['insuranceTerm']);
        }
        elseif (\array_key_exists('insuranceTerm', $data) && $data['insuranceTerm'] === null) {
            $object->setInsuranceTerm(null);
        }
        if (\array_key_exists('senderCity', $data) && $data['senderCity'] !== null) {
            $object->setSenderCity($data['senderCity']);
        }
        elseif (\array_key_exists('senderCity', $data) && $data['senderCity'] === null) {
            $object->setSenderCity(null);
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
        if (\array_key_exists('serviceType', $data) && $data['serviceType'] !== null) {
            $object->setServiceType($data['serviceType']);
        }
        elseif (\array_key_exists('serviceType', $data) && $data['serviceType'] === null) {
            $object->setServiceType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
            $values = array();
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