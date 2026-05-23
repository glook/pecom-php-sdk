<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\BasicCargoInfo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\BasicCargoInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\BasicCargoInfo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BasicCargoInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoBarCode', $data) && null !== $data['cargoBarCode']) {
            $object->setCargoBarCode($data['cargoBarCode']);
        } elseif (\array_key_exists('cargoBarCode', $data) && null === $data['cargoBarCode']) {
            $object->setCargoBarCode(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('positionBarCodes', $data) && null !== $data['positionBarCodes']) {
            $values = [];
            foreach ($data['positionBarCodes'] as $value) {
                $values[] = $value;
            }
            $object->setPositionBarCodes($values);
        } elseif (\array_key_exists('positionBarCodes', $data) && null === $data['positionBarCodes']) {
            $object->setPositionBarCodes(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargoBarCode()) {
            $data['cargoBarCode'] = $object->getCargoBarCode();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getPositionBarCodes()) {
            $values = [];
            foreach ($object->getPositionBarCodes() as $value) {
                $values[] = $value;
            }
            $data['positionBarCodes'] = $values;
        }

        return $data;
    }
}
