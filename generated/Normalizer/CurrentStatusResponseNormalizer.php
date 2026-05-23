<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CurrentStatusResponse;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CurrentStatusResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CurrentStatusResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CurrentStatusResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data) && null !== $data['cargos']) {
            $values = [];
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CurrentStatusItem', 'json', $context);
            }
            $object->setCargos($values);
        } elseif (\array_key_exists('cargos', $data) && null === $data['cargos']) {
            $object->setCargos(null);
        }
        if (\array_key_exists('error', $data) && null !== $data['error']) {
            $object->setError($this->denormalizer->denormalize($data['error'], 'glook\PecomSdk\Generated\Model\CurrentStatusError', 'json', $context));
        } elseif (\array_key_exists('error', $data) && null === $data['error']) {
            $object->setError(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargos()) {
            $values = [];
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
