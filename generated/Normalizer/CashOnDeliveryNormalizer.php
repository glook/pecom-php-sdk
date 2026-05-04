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
class CashOnDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CashOnDelivery';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CashOnDelivery';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CashOnDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actualCost', $data) && $data['actualCost'] !== null) {
            $object->setActualCost($data['actualCost']);
        }
        elseif (\array_key_exists('actualCost', $data) && $data['actualCost'] === null) {
            $object->setActualCost(null);
        }
        if (\array_key_exists('cashOnDeliverySum', $data) && $data['cashOnDeliverySum'] !== null) {
            $object->setCashOnDeliverySum($data['cashOnDeliverySum']);
        }
        elseif (\array_key_exists('cashOnDeliverySum', $data) && $data['cashOnDeliverySum'] === null) {
            $object->setCashOnDeliverySum(null);
        }
        if (\array_key_exists('enabled', $data) && $data['enabled'] !== null) {
            $object->setEnabled($data['enabled']);
        }
        elseif (\array_key_exists('enabled', $data) && $data['enabled'] === null) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('includeTES', $data) && $data['includeTES'] !== null) {
            $object->setIncludeTES($data['includeTES']);
        }
        elseif (\array_key_exists('includeTES', $data) && $data['includeTES'] === null) {
            $object->setIncludeTES(null);
        }
        if (\array_key_exists('sellerPhone', $data) && $data['sellerPhone'] !== null) {
            $object->setSellerPhone($data['sellerPhone']);
        }
        elseif (\array_key_exists('sellerPhone', $data) && $data['sellerPhone'] === null) {
            $object->setSellerPhone(null);
        }
        if (\array_key_exists('sellerServices', $data) && $data['sellerServices'] !== null) {
            $values = array();
            foreach ($data['sellerServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CargopickupSellerService', 'json', $context);
            }
            $object->setSellerServices($values);
        }
        elseif (\array_key_exists('sellerServices', $data) && $data['sellerServices'] === null) {
            $object->setSellerServices(null);
        }
        if (\array_key_exists('specification', $data)) {
            $object->setSpecification($this->denormalizer->denormalize($data['specification'], 'glook\\PecomSdk\\Generated\\Model\\CargopickupSpecification', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActualCost()) {
            $data['actualCost'] = $object->getActualCost();
        }
        if (null !== $object->getCashOnDeliverySum()) {
            $data['cashOnDeliverySum'] = $object->getCashOnDeliverySum();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getIncludeTES()) {
            $data['includeTES'] = $object->getIncludeTES();
        }
        if (null !== $object->getSellerPhone()) {
            $data['sellerPhone'] = $object->getSellerPhone();
        }
        if (null !== $object->getSellerServices()) {
            $values = array();
            foreach ($object->getSellerServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sellerServices'] = $values;
        }
        if (null !== $object->getSpecification()) {
            $data['specification'] = $this->normalizer->normalize($object->getSpecification(), 'json', $context);
        }
        return $data;
    }
}