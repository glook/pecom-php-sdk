<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargosCargoReceiver;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargosCargoReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargosCargoReceiver' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargosCargoReceiver' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargosCargoReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('abbreviated', $data) && null !== $data['abbreviated']) {
            $object->setAbbreviated($this->denormalizer->denormalize($data['abbreviated'], 'glook\PecomSdk\Generated\Model\AbbreviatedReceiver', 'json', $context));
        } elseif (\array_key_exists('abbreviated', $data) && null === $data['abbreviated']) {
            $object->setAbbreviated(null);
        }
        if (\array_key_exists('branch', $data) && null !== $data['branch']) {
            $object->setBranch($this->denormalizer->denormalize($data['branch'], 'glook\PecomSdk\Generated\Model\BranchInfo', 'json', $context));
        } elseif (\array_key_exists('branch', $data) && null === $data['branch']) {
            $object->setBranch(null);
        }
        if (\array_key_exists('counterpartPaymentType', $data) && null !== $data['counterpartPaymentType']) {
            $object->setCounterpartPaymentType($data['counterpartPaymentType']);
        } elseif (\array_key_exists('counterpartPaymentType', $data) && null === $data['counterpartPaymentType']) {
            $object->setCounterpartPaymentType(null);
        }
        if (\array_key_exists('isCorrect', $data) && null !== $data['isCorrect']) {
            $object->setIsCorrect($data['isCorrect']);
        } elseif (\array_key_exists('isCorrect', $data) && null === $data['isCorrect']) {
            $object->setIsCorrect(null);
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
        if (\array_key_exists('receiver', $data) && null !== $data['receiver']) {
            $object->setReceiver($data['receiver']);
        } elseif (\array_key_exists('receiver', $data) && null === $data['receiver']) {
            $object->setReceiver(null);
        }
        if (\array_key_exists('receivingByDocument', $data) && null !== $data['receivingByDocument']) {
            $object->setReceivingByDocument($data['receivingByDocument']);
        } elseif (\array_key_exists('receivingByDocument', $data) && null === $data['receivingByDocument']) {
            $object->setReceivingByDocument(null);
        }
        if (\array_key_exists('receivingBySMSCode', $data) && null !== $data['receivingBySMSCode']) {
            $object->setReceivingBySMSCode($data['receivingBySMSCode']);
        } elseif (\array_key_exists('receivingBySMSCode', $data) && null === $data['receivingBySMSCode']) {
            $object->setReceivingBySMSCode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAbbreviated()) {
            $data['abbreviated'] = $this->normalizer->normalize($object->getAbbreviated(), 'json', $context);
        }
        if (null !== $object->getBranch()) {
            $data['branch'] = $this->normalizer->normalize($object->getBranch(), 'json', $context);
        }
        if (null !== $object->getCounterpartPaymentType()) {
            $data['counterpartPaymentType'] = $object->getCounterpartPaymentType();
        }
        if (null !== $object->getIsCorrect()) {
            $data['isCorrect'] = $object->getIsCorrect();
        }
        if (null !== $object->getPerson()) {
            $data['person'] = $object->getPerson();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getReceiver()) {
            $data['receiver'] = $object->getReceiver();
        }
        if (null !== $object->getReceivingByDocument()) {
            $data['receivingByDocument'] = $object->getReceivingByDocument();
        }
        if (null !== $object->getReceivingBySMSCode()) {
            $data['receivingBySMSCode'] = $object->getReceivingBySMSCode();
        }

        return $data;
    }
}
