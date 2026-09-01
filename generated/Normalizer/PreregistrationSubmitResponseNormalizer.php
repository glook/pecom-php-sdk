<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationSubmitResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cargos', $data)) {
            $values = [];
            foreach ($data['cargos'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseCargo', 'json', $context);
            }
            $object->setCargos($values);
        }
        if (\array_key_exists('documentId', $data)) {
            $object->setDocumentId($data['documentId']);
        }
        if (\array_key_exists('ediTemplateUrls', $data) && null !== $data['ediTemplateUrls']) {
            $values_1 = [];
            foreach ($data['ediTemplateUrls'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setEdiTemplateUrls($values_1);
        } elseif (\array_key_exists('ediTemplateUrls', $data) && null === $data['ediTemplateUrls']) {
            $object->setEdiTemplateUrls(null);
        }
        if (\array_key_exists('notifications', $data) && null !== $data['notifications']) {
            $values_2 = [];
            foreach ($data['notifications'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setNotifications($values_2);
        } elseif (\array_key_exists('notifications', $data) && null === $data['notifications']) {
            $object->setNotifications(null);
        }
        if (\array_key_exists('sender', $data)) {
            $object->setSender($this->denormalizer->denormalize($data['sender'], 'glook\PecomSdk\Generated\Model\PreregistrationSubmitResponseSender', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getCargos() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['cargos'] = $values;
        $data['documentId'] = $object->getDocumentId();
        if (null !== $object->getEdiTemplateUrls()) {
            $values_1 = [];
            foreach ($object->getEdiTemplateUrls() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['ediTemplateUrls'] = $values_1;
        }
        if (null !== $object->getNotifications()) {
            $values_2 = [];
            foreach ($object->getNotifications() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['notifications'] = $values_2;
        }
        $data['sender'] = $this->normalizer->normalize($object->getSender(), 'json', $context);

        return $data;
    }
}
