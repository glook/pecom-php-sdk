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
class LoadingServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\LoadingServices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\LoadingServices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\LoadingServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] !== null) {
            $object->setCarryingDistance($data['carryingDistance']);
        }
        elseif (\array_key_exists('carryingDistance', $data) && $data['carryingDistance'] === null) {
            $object->setCarryingDistance(null);
        }
        if (\array_key_exists('floor', $data) && $data['floor'] !== null) {
            $object->setFloor($data['floor']);
        }
        elseif (\array_key_exists('floor', $data) && $data['floor'] === null) {
            $object->setFloor(null);
        }
        if (\array_key_exists('isElevator', $data) && $data['isElevator'] !== null) {
            $object->setIsElevator($data['isElevator']);
        }
        elseif (\array_key_exists('isElevator', $data) && $data['isElevator'] === null) {
            $object->setIsElevator(null);
        }
        if (\array_key_exists('isLoading', $data) && $data['isLoading'] !== null) {
            $object->setIsLoading($data['isLoading']);
        }
        elseif (\array_key_exists('isLoading', $data) && $data['isLoading'] === null) {
            $object->setIsLoading(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCarryingDistance()) {
            $data['carryingDistance'] = $object->getCarryingDistance();
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
        return $data;
    }
}