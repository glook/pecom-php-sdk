<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CalculatePriceResponse;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CalculatePriceResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CalculatePriceResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CalculatePriceResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CalculatePriceResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchReceiver', $data) && null !== $data['branchReceiver']) {
            $object->setBranchReceiver($data['branchReceiver']);
        } elseif (\array_key_exists('branchReceiver', $data) && null === $data['branchReceiver']) {
            $object->setBranchReceiver(null);
        }
        if (\array_key_exists('branchReceiverUID', $data) && null !== $data['branchReceiverUID']) {
            $object->setBranchReceiverUID($data['branchReceiverUID']);
        } elseif (\array_key_exists('branchReceiverUID', $data) && null === $data['branchReceiverUID']) {
            $object->setBranchReceiverUID(null);
        }
        if (\array_key_exists('branchSender', $data) && null !== $data['branchSender']) {
            $object->setBranchSender($data['branchSender']);
        } elseif (\array_key_exists('branchSender', $data) && null === $data['branchSender']) {
            $object->setBranchSender(null);
        }
        if (\array_key_exists('branchSenderUID', $data) && null !== $data['branchSenderUID']) {
            $object->setBranchSenderUID($data['branchSenderUID']);
        } elseif (\array_key_exists('branchSenderUID', $data) && null === $data['branchSenderUID']) {
            $object->setBranchSenderUID(null);
        }
        if (\array_key_exists('commonTerms', $data) && null !== $data['commonTerms']) {
            $values = [];
            foreach ($data['commonTerms'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CommonTerm', 'json', $context);
            }
            $object->setCommonTerms($values);
        } elseif (\array_key_exists('commonTerms', $data) && null === $data['commonTerms']) {
            $object->setCommonTerms(null);
        }
        if (\array_key_exists('currencyCode', $data) && null !== $data['currencyCode']) {
            $object->setCurrencyCode($data['currencyCode']);
        } elseif (\array_key_exists('currencyCode', $data) && null === $data['currencyCode']) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('errorMessage', $data) && null !== $data['errorMessage']) {
            $object->setErrorMessage($data['errorMessage']);
        } elseif (\array_key_exists('errorMessage', $data) && null === $data['errorMessage']) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('hasError', $data) && null !== $data['hasError']) {
            $object->setHasError($data['hasError']);
        } elseif (\array_key_exists('hasError', $data) && null === $data['hasError']) {
            $object->setHasError(null);
        }
        if (\array_key_exists('transfers', $data) && null !== $data['transfers']) {
            $values_1 = [];
            foreach ($data['transfers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\PecomSdk\Generated\Model\Transfer', 'json', $context);
            }
            $object->setTransfers($values_1);
        } elseif (\array_key_exists('transfers', $data) && null === $data['transfers']) {
            $object->setTransfers(null);
        }
        if (\array_key_exists('transportingTimes', $data) && null !== $data['transportingTimes']) {
            $values_2 = [];
            foreach ($data['transportingTimes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTransportingTimes($values_2);
        } elseif (\array_key_exists('transportingTimes', $data) && null === $data['transportingTimes']) {
            $object->setTransportingTimes(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBranchReceiver()) {
            $data['branchReceiver'] = $object->getBranchReceiver();
        }
        if (null !== $object->getBranchReceiverUID()) {
            $data['branchReceiverUID'] = $object->getBranchReceiverUID();
        }
        if (null !== $object->getBranchSender()) {
            $data['branchSender'] = $object->getBranchSender();
        }
        if (null !== $object->getBranchSenderUID()) {
            $data['branchSenderUID'] = $object->getBranchSenderUID();
        }
        if (null !== $object->getCommonTerms()) {
            $values = [];
            foreach ($object->getCommonTerms() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['commonTerms'] = $values;
        }
        if (null !== $object->getCurrencyCode()) {
            $data['currencyCode'] = $object->getCurrencyCode();
        }
        if (null !== $object->getErrorMessage()) {
            $data['errorMessage'] = $object->getErrorMessage();
        }
        if (null !== $object->getHasError()) {
            $data['hasError'] = $object->getHasError();
        }
        if (null !== $object->getTransfers()) {
            $values_1 = [];
            foreach ($object->getTransfers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['transfers'] = $values_1;
        }
        if (null !== $object->getTransportingTimes()) {
            $values_2 = [];
            foreach ($object->getTransportingTimes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['transportingTimes'] = $values_2;
        }

        return $data;
    }
}
