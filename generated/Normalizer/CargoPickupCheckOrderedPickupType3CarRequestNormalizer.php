<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupCheckOrderedPickupType3CarRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupCheckOrderedPickupType3CarRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupCheckOrderedPickupType3CarRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('intakePlanDateTime', $data)) {
            $object->setIntakePlanDateTime(\DateTime::createFromFormat('Y-m-d', $data['intakePlanDateTime'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('senderInn', $data) && null !== $data['senderInn']) {
            $object->setSenderInn($data['senderInn']);
        } elseif (\array_key_exists('senderInn', $data) && null === $data['senderInn']) {
            $object->setSenderInn(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['intakePlanDateTime'] = $object->getIntakePlanDateTime()->format('Y-m-d');
        if (null !== $object->getSenderInn()) {
            $data['senderInn'] = $object->getSenderInn();
        }

        return $data;
    }
}
