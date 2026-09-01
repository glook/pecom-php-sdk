<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationCargoCommon;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\PreregistrationCargoCommon' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationCargoCommon' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationCargoCommon();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('accompanyingDocuments', $data) && null !== $data['accompanyingDocuments']) {
            $object->setAccompanyingDocuments($data['accompanyingDocuments']);
        } elseif (\array_key_exists('accompanyingDocuments', $data) && null === $data['accompanyingDocuments']) {
            $object->setAccompanyingDocuments(null);
        }
        if (\array_key_exists('accompanyingDocumentsDate', $data) && null !== $data['accompanyingDocumentsDate']) {
            $object->setAccompanyingDocumentsDate(\DateTime::createFromFormat('Y-m-d', $data['accompanyingDocumentsDate'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('accompanyingDocumentsDate', $data) && null === $data['accompanyingDocumentsDate']) {
            $object->setAccompanyingDocumentsDate(null);
        }
        if (\array_key_exists('accompanyingDocumentsName', $data) && null !== $data['accompanyingDocumentsName']) {
            $object->setAccompanyingDocumentsName($data['accompanyingDocumentsName']);
        } elseif (\array_key_exists('accompanyingDocumentsName', $data) && null === $data['accompanyingDocumentsName']) {
            $object->setAccompanyingDocumentsName(null);
        }
        if (\array_key_exists('accompanyingDocumentsNumber', $data) && null !== $data['accompanyingDocumentsNumber']) {
            $object->setAccompanyingDocumentsNumber($data['accompanyingDocumentsNumber']);
        } elseif (\array_key_exists('accompanyingDocumentsNumber', $data) && null === $data['accompanyingDocumentsNumber']) {
            $object->setAccompanyingDocumentsNumber(null);
        }
        if (\array_key_exists('accompanyingDocumentsNumberTTN', $data) && null !== $data['accompanyingDocumentsNumberTTN']) {
            $object->setAccompanyingDocumentsNumberTTN($data['accompanyingDocumentsNumberTTN']);
        } elseif (\array_key_exists('accompanyingDocumentsNumberTTN', $data) && null === $data['accompanyingDocumentsNumberTTN']) {
            $object->setAccompanyingDocumentsNumberTTN(null);
        }
        if (\array_key_exists('countryCargocode', $data) && null !== $data['countryCargocode']) {
            $values = [];
            foreach ($data['countryCargocode'] as $value) {
                $values[] = $value;
            }
            $object->setCountryCargocode($values);
        } elseif (\array_key_exists('countryCargocode', $data) && null === $data['countryCargocode']) {
            $object->setCountryCargocode(null);
        }
        if (\array_key_exists('cargoPlaceList', $data) && null !== $data['cargoPlaceList']) {
            $values_1 = [];
            foreach ($data['cargoPlaceList'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\PecomSdk\Generated\Model\PreregistrationCargoPlace', 'json', $context);
            }
            $object->setCargoPlaceList($values_1);
        } elseif (\array_key_exists('cargoPlaceList', $data) && null === $data['cargoPlaceList']) {
            $object->setCargoPlaceList(null);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && null !== $data['clientPositionsBarcode']) {
            $values_2 = [];
            foreach ($data['clientPositionsBarcode'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setClientPositionsBarcode($values_2);
        } elseif (\array_key_exists('clientPositionsBarcode', $data) && null === $data['clientPositionsBarcode']) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && null !== $data['customerCorrelation']) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        } elseif (\array_key_exists('customerCorrelation', $data) && null === $data['customerCorrelation']) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('height', $data) && null !== $data['height']) {
            $object->setHeight($data['height']);
        } elseif (\array_key_exists('height', $data) && null === $data['height']) {
            $object->setHeight(null);
        }
        if (\array_key_exists('isRegisteredGoogs', $data) && null !== $data['isRegisteredGoogs']) {
            $object->setIsRegisteredGoogs($data['isRegisteredGoogs']);
        } elseif (\array_key_exists('isRegisteredGoogs', $data) && null === $data['isRegisteredGoogs']) {
            $object->setIsRegisteredGoogs(null);
        }
        if (\array_key_exists('length', $data) && null !== $data['length']) {
            $object->setLength($data['length']);
        } elseif (\array_key_exists('length', $data) && null === $data['length']) {
            $object->setLength(null);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('palletCount', $data) && null !== $data['palletCount']) {
            $object->setPalletCount($data['palletCount']);
        } elseif (\array_key_exists('palletCount', $data) && null === $data['palletCount']) {
            $object->setPalletCount(null);
        }
        if (\array_key_exists('palletType', $data) && null !== $data['palletType']) {
            $object->setPalletType($data['palletType']);
        } elseif (\array_key_exists('palletType', $data) && null === $data['palletType']) {
            $object->setPalletType(null);
        }
        if (\array_key_exists('paymentForm', $data) && null !== $data['paymentForm']) {
            $object->setPaymentForm($data['paymentForm']);
        } elseif (\array_key_exists('paymentForm', $data) && null === $data['paymentForm']) {
            $object->setPaymentForm(null);
        }
        if (\array_key_exists('positionsCount', $data)) {
            $object->setPositionsCount($data['positionsCount']);
        }
        if (\array_key_exists('type', $data)) {
            $object->setType($data['type']);
        }
        if (\array_key_exists('typeClientBarcode', $data) && null !== $data['typeClientBarcode']) {
            $object->setTypeClientBarcode($data['typeClientBarcode']);
        } elseif (\array_key_exists('typeClientBarcode', $data) && null === $data['typeClientBarcode']) {
            $object->setTypeClientBarcode(null);
        }
        if (\array_key_exists('volume', $data) && null !== $data['volume']) {
            $object->setVolume($data['volume']);
        } elseif (\array_key_exists('volume', $data) && null === $data['volume']) {
            $object->setVolume(null);
        }
        if (\array_key_exists('weight', $data) && null !== $data['weight']) {
            $object->setWeight($data['weight']);
        } elseif (\array_key_exists('weight', $data) && null === $data['weight']) {
            $object->setWeight(null);
        }
        if (\array_key_exists('width', $data) && null !== $data['width']) {
            $object->setWidth($data['width']);
        } elseif (\array_key_exists('width', $data) && null === $data['width']) {
            $object->setWidth(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
        if (null !== $object->getCountryCargocode()) {
            $values = [];
            foreach ($object->getCountryCargocode() as $value) {
                $values[] = $value;
            }
            $data['countryCargocode'] = $values;
        }
        if (null !== $object->getCargoPlaceList()) {
            $values_1 = [];
            foreach ($object->getCargoPlaceList() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['cargoPlaceList'] = $values_1;
        }
        if (null !== $object->getClientPositionsBarcode()) {
            $values_2 = [];
            foreach ($object->getClientPositionsBarcode() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['clientPositionsBarcode'] = $values_2;
        }
        if (null !== $object->getCustomerCorrelation()) {
            $data['customerCorrelation'] = $object->getCustomerCorrelation();
        }
        $data['description'] = $object->getDescription();
        if (null !== $object->getHeight()) {
            $data['height'] = $object->getHeight();
        }
        if (null !== $object->getIsRegisteredGoogs()) {
            $data['isRegisteredGoogs'] = $object->getIsRegisteredGoogs();
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
