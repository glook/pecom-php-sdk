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
class BasicStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BasicStatusItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BasicStatusItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BasicStatusItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargo', $data)) {
            $object->setCargo($this->denormalizer->denormalize($data['cargo'], 'glook\\PecomSdk\\Generated\\Model\\BasicCargoInfo', 'json', $context));
        }
        if (\array_key_exists('info', $data)) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], 'glook\\PecomSdk\\Generated\\Model\\BasicStatusInfo', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargo()) {
            $data['cargo'] = $this->normalizer->normalize($object->getCargo(), 'json', $context);
        }
        if (null !== $object->getInfo()) {
            $data['info'] = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }
        return $data;
    }
}