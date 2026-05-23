<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ListAllOrderItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListAllOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ListAllOrderItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ListAllOrderItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ListAllOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoStatus', $data) && null !== $data['cargoStatus']) {
            $object->setCargoStatus($data['cargoStatus']);
        } elseif (\array_key_exists('cargoStatus', $data) && null === $data['cargoStatus']) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('intakePlanDateTime', $data) && null !== $data['intakePlanDateTime']) {
            $object->setIntakePlanDateTime($data['intakePlanDateTime']);
        } elseif (\array_key_exists('intakePlanDateTime', $data) && null === $data['intakePlanDateTime']) {
            $object->setIntakePlanDateTime(null);
        }
        if (\array_key_exists('kindOfTransportationType', $data) && null !== $data['kindOfTransportationType']) {
            $object->setKindOfTransportationType($data['kindOfTransportationType']);
        } elseif (\array_key_exists('kindOfTransportationType', $data) && null === $data['kindOfTransportationType']) {
            $object->setKindOfTransportationType(null);
        }
        if (\array_key_exists('orderDate', $data) && null !== $data['orderDate']) {
            $object->setOrderDate($data['orderDate']);
        } elseif (\array_key_exists('orderDate', $data) && null === $data['orderDate']) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('Receiver', $data) && null !== $data['Receiver']) {
            $object->setReceiver($this->denormalizer->denormalize($data['Receiver'], 'glook\PecomSdk\Generated\Model\ListAllOrderReceiver', 'json', $context));
        } elseif (\array_key_exists('Receiver', $data) && null === $data['Receiver']) {
            $object->setReceiver(null);
        }
        if (\array_key_exists('Sender', $data) && null !== $data['Sender']) {
            $object->setSender($this->denormalizer->denormalize($data['Sender'], 'glook\PecomSdk\Generated\Model\ListAllOrderSender', 'json', $context));
        } elseif (\array_key_exists('Sender', $data) && null === $data['Sender']) {
            $object->setSender(null);
        }
        if (\array_key_exists('shippingType', $data) && null !== $data['shippingType']) {
            $object->setShippingType($data['shippingType']);
        } elseif (\array_key_exists('shippingType', $data) && null === $data['shippingType']) {
            $object->setShippingType(null);
        }
        if (\array_key_exists('takeOnStockDateTime', $data) && null !== $data['takeOnStockDateTime']) {
            $object->setTakeOnStockDateTime($data['takeOnStockDateTime']);
        } elseif (\array_key_exists('takeOnStockDateTime', $data) && null === $data['takeOnStockDateTime']) {
            $object->setTakeOnStockDateTime(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargoStatus()) {
            $data['cargoStatus'] = $object->getCargoStatus();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getIntakePlanDateTime()) {
            $data['intakePlanDateTime'] = $object->getIntakePlanDateTime();
        }
        if (null !== $object->getKindOfTransportationType()) {
            $data['kindOfTransportationType'] = $object->getKindOfTransportationType();
        }
        if (null !== $object->getOrderDate()) {
            $data['orderDate'] = $object->getOrderDate();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getReceiver()) {
            $data['Receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        }
        if (null !== $object->getSender()) {
            $data['Sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);
        }
        if (null !== $object->getShippingType()) {
            $data['shippingType'] = $object->getShippingType();
        }
        if (null !== $object->getTakeOnStockDateTime()) {
            $data['takeOnStockDateTime'] = $object->getTakeOnStockDateTime();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }

        return $data;
    }
}
