<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationPayer;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationPayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationPayer' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationPayer' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationPayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('other', $data) && null !== $data['other']) {
            $object->setOther($this->denormalizer->denormalize($data['other'], 'glook\PecomSdk\Generated\Model\PreregistrationPayerOther', 'json', $context));
        } elseif (\array_key_exists('other', $data) && null === $data['other']) {
            $object->setOther(null);
        }
        if (\array_key_exists('paymentCity', $data) && null !== $data['paymentCity']) {
            $object->setPaymentCity($data['paymentCity']);
        } elseif (\array_key_exists('paymentCity', $data) && null === $data['paymentCity']) {
            $object->setPaymentCity(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getOther()) {
            $data['other'] = $this->normalizer->normalize($object->getOther(), 'json', $context);
        }
        if (null !== $object->getPaymentCity()) {
            $data['paymentCity'] = $object->getPaymentCity();
        }
        $data['type'] = $object->getType();

        return $data;
    }
}
