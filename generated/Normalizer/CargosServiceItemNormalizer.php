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
class CargosServiceItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargosServiceItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargosServiceItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargosServiceItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branch', $data) && $data['branch'] !== null) {
            $object->setBranch($data['branch']);
        }
        elseif (\array_key_exists('branch', $data) && $data['branch'] === null) {
            $object->setBranch(null);
        }
        if (\array_key_exists('currencyName', $data) && $data['currencyName'] !== null) {
            $object->setCurrencyName($data['currencyName']);
        }
        elseif (\array_key_exists('currencyName', $data) && $data['currencyName'] === null) {
            $object->setCurrencyName(null);
        }
        if (\array_key_exists('description', $data) && $data['description'] !== null) {
            $object->setDescription($data['description']);
        }
        elseif (\array_key_exists('description', $data) && $data['description'] === null) {
            $object->setDescription(null);
        }
        if (\array_key_exists('paid', $data) && $data['paid'] !== null) {
            $object->setPaid($data['paid']);
        }
        elseif (\array_key_exists('paid', $data) && $data['paid'] === null) {
            $object->setPaid(null);
        }
        if (\array_key_exists('payerForm', $data) && $data['payerForm'] !== null) {
            $object->setPayerForm($data['payerForm']);
        }
        elseif (\array_key_exists('payerForm', $data) && $data['payerForm'] === null) {
            $object->setPayerForm(null);
        }
        if (\array_key_exists('payerName', $data) && $data['payerName'] !== null) {
            $object->setPayerName($data['payerName']);
        }
        elseif (\array_key_exists('payerName', $data) && $data['payerName'] === null) {
            $object->setPayerName(null);
        }
        if (\array_key_exists('payerType', $data) && $data['payerType'] !== null) {
            $object->setPayerType($data['payerType']);
        }
        elseif (\array_key_exists('payerType', $data) && $data['payerType'] === null) {
            $object->setPayerType(null);
        }
        if (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] !== null) {
            $object->setPaymentMethod($data['paymentMethod']);
        }
        elseif (\array_key_exists('paymentMethod', $data) && $data['paymentMethod'] === null) {
            $object->setPaymentMethod(null);
        }
        if (\array_key_exists('payToReceive', $data) && $data['payToReceive'] !== null) {
            $object->setPayToReceive($data['payToReceive']);
        }
        elseif (\array_key_exists('payToReceive', $data) && $data['payToReceive'] === null) {
            $object->setPayToReceive(null);
        }
        if (\array_key_exists('price', $data) && $data['price'] !== null) {
            $object->setPrice($data['price']);
        }
        elseif (\array_key_exists('price', $data) && $data['price'] === null) {
            $object->setPrice(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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