<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\NetshopCargoCommon;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class NetshopCargoCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\NetshopCargoCommon' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\NetshopCargoCommon' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new NetshopCargoCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accompanyingDocuments', $data)) {
            $object->setAccompanyingDocuments($data['accompanyingDocuments']);
        }
        if (\array_key_exists('accompanyingDocumentsNumbers', $data) && null !== $data['accompanyingDocumentsNumbers']) {
            $object->setAccompanyingDocumentsNumbers($data['accompanyingDocumentsNumbers']);
        } elseif (\array_key_exists('accompanyingDocumentsNumbers', $data) && null === $data['accompanyingDocumentsNumbers']) {
            $object->setAccompanyingDocumentsNumbers(null);
        }
        if (\array_key_exists('accompanyingDocumentsSum', $data) && null !== $data['accompanyingDocumentsSum']) {
            $object->setAccompanyingDocumentsSum($data['accompanyingDocumentsSum']);
        } elseif (\array_key_exists('accompanyingDocumentsSum', $data) && null === $data['accompanyingDocumentsSum']) {
            $object->setAccompanyingDocumentsSum(null);
        }
        if (\array_key_exists('avisationDateTime', $data) && null !== $data['avisationDateTime']) {
            $object->setAvisationDateTime($data['avisationDateTime']);
        } elseif (\array_key_exists('avisationDateTime', $data) && null === $data['avisationDateTime']) {
            $object->setAvisationDateTime(null);
        }
        if (\array_key_exists('decription', $data)) {
            $object->setDecription($data['decription']);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('palletesCount', $data)) {
            $object->setPalletesCount($data['palletesCount']);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['accompanyingDocuments'] = $object->getAccompanyingDocuments();
        if (null !== $object->getAccompanyingDocumentsNumbers()) {
            $data['accompanyingDocumentsNumbers'] = $object->getAccompanyingDocumentsNumbers();
        }
        if (null !== $object->getAccompanyingDocumentsSum()) {
            $data['accompanyingDocumentsSum'] = $object->getAccompanyingDocumentsSum();
        }
        if (null !== $object->getAvisationDateTime()) {
            $data['avisationDateTime'] = $object->getAvisationDateTime();
        }
        $data['decription'] = $object->getDecription();
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        $data['palletesCount'] = $object->getPalletesCount();

        return $data;
    }
}
