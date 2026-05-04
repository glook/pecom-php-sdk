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
class BranchesCheckpickupdatePostResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BranchesCheckpickupdatePostResponse200';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BranchesCheckpickupdatePostResponse200';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BranchesCheckpickupdatePostResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('AddressAvailable', $data)) {
            $object->setAddressAvailable($data['AddressAvailable']);
        }
        if (\array_key_exists('AvailablePickupDatesAfter', $data)) {
            $values = array();
            foreach ($data['AvailablePickupDatesAfter'] as $value) {
                $values[] = \DateTime::createFromFormat('Y-m-d', $value)->setTime(0, 0, 0);
            }
            $object->setAvailablePickupDatesAfter($values);
        }
        if (\array_key_exists('AvailablePickupDatesBefore', $data)) {
            $values_1 = array();
            foreach ($data['AvailablePickupDatesBefore'] as $value_1) {
                $values_1[] = \DateTime::createFromFormat('Y-m-d', $value_1)->setTime(0, 0, 0);
            }
            $object->setAvailablePickupDatesBefore($values_1);
        }
        if (\array_key_exists('PickupDateAvailable', $data)) {
            $object->setPickupDateAvailable($data['PickupDateAvailable']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['AddressAvailable'] = $object->getAddressAvailable();
        $values = array();
        foreach ($object->getAvailablePickupDatesAfter() as $value) {
            $values[] = $value->format('Y-m-d');
        }
        $data['AvailablePickupDatesAfter'] = $values;
        $values_1 = array();
        foreach ($object->getAvailablePickupDatesBefore() as $value_1) {
            $values_1[] = $value_1->format('Y-m-d');
        }
        $data['AvailablePickupDatesBefore'] = $values_1;
        $data['PickupDateAvailable'] = $object->getPickupDateAvailable();
        return $data;
    }
}