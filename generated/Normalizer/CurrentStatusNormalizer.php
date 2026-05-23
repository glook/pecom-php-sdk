<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CurrentStatus;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CurrentStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CurrentStatus' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CurrentStatus' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CurrentStatus();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('ClientStatus', $data) && null !== $data['ClientStatus']) {
            $object->setClientStatus($data['ClientStatus']);
        } elseif (\array_key_exists('ClientStatus', $data) && null === $data['ClientStatus']) {
            $object->setClientStatus(null);
        }
        if (\array_key_exists('ClientStatusLevel2', $data) && null !== $data['ClientStatusLevel2']) {
            $object->setClientStatusLevel2($data['ClientStatusLevel2']);
        } elseif (\array_key_exists('ClientStatusLevel2', $data) && null === $data['ClientStatusLevel2']) {
            $object->setClientStatusLevel2(null);
        }
        if (\array_key_exists('Id', $data) && null !== $data['Id']) {
            $object->setId($data['Id']);
        } elseif (\array_key_exists('Id', $data) && null === $data['Id']) {
            $object->setId(null);
        }
        if (\array_key_exists('IsActive', $data) && null !== $data['IsActive']) {
            $object->setIsActive($data['IsActive']);
        } elseif (\array_key_exists('IsActive', $data) && null === $data['IsActive']) {
            $object->setIsActive(null);
        }
        if (\array_key_exists('Tooltip', $data) && null !== $data['Tooltip']) {
            $object->setTooltip($data['Tooltip']);
        } elseif (\array_key_exists('Tooltip', $data) && null === $data['Tooltip']) {
            $object->setTooltip(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getClientStatus()) {
            $data['ClientStatus'] = $object->getClientStatus();
        }
        if (null !== $object->getClientStatusLevel2()) {
            $data['ClientStatusLevel2'] = $object->getClientStatusLevel2();
        }
        if (null !== $object->getId()) {
            $data['Id'] = $object->getId();
        }
        if (null !== $object->getIsActive()) {
            $data['IsActive'] = $object->getIsActive();
        }
        if (null !== $object->getTooltip()) {
            $data['Tooltip'] = $object->getTooltip();
        }

        return $data;
    }
}
