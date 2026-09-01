<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationSubmitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationSubmitRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('EDICounterpart', $data) && null !== $data['EDICounterpart']) {
            $object->setEDICounterpart($this->denormalizer->denormalize($data['EDICounterpart'], 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpart', 'json', $context));
        } elseif (\array_key_exists('EDICounterpart', $data) && null === $data['EDICounterpart']) {
            $object->setEDICounterpart(null);
        }
        if (\array_key_exists('cargos', $data)) {
            $values = [];
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\PreregistrationCargo', 'json', $context);
            }
            $object->setCargos($values);
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\PecomSdk\Generated\Model\PreregistrationCommon', 'json', $context));
        }
        if (\array_key_exists('pickUpDetails', $data) && null !== $data['pickUpDetails']) {
            $object->setPickUpDetails($this->denormalizer->denormalize($data['pickUpDetails'], 'glook\PecomSdk\Generated\Model\PreregistrationPickUpDetails', 'json', $context));
        } elseif (\array_key_exists('pickUpDetails', $data) && null === $data['pickUpDetails']) {
            $object->setPickUpDetails(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\PecomSdk\Generated\Model\PreregistrationSender', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getEDICounterpart()) {
            $data['EDICounterpart'] = $this->normalizer->normalize($object->getEDICounterpart(), 'json', $context);
        }
        $values = [];
        foreach ($object->getCargos() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['cargos'] = $values;
        $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        if (null !== $object->getPickUpDetails()) {
            $data['pickUpDetails'] = $this->normalizer->normalize($object->getPickUpDetails(), 'json', $context);
        }
        $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);

        return $data;
    }
}
