<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargos;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoPickupNetworkSubmitRequestCargosNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargos' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargos' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoPickupNetworkSubmitRequestCargos();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('common', $data) && null !== $data['common']) {
            $object->setCommon($this->denormalizer->denormalize($data['common'], 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosCommon', 'json', $context));
        } elseif (\array_key_exists('common', $data) && null === $data['common']) {
            $object->setCommon(null);
        }
        if (\array_key_exists('items', $data)) {
            $values = [];
            foreach ($data['items'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\CargoPickupNetworkSubmitRequestCargosItemsItem', 'json', $context);
            }
            $object->setItems($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCommon()) {
            $data['common'] = $this->normalizer->normalize($object->getCommon(), 'json', $context);
        }
        $values = [];
        foreach ($object->getItems() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['items'] = $values;

        return $data;
    }
}
