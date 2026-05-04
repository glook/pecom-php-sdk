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
class PreregistrationCargoCommonNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargoCommon';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargoCommon';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationCargoCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accompanyingDocuments', $data) && $data['accompanyingDocuments'] !== null) {
            $object->setAccompanyingDocuments($data['accompanyingDocuments']);
        }
        elseif (\array_key_exists('accompanyingDocuments', $data) && $data['accompanyingDocuments'] === null) {
            $object->setAccompanyingDocuments(null);
        }
        if (\array_key_exists('accompanyingDocumentsDate', $data) && $data['accompanyingDocumentsDate'] !== null) {
            $object->setAccompanyingDocumentsDate(\DateTime::createFromFormat('Y-m-d', $data['accompanyingDocumentsDate'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('accompanyingDocumentsDate', $data) && $data['accompanyingDocumentsDate'] === null) {
            $object->setAccompanyingDocumentsDate(null);
        }
        if (\array_key_exists('accompanyingDocumentsName', $data) && $data['accompanyingDocumentsName'] !== null) {
            $object->setAccompanyingDocumentsName($data['accompanyingDocumentsName']);
        }
        elseif (\array_key_exists('accompanyingDocumentsName', $data) && $data['accompanyingDocumentsName'] === null) {
            $object->setAccompanyingDocumentsName(null);
        }
        if (\array_key_exists('accompanyingDocumentsNumber', $data) && $data['accompanyingDocumentsNumber'] !== null) {
            $object->setAccompanyingDocumentsNumber($data['accompanyingDocumentsNumber']);
        }
        elseif (\array_key_exists('accompanyingDocumentsNumber', $data) && $data['accompanyingDocumentsNumber'] === null) {
            $object->setAccompanyingDocumentsNumber(null);
        }
        if (\array_key_exists('accompanyingDocumentsNumberTTN', $data) && $data['accompanyingDocumentsNumberTTN'] !== null) {
            $object->setAccompanyingDocumentsNumberTTN($data['accompanyingDocumentsNumberTTN']);
        }
        elseif (\array_key_exists('accompanyingDocumentsNumberTTN', $data) && $data['accompanyingDocumentsNumberTTN'] === null) {
            $object->setAccompanyingDocumentsNumberTTN(null);
        }
        if (\array_key_exists('cargoPlaceList', $data) && $data['cargoPlaceList'] !== null) {
            $values = array();
            foreach ($data['cargoPlaceList'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\PreregistrationCargoPlace', 'json', $context);
            }
            $object->setCargoPlaceList($values);
        }
        elseif (\array_key_exists('cargoPlaceList', $data) && $data['cargoPlaceList'] === null) {
            $object->setCargoPlaceList(null);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && $data['clientPositionsBarcode'] !== null) {
            $values_1 = array();
            foreach ($data['clientPositionsBarcode'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setClientPositionsBarcode($values_1);
        }
        elseif (\array_key_exists('clientPositionsBarcode', $data) && $data['clientPositionsBarcode'] === null) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && $data['customerCorrelation'] !== null) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        }
        elseif (\array_key_exists('customerCorrelation', $data) && $data['customerCorrelation'] === null) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('height', $data) && $data['height'] !== null) {
            $object->setHeight($data['height']);
        }
        elseif (\array_key_exists('height', $data) && $data['height'] === null) {
            $object->setHeight(null);
        }
        if (\array_key_exists('length', $data) && $data['length'] !== null) {
            $object->setLength($data['length']);
        }
        elseif (\array_key_exists('length', $data) && $data['length'] === null) {
            $object->setLength(null);
        }
        if (\array_key_exists('orderNumber', $data) && $data['orderNumber'] !== null) {
            $object->setOrderNumber($data['orderNumber']);
        }
        elseif (\array_key_exists('orderNumber', $data) && $data['orderNumber'] === null) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('palletCount', $data) && $data['palletCount'] !== null) {
            $object->setPalletCount($data['palletCount']);
        }
        elseif (\array_key_exists('palletCount', $data) && $data['palletCount'] === null) {
            $object->setPalletCount(null);
        }
        if (\array_key_exists('palletType', $data) && $data['palletType'] !== null) {
            $object->setPalletType($data['palletType']);
        }
        elseif (\array_key_exists('palletType', $data) && $data['palletType'] === null) {
            $object->setPalletType(null);
        }
        if (\array_key_exists('paymentForm', $data) && $data['paymentForm'] !== null) {
            $object->setPaymentForm($data['paymentForm']);
        }
        elseif (\array_key_exists('paymentForm', $data) && $data['paymentForm'] === null) {
            $object->setPaymentForm(null);
        }
        if (\array_key_exists('positionsCount', $data)) {
            $object->setPositionsCount($data['positionsCount']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] !== null) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        }
        elseif (\array_key_exists('typeClientBarcode', $data) && $data['typeClientBarcode'] === null) {
            $object->setTypeClientBarcode(null);
        }
        if (\array_key_exists('volume', $data) && $data['volume'] !== null) {
            $object->setVolume($data['volume']);
        }
        elseif (\array_key_exists('volume', $data) && $data['volume'] === null) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && $data['weight'] !== null) {
            $object->setWeight($data['weight']);
        }
        elseif (\array_key_exists('weight', $data) && $data['weight'] === null) {
            $object->setWeight(null);
        }
        if (\array_key_exists('width', $data) && $data['width'] !== null) {
            $object->setWidth($data['width']);
        }
        elseif (\array_key_exists('width', $data) && $data['width'] === null) {
            $object->setWidth(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAccompanyingDocuments()) {
            $data['accompanyingDocuments'] = $object->getAccompanyingDocuments();
        }
        if (null !== $object->getAccompanyingDocumentsDate()) {
            $data['accompanyingDocumentsDate'] = $object->getAccompanyingDocumentsDate()->format('Y-m-d');
        }
        if (null !== $object->getAccompanyingDocumentsName()) {
            $data['accompanyingDocumentsName'] = $object->getAccompanyingDocumentsName();
        }
        if (null !== $object->getAccompanyingDocumentsNumber()) {
            $data['accompanyingDocumentsNumber'] = $object->getAccompanyingDocumentsNumber();
        }
        if (null !== $object->getAccompanyingDocumentsNumberTTN()) {
            $data['accompanyingDocumentsNumberTTN'] = $object->getAccompanyingDocumentsNumberTTN();
        }
        if (null !== $object->getCargoPlaceList()) {
            $values = array();
            foreach ($object->getCargoPlaceList() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['cargoPlaceList'] = $values;
        }
        if (null !== $object->getClientPositionsBarcode()) {
            $values_1 = array();
            foreach ($object->getClientPositionsBarcode() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['clientPositionsBarcode'] = $values_1;
        }
        if (null !== $object->getCustomerCorrelation()) {
            $data['customerCorrelation'] = $object->getCustomerCorrelation();
        }
        $data['description'] = $object->getDescription();
        if (null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if (null !== $object->getLength()) {
            $data['length'] = $object->getLength();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getPalletCount()) {
            $data['palletCount'] = $object->getPalletCount();
        }
        if (null !== $object->getPalletType()) {
            $data['palletType'] = $object->getPalletType();
        }
        if (null !== $object->getPaymentForm()) {
            $data['paymentForm'] = $object->getPaymentForm();
        }
        $data['positionsCount'] = $object->getPositionsCount();
        $data['type'] = $object->getType();
        if (null !== $object->getTypeClientBarcode()) {
            $data['typeClientBarcode'] = $object->getTypeClientBarcode();
        }
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }
        if (null !== $object->getWidth()) {
            $data['width'] = $object->getWidth();
        }
        return $data;
    }
}