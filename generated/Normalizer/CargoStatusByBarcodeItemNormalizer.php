<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoStatusByBarcodeItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoStatusByBarcodeItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoStatusByBarcodeItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoStatusByBarcodeItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoStatusByBarcodeItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargo', $data) && null !== $data['cargo']) {
            $object->setCargo($this->denormalizer->denormalize($data['cargo'], 'glook\PecomSdk\Generated\Model\CargoInfo', 'json', $context));
        } elseif (\array_key_exists('cargo', $data) && null === $data['cargo']) {
            $object->setCargo(null);
        }
        if (\array_key_exists('info', $data) && null !== $data['info']) {
            $object->setInfo($this->denormalizer->denormalize($data['info'], 'glook\PecomSdk\Generated\Model\CargoStatusInfo', 'json', $context));
        } elseif (\array_key_exists('info', $data) && null === $data['info']) {
            $object->setInfo(null);
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
        if (\array_key_exists('receiver', $data) && null !== $data['receiver']) {
            $object->setReceiver($this->denormalizer->denormalize($data['receiver'], 'glook\PecomSdk\Generated\Model\CargosCargoReceiver', 'json', $context));
        } elseif (\array_key_exists('receiver', $data) && null === $data['receiver']) {
            $object->setReceiver(null);
        }
        if (\array_key_exists('sender', $data) && null !== $data['sender']) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\PecomSdk\Generated\Model\CargoSender', 'json', $context));
        } elseif (\array_key_exists('sender', $data) && null === $data['sender']) {
            $object->setSender(null);
        }
        if (\array_key_exists('services', $data) && null !== $data['services']) {
            $object->setServices($this->denormalizer->denormalize($data['services'], 'glook\PecomSdk\Generated\Model\CargoServices', 'json', $context));
        } elseif (\array_key_exists('services', $data) && null === $data['services']) {
            $object->setServices(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCargo()) {
            $data['cargo'] = $this->normalizer->normalize($object->getCargo(), 'json', $context);
        }
        if (null !== $object->getInfo()) {
            $data['info'] = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }
        if (null !== $object->getPositionBarCodes()) {
            $values = [];
            foreach ($object->getPositionBarCodes() as $value) {
                $values[] = $value;
            }
            $data['positionBarCodes'] = $values;
        }
        if (null !== $object->getReceiver()) {
            $data['receiver'] = $this->normalizer->normalize($object->getReceiver(), 'json', $context);
        }
        if (null !== $object->getSender()) {
            $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);
        }
        if (null !== $object->getServices()) {
            $data['services'] = $this->normalizer->normalize($object->getServices(), 'json', $context);
        }

        return $data;
    }
}
