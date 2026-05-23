<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\DeliveryStatusItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class DeliveryStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\DeliveryStatusItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\DeliveryStatusItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new DeliveryStatusItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('carBrand', $data) && null !== $data['carBrand']) {
            $object->setCarBrand($data['carBrand']);
        } elseif (\array_key_exists('carBrand', $data) && null === $data['carBrand']) {
            $object->setCarBrand(null);
        }
        if (\array_key_exists('carDriver', $data) && null !== $data['carDriver']) {
            $object->setCarDriver($data['carDriver']);
        } elseif (\array_key_exists('carDriver', $data) && null === $data['carDriver']) {
            $object->setCarDriver(null);
        }
        if (\array_key_exists('carDriverPhone', $data) && null !== $data['carDriverPhone']) {
            $object->setCarDriverPhone($data['carDriverPhone']);
        } elseif (\array_key_exists('carDriverPhone', $data) && null === $data['carDriverPhone']) {
            $object->setCarDriverPhone(null);
        }
        if (\array_key_exists('cargoCode', $data) && null !== $data['cargoCode']) {
            $object->setCargoCode($data['cargoCode']);
        } elseif (\array_key_exists('cargoCode', $data) && null === $data['cargoCode']) {
            $object->setCargoCode(null);
        }
        if (\array_key_exists('carNumber', $data) && null !== $data['carNumber']) {
            $object->setCarNumber($data['carNumber']);
        } elseif (\array_key_exists('carNumber', $data) && null === $data['carNumber']) {
            $object->setCarNumber(null);
        }
        if (\array_key_exists('deliveryAddress', $data) && null !== $data['deliveryAddress']) {
            $object->setDeliveryAddress($data['deliveryAddress']);
        } elseif (\array_key_exists('deliveryAddress', $data) && null === $data['deliveryAddress']) {
            $object->setDeliveryAddress(null);
        }
        if (\array_key_exists('deliveryAgreedDate', $data) && null !== $data['deliveryAgreedDate']) {
            $object->setDeliveryAgreedDate($data['deliveryAgreedDate']);
        } elseif (\array_key_exists('deliveryAgreedDate', $data) && null === $data['deliveryAgreedDate']) {
            $object->setDeliveryAgreedDate(null);
        }
        if (\array_key_exists('deliveryPlanDate', $data) && null !== $data['deliveryPlanDate']) {
            $object->setDeliveryPlanDate($data['deliveryPlanDate']);
        } elseif (\array_key_exists('deliveryPlanDate', $data) && null === $data['deliveryPlanDate']) {
            $object->setDeliveryPlanDate(null);
        }
        if (\array_key_exists('deliveryStatus', $data) && null !== $data['deliveryStatus']) {
            $object->setDeliveryStatus($data['deliveryStatus']);
        } elseif (\array_key_exists('deliveryStatus', $data) && null === $data['deliveryStatus']) {
            $object->setDeliveryStatus(null);
        }
        if (\array_key_exists('deliveryStatusCode', $data) && null !== $data['deliveryStatusCode']) {
            $object->setDeliveryStatusCode($data['deliveryStatusCode']);
        } elseif (\array_key_exists('deliveryStatusCode', $data) && null === $data['deliveryStatusCode']) {
            $object->setDeliveryStatusCode(null);
        }
        if (\array_key_exists('delivieryHypermarket', $data) && null !== $data['delivieryHypermarket']) {
            $object->setDelivieryHypermarket($data['delivieryHypermarket']);
        } elseif (\array_key_exists('delivieryHypermarket', $data) && null === $data['delivieryHypermarket']) {
            $object->setDelivieryHypermarket(null);
        }
        if (\array_key_exists('intervalFrom', $data) && null !== $data['intervalFrom']) {
            $object->setIntervalFrom($data['intervalFrom']);
        } elseif (\array_key_exists('intervalFrom', $data) && null === $data['intervalFrom']) {
            $object->setIntervalFrom(null);
        }
        if (\array_key_exists('intervallunchBreakFrom', $data) && null !== $data['intervallunchBreakFrom']) {
            $object->setIntervallunchBreakFrom($data['intervallunchBreakFrom']);
        } elseif (\array_key_exists('intervallunchBreakFrom', $data) && null === $data['intervallunchBreakFrom']) {
            $object->setIntervallunchBreakFrom(null);
        }
        if (\array_key_exists('intervallunchBreakTo', $data) && null !== $data['intervallunchBreakTo']) {
            $object->setIntervallunchBreakTo($data['intervallunchBreakTo']);
        } elseif (\array_key_exists('intervallunchBreakTo', $data) && null === $data['intervallunchBreakTo']) {
            $object->setIntervallunchBreakTo(null);
        }
        if (\array_key_exists('intervalTo', $data) && null !== $data['intervalTo']) {
            $object->setIntervalTo($data['intervalTo']);
        } elseif (\array_key_exists('intervalTo', $data) && null === $data['intervalTo']) {
            $object->setIntervalTo(null);
        }
        if (\array_key_exists('isLoading', $data) && null !== $data['isLoading']) {
            $object->setIsLoading($data['isLoading']);
        } elseif (\array_key_exists('isLoading', $data) && null === $data['isLoading']) {
            $object->setIsLoading(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCarBrand()) {
            $data['carBrand'] = $object->getCarBrand();
        }
        if (null !== $object->getCarDriver()) {
            $data['carDriver'] = $object->getCarDriver();
        }
        if (null !== $object->getCarDriverPhone()) {
            $data['carDriverPhone'] = $object->getCarDriverPhone();
        }
        if (null !== $object->getCargoCode()) {
            $data['cargoCode'] = $object->getCargoCode();
        }
        if (null !== $object->getCarNumber()) {
            $data['carNumber'] = $object->getCarNumber();
        }
        if (null !== $object->getDeliveryAddress()) {
            $data['deliveryAddress'] = $object->getDeliveryAddress();
        }
        if (null !== $object->getDeliveryAgreedDate()) {
            $data['deliveryAgreedDate'] = $object->getDeliveryAgreedDate();
        }
        if (null !== $object->getDeliveryPlanDate()) {
            $data['deliveryPlanDate'] = $object->getDeliveryPlanDate();
        }
        if (null !== $object->getDeliveryStatus()) {
            $data['deliveryStatus'] = $object->getDeliveryStatus();
        }
        if (null !== $object->getDeliveryStatusCode()) {
            $data['deliveryStatusCode'] = $object->getDeliveryStatusCode();
        }
        if (null !== $object->getDelivieryHypermarket()) {
            $data['delivieryHypermarket'] = $object->getDelivieryHypermarket();
        }
        if (null !== $object->getIntervalFrom()) {
            $data['intervalFrom'] = $object->getIntervalFrom();
        }
        if (null !== $object->getIntervallunchBreakFrom()) {
            $data['intervallunchBreakFrom'] = $object->getIntervallunchBreakFrom();
        }
        if (null !== $object->getIntervallunchBreakTo()) {
            $data['intervallunchBreakTo'] = $object->getIntervallunchBreakTo();
        }
        if (null !== $object->getIntervalTo()) {
            $data['intervalTo'] = $object->getIntervalTo();
        }
        if (null !== $object->getIsLoading()) {
            $data['isLoading'] = $object->getIsLoading();
        }

        return $data;
    }
}
