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
class BranchCityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\BranchCity';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\BranchCity';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\BranchCity();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('bitrixId', $data) && $data['bitrixId'] !== null) {
            $object->setBitrixId($data['bitrixId']);
        }
        elseif (\array_key_exists('bitrixId', $data) && $data['bitrixId'] === null) {
            $object->setBitrixId(null);
        }
        if (\array_key_exists('cityId', $data)) {
            $object->setCityId($data['cityId']);
        }
        if (\array_key_exists('cityStatus', $data)) {
            $object->setCityStatus($data['cityStatus']);
        }
        if (\array_key_exists('divisions', $data)) {
            $values = array();
            foreach ($data['divisions'] as $value) {
                $values[] = $value;
            }
            $object->setDivisions($values);
        }
        if (\array_key_exists('title', $data)) {
            $object->setTitle($data['title']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBitrixId()) {
            $data['bitrixId'] = $object->getBitrixId();
        }
        $data['cityId'] = $object->getCityId();
        $data['cityStatus'] = $object->getCityStatus();
        $values = array();
        foreach ($object->getDivisions() as $value) {
            $values[] = $value;
        }
        $data['divisions'] = $values;
        $data['title'] = $object->getTitle();
        return $data;
    }
}