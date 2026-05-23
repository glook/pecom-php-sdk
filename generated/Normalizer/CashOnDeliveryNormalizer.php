<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CashOnDelivery;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CashOnDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CashOnDelivery' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CashOnDelivery' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CashOnDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actualCost', $data) && null !== $data['actualCost']) {
            $object->setActualCost($data['actualCost']);
        } elseif (\array_key_exists('actualCost', $data) && null === $data['actualCost']) {
            $object->setActualCost(null);
        }
        if (\array_key_exists('cashOnDeliverySum', $data) && null !== $data['cashOnDeliverySum']) {
            $object->setCashOnDeliverySum($data['cashOnDeliverySum']);
        } elseif (\array_key_exists('cashOnDeliverySum', $data) && null === $data['cashOnDeliverySum']) {
            $object->setCashOnDeliverySum(null);
        }
        if (\array_key_exists('enabled', $data) && null !== $data['enabled']) {
            $object->setEnabled($data['enabled']);
        } elseif (\array_key_exists('enabled', $data) && null === $data['enabled']) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('includeTES', $data) && null !== $data['includeTES']) {
            $object->setIncludeTES($data['includeTES']);
        } elseif (\array_key_exists('includeTES', $data) && null === $data['includeTES']) {
            $object->setIncludeTES(null);
        }
        if (\array_key_exists('sellerPhone', $data) && null !== $data['sellerPhone']) {
            $object->setSellerPhone($data['sellerPhone']);
        } elseif (\array_key_exists('sellerPhone', $data) && null === $data['sellerPhone']) {
            $object->setSellerPhone(null);
        }
        if (\array_key_exists('sellerServices', $data) && null !== $data['sellerServices']) {
            $values = [];
            foreach ($data['sellerServices'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CargopickupSellerService', 'json', $context);
            }
            $object->setSellerServices($values);
        } elseif (\array_key_exists('sellerServices', $data) && null === $data['sellerServices']) {
            $object->setSellerServices(null);
        }
        if (\array_key_exists('specification', $data) && null !== $data['specification']) {
            $object->setSpecification($this->denormalizer->denormalize($data['specification'], 'glook\PecomSdk\Generated\Model\CargopickupSpecification', 'json', $context));
        } elseif (\array_key_exists('specification', $data) && null === $data['specification']) {
            $object->setSpecification(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getActualCost()) {
            $data['actualCost'] = $object->getActualCost();
        }
        if (null !== $object->getCashOnDeliverySum()) {
            $data['cashOnDeliverySum'] = $object->getCashOnDeliverySum();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getIncludeTES()) {
            $data['includeTES'] = $object->getIncludeTES();
        }
        if (null !== $object->getSellerPhone()) {
            $data['sellerPhone'] = $object->getSellerPhone();
        }
        if (null !== $object->getSellerServices()) {
            $values = [];
            foreach ($object->getSellerServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['sellerServices'] = $values;
        }
        if (null !== $object->getSpecification()) {
            $data['specification'] = $this->normalizer->normalize($object->getSpecification(), 'json', $context);
        }

        return $data;
    }
}
