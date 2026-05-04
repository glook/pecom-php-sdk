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
class CargoInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amountProcessed', $data) && $data['amountProcessed'] !== null) {
            $object->setAmountProcessed($data['amountProcessed']);
        }
        elseif (\array_key_exists('amountProcessed', $data) && $data['amountProcessed'] === null) {
            $object->setAmountProcessed(null);
        }
        if (\array_key_exists('cargoBarCode', $data) && $data['cargoBarCode'] !== null) {
            $object->setCargoBarCode($data['cargoBarCode']);
        }
        elseif (\array_key_exists('cargoBarCode', $data) && $data['cargoBarCode'] === null) {
            $object->setCargoBarCode(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('maxSize', $data) && $data['maxSize'] !== null) {
            $object->setMaxSize($data['maxSize']);
        }
        elseif (\array_key_exists('maxSize', $data) && $data['maxSize'] === null) {
            $object->setMaxSize(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('parentCargoCode', $data) && $data['parentCargoCode'] !== null) {
            $object->setParentCargoCode($data['parentCargoCode']);
        }
        elseif (\array_key_exists('parentCargoCode', $data) && $data['parentCargoCode'] === null) {
            $object->setParentCargoCode(null);
        }
        if (\array_key_exists('positionBarCodes', $data) && $data['positionBarCodes'] !== null) {
            $values = array();
            foreach ($data['positionBarCodes'] as $value) {
                $values[] = $value;
            }
            $object->setPositionBarCodes($values);
        }
        elseif (\array_key_exists('positionBarCodes', $data) && $data['positionBarCodes'] === null) {
            $object->setPositionBarCodes(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        if (\array_key_exists('volume', $data) && $data['volume'] !== null) {
            $object->setVolume($data['volume']);
        }
        elseif (\array_key_exists('volume', $data) && $data['volume'] === null) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getAmountProcessed()) {
            $data['amountProcessed'] = $object->getAmountProcessed();
        }
        if (null !== $object->getCargoBarCode()) {
            $data['cargoBarCode'] = $object->getCargoBarCode();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getMaxSize()) {
            $data['maxSize'] = $object->getMaxSize();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getParentCargoCode()) {
            $data['parentCargoCode'] = $object->getParentCargoCode();
        }
        if (null !== $object->getPositionBarCodes()) {
            $values = array();
            foreach ($object->getPositionBarCodes() as $value) {
                $values[] = $value;
            }
            $data['positionBarCodes'] = $values;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        return $data;
    }
}