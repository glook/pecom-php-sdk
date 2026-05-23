<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ForcedStorageItem;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ForcedStorageItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ForcedStorageItem' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ForcedStorageItem' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ForcedStorageItem();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('holidays', $data) && null !== $data['holidays']) {
            $values = [];
            foreach ($data['holidays'] as $value) {
                $values[] = $value;
            }
            $object->setHolidays($values);
        } elseif (\array_key_exists('holidays', $data) && null === $data['holidays']) {
            $object->setHolidays(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_1 = [];
            foreach ($data['items'] as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'glook\PecomSdk\Generated\Model\ForcedStoragePeriod', 'json', $context);
            }
            $object->setItems($values_1);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getHolidays()) {
            $values = [];
            foreach ($object->getHolidays() as $value) {
                $values[] = $value;
            }
            $data['holidays'] = $values;
        }
        if (null !== $object->getItems()) {
            $values_1 = [];
            foreach ($object->getItems() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['items'] = $values_1;
        }

        return $data;
    }
}
