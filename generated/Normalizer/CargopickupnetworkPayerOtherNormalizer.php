<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargopickupnetworkPayerOther;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargopickupnetworkPayerOtherNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargopickupnetworkPayerOther' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargopickupnetworkPayerOther' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargopickupnetworkPayerOther();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('identityCard', $data) && null !== $data['identityCard']) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\PecomSdk\Generated\Model\CargopickupnetworkIdentityCard', 'json', $context));
        } elseif (\array_key_exists('identityCard', $data) && null === $data['identityCard']) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('paymentCity', $data) && null !== $data['paymentCity']) {
            $object->setPaymentCity($data['paymentCity']);
        } elseif (\array_key_exists('paymentCity', $data) && null === $data['paymentCity']) {
            $object->setPaymentCity(null);
        }
        if (\array_key_exists('phone', $data)) {
            $object->setPhone($data['phone']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getPaymentCity()) {
            $data['paymentCity'] = $object->getPaymentCity();
        }
        $data['phone'] = $object->getPhone();
        $data['title'] = $object->getTitle();

        return $data;
    }
}
