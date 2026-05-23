<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\AccountingDocumentService;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class AccountingDocumentServiceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\AccountingDocumentService' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\AccountingDocumentService' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new AccountingDocumentService();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoCode', $data) && null !== $data['cargoCode']) {
            $object->setCargoCode($data['cargoCode']);
        } elseif (\array_key_exists('cargoCode', $data) && null === $data['cargoCode']) {
            $object->setCargoCode(null);
        }
        if (\array_key_exists('rateVAT', $data) && null !== $data['rateVAT']) {
            $object->setRateVAT($data['rateVAT']);
        } elseif (\array_key_exists('rateVAT', $data) && null === $data['rateVAT']) {
            $object->setRateVAT(null);
        }
        if (\array_key_exists('sum', $data) && null !== $data['sum']) {
            $object->setSum($data['sum']);
        } elseif (\array_key_exists('sum', $data) && null === $data['sum']) {
            $object->setSum(null);
        }
        if (\array_key_exists('sumVAT', $data) && null !== $data['sumVAT']) {
            $object->setSumVAT($data['sumVAT']);
        } elseif (\array_key_exists('sumVAT', $data) && null === $data['sumVAT']) {
            $object->setSumVAT(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargoCode()) {
            $data['cargoCode'] = $object->getCargoCode();
        }
        if (null !== $object->getRateVAT()) {
            $data['rateVAT'] = $object->getRateVAT();
        }
        if (null !== $object->getSum()) {
            $data['sum'] = $object->getSum();
        }
        if (null !== $object->getSumVAT()) {
            $data['sumVAT'] = $object->getSumVAT();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }

        return $data;
    }
}
