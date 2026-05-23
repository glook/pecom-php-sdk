<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderSenderCounterpartPhysicalPerson;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\ListAllOrderSenderCounterpartPhysicalPerson' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderSenderCounterpartPhysicalPerson' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderSenderCounterpartPhysicalPerson();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('Number', $data) && null !== $data['Number']) {
            $object->setNumber($data['Number']);
        } elseif (\array_key_exists('Number', $data) && null === $data['Number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('Series', $data) && null !== $data['Series']) {
            $object->setSeries($data['Series']);
        } elseif (\array_key_exists('Series', $data) && null === $data['Series']) {
            $object->setSeries(null);
        }
        if (\array_key_exists('typeDocumet', $data) && null !== $data['typeDocumet']) {
            $object->setTypeDocumet($data['typeDocumet']);
        } elseif (\array_key_exists('typeDocumet', $data) && null === $data['typeDocumet']) {
            $object->setTypeDocumet(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
