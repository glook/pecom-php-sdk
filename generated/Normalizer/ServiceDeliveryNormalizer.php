<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ServiceDelivery;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ServiceDeliveryNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ServiceDelivery' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ServiceDelivery' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ServiceDelivery();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('avisationDateTime', $data) && null !== $data['avisationDateTime']) {
            $object->setAvisationDateTime($data['avisationDateTime']);
        } elseif (\array_key_exists('avisationDateTime', $data) && null === $data['avisationDateTime']) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('carryingDistance', $data) && null !== $data['carryingDistance']) {
            $object->setCarryingDistance($data['carryingDistance']);
        } elseif (\array_key_exists('carryingDistance', $data) && null === $data['carryingDistance']) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('dateOfDelivery', $data) && null !== $data['dateOfDelivery']) {
            $object->setDateOfDelivery(\DateTime::createFromFormat('Y-m-d', $data['dateOfDelivery'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('dateOfDelivery', $data) && null === $data['dateOfDelivery']) {
            $object->setDateOfDelivery(null);
        }
        if (\array_key_exists('dateOfDeliveryCheck', $data) && null !== $data['dateOfDeliveryCheck']) {
            $object->setDateOfDeliveryCheck($data['dateOfDeliveryCheck']);
        } elseif (\array_key_exists('dateOfDeliveryCheck', $data) && null === $data['dateOfDeliveryCheck']) {
            $object->setDateOfDeliveryCheck(null);
        }
        if (\array_key_exists('enabled', $data) && null !== $data['enabled']) {
            $object->setEnabled($data['enabled']);
        } elseif (\array_key_exists('enabled', $data) && null === $data['enabled']) {
            $object->setEnabled(null);
        }
        if (\array_key_exists('floor', $data) && null !== $data['floor']) {
            $object->setFloor($data['floor']);
        } elseif (\array_key_exists('floor', $data) && null === $data['floor']) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isElevator', $data) && null !== $data['isElevator']) {
            $object->setIsElevator($data['isElevator']);
        } elseif (\array_key_exists('isElevator', $data) && null === $data['isElevator']) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isLoading', $data) && null !== $data['isLoading']) {
            $object->setIsLoading($data['isLoading']);
        } elseif (\array_key_exists('isLoading', $data) && null === $data['isLoading']) {
            $object->setIsLoading(null);
        }
        if (\array_key_exists('payer', $data) && null !== $data['payer']) {
            $object->setPayer($this->denormalizer->denormalize($data['payer'], 'glook\PecomSdk\Generated\Model\PreregistrationPayer', 'json', $context));
        } elseif (\array_key_exists('payer', $data) && null === $data['payer']) {
            $object->setPayer(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAvisationDateTime()) {
            $data['avisationDateTime'] = $object->getAvisationDateTime();
        }
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
        }
        if (null !== $object->getDateOfDelivery()) {
            $data['dateOfDelivery'] = $object->getDateOfDelivery()->format('Y-m-d');
        }
        if (null !== $object->getDateOfDeliveryCheck()) {
            $data['dateOfDeliveryCheck'] = $object->getDateOfDeliveryCheck();
        }
        if (null !== $object->getEnabled()) {
            $data['enabled'] = $object->getEnabled();
        }
        if (null !== $object->getFloor()) {
            $data['floor'] = $object->getFloor();
        }
        if (null !== $object->getIsElevator()) {
            $data['isElevator'] = $object->getIsElevator();
        }
        if (null !== $object->getIsLoading()) {
            $data['isLoading'] = $object->getIsLoading();
        }
        if (null !== $object->getPayer()) {
            $data['payer'] = $this->normalizer->normalize($object->getPayer(), 'json', $context);
        }

        return $data;
    }
}
