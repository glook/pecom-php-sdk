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
class PreregistrationSpecificationItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSpecificationItem';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSpecificationItem';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationSpecificationItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('actualCostPerUnit', $data)) {
            $object->setActualCostPerUnit($data['actualCostPerUnit']);
        }
        if (\array_key_exists('actualCostTotal', $data)) {
            $object->setActualCostTotal($data['actualCostTotal']);
        }
        if (\array_key_exists('amount', $data)) {
            $object->setAmount($data['amount']);
        }
        if (\array_key_exists('calculationSubject', $data)) {
            $object->setCalculationSubject($data['calculationSubject']);
        }
        if (\array_key_exists('groupMarkedGood', $data) && $data['groupMarkedGood'] !== null) {
            $object->setGroupMarkedGood($data['groupMarkedGood']);
        }
        elseif (\array_key_exists('groupMarkedGood', $data) && $data['groupMarkedGood'] === null) {
            $object->setGroupMarkedGood(null);
        }
        if (\array_key_exists('markingCode', $data) && $data['markingCode'] !== null) {
            $object->setMarkingCode($data['markingCode']);
        }
        elseif (\array_key_exists('markingCode', $data) && $data['markingCode'] === null) {
            $object->setMarkingCode(null);
        }
        if (\array_key_exists('measureOfQuantity', $data) && $data['measureOfQuantity'] !== null) {
            $object->setMeasureOfQuantity($data['measureOfQuantity']);
        }
        elseif (\array_key_exists('measureOfQuantity', $data) && $data['measureOfQuantity'] === null) {
            $object->setMeasureOfQuantity(null);
        }
        if (\array_key_exists('rateVAT', $data)) {
            $object->setRateVAT($data['rateVAT']);
        }
        if (\array_key_exists('sumPerUnit', $data)) {
            $object->setSumPerUnit($data['sumPerUnit']);
        }
        if (\array_key_exists('sumTotal', $data)) {
            $object->setSumTotal($data['sumTotal']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('vendorCode', $data)) {
            $object->setVendorCode($data['vendorCode']);
        }
        if (\array_key_exists('vendorINN', $data)) {
            $object->setVendorINN($data['vendorINN']);
        }
        if (\array_key_exists('vendorName', $data)) {
            $object->setVendorName($data['vendorName']);
        }
        if (\array_key_exists('vendorPhone', $data)) {
            $object->setVendorPhone($data['vendorPhone']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['actualCostPerUnit'] = $object->getActualCostPerUnit();
        $data['actualCostTotal'] = $object->getActualCostTotal();
        $data['amount'] = $object->getAmount();
        $data['calculationSubject'] = $object->getCalculationSubject();
        if (null !== $object->getGroupMarkedGood()) {
            $data['groupMarkedGood'] = $object->getGroupMarkedGood();
        }
        if (null !== $object->getMarkingCode()) {
            $data['markingCode'] = $object->getMarkingCode();
        }
        if (null !== $object->getMeasureOfQuantity()) {
            $data['measureOfQuantity'] = $object->getMeasureOfQuantity();
        }
        $data['rateVAT'] = $object->getRateVAT();
        $data['sumPerUnit'] = $object->getSumPerUnit();
        $data['sumTotal'] = $object->getSumTotal();
        $data['title'] = $object->getTitle();
        $data['vendorCode'] = $object->getVendorCode();
        $data['vendorINN'] = $object->getVendorINN();
        $data['vendorName'] = $object->getVendorName();
        $data['vendorPhone'] = $object->getVendorPhone();
        return $data;
    }
}