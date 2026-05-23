<?php

namespace glook\PecomSdk\Generated\Normalizer;

use glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse;
use glook\PecomSdk\Generated\Runtime\Normalizer\CheckArray;
use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConnectedDiscountsServicesAgreementsResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && 'glook\PecomSdk\Generated\Model\ConnectedDiscountsServicesAgreementsResponse' === get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new ConnectedDiscountsServicesAgreementsResponse();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additionalAgreements', $data)) {
            $values = [];
            foreach ($data['additionalAgreements'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\PecomSdk\Generated\Model\AgreementItem', 'json', $context);
            }
            $object->setAdditionalAgreements($values);
        }
        if (\array_key_exists('availableTypesOfDelivery', $data)) {
            $values_1 = [];
            foreach ($data['availableTypesOfDelivery'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setAvailableTypesOfDelivery($values_1);
        }
        if (\array_key_exists('specialConditionsWithParams', $data)) {
            $values_2 = [];
            foreach ($data['specialConditionsWithParams'] as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'glook\PecomSdk\Generated\Model\SpecialConditionWithParams', 'json', $context);
            }
            $object->setSpecialConditionsWithParams($values_2);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $values = [];
        foreach ($object->getAdditionalAgreements() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['additionalAgreements'] = $values;
        $values_1 = [];
        foreach ($object->getAvailableTypesOfDelivery() as $value_1) {
            $values_1[] = $value_1;
        }
        $data['availableTypesOfDelivery'] = $values_1;
        $values_2 = [];
        foreach ($object->getSpecialConditionsWithParams() as $value_2) {
            $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
        }
        $data['specialConditionsWithParams'] = $values_2;

        return $data;
    }
}
