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
class BasicCargoInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BasicCargoInfo';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BasicCargoInfo';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BasicCargoInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
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
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargoBarCode()) {
            $data['cargoBarCode'] = $object->getCargoBarCode();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getPositionBarCodes()) {
            $values = array();
            foreach ($object->getPositionBarCodes() as $value) {
                $values[] = $value;
            }
            $data['positionBarCodes'] = $values;
        }
        return $data;
    }
}