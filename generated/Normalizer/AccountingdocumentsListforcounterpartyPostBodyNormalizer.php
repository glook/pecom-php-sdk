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
class AccountingdocumentsListforcounterpartyPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\AccountingdocumentsListforcounterpartyPostBody';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\AccountingdocumentsListforcounterpartyPostBody';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\AccountingdocumentsListforcounterpartyPostBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchId', $data)) {
            $object->setBranchId($data['branchId']);
        }
        if (\array_key_exists('dateBegin', $data)) {
            $object->setDateBegin($data['dateBegin']);
        }
        if (\array_key_exists('dateEnd', $data)) {
            $object->setDateEnd($data['dateEnd']);
        }
        if (\array_key_exists('INN', $data)) {
            $object->setINN($data['INN']);
        }
        if (\array_key_exists('KPP', $data) && $data['KPP'] !== null) {
            $object->setKPP($data['KPP']);
        }
        elseif (\array_key_exists('KPP', $data) && $data['KPP'] === null) {
            $object->setKPP(null);
        }
        if (\array_key_exists('token', $data)) {
            $object->setToken($data['token']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['branchId'] = $object->getBranchId();
        $data['dateBegin'] = $object->getDateBegin();
        $data['dateEnd'] = $object->getDateEnd();
        $data['INN'] = $object->getINN();
        if (null !== $object->getKPP()) {
            $data['KPP'] = $object->getKPP();
        }
        $data['token'] = $object->getToken();
        return $data;
    }
}