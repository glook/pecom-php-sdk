<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoSender;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CargoSender' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoSender' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoSender();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data) && null !== $data['branch']) {
            $object->setBranch($data['branch']);
        } elseif (\array_key_exists('branch', $data) && null === $data['branch']) {
            $object->setBranch(null);
        }
        if (\array_key_exists('branchInfo', $data) && null !== $data['branchInfo']) {
            $object->setBranchInfo($this->denormalizer->denormalize($data['branchInfo'], 'glook\PecomSdk\Generated\Model\BranchInfo', 'json', $context));
        } elseif (\array_key_exists('branchInfo', $data) && null === $data['branchInfo']) {
            $object->setBranchInfo(null);
        }
        if (\array_key_exists('counterpartPaymentType', $data) && null !== $data['counterpartPaymentType']) {
            $object->setCounterpartPaymentType($data['counterpartPaymentType']);
        } elseif (\array_key_exists('counterpartPaymentType', $data) && null === $data['counterpartPaymentType']) {
            $object->setCounterpartPaymentType(null);
        }
        if (\array_key_exists('intakeAddress', $data) && null !== $data['intakeAddress']) {
            $object->setIntakeAddress($data['intakeAddress']);
        } elseif (\array_key_exists('intakeAddress', $data) && null === $data['intakeAddress']) {
            $object->setIntakeAddress(null);
        }
        if (\array_key_exists('person', $data) && null !== $data['person']) {
            $object->setPerson($data['person']);
        } elseif (\array_key_exists('person', $data) && null === $data['person']) {
            $object->setPerson(null);
        }
        if (\array_key_exists('phone', $data) && null !== $data['phone']) {
            $object->setPhone($data['phone']);
        } elseif (\array_key_exists('phone', $data) && null === $data['phone']) {
            $object->setPhone(null);
        }
        if (\array_key_exists('sender', $data) && null !== $data['sender']) {
            $object->setSender($data['sender']);
        } elseif (\array_key_exists('sender', $data) && null === $data['sender']) {
            $object->setSender(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
