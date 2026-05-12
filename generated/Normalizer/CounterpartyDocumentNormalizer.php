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
class CounterpartyDocumentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CounterpartyDocument';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CounterpartyDocument';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CounterpartyDocument();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('documentType', $data) && $data['documentType'] !== null) {
            $object->setDocumentType($this->denormalizer->denormalize($data['documentType'], 'glook\\PecomSdk\\Generated\\Model\\DocumentType', 'json', $context));
        }
        elseif (\array_key_exists('documentType', $data) && $data['documentType'] === null) {
            $object->setDocumentType(null);
        }
        if (\array_key_exists('expiredDate', $data) && $data['expiredDate'] !== null) {
            $object->setExpiredDate(\DateTime::createFromFormat('Y-m-d', $data['expiredDate'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('expiredDate', $data) && $data['expiredDate'] === null) {
            $object->setExpiredDate(null);
        }
        if (\array_key_exists('number', $data) && $data['number'] !== null) {
            $object->setNumber($data['number']);
        }
        elseif (\array_key_exists('number', $data) && $data['number'] === null) {
            $object->setNumber(null);
        }
        if (\array_key_exists('series', $data) && $data['series'] !== null) {
            $object->setSeries($data['series']);
        }
        elseif (\array_key_exists('series', $data) && $data['series'] === null) {
            $object->setSeries(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getDocumentType()) {
            $data['documentType'] = $this->normalizer->normalize($object->getDocumentType(), 'json', $context);
        }
        if (null !== $object->getExpiredDate()) {
            $data['expiredDate'] = $object->getExpiredDate()->format('Y-m-d');
        }
        if (null !== $object->getNumber()) {
            $data['number'] = $object->getNumber();
        }
        if (null !== $object->getSeries()) {
            $data['series'] = $object->getSeries();
        }
        return $data;
    }
}