<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\CounterpartyDocument;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
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
        return 'glook\PecomSdk\Generated\Model\CounterpartyDocument' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\CounterpartyDocument' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new CounterpartyDocument();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('documentType', $data) && null !== $data['documentType']) {
            $object->setDocumentType($this->denormalizer->denormalize($data['documentType'], 'glook\PecomSdk\Generated\Model\DocumentType', 'json', $context));
        } elseif (\array_key_exists('documentType', $data) && null === $data['documentType']) {
            $object->setDocumentType(null);
        }
        if (\array_key_exists('expiredDate', $data) && null !== $data['expiredDate']) {
            $object->setExpiredDate(\DateTime::createFromFormat('Y-m-d', $data['expiredDate'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('expiredDate', $data) && null === $data['expiredDate']) {
            $object->setExpiredDate(null);
        }
        if (\array_key_exists('number', $data) && null !== $data['number']) {
            $object->setNumber($data['number']);
        } elseif (\array_key_exists('number', $data) && null === $data['number']) {
            $object->setNumber(null);
        }
        if (\array_key_exists('series', $data) && null !== $data['series']) {
            $object->setSeries($data['series']);
        } elseif (\array_key_exists('series', $data) && null === $data['series']) {
            $object->setSeries(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
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
