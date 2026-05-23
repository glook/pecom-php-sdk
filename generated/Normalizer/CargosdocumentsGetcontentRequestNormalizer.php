<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargosdocumentsGetcontentRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargosdocumentsGetcontentRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('counterpartGuid', $data) && null !== $data['counterpartGuid']) {
            $object->setCounterpartGuid($data['counterpartGuid']);
        } elseif (\array_key_exists('counterpartGuid', $data) && null === $data['counterpartGuid']) {
            $object->setCounterpartGuid(null);
        }
        if (\array_key_exists('docFormat', $data) && null !== $data['docFormat']) {
            $object->setDocFormat($data['docFormat']);
        } elseif (\array_key_exists('docFormat', $data) && null === $data['docFormat']) {
            $object->setDocFormat(null);
        }
        if (\array_key_exists('docType', $data)) {
            $object->setDocType($data['docType']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getCounterpartGuid()) {
            $data['counterpartGuid'] = $object->getCounterpartGuid();
        }
        if (null !== $object->getDocFormat()) {
            $data['docFormat'] = $object->getDocFormat();
        }
        $data['docType'] = $object->getDocType();

        return $data;
    }
}
