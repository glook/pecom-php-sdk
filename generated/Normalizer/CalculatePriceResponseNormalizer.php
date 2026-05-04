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
class CalculatePriceResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CalculatePriceResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CalculatePriceResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CalculatePriceResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchReceiver', $data) && $data['branchReceiver'] !== null) {
            $object->setBranchReceiver($data['branchReceiver']);
        }
        elseif (\array_key_exists('branchReceiver', $data) && $data['branchReceiver'] === null) {
            $object->setBranchReceiver(null);
        }
        if (\array_key_exists('branchReceiverUID', $data) && $data['branchReceiverUID'] !== null) {
            $object->setBranchReceiverUID($data['branchReceiverUID']);
        }
        elseif (\array_key_exists('branchReceiverUID', $data) && $data['branchReceiverUID'] === null) {
            $object->setBranchReceiverUID(null);
        }
        if (\array_key_exists('branchSender', $data) && $data['branchSender'] !== null) {
            $object->setBranchSender($data['branchSender']);
        }
        elseif (\array_key_exists('branchSender', $data) && $data['branchSender'] === null) {
            $object->setBranchSender(null);
        }
        if (\array_key_exists('branchSenderUID', $data) && $data['branchSenderUID'] !== null) {
            $object->setBranchSenderUID($data['branchSenderUID']);
        }
        elseif (\array_key_exists('branchSenderUID', $data) && $data['branchSenderUID'] === null) {
            $object->setBranchSenderUID(null);
        }
        if (\array_key_exists('commonTerms', $data) && $data['commonTerms'] !== null) {
            $values = array();
            foreach ($data['commonTerms'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CommonTerm', 'json', $context);
            }
            $object->setCommonTerms($values);
        }
        elseif (\array_key_exists('commonTerms', $data) && $data['commonTerms'] === null) {
            $object->setCommonTerms(null);
        }
        if (\array_key_exists('currencyCode', $data) && $data['currencyCode'] !== null) {
            $object->setCurrencyCode($data['currencyCode']);
        }
        elseif (\array_key_exists('currencyCode', $data) && $data['currencyCode'] === null) {
            $object->setCurrencyCode(null);
        }
        if (\array_key_exists('errorMessage', $data) && $data['errorMessage'] !== null) {
            $object->setErrorMessage($data['errorMessage']);
        }
        elseif (\array_key_exists('errorMessage', $data) && $data['errorMessage'] === null) {
            $object->setErrorMessage(null);
        }
        if (\array_key_exists('hasError', $data) && $data['hasError'] !== null) {
            $object->setHasError($data['hasError']);
        }
        elseif (\array_key_exists('hasError', $data) && $data['hasError'] === null) {
            $object->setHasError(null);
        }
        if (\array_key_exists('transfers', $data) && $data['transfers'] !== null) {
            $values_1 = array();
            foreach ($data['transfers'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\\PecomSdk\\Generated\\Model\\Transfer', 'json', $context);
            }
            $object->setTransfers($values_1);
        }
        elseif (\array_key_exists('transfers', $data) && $data['transfers'] === null) {
            $object->setTransfers(null);
        }
        if (\array_key_exists('transportingTimes', $data) && $data['transportingTimes'] !== null) {
            $values_2 = array();
            foreach ($data['transportingTimes'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setTransportingTimes($values_2);
        }
        elseif (\array_key_exists('transportingTimes', $data) && $data['transportingTimes'] === null) {
            $object->setTransportingTimes(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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
            $values = array();
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
            $values_1 = array();
            foreach ($object->getTransfers() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['transfers'] = $values_1;
        }
        if (null !== $object->getTransportingTimes()) {
            $values_2 = array();
            foreach ($object->getTransportingTimes() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['transportingTimes'] = $values_2;
        }
        return $data;
    }
}