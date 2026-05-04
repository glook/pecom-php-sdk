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
class ListAllOrderSenderCounterpartPhysicalPersonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSenderCounterpartPhysicalPerson';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSenderCounterpartPhysicalPerson';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderSenderCounterpartPhysicalPerson();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Number', $data) && $data['Number'] !== null) {
            $object->setNumber($data['Number']);
        }
        elseif (\array_key_exists('Number', $data) && $data['Number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('Series', $data) && $data['Series'] !== null) {
            $object->setSeries($data['Series']);
        }
        elseif (\array_key_exists('Series', $data) && $data['Series'] === null) {
            $object->setSeries(null);
        }
        if (\array_key_exists('typeDocumet', $data) && $data['typeDocumet'] !== null) {
            $object->setTypeDocumet($data['typeDocumet']);
        }
        elseif (\array_key_exists('typeDocumet', $data) && $data['typeDocumet'] === null) {
            $object->setTypeDocumet(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getNumber()) {
            $data['Number'] = $object->getNumber();
        }
        if (null !== $object->getSeries()) {
            $data['Series'] = $object->getSeries();
        }
        if (null !== $object->getTypeDocumet()) {
            $data['typeDocumet'] = $object->getTypeDocumet();
        }
        return $data;
    }
}