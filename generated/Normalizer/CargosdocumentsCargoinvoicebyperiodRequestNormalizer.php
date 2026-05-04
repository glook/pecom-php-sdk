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
class CargosdocumentsCargoinvoicebyperiodRequestNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\CargosdocumentsCargoinvoicebyperiodRequest';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\CargosdocumentsCargoinvoicebyperiodRequest';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\CargosdocumentsCargoinvoicebyperiodRequest();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('counterpartGuid', $data)) {
            $object->setCounterpartGuid($data['counterpartGuid']);
        }
        if (\array_key_exists('dateFrom', $data)) {
            $object->setDateFrom(\DateTime::createFromFormat('Y-m-d', $data['dateFrom'])->setTime(0, 0, 0));
        }
        if (\array_key_exists('dateTo', $data)) {
            $object->setDateTo(\DateTime::createFromFormat('Y-m-d', $data['dateTo'])->setTime(0, 0, 0));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['counterpartGuid'] = $object->getCounterpartGuid();
        $data['dateFrom'] = $object->getDateFrom()->format('Y-m-d');
        $data['dateTo'] = $object->getDateTo()->format('Y-m-d');
        return $data;
    }
}