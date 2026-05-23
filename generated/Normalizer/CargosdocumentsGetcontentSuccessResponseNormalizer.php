<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargosdocumentsGetcontentSuccessResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargosdocumentsGetcontentSuccessResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargosdocumentsGetcontentSuccessResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('docBody', $data)) {
            $object->setDocBody($data['docBody']);
        }
        if (\array_key_exists('docFormat', $data) && null !== $data['docFormat']) {
            $object->setDocFormat($data['docFormat']);
        } elseif (\array_key_exists('docFormat', $data) && null === $data['docFormat']) {
            $object->setDocFormat(null);
        }
        if (\array_key_exists('docName', $data)) {
            $object->setDocName($data['docName']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['docBody'] = $object->getDocBody();
        if (null !== $object->getDocFormat()) {
            $data['docFormat'] = $object->getDocFormat();
        }
        $data['docName'] = $object->getDocName();

        return $data;
    }
}
