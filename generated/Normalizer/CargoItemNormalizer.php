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
class CargoItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('barcode', $data)) {
            $object->setBarcode($data['barcode']);
        }
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('positions', $data) && $data['positions'] !== null) {
            $values = array();
            foreach ($data['positions'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CargoPosition', 'json', $context);
            }
            $object->setPositions($values);
        }
        elseif (\array_key_exists('positions', $data) && $data['positions'] === null) {
            $object->setPositions(null);
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\\PecomSdk\\Generated\\Model\\CargopickupCargoReceiver', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['barcode'] = $object->getBarcode();
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getPositions()) {
            $values = array();
            foreach ($object->getPositions() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['positions'] = $values;
        }
        $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        return $data;
    }
}