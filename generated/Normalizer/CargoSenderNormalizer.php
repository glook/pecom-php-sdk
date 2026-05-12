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
class CargoSenderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoSender';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoSender';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data) && $data['branch'] !== null) {
            $object->setBranch($data['branch']);
        }
        elseif (\array_key_exists('branch', $data) && $data['branch'] === null) {
            $object->setBranch(null);
        }
        if (\array_key_exists('branchInfo', $data) && $data['branchInfo'] !== null) {
            $object->setBranchInfo($this->denormalizer->denormalize($data['branchInfo'], 'glook\\PecomSdk\\Generated\\Model\\BranchInfo', 'json', $context));
        }
        elseif (\array_key_exists('branchInfo', $data) && $data['branchInfo'] === null) {
            $object->setBranchInfo(null);
        }
        if (\array_key_exists('counterpartPaymentType', $data) && $data['counterpartPaymentType'] !== null) {
            $object->setCounterpartPaymentType($data['counterpartPaymentType']);
        }
        elseif (\array_key_exists('counterpartPaymentType', $data) && $data['counterpartPaymentType'] === null) {
            $object->setCounterpartPaymentType(null);
        }
        if (\array_key_exists('intakeAddress', $data) && $data['intakeAddress'] !== null) {
            $object->setIntakeAddress($data['intakeAddress']);
        }
        elseif (\array_key_exists('intakeAddress', $data) && $data['intakeAddress'] === null) {
            $object->setIntakeAddress(null);
        }
        if (\array_key_exists('person', $data) && $data['person'] !== null) {
            $object->setPerson($data['person']);
        }
        elseif (\array_key_exists('person', $data) && $data['person'] === null) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('sender', $data) && $data['sender'] !== null) {
            $object->setSender($data['sender']);
        }
        elseif (\array_key_exists('sender', $data) && $data['sender'] === null) {
            $object->setSender(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBranch()) {
            $data['branch'] = $object->getBranch();
        }
        if (null !== $object->getBranchInfo()) {
            $data['branchInfo'] = $this->normalizer->normalize($object->getBranchInfo(), 'json', $context);
        }
        if (null !== $object->getCounterpartPaymentType()) {
            $data['counterpartPaymentType'] = $object->getCounterpartPaymentType();
        }
        if (null !== $object->getIntakeAddress()) {
            $data['intakeAddress'] = $object->getIntakeAddress();
        }
        if (null !== $object->getPerson()) {
            $data['person'] = $object->getPerson();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getSender()) {
            $data['sender'] = $object->getSender();
        }
        return $data;
    }
}