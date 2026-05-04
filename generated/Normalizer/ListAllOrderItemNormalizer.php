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
class ListAllOrderItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ListAllOrderItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] !== null) {
            $object->setCargoStatus($data['cargoStatus']);
        }
        elseif (\array_key_exists('cargoStatus', $data) && $data['cargoStatus'] === null) {
            $object->setCargoStatus(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('intakePlanDateTime', $data) && $data['intakePlanDateTime'] !== null) {
            $object->setIntakePlanDateTime($data['intakePlanDateTime']);
        }
        elseif (\array_key_exists('intakePlanDateTime', $data) && $data['intakePlanDateTime'] === null) {
            $object->setIntakePlanDateTime(null);
        }
        if (\array_key_exists('kindOfTransportationType', $data) && $data['kindOfTransportationType'] !== null) {
            $object->setKindOfTransportationType($data['kindOfTransportationType']);
        }
        elseif (\array_key_exists('kindOfTransportationType', $data) && $data['kindOfTransportationType'] === null) {
            $object->setKindOfTransportationType(null);
        }
        if (\array_key_exists('orderDate', $data) && $data['orderDate'] !== null) {
            $object->setOrderDate($data['orderDate']);
        }
        elseif (\array_key_exists('orderDate', $data) && $data['orderDate'] === null) {
            $object->setOrderDate(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('Receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['Receiver'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderReceiver', 'json', $context));
        }
        if (\array_key_exists('Sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['Sender'], 'glook\\PecomSdk\\Generated\\Model\\ListAllOrderSender', 'json', $context));
        }
        if (\array_key_exists('shippingType', $data) && $data['shippingType'] !== null) {
            $object->setShippingType($data['shippingType']);
        }
        elseif (\array_key_exists('shippingType', $data) && $data['shippingType'] === null) {
            $object->setShippingType(null);
        }
        if (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] !== null) {
            $object->setTakeOnStockDateTime($data['takeOnStockDateTime']);
        }
        elseif (\array_key_exists('takeOnStockDateTime', $data) && $data['takeOnStockDateTime'] === null) {
            $object->setTakeOnStockDateTime(null);
        }
        if (\array_key_exists('code', $data) && $data['code'] !== null) {
            $object->setCode($data['code']);
        }
        elseif (\array_key_exists('code', $data) && $data['code'] === null) {
            $object->setCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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