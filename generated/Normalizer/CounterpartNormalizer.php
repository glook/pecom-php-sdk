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
class CounterpartNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\Counterpart';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\Counterpart';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\Counterpart();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('counterpartClientCard', $data) && $data['counterpartClientCard'] !== null) {
            $object->setCounterpartClientCard($data['counterpartClientCard']);
        }
        elseif (\array_key_exists('counterpartClientCard', $data) && $data['counterpartClientCard'] === null) {
            $object->setCounterpartClientCard(null);
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
        }
        if (\array_key_exists('kpp', $data) && $data['kpp'] !== null) {
            $object->setKpp($data['kpp']);
        }
        elseif (\array_key_exists('kpp', $data) && $data['kpp'] === null) {
            $object->setKpp(null);
        }
        if (\array_key_exists('whoMakesCalculation', $data) && $data['whoMakesCalculation'] !== null) {
            $values = array();
            foreach ($data['whoMakesCalculation'] as $value) {
                $values[] = $value;
            }
            $object->setWhoMakesCalculation($values);
        }
        elseif (\array_key_exists('whoMakesCalculation', $data) && $data['whoMakesCalculation'] === null) {
            $object->setWhoMakesCalculation(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
            $values = array();
            foreach ($object->getWhoMakesCalculation() as $value) {
                $values[] = $value;
            }
            $data['whoMakesCalculation'] = $values;
        }
        return $data;
    }
}