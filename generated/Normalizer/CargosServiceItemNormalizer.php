<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargosServiceItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargosServiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargosServiceItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargosServiceItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargosServiceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data) && null !== $data['branch']) {
            $object->setBranch($data['branch']);
        } elseif (\array_key_exists('branch', $data) && null === $data['branch']) {
            $object->setBranch(null);
        }
        if (\array_key_exists('currencyName', $data) && null !== $data['currencyName']) {
            $object->setCurrencyName($data['currencyName']);
        } elseif (\array_key_exists('currencyName', $data) && null === $data['currencyName']) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('paid', $data) && null !== $data['paid']) {
            $object->setPaid($data['paid']);
        } elseif (\array_key_exists('paid', $data) && null === $data['paid']) {
            $object->setPaid(null);
        }
        if (\array_key_exists('payerForm', $data) && null !== $data['payerForm']) {
            $object->setPayerForm($data['payerForm']);
        } elseif (\array_key_exists('payerForm', $data) && null === $data['payerForm']) {
            $object->setPayerForm(null);
        }
        if (\array_key_exists('payerName', $data) && null !== $data['payerName']) {
            $object->setPayerName($data['payerName']);
        } elseif (\array_key_exists('payerName', $data) && null === $data['payerName']) {
            $object->setPayerName(null);
        }
        if (\array_key_exists('payerType', $data) && null !== $data['payerType']) {
            $object->setPayerType($data['payerType']);
        } elseif (\array_key_exists('payerType', $data) && null === $data['payerType']) {
            $object->setPayerType(null);
        }
        if (\array_key_exists('paymentMethod', $data) && null !== $data['paymentMethod']) {
            $object->setPaymentMethod($data['paymentMethod']);
        } elseif (\array_key_exists('paymentMethod', $data) && null === $data['paymentMethod']) {
            $object->setPaymentMethod(null);
        }
        if (\array_key_exists('payToReceive', $data) && null !== $data['payToReceive']) {
            $object->setPayToReceive($data['payToReceive']);
        } elseif (\array_key_exists('payToReceive', $data) && null === $data['payToReceive']) {
            $object->setPayToReceive(null);
        }
        if (\array_key_exists('price', $data) && null !== $data['price']) {
            $object->setPrice($data['price']);
        } elseif (\array_key_exists('price', $data) && null === $data['price']) {
            $object->setPrice(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBranch()) {
            $data['branch'] = $object->getBranch();
        }
        if (null !== $object->getCurrencyName()) {
            $data['currencyName'] = $object->getCurrencyName();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getPaid()) {
            $data['paid'] = $object->getPaid();
        }
        if (null !== $object->getPayerForm()) {
            $data['payerForm'] = $object->getPayerForm();
        }
        if (null !== $object->getPayerName()) {
            $data['payerName'] = $object->getPayerName();
        }
        if (null !== $object->getPayerType()) {
            $data['payerType'] = $object->getPayerType();
        }
        if (null !== $object->getPaymentMethod()) {
            $data['paymentMethod'] = $object->getPaymentMethod();
        }
        if (null !== $object->getPayToReceive()) {
            $data['payToReceive'] = $object->getPayToReceive();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }

        return $data;
    }
}
