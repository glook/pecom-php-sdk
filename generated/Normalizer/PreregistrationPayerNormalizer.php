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
class PreregistrationPayerNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayer';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayer';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationPayer();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('other', $data) && $data['other'] !== null) {
            $object->setOther($this->denormalizer->denormalize($data['other'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayerOther', 'json', $context));
        }
        elseif (\array_key_exists('other', $data) && $data['other'] === null) {
            $object->setOther(null);
        }
        if (\array_key_exists('paymentCity', $data) && $data['paymentCity'] !== null) {
            $object->setPaymentCity($data['paymentCity']);
        }
        elseif (\array_key_exists('paymentCity', $data) && $data['paymentCity'] === null) {
            $object->setPaymentCity(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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