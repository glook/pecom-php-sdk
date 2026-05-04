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
class ListAllOrderCounterpartLegalEntityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderCounterpartLegalEntity';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderCounterpartLegalEntity';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderCounterpartLegalEntity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('INN', $data) && $data['INN'] !== null) {
            $object->setINN($data['INN']);
        }
        elseif (\array_key_exists('INN', $data) && $data['INN'] === null) {
            $object->setINN(null);
        }
        if (\array_key_exists('KPP', $data) && $data['KPP'] !== null) {
            $object->setKPP($data['KPP']);
        }
        elseif (\array_key_exists('KPP', $data) && $data['KPP'] === null) {
            $object->setKPP(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getINN()) {
            $data['INN'] = $object->getINN();
        }
        if (null !== $object->getKPP()) {
            $data['KPP'] = $object->getKPP();
        }
        return $data;
    }
}