<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCargo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationSubmitResponseCargoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCargo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCargo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationSubmitResponseCargo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('barcode', $data) && null !== $data['barcode']) {
            $object->setBarcode($data['barcode']);
        } elseif (\array_key_exists('barcode', $data) && null === $data['barcode']) {
            $object->setBarcode(null);
        }
        if (\array_key_exists('cargoCode', $data)) {
            $object->setCargoCode($data['cargoCode']);
        }
        if (\array_key_exists('clientPositionsBarcode', $data) && null !== $data['clientPositionsBarcode']) {
            $values = [];
            foreach ($data['clientPositionsBarcode'] as $value) {
                $values[] = $value;
            }
            $object->setClientPositionsBarcode($values);
        } elseif (\array_key_exists('clientPositionsBarcode', $data) && null === $data['clientPositionsBarcode']) {
            $object->setClientPositionsBarcode(null);
        }
        if (\array_key_exists('customerCorrelation', $data) && null !== $data['customerCorrelation']) {
            $object->setCustomerCorrelation($data['customerCorrelation']);
        } elseif (\array_key_exists('customerCorrelation', $data) && null === $data['customerCorrelation']) {
            $object->setCustomerCorrelation(null);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('positions', $data) && null !== $data['positions']) {
            $values_1 = [];
            foreach ($data['positions'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCargoPosition', 'json', $context);
            }
            $object->setPositions($values_1);
        } elseif (\array_key_exists('positions', $data) && null === $data['positions']) {
            $object->setPositions(null);
        }
        if (\array_key_exists('receiver', $data)) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseReceiver', 'json', $context));
        }
        if (\array_key_exists('stockTitle', $data) && null !== $data['stockTitle']) {
            $object->setStockTitle($data['stockTitle']);
        } elseif (\array_key_exists('stockTitle', $data) && null === $data['stockTitle']) {
            $object->setStockTitle(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBarcode()) {
            $data['barcode'] = $object->getBarcode();
        }
        $data['cargoCode'] = $object->getCargoCode();
        if (null !== $object->getClientPositionsBarcode()) {
            $values = [];
            foreach ($object->getClientPositionsBarcode() as $value) {
                $values[] = $value;
            }
            $data['clientPositionsBarcode'] = $values;
        }
        if (null !== $object->getCustomerCorrelation()) {
            $data['customerCorrelation'] = $object->getCustomerCorrelation();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getPositions()) {
            $values_1 = [];
            foreach ($object->getPositions() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['positions'] = $values_1;
        }
        $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        if (null !== $object->getStockTitle()) {
            $data['stockTitle'] = $object->getStockTitle();
        }

        return $data;
    }
}
