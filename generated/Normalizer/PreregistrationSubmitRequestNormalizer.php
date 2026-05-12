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
class PreregistrationSubmitRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationSubmitRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data)) {
            $values = array();
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargo', 'json', $context);
            }
            $object->setCargos($values);
        }
        if (\array_key_exists('common', $data)) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCommon', 'json', $context));
        }
        if (\array_key_exists('pickUpDetails', $data) && $data['pickUpDetails'] !== null) {
            $object->setPickUpDetails($this->denormalizer->denormalize($data['pickUpDetails'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPickUpDetails', 'json', $context));
        }
        elseif (\array_key_exists('pickUpDetails', $data) && $data['pickUpDetails'] === null) {
            $object->setPickUpDetails(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSender', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
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