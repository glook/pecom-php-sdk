<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\Counterpart;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CounterpartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\Counterpart' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\Counterpart' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new Counterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('counterpartClientCard', $data) && null !== $data['counterpartClientCard']) {
            $object->setCounterpartClientCard($data['counterpartClientCard']);
        } elseif (\array_key_exists('counterpartClientCard', $data) && null === $data['counterpartClientCard']) {
            $object->setCounterpartClientCard(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('whoMakesCalculation', $data) && null !== $data['whoMakesCalculation']) {
            $values = [];
            foreach ($data['whoMakesCalculation'] as $value) {
                $values[] = $value;
            }
            $object->setWhoMakesCalculation($values);
        } elseif (\array_key_exists('whoMakesCalculation', $data) && null === $data['whoMakesCalculation']) {
            $object->setWhoMakesCalculation(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCounterpartClientCard()) {
            $data['counterpartClientCard'] = $object->getCounterpartClientCard();
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        if (null !== $object->getWhoMakesCalculation()) {
            $values = [];
            foreach ($object->getWhoMakesCalculation() as $value) {
                $values[] = $value;
            }
            $data['whoMakesCalculation'] = $values;
        }

        return $data;
    }
}
