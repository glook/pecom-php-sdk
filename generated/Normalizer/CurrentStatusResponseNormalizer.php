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
class CurrentStatusResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CurrentStatusResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CurrentStatusResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CurrentStatusResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data) && $data['cargos'] !== null) {
            $values = array();
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CurrentStatusItem', 'json', $context);
            }
            $object->setCargos($values);
        }
        elseif (\array_key_exists('cargos', $data) && $data['cargos'] === null) {
            $object->setCargos(null);
        }
        if (\array_key_exists('error', $data)) {
            $object->setError($this->denormalizer->denormalize($data['error'], 'glook\\PecomSdk\\Generated\\Model\\CurrentStatusError', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargos()) {
            $values = array();
            foreach ($object->getCargos() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['cargos'] = $values;
        }
        if (null !== $object->getError()) {
            $data['error'] = $this->normalizer->normalize($object->getError(), 'json', $context);
        }
        return $data;
    }
}