<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\BillingNumber;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class BillingNumberNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\BillingNumber' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\BillingNumber' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BillingNumber();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('billingNo', $data) && null !== $data['billingNo']) {
            $object->setBillingNo($data['billingNo']);
        } elseif (\array_key_exists('billingNo', $data) && null === $data['billingNo']) {
            $object->setBillingNo(null);
        }
        if (\array_key_exists('billingSum', $data) && null !== $data['billingSum']) {
            $object->setBillingSum($data['billingSum']);
        } elseif (\array_key_exists('billingSum', $data) && null === $data['billingSum']) {
            $object->setBillingSum(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBillingNo()) {
            $data['billingNo'] = $object->getBillingNo();
        }
        if (null !== $object->getBillingSum()) {
            $data['billingSum'] = $object->getBillingSum();
        }

        return $data;
    }
}
