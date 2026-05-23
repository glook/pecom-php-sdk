<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupStatusItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupStatusItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupStatusItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupStatusItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupStatusItem();
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
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('carNumber', $data) && null !== $data['carNumber']) {
            $object->setCarNumber($data['carNumber']);
        } elseif (\array_key_exists('carNumber', $data) && null === $data['carNumber']) {
            $object->setCarNumber(null);
        }
        if (\array_key_exists('error', $data) && null !== $data['error']) {
            $object->setError($data['error']);
        } elseif (\array_key_exists('error', $data) && null === $data['error']) {
            $object->setError(null);
        }
        if (\array_key_exists('fenceStatus', $data) && null !== $data['fenceStatus']) {
            $object->setFenceStatus($data['fenceStatus']);
        } elseif (\array_key_exists('fenceStatus', $data) && null === $data['fenceStatus']) {
            $object->setFenceStatus(null);
        }
        if (\array_key_exists('intakeStatus', $data) && null !== $data['intakeStatus']) {
            $object->setIntakeStatus($data['intakeStatus']);
        } elseif (\array_key_exists('intakeStatus', $data) && null === $data['intakeStatus']) {
            $object->setIntakeStatus(null);
        }
        if (\array_key_exists('intakeStatusCode', $data) && null !== $data['intakeStatusCode']) {
            $object->setIntakeStatusCode($data['intakeStatusCode']);
        } elseif (\array_key_exists('intakeStatusCode', $data) && null === $data['intakeStatusCode']) {
            $object->setIntakeStatusCode(null);
        }
        if (\array_key_exists('intervalFrom', $data) && null !== $data['intervalFrom']) {
            $object->setIntervalFrom($data['intervalFrom']);
        } elseif (\array_key_exists('intervalFrom', $data) && null === $data['intervalFrom']) {
            $object->setIntervalFrom(null);
        }
        if (\array_key_exists('intervalLunchBreakFrom', $data) && null !== $data['intervalLunchBreakFrom']) {
            $object->setIntervalLunchBreakFrom($data['intervalLunchBreakFrom']);
        } elseif (\array_key_exists('intervalLunchBreakFrom', $data) && null === $data['intervalLunchBreakFrom']) {
            $object->setIntervalLunchBreakFrom(null);
        }
        if (\array_key_exists('intervalLunchBreakTo', $data) && null !== $data['intervalLunchBreakTo']) {
            $object->setIntervalLunchBreakTo($data['intervalLunchBreakTo']);
        } elseif (\array_key_exists('intervalLunchBreakTo', $data) && null === $data['intervalLunchBreakTo']) {
            $object->setIntervalLunchBreakTo(null);
        }
        if (\array_key_exists('intervalTo', $data) && null !== $data['intervalTo']) {
            $object->setIntervalTo($data['intervalTo']);
        } elseif (\array_key_exists('intervalTo', $data) && null === $data['intervalTo']) {
            $object->setIntervalTo(null);
        }
        if (\array_key_exists('pickupDate', $data) && null !== $data['pickupDate']) {
            $object->setPickupDate(\DateTime::createFromFormat('Y-m-d', $data['pickupDate'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('pickupDate', $data) && null === $data['pickupDate']) {
            $object->setPickupDate(null);
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
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getCarNumber()) {
            $data['carNumber'] = $object->getCarNumber();
        }
        if (null !== $object->getError()) {
            $data['error'] = $object->getError();
        }
        if (null !== $object->getFenceStatus()) {
            $data['fenceStatus'] = $object->getFenceStatus();
        }
        if (null !== $object->getIntakeStatus()) {
            $data['intakeStatus'] = $object->getIntakeStatus();
        }
        if (null !== $object->getIntakeStatusCode()) {
            $data['intakeStatusCode'] = $object->getIntakeStatusCode();
        }
        if (null !== $object->getIntervalFrom()) {
            $data['intervalFrom'] = $object->getIntervalFrom();
        }
        if (null !== $object->getIntervalLunchBreakFrom()) {
            $data['intervalLunchBreakFrom'] = $object->getIntervalLunchBreakFrom();
        }
        if (null !== $object->getIntervalLunchBreakTo()) {
            $data['intervalLunchBreakTo'] = $object->getIntervalLunchBreakTo();
        }
        if (null !== $object->getIntervalTo()) {
            $data['intervalTo'] = $object->getIntervalTo();
        }
        if (null !== $object->getPickupDate()) {
            $data['pickupDate'] = $object->getPickupDate()->format('Y-m-d');
        }

        return $data;
    }
}
