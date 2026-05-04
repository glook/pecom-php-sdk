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
class CargoDetailsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoDetailsResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoDetailsResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoDetailsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoCode', $data) && $data['cargoCode'] !== null) {
            $object->setCargoCode($data['cargoCode']);
        }
        elseif (\array_key_exists('cargoCode', $data) && $data['cargoCode'] === null) {
            $object->setCargoCode(null);
        }
        if (\array_key_exists('details', $data) && $data['details'] !== null) {
            $values = array();
            foreach ($data['details'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CargoDetail', 'json', $context);
            }
            $object->setDetails($values);
        }
        elseif (\array_key_exists('details', $data) && $data['details'] === null) {
            $object->setDetails(null);
        }
        if (\array_key_exists('senderInn', $data) && $data['senderInn'] !== null) {
            $object->setSenderInn($data['senderInn']);
        }
        elseif (\array_key_exists('senderInn', $data) && $data['senderInn'] === null) {
            $object->setSenderInn(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCargoCode()) {
            $data['cargoCode'] = $object->getCargoCode();
        }
        if (null !== $object->getDetails()) {
            $values = array();
            foreach ($object->getDetails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['details'] = $values;
        }
        if (null !== $object->getSenderInn()) {
            $data['senderInn'] = $object->getSenderInn();
        }
        return $data;
    }
}