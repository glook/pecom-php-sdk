<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationReceiver;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationReceiverNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationReceiver' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationReceiver' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationReceiver();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('addressStock', $data) && null !== $data['addressStock']) {
            $object->setAddressStock($data['addressStock']);
        } elseif (\array_key_exists('addressStock', $data) && null === $data['addressStock']) {
            $object->setAddressStock(null);
        }
        if (\array_key_exists('comment', $data) && null !== $data['comment']) {
            $object->setComment($data['comment']);
        } elseif (\array_key_exists('comment', $data) && null === $data['comment']) {
            $object->setComment(null);
        }
        if (\array_key_exists('coordinates', $data) && null !== $data['coordinates']) {
            $object->setCoordinates($this->denormalizer->denormalize($data['coordinates'], 'glook\PecomSdk\Generated\Model\PreregistrationCoordinates', 'json', $context));
        } elseif (\array_key_exists('coordinates', $data) && null === $data['coordinates']) {
            $object->setCoordinates(null);
        }
        if (\array_key_exists('countryOfRegistrationCode', $data) && null !== $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode($data['countryOfRegistrationCode']);
        } elseif (\array_key_exists('countryOfRegistrationCode', $data) && null === $data['countryOfRegistrationCode']) {
            $object->setCountryOfRegistrationCode(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('fs', $data) && null !== $data['fs']) {
            $object->setFs($data['fs']);
        } elseif (\array_key_exists('fs', $data) && null === $data['fs']) {
            $object->setFs(null);
        }
        if (\array_key_exists('GLN', $data) && null !== $data['GLN']) {
            $object->setGLN($data['GLN']);
        } elseif (\array_key_exists('GLN', $data) && null === $data['GLN']) {
            $object->setGLN(null);
        }
        if (\array_key_exists('identityCard', $data) && null !== $data['identityCard']) {
            $object->setIdentityCard($this->denormalizer->denormalize($data['identityCard'], 'glook\PecomSdk\Generated\Model\PreregistrationIdentityCard', 'json', $context));
        } elseif (\array_key_exists('identityCard', $data) && null === $data['identityCard']) {
            $object->setIdentityCard(null);
        }
        if (\array_key_exists('individual', $data) && null !== $data['individual']) {
            $object->setIndividual($this->denormalizer->denormalize($data['individual'], 'glook\PecomSdk\Generated\Model\Individual', 'json', $context));
        } elseif (\array_key_exists('individual', $data) && null === $data['individual']) {
            $object->setIndividual(null);
        }
        if (\array_key_exists('inn', $data) && null !== $data['inn']) {
            $object->setInn($data['inn']);
        } elseif (\array_key_exists('inn', $data) && null === $data['inn']) {
            $object->setInn(null);
        }
        if (\array_key_exists('kpp', $data) && null !== $data['kpp']) {
            $object->setKpp($data['kpp']);
        } elseif (\array_key_exists('kpp', $data) && null === $data['kpp']) {
            $object->setKpp(null);
        }
        if (\array_key_exists('legalForm', $data)) {
            $object->setLegalForm($data['legalForm']);
        }
        if (\array_key_exists('person', $data)) {
            $object->setPerson($data['person']);
        }
        if (\array_key_exists('personPhones', $data)) {
            $values = [];
            foreach ($data['personPhones'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\PersonPhone', 'json', $context);
            }
            $object->setPersonPhones($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        if (\array_key_exists('warehouseId', $data) && null !== $data['warehouseId']) {
            $object->setWarehouseId($data['warehouseId']);
        } elseif (\array_key_exists('warehouseId', $data) && null === $data['warehouseId']) {
            $object->setWarehouseId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAddressStock()) {
            $data['addressStock'] = $object->getAddressStock();
        }
        if (null !== $object->getComment()) {
            $data['comment'] = $object->getComment();
        }
        if (null !== $object->getCoordinates()) {
            $data['coordinates'] = $this->normalizer->normalize($object->getCoordinates(), 'json', $context);
        }
        if (null !== $object->getCountryOfRegistrationCode()) {
            $data['countryOfRegistrationCode'] = $object->getCountryOfRegistrationCode();
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getFs()) {
            $data['fs'] = $object->getFs();
        }
        if (null !== $object->getGLN()) {
            $data['GLN'] = $object->getGLN();
        }
        if (null !== $object->getIdentityCard()) {
            $data['identityCard'] = $this->normalizer->normalize($object->getIdentityCard(), 'json', $context);
        }
        if (null !== $object->getIndividual()) {
            $data['individual'] = $this->normalizer->normalize($object->getIndividual(), 'json', $context);
        }
        if (null !== $object->getInn()) {
            $data['inn'] = $object->getInn();
        }
        if (null !== $object->getKpp()) {
            $data['kpp'] = $object->getKpp();
        }
        $data['legalForm'] = $object->getLegalForm();
        $data['person'] = $object->getPerson();
        $values = [];
        foreach ($object->getPersonPhones() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['personPhones'] = $values;
        $data['title'] = $object->getTitle();
        if (null !== $object->getWarehouseId()) {
            $data['warehouseId'] = $object->getWarehouseId();
        }

        return $data;
    }
}
