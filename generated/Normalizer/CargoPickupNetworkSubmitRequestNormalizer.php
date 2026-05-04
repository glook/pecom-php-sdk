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
class CargoPickupNetworkSubmitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data)) {
            $object->setCargos($this->denormalizer->denormalize($data['cargos'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCargos', 'json', $context));
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestCommon', 'json', $context));
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\\PecomSdk\\Generated\\Model\\CargoPickupNetworkSubmitRequestSender', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cargos'] = $this->normalizer->normalize($object->getCargos(), 'json', $context);
        $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);
        return $data;
    }
}