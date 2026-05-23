<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupServices;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupServices' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accompanyingDocuments', $data) && null !== $data['accompanyingDocuments']) {
            $object->setAccompanyingDocuments($data['accompanyingDocuments']);
        } elseif (\array_key_exists('accompanyingDocuments', $data) && null === $data['accompanyingDocuments']) {
            $object->setAccompanyingDocuments(null);
        }
        if (\array_key_exists('carryingDistance', $data) && null !== $data['carryingDistance']) {
            $object->setCarryingDistance($data['carryingDistance']);
        } elseif (\array_key_exists('carryingDistance', $data) && null === $data['carryingDistance']) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('cashOnDelivery', $data) && null !== $data['cashOnDelivery']) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], 'glook\PecomSdk\Generated\Model\CashOnDelivery', 'json', $context));
        } elseif (\array_key_exists('cashOnDelivery', $data) && null === $data['cashOnDelivery']) {
            $object->setCashOnDelivery(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('floor', $data) && null !== $data['floor']) {
            $object->setFloor($data['floor']);
        } elseif (\array_key_exists('floor', $data) && null === $data['floor']) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isDocumentsReturn', $data) && null !== $data['isDocumentsReturn']) {
            $object->setIsDocumentsReturn($data['isDocumentsReturn']);
        } elseif (\array_key_exists('isDocumentsReturn', $data) && null === $data['isDocumentsReturn']) {
            $object->setIsDocumentsReturn(null);
        }
        if (\array_key_exists('isElevator', $data) && null !== $data['isElevator']) {
            $object->setIsElevator($data['isElevator']);
        } elseif (\array_key_exists('isElevator', $data) && null === $data['isElevator']) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isHP', $data) && null !== $data['isHP']) {
            $object->setIsHP($data['isHP']);
        } elseif (\array_key_exists('isHP', $data) && null === $data['isHP']) {
            $object->setIsHP(null);
        }
        if (\array_key_exists('isInsurance', $data) && null !== $data['isInsurance']) {
            $object->setIsInsurance($data['isInsurance']);
        } elseif (\array_key_exists('isInsurance', $data) && null === $data['isInsurance']) {
            $object->setIsInsurance(null);
        }
        if (\array_key_exists('isInsurancePrice', $data) && null !== $data['isInsurancePrice']) {
            $object->setIsInsurancePrice($data['isInsurancePrice']);
        } elseif (\array_key_exists('isInsurancePrice', $data) && null === $data['isInsurancePrice']) {
            $object->setIsInsurancePrice(null);
        }
        if (\array_key_exists('isLoading', $data)) {
            $object->setIsLoading($data['isLoading']);
        }
        if (\array_key_exists('isSealing', $data) && null !== $data['isSealing']) {
            $object->setIsSealing($data['isSealing']);
        } elseif (\array_key_exists('isSealing', $data) && null === $data['isSealing']) {
            $object->setIsSealing(null);
        }
        if (\array_key_exists('isSealingPositionsCount', $data) && null !== $data['isSealingPositionsCount']) {
            $object->setIsSealingPositionsCount($data['isSealingPositionsCount']);
        } elseif (\array_key_exists('isSealingPositionsCount', $data) && null === $data['isSealingPositionsCount']) {
            $object->setIsSealingPositionsCount(null);
        }
        if (\array_key_exists('isStrapping', $data) && null !== $data['isStrapping']) {
            $object->setIsStrapping($data['isStrapping']);
        } elseif (\array_key_exists('isStrapping', $data) && null === $data['isStrapping']) {
            $object->setIsStrapping(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAccompanyingDocuments()) {
            $data['accompanyingDocuments'] = $object->getAccompanyingDocuments();
        }
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
        }
        if (null !== $object->getCashOnDelivery()) {
            $data['cashOnDelivery'] = $this->normalizer->normalize($object->getCashOnDelivery(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getIsDocumentsReturn()) {
            $data['isDocumentsReturn'] = $object->getIsDocumentsReturn();
        }
        if (null !== $object->getIsElevator()) {
            $data['isElevator'] = $object->getIsElevator();
        }
        if (null !== $object->getIsHP()) {
            $data['isHP'] = $object->getIsHP();
        }
        if (null !== $object->getIsInsurance()) {
            $data['isInsurance'] = $object->getIsInsurance();
        }
        if (null !== $object->getIsInsurancePrice()) {
            $data['isInsurancePrice'] = $object->getIsInsurancePrice();
        }
        $data['isLoading'] = $object->getIsLoading();
        if (null !== $object->getIsSealing()) {
            $data['isSealing'] = $object->getIsSealing();
        }
        if (null !== $object->getIsSealingPositionsCount()) {
            $data['isSealingPositionsCount'] = $object->getIsSealingPositionsCount();
        }
        if (null !== $object->getIsStrapping()) {
            $data['isStrapping'] = $object->getIsStrapping();
        }

        return $data;
    }
}
