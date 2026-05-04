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
class BranchesDepartmentslimitPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BranchesDepartmentslimitPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BranchesDepartmentslimitPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recipientBranchId', $data)) {
            $object->setRecipientBranchId($data['recipientBranchId']);
        }
        if (\array_key_exists('recipientWarehouseId', $data) && $data['recipientWarehouseId'] !== null) {
            $object->setRecipientWarehouseId($data['recipientWarehouseId']);
        }
        elseif (\array_key_exists('recipientWarehouseId', $data) && $data['recipientWarehouseId'] === null) {
            $object->setRecipientWarehouseId(null);
        }
        if (\array_key_exists('senderBranchId', $data)) {
            $object->setSenderBranchId($data['senderBranchId']);
        }
        if (\array_key_exists('senderWarehouseId', $data) && $data['senderWarehouseId'] !== null) {
            $object->setSenderWarehouseId($data['senderWarehouseId']);
        }
        elseif (\array_key_exists('senderWarehouseId', $data) && $data['senderWarehouseId'] === null) {
            $object->setSenderWarehouseId(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['recipientBranchId'] = $object->getRecipientBranchId();
        if (null !== $object->getRecipientWarehouseId()) {
            $data['recipientWarehouseId'] = $object->getRecipientWarehouseId();
        }
        $data['senderBranchId'] = $object->getSenderBranchId();
        if (null !== $object->getSenderWarehouseId()) {
            $data['senderWarehouseId'] = $object->getSenderWarehouseId();
        }
        $data['type'] = $object->getType();
        return $data;
    }
}