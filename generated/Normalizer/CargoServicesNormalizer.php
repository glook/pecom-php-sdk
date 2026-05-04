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
class CargoServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargoServices';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargoServices';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargoServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('debt', $data) && $data['debt'] !== null) {
            $object->setDebt($data['debt']);
        }
        elseif (\array_key_exists('debt', $data) && $data['debt'] === null) {
            $object->setDebt(null);
        }
        if (\array_key_exists('debtList', $data) && $data['debtList'] !== null) {
            $values = array();
            foreach ($data['debtList'] as $value) {
                $values_1 = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value as $key => $value_1) {
                    $values_1[$key] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDebtList($values);
        }
        elseif (\array_key_exists('debtList', $data) && $data['debtList'] === null) {
            $object->setDebtList(null);
        }
        if (\array_key_exists('freeService', $data) && $data['freeService'] !== null) {
            $object->setFreeService($data['freeService']);
        }
        elseif (\array_key_exists('freeService', $data) && $data['freeService'] === null) {
            $object->setFreeService(null);
        }
        if (\array_key_exists('hardPack', $data) && $data['hardPack'] !== null) {
            $object->setHardPack($data['hardPack']);
        }
        elseif (\array_key_exists('hardPack', $data) && $data['hardPack'] === null) {
            $object->setHardPack(null);
        }
        if (\array_key_exists('insurance', $data) && $data['insurance'] !== null) {
            $object->setInsurance($data['insurance']);
        }
        elseif (\array_key_exists('insurance', $data) && $data['insurance'] === null) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('items', $data) && $data['items'] !== null) {
            $values_2 = array();
            foreach ($data['items'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'glook\\PecomSdk\\Generated\\Model\\CargosServiceItem', 'json', $context);
            }
            $object->setItems($values_2);
        }
        elseif (\array_key_exists('items', $data) && $data['items'] === null) {
            $object->setItems(null);
        }
        if (\array_key_exists('resendDocs', $data) && $data['resendDocs'] !== null) {
            $object->setResendDocs($data['resendDocs']);
        }
        elseif (\array_key_exists('resendDocs', $data) && $data['resendDocs'] === null) {
            $object->setResendDocs(null);
        }
        if (\array_key_exists('sum', $data) && $data['sum'] !== null) {
            $object->setSum($data['sum']);
        }
        elseif (\array_key_exists('sum', $data) && $data['sum'] === null) {
            $object->setSum(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDebt()) {
            $data['debt'] = $object->getDebt();
        }
        if (null !== $object->getDebtList()) {
            $values = array();
            foreach ($object->getDebtList() as $value) {
                $values_1 = array();
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
            $values_2 = array();
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