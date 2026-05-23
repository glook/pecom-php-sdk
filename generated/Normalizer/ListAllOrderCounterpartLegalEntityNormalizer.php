<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderCounterpartLegalEntity;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\ListAllOrderCounterpartLegalEntity' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderCounterpartLegalEntity' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderCounterpartLegalEntity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('INN', $data) && null !== $data['INN']) {
            $object->setINN($data['INN']);
        } elseif (\array_key_exists('INN', $data) && null === $data['INN']) {
            $object->setINN(null);
        }
        if (\array_key_exists('KPP', $data) && null !== $data['KPP']) {
            $object->setKPP($data['KPP']);
        } elseif (\array_key_exists('KPP', $data) && null === $data['KPP']) {
            $object->setKPP(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getINN()) {
            $data['INN'] = $object->getINN();
        }
        if (null !== $object->getKPP()) {
            $data['KPP'] = $object->getKPP();
        }

        return $data;
    }
}
