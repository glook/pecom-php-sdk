<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\BranchesDepartmentslimitPostBody' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new BranchesDepartmentslimitPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('recipientBranchId', $data)) {
            $object->setRecipientBranchId($data['recipientBranchId']);
        }
        if (\array_key_exists('recipientWarehouseId', $data) && null !== $data['recipientWarehouseId']) {
            $object->setRecipientWarehouseId($data['recipientWarehouseId']);
        } elseif (\array_key_exists('recipientWarehouseId', $data) && null === $data['recipientWarehouseId']) {
            $object->setRecipientWarehouseId(null);
        }
        if (\array_key_exists('senderBranchId', $data)) {
            $object->setSenderBranchId($data['senderBranchId']);
        }
        if (\array_key_exists('senderWarehouseId', $data) && null !== $data['senderWarehouseId']) {
            $object->setSenderWarehouseId($data['senderWarehouseId']);
        } elseif (\array_key_exists('senderWarehouseId', $data) && null === $data['senderWarehouseId']) {
            $object->setSenderWarehouseId(null);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
