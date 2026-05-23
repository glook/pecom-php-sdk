<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationIdentityCard;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationIdentityCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationIdentityCard' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationIdentityCard' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationIdentityCard();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && null !== $data['date']) {
            $object->setDate(\DateTime::createFromFormat('Y-m-d', $data['date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('date', $data) && null === $data['date']) {
            $object->setDate(null);
        }
        if (\array_key_exists('note', $data) && null !== $data['note']) {
            $object->setNote($data['note']);
        } elseif (\array_key_exists('note', $data) && null === $data['note']) {
            $object->setNote(null);
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('series', $data) && null !== $data['series']) {
            $object->setSeries($data['series']);
        } elseif (\array_key_exists('series', $data) && null === $data['series']) {
            $object->setSeries(null);
        }
        if (\array_key_exists('taxpayerCountryCode', $data) && null !== $data['taxpayerCountryCode']) {
            $object->setTaxpayerCountryCode($data['taxpayerCountryCode']);
        } elseif (\array_key_exists('taxpayerCountryCode', $data) && null === $data['taxpayerCountryCode']) {
            $object->setTaxpayerCountryCode(null);
        }
        if (\array_key_exists('taxpayerID', $data) && null !== $data['taxpayerID']) {
            $object->setTaxpayerID($data['taxpayerID']);
        } elseif (\array_key_exists('taxpayerID', $data) && null === $data['taxpayerID']) {
            $object->setTaxpayerID(null);
        }
        if (\array_key_exists('typeGuid', $data) && null !== $data['typeGuid']) {
            $object->setTypeGuid($data['typeGuid']);
        } elseif (\array_key_exists('typeGuid', $data) && null === $data['typeGuid']) {
            $object->setTypeGuid(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate()->format('Y-m-d');
        }
        if (null !== $object->getNote()) {
            $data['note'] = $object->getNote();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getSeries()) {
            $data['series'] = $object->getSeries();
        }
        if (null !== $object->getTaxpayerCountryCode()) {
            $data['taxpayerCountryCode'] = $object->getTaxpayerCountryCode();
        }
        if (null !== $object->getTaxpayerID()) {
            $data['taxpayerID'] = $object->getTaxpayerID();
        }
        if (null !== $object->getTypeGuid()) {
            $data['typeGuid'] = $object->getTypeGuid();
        }

        return $data;
    }
}
