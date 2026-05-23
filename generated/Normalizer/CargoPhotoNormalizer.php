<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPhoto;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPhotoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPhoto' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPhoto' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPhoto();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('data', $data) && null !== $data['data']) {
            $object->setData($data['data']);
        } elseif (\array_key_exists('data', $data) && null === $data['data']) {
            $object->setData(null);
        }
        if (\array_key_exists('filename', $data) && null !== $data['filename']) {
            $object->setFilename($data['filename']);
        } elseif (\array_key_exists('filename', $data) && null === $data['filename']) {
            $object->setFilename(null);
        }
        if (\array_key_exists('mimeType', $data) && null !== $data['mimeType']) {
            $object->setMimeType($data['mimeType']);
        } elseif (\array_key_exists('mimeType', $data) && null === $data['mimeType']) {
            $object->setMimeType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getData()) {
            $data['data'] = $object->getData();
        }
        if (null !== $object->getFilename()) {
            $data['filename'] = $object->getFilename();
        }
        if (null !== $object->getMimeType()) {
            $data['mimeType'] = $object->getMimeType();
        }

        return $data;
    }
}
