<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\PreregistrationServices;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PreregistrationServicesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\PreregistrationServices' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\PreregistrationServices' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new PreregistrationServices();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cashOnDelivery', $data) && null !== $data['cashOnDelivery']) {
            $object->setCashOnDelivery($this->denormalizer->denormalize($data['cashOnDelivery'], 'glook\PecomSdk\Generated\Model\ServiceCashOnDelivery', 'json', $context));
        } elseif (\array_key_exists('cashOnDelivery', $data) && null === $data['cashOnDelivery']) {
            $object->setCashOnDelivery(null);
        }
        if (\array_key_exists('delivery', $data) && null !== $data['delivery']) {
            $object->setDelivery($this->denormalizer->denormalize($data['delivery'], 'glook\PecomSdk\Generated\Model\ServiceDelivery', 'json', $context));
        } elseif (\array_key_exists('delivery', $data) && null === $data['delivery']) {
            $object->setDelivery(null);
        }
        if (\array_key_exists('documentsReturning', $data) && null !== $data['documentsReturning']) {
            $object->setDocumentsReturning($this->denormalizer->denormalize($data['documentsReturning'], 'glook\PecomSdk\Generated\Model\ServiceToggle', 'json', $context));
        } elseif (\array_key_exists('documentsReturning', $data) && null === $data['documentsReturning']) {
            $object->setDocumentsReturning(null);
        }
        if (\array_key_exists('email', $data) && null !== $data['email']) {
            $object->setEmail($data['email']);
        } elseif (\array_key_exists('email', $data) && null === $data['email']) {
            $object->setEmail(null);
        }
        if (\array_key_exists('hardPacking', $data) && null !== $data['hardPacking']) {
            $object->setHardPacking($this->denormalizer->denormalize($data['hardPacking'], 'glook\PecomSdk\Generated\Model\ServiceWithPayer', 'json', $context));
        } elseif (\array_key_exists('hardPacking', $data) && null === $data['hardPacking']) {
            $object->setHardPacking(null);
        }
        if (\array_key_exists('insurance', $data) && null !== $data['insurance']) {
            $object->setInsurance($this->denormalizer->denormalize($data['insurance'], 'glook\PecomSdk\Generated\Model\ServiceInsurance', 'json', $context));
        } elseif (\array_key_exists('insurance', $data) && null === $data['insurance']) {
            $object->setInsurance(null);
        }
        if (\array_key_exists('pickUp', $data) && null !== $data['pickUp']) {
            $object->setPickUp($this->denormalizer->denormalize($data['pickUp'], 'glook\PecomSdk\Generated\Model\ServicePickUp', 'json', $context));
        } elseif (\array_key_exists('pickUp', $data) && null === $data['pickUp']) {
            $object->setPickUp(null);
        }
        if (\array_key_exists('sealing', $data) && null !== $data['sealing']) {
            $object->setSealing($this->denormalizer->denormalize($data['sealing'], 'glook\PecomSdk\Generated\Model\ServiceWithPayer', 'json', $context));
        } elseif (\array_key_exists('sealing', $data) && null === $data['sealing']) {
            $object->setSealing(null);
        }
        if (\array_key_exists('storing', $data) && null !== $data['storing']) {
            $object->setStoring($this->denormalizer->denormalize($data['storing'], 'glook\PecomSdk\Generated\Model\ServiceToggle', 'json', $context));
        } elseif (\array_key_exists('storing', $data) && null === $data['storing']) {
            $object->setStoring(null);
        }
        if (\array_key_exists('strapping', $data) && null !== $data['strapping']) {
            $object->setStrapping($this->denormalizer->denormalize($data['strapping'], 'glook\PecomSdk\Generated\Model\ServiceWithPayer', 'json', $context));
        } elseif (\array_key_exists('strapping', $data) && null === $data['strapping']) {
            $object->setStrapping(null);
        }
        if (\array_key_exists('transporting', $data) && null !== $data['transporting']) {
            $object->setTransporting($this->denormalizer->denormalize($data['transporting'], 'glook\PecomSdk\Generated\Model\ServiceTransporting', 'json', $context));
        } elseif (\array_key_exists('transporting', $data) && null === $data['transporting']) {
            $object->setTransporting(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getCashOnDelivery()) {
            $data['cashOnDelivery'] = $this->normalizer->normalize($object->getCashOnDelivery(), 'json', $context);
        }
        if (null !== $object->getDelivery()) {
            $data['delivery'] = $this->normalizer->normalize($object->getDelivery(), 'json', $context);
        }
        if (null !== $object->getDocumentsReturning()) {
            $data['documentsReturning'] = $this->normalizer->normalize($object->getDocumentsReturning(), 'json', $context);
        }
        if (null !== $object->getEmail()) {
            $data['email'] = $object->getEmail();
        }
        if (null !== $object->getHardPacking()) {
            $data['hardPacking'] = $this->normalizer->normalize($object->getHardPacking(), 'json', $context);
        }
        if (null !== $object->getInsurance()) {
            $data['insurance'] = $this->normalizer->normalize($object->getInsurance(), 'json', $context);
        }
        if (null !== $object->getPickUp()) {
            $data['pickUp'] = $this->normalizer->normalize($object->getPickUp(), 'json', $context);
        }
        if (null !== $object->getSealing()) {
            $data['sealing'] = $this->normalizer->normalize($object->getSealing(), 'json', $context);
        }
        if (null !== $object->getStoring()) {
            $data['storing'] = $this->normalizer->normalize($object->getStoring(), 'json', $context);
        }
        if (null !== $object->getStrapping()) {
            $data['strapping'] = $this->normalizer->normalize($object->getStrapping(), 'json', $context);
        }
        if (null !== $object->getTransporting()) {
            $data['transporting'] = $this->normalizer->normalize($object->getTransporting(), 'json', $context);
        }

        return $data;
    }
}
