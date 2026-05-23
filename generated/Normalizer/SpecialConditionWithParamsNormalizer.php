<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\SpecialConditionWithParams;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SpecialConditionWithParamsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\SpecialConditionWithParams' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\SpecialConditionWithParams' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new SpecialConditionWithParams();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('params', $data)) {
            $values = [];
            foreach ($data['params'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\ParamItem', 'json', $context);
            }
            $object->setParams($values);
        }
        if (\array_key_exists('specialCondition', $data)) {
            $object->setSpecialCondition($this->denormalizer->denormalize($data['specialCondition'], 'glook\PecomSdk\Generated\Model\CounterpartsSpecialCondition', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getParams() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['params'] = $values;
        $data['specialCondition'] = $this->normalizer->normalize($object->getSpecialCondition(), 'json', $context);

        return $data;
    }
}
