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
class AccountingDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\AccountingDocument';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\AccountingDocument';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\AccountingDocument();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('date', $data) && $data['date'] !== null) {
            $object->setDate($data['date']);
        }
        elseif (\array_key_exists('date', $data) && $data['date'] === null) {
            $object->setDate(null);
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
        }
        elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('rateVAT', $data) && $data['rateVAT'] !== null) {
            $object->setRateVAT($data['rateVAT']);
        }
        elseif (\array_key_exists('rateVAT', $data) && $data['rateVAT'] === null) {
            $object->setRateVAT(null);
        }
        if (\array_key_exists('services', $data) && $data['services'] !== null) {
            $values = array();
            foreach ($data['services'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\AccountingDocumentService', 'json', $context);
            }
            $object->setServices($values);
        }
        elseif (\array_key_exists('services', $data) && $data['services'] === null) {
            $object->setServices(null);
        }
        if (\array_key_exists('sum', $data) && $data['sum'] !== null) {
            $object->setSum($data['sum']);
        }
        elseif (\array_key_exists('sum', $data) && $data['sum'] === null) {
            $object->setSum(null);
        }
        if (\array_key_exists('sumVAT', $data) && $data['sumVAT'] !== null) {
            $object->setSumVAT($data['sumVAT']);
        }
        elseif (\array_key_exists('sumVAT', $data) && $data['sumVAT'] === null) {
            $object->setSumVAT(null);
        }
        if (\array_key_exists('type', $data) && $data['type'] !== null) {
            $object->setType($data['type']);
        }
        elseif (\array_key_exists('type', $data) && $data['type'] === null) {
            $object->setType(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDate()) {
            $data['date'] = $object->getDate();
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getRateVAT()) {
            $data['rateVAT'] = $object->getRateVAT();
        }
        if (null !== $object->getServices()) {
            $values = array();
            foreach ($object->getServices() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['services'] = $values;
        }
        if (null !== $object->getSum()) {
            $data['sum'] = $object->getSum();
        }
        if (null !== $object->getSumVAT()) {
            $data['sumVAT'] = $object->getSumVAT();
        }
        if (null !== $object->getType()) {
            $data['type'] = $object->getType();
        }
        return $data;
    }
}