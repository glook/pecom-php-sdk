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
class PreregistrationPayerOtherNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayerOther';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayerOther';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\PreregistrationPayerOther();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] !== null) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        }
        elseif (\array_key_exists('countryOfRegistrationCode', $data) && $data['countryOfRegistrationCode'] === null) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('fs', $data) && $data['fs'] !== null) {
            $object->setFs($data['fs']);
        }
        elseif (\array_key_exists('fs', $data) && $data['fs'] === null) {
            $object->setFs(null);
        }
        if (\array_key_exists('identityCard', $data) && $data['identityCard'] !== null) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\\PecomSdk\\Generated\\Model\\PreregistrationPayerOtherIdentityCard', 'json', $context));
        }
        elseif (\array_key_exists('identityCard', $data) && $data['identityCard'] === null) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('inn', $data) && $data['inn'] !== null) {
            $object->setInn($data['inn']);
        }
        elseif (\array_key_exists('inn', $data) && $data['inn'] === null) {
            $object->setInn(null);
        }
        if (\array_key_exists('legalForm', $data) && $data['legalForm'] !== null) {
            $object->setLegalForm($data['legalForm']);
        }
        elseif (\array_key_exists('legalForm', $data) && $data['legalForm'] === null) {
            $object->setLegalForm(null);
        }
        if (\array_key_exists('phone', $data) && $data['phone'] !== null) {
            $object->setPhone($data['phone']);
        }
        elseif (\array_key_exists('phone', $data) && $data['phone'] === null) {
            $object->setPhone(null);
        }
        if (\array_key_exists('title', $data) && $data['title'] !== null) {
            $object->setTitle($data['title']);
        }
        elseif (\array_key_exists('title', $data) && $data['title'] === null) {
            $object->setTitle(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getCountryOfRegistrationCode()) {
            $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        }
        if (null !== $object->getFs()) {
            $data['fs'] = $object->getFs();
        }
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getLegalForm()) {
            $data['legalForm'] = $object->getLegalForm();
        }
        if (null !== $object->getPhone()) {
            $data['phone'] = $object->getPhone();
        }
        if (null !== $object->getTitle()) {
            $data['title'] = $object->getTitle();
        }
        return $data;
    }
}