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
class ConfirmedAccessToCounterpartyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\ConfirmedAccessToCounterparty';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\ConfirmedAccessToCounterparty';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\ConfirmedAccessToCounterparty();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('counterpartClientCard', $data) && $data['counterpartClientCard'] !== null) {
            $object->setCounterpartClientCard($data['counterpartClientCard']);
        }
        elseif (\array_key_exists('counterpartClientCard', $data) && $data['counterpartClientCard'] === null) {
            $object->setCounterpartClientCard(null);
        }
        if (\array_key_exists('documents', $data) && $data['documents'] !== null) {
            $values = array();
            foreach ($data['documents'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CounterpartyDocument', 'json', $context);
            }
            $object->setDocuments($values);
        }
        elseif (\array_key_exists('documents', $data) && $data['documents'] === null) {
            $object->setDocuments(null);
        }
        if (\array_key_exists('guid', $data)) {
            $object->setGuid($data['guid']);
        }
        if (\array_key_exists('legal', $data) && $data['legal'] !== null) {
            $object->setLegal($this->denormalizer->denormalize($data['legal'], 'glook\\PecomSdk\\Generated\\Model\\ConfirmedAccessToCounterpartyLegal', 'json', $context));
        }
        elseif (\array_key_exists('legal', $data) && $data['legal'] === null) {
            $object->setLegal(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCounterpartClientCard()) {
            $data['counterpartClientCard'] = $object->getCounterpartClientCard();
        }
        if (null !== $object->getDocuments()) {
            $values = array();
            foreach ($object->getDocuments() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['documents'] = $values;
        }
        $data['guid'] = $object->getGuid();
        if (null !== $object->getLegal()) {
            $data['legal'] = $this->normalizer->normalize($object->getLegal(), 'json', $context);
        }
        $data['legalForm'] = $object->getLegalForm();
        $data['title'] = $object->getTitle();
        return $data;
    }
}