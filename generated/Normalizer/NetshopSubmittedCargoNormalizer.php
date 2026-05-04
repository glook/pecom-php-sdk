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
class NetshopSubmittedCargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\NetshopSubmittedCargo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\NetshopSubmittedCargo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\NetshopSubmittedCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
        }
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('orderNumber', $data)) {
            $object->setOrderNumber($data['orderNumber']);
        }
        if (\array_key_exists('positions', $data)) {
            $values = array();
            foreach ($data['positions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\NetshopCargoPosition', 'json', $context);
            }
            $object->setPositions($values);
        }
        if (\array_key_exists('stockTitle', $data) && $data['stockTitle'] !== null) {
            $object->setStockTitle($data['stockTitle']);
        }
        elseif (\array_key_exists('stockTitle', $data) && $data['stockTitle'] === null) {
            $object->setStockTitle(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['barcode'] = $object->getBarcode();
        $data['cargoCode'] = $object->getCargoCode();
        $data['orderNumber'] = $object->getOrderNumber();
        $values = array();
        foreach ($object->getPositions() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['positions'] = $values;
        if (null !== $object->getStockTitle()) {
            $data['stockTitle'] = $object->getStockTitle();
        }
        return $data;
    }
}