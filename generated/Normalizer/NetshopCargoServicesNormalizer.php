<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\NetshopCargoServices;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NetshopCargoServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\NetshopCargoServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\NetshopCargoServices' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NetshopCargoServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('documentsReturningEnabled', $data) && null !== $data['documentsReturningEnabled']) {
            $object->setDocumentsReturningEnabled($data['documentsReturningEnabled']);
        } elseif (\array_key_exists('documentsReturningEnabled', $data) && null === $data['documentsReturningEnabled']) {
            $object->setDocumentsReturningEnabled(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\PecomSdk\Generated\Model\NetshopInsurance', 'json', $context));
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('palletTransporting', $data)) {
            $object->setPalletTransporting($this->denormalizer->denormalize($data['palletTransporting'], 'glook\PecomSdk\Generated\Model\NetshopPalletTransporting', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDocumentsReturningEnabled()) {
            $data['documentsReturningEnabled'] = $object->getDocumentsReturningEnabled();
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        $data['palletTransporting'] = $this->normalizer->normalize($object->getPalletTransporting(), 'json', $context);

        return $data;
    }
}
