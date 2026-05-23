<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\BasicStatusItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BasicStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\BasicStatusItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\BasicStatusItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BasicStatusItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargo', $data) && null !== $data['cargo']) {
            $object->setCargo($this->denormalizer->denormalize($data['cargo'], 'glook\PecomSdk\Generated\Model\BasicCargoInfo', 'json', $context));
        } elseif (\array_key_exists('cargo', $data) && null === $data['cargo']) {
            $object->setCargo(null);
        }
        if (\array_key_exists('info', $data) && null !== $data['info']) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], 'glook\PecomSdk\Generated\Model\BasicStatusInfo', 'json', $context));
        } elseif (\array_key_exists('info', $data) && null === $data['info']) {
            $object->setInfo(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargo()) {
            $data['cargo'] = $this->normalizer->normalize($object->getCargo(), 'json', $context);
        }
        if (null !== $object->getInfo()) {
            $data['info'] = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }

        return $data;
    }
}
