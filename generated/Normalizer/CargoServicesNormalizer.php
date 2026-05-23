<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CargoServices;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CargoServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\CargoServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CargoServices' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CargoServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('debt', $data) && null !== $data['debt']) {
            $object->setDebt($data['debt']);
        } elseif (\array_key_exists('debt', $data) && null === $data['debt']) {
            $object->setDebt(null);
        }
        if (\array_key_exists('debtList', $data) && null !== $data['debtList']) {
            $values = [];
            foreach ($data['debtList'] as $value) {
                $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDebtList($values);
        } elseif (\array_key_exists('debtList', $data) && null === $data['debtList']) {
            $object->setDebtList(null);
        }
        if (\array_key_exists('freeService', $data) && null !== $data['freeService']) {
            $object->setFreeService($data['freeService']);
        } elseif (\array_key_exists('freeService', $data) && null === $data['freeService']) {
            $object->setFreeService(null);
        }
        if (\array_key_exists('hardPack', $data) && null !== $data['hardPack']) {
            $object->setHardPack($data['hardPack']);
        } elseif (\array_key_exists('hardPack', $data) && null === $data['hardPack']) {
            $object->setHardPack(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($data['insurance']);
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('items', $data) && null !== $data['items']) {
            $values_2 = [];
            foreach ($data['items'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'glook\PecomSdk\Generated\Model\CargosServiceItem', 'json', $context);
            }
            $object->setItems($values_2);
        } elseif (\array_key_exists('items', $data) && null === $data['items']) {
            $object->setItems(null);
        }
        if (\array_key_exists('resendDocs', $data) && null !== $data['resendDocs']) {
            $object->setResendDocs($data['resendDocs']);
        } elseif (\array_key_exists('resendDocs', $data) && null === $data['resendDocs']) {
            $object->setResendDocs(null);
        }
        if (\array_key_exists('sum', $data) && null !== $data['sum']) {
            $object->setSum($data['sum']);
        } elseif (\array_key_exists('sum', $data) && null === $data['sum']) {
            $object->setSum(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getDebt()) {
            $data['debt'] = $object->getDebt();
        }
        if (null !== $object->getDebtList()) {
            $values = [];
            foreach ($object->getDebtList() as $value) {
                $values_1 = [];
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $data['debtList'] = $values;
        }
        if (null !== $object->getFreeService()) {
            $data['freeService'] = $object->getFreeService();
        }
        if (null !== $object->getHardPack()) {
            $data['hardPack'] = $object->getHardPack();
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $object->getInsurance();
        }
        if (null !== $object->getItems()) {
            $values_2 = [];
            foreach ($object->getItems() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data['items'] = $values_2;
        }
        if (null !== $object->getResendDocs()) {
            $data['resendDocs'] = $object->getResendDocs();
        }
        if (null !== $object->getSum()) {
            $data['sum'] = $object->getSum();
        }

        return $data;
    }
}
