<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoInfo;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoInfoNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoInfo' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoInfo' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoInfo();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('amount', $data) && null !== $data['amount']) {
            $object->setAmount($data['amount']);
        } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amountProcessed', $data) && null !== $data['amountProcessed']) {
            $object->setAmountProcessed($data['amountProcessed']);
        } elseif (\array_key_exists('amountProcessed', $data) && null === $data['amountProcessed']) {
            $object->setAmountProcessed(null);
        }
        if (\array_key_exists('cargoBarCode', $data) && null !== $data['cargoBarCode']) {
            $object->setCargoBarCode($data['cargoBarCode']);
        } elseif (\array_key_exists('cargoBarCode', $data) && null === $data['cargoBarCode']) {
            $object->setCargoBarCode(null);
        }
        if (\array_key_exists('code', $data) && null !== $data['code']) {
            $object->setCode($data['code']);
        } elseif (\array_key_exists('code', $data) && null === $data['code']) {
            $object->setCode(null);
        }
        if (\array_key_exists('description', $data) && null !== $data['description']) {
            $object->setDescription($data['description']);
        } elseif (\array_key_exists('description', $data) && null === $data['description']) {
            $object->setDescription(null);
        }
        if (\array_key_exists('maxSize', $data) && null !== $data['maxSize']) {
            $object->setMaxSize($data['maxSize']);
        } elseif (\array_key_exists('maxSize', $data) && null === $data['maxSize']) {
            $object->setMaxSize(null);
        }
        if (\array_key_exists('orderNumber', $data) && null !== $data['orderNumber']) {
            $object->setOrderNumber($data['orderNumber']);
        } elseif (\array_key_exists('orderNumber', $data) && null === $data['orderNumber']) {
            $object->setOrderNumber(null);
        }
        if (\array_key_exists('parentCargoCode', $data) && null !== $data['parentCargoCode']) {
            $object->setParentCargoCode($data['parentCargoCode']);
        } elseif (\array_key_exists('parentCargoCode', $data) && null === $data['parentCargoCode']) {
            $object->setParentCargoCode(null);
        }
        if (\array_key_exists('positionBarCodes', $data) && null !== $data['positionBarCodes']) {
            $values = [];
            foreach ($data['positionBarCodes'] as $value) {
                $values[] = $value;
            }
            $object->setPositionBarCodes($values);
        } elseif (\array_key_exists('positionBarCodes', $data) && null === $data['positionBarCodes']) {
            $object->setPositionBarCodes(null);
        }
        if (\array_key_exists('type', $data) && null !== $data['type']) {
            $object->setType($data['type']);
        } elseif (\array_key_exists('type', $data) && null === $data['type']) {
            $object->setType(null);
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

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getAmountProcessed()) {
            $data['amountProcessed'] = $object->getAmountProcessed();
        }
        if (null !== $object->getCargoBarCode()) {
            $data['cargoBarCode'] = $object->getCargoBarCode();
        }
        if (null !== $object->getCode()) {
            $data['code'] = $object->getCode();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getMaxSize()) {
            $data['maxSize'] = $object->getMaxSize();
        }
        if (null !== $object->getOrderNumber()) {
            $data['orderNumber'] = $object->getOrderNumber();
        }
        if (null !== $object->getParentCargoCode()) {
            $data['parentCargoCode'] = $object->getParentCargoCode();
        }
        if (null !== $object->getPositionBarCodes()) {
            $values = [];
            foreach ($object->getPositionBarCodes() as $value) {
                $values[] = $value;
            }
            $data['positionBarCodes'] = $values;
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        if (null !== $object->getVolume()) {
            $data['volume'] = $object->getVolume();
        }
        if (null !== $object->getWeight()) {
            $data['weight'] = $object->getWeight();
        }

        return $data;
    }
}
