<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpartOther;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationEdiCounterpartOtherNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpartOther' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationEdiCounterpartOther' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationEdiCounterpartOther();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && null !== $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        } elseif (\array_key_exists('countryOfRegistrationCode', $data) && null === $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('fs', $data) && null !== $data['fs']) {
            $object->setFs($data['fs']);
        } elseif (\array_key_exists('fs', $data) && null === $data['fs']) {
            $object->setFs(null);
        }
        if (\array_key_exists('individual', $data) && null !== $data['individual']) {
            $object->setIndividual($this->denormalizer->denormalize($data['individual'], 'glook\PecomSdk\Generated\Model\Individual', 'json', $context));
        } elseif (\array_key_exists('individual', $data) && null === $data['individual']) {
            $object->setIndividual(null);
        }
        if (\array_key_exists('inn', $data)) {
            $object->setInn($data['inn']);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('title', $data) && null !== $data['title']) {
            $object->setTitle($data['title']);
        } elseif (\array_key_exists('title', $data) && null === $data['title']) {
            $object->setTitle(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCountryOfRegistrationCode()) {
            $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        }
        if (null !== $object->getFs()) {
            $data['fs'] = $object->getFs();
        }
        if (null !== $object->getIndividual()) {
            $data['individual'] = $this->normalizer->normalize($object->getIndividual(), 'json', $context);
        }
        $data['inn'] = $object->getInn();
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        $data['legalForm'] = $object->getLegalForm();
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }

        return $data;
    }
}
