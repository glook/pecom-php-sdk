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
class PreregistrationSubmitResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponse';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponse';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data)) {
            $values = array();
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponseCargo', 'json', $context);
            }
            $object->setCargos($values);
        }
        if (\array_key_exists('documentId', $data)) {
            $object->setDocumentId($data['documentId']);
        }
        if (\array_key_exists('notifications', $data) && $data['notifications'] !== null) {
            $values_1 = array();
            foreach ($data['notifications'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setNotifications($values_1);
        }
        elseif (\array_key_exists('notifications', $data) && $data['notifications'] === null) {
            $object->setNotifications(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationSubmitResponseSender', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $values = array();
        foreach ($object->getCargos() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['cargos'] = $values;
        $data['documentId'] = $object->getDocumentId();
        if (null !== $object->getNotifications()) {
            $values_1 = array();
            foreach ($object->getNotifications() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['notifications'] = $values_1;
        }
        $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);
        return $data;
    }
}