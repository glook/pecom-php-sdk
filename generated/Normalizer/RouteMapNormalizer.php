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
class RouteMapNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'glook\\PecomSdk\\Generated\\Model\\RouteMap';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'glook\\PecomSdk\\Generated\\Model\\RouteMap';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \glook\PecomSdk\Generated\Model\RouteMap();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('branchName', $data) && $data['branchName'] !== null) {
            $object->setBranchName($data['branchName']);
        }
        elseif (\array_key_exists('branchName', $data) && $data['branchName'] === null) {
            $object->setBranchName(null);
        }
        if (\array_key_exists('counterpartsInRouteMap', $data) && $data['counterpartsInRouteMap'] !== null) {
            $values = array();
            foreach ($data['counterpartsInRouteMap'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'glook\\PecomSdk\\Generated\\Model\\CounterpartInRouteMap', 'json', $context);
            }
            $object->setCounterpartsInRouteMap($values);
        }
        elseif (\array_key_exists('counterpartsInRouteMap', $data) && $data['counterpartsInRouteMap'] === null) {
            $object->setCounterpartsInRouteMap(null);
        }
        if (\array_key_exists('driverFIO', $data) && $data['driverFIO'] !== null) {
            $object->setDriverFIO($data['driverFIO']);
        }
        elseif (\array_key_exists('driverFIO', $data) && $data['driverFIO'] === null) {
            $object->setDriverFIO(null);
        }
        if (\array_key_exists('driverPassport', $data) && $data['driverPassport'] !== null) {
            $object->setDriverPassport($data['driverPassport']);
        }
        elseif (\array_key_exists('driverPassport', $data) && $data['driverPassport'] === null) {
            $object->setDriverPassport(null);
        }
        if (\array_key_exists('driverPhone', $data) && $data['driverPhone'] !== null) {
            $object->setDriverPhone($data['driverPhone']);
        }
        elseif (\array_key_exists('driverPhone', $data) && $data['driverPhone'] === null) {
            $object->setDriverPhone(null);
        }
        if (\array_key_exists('routeMapUID', $data) && $data['routeMapUID'] !== null) {
            $object->setRouteMapUID($data['routeMapUID']);
        }
        elseif (\array_key_exists('routeMapUID', $data) && $data['routeMapUID'] === null) {
            $object->setRouteMapUID(null);
        }
        if (\array_key_exists('vehicleBrand', $data) && $data['vehicleBrand'] !== null) {
            $object->setVehicleBrand($data['vehicleBrand']);
        }
        elseif (\array_key_exists('vehicleBrand', $data) && $data['vehicleBrand'] === null) {
            $object->setVehicleBrand(null);
        }
        if (\array_key_exists('vehicleNumber', $data) && $data['vehicleNumber'] !== null) {
            $object->setVehicleNumber($data['vehicleNumber']);
        }
        elseif (\array_key_exists('vehicleNumber', $data) && $data['vehicleNumber'] === null) {
            $object->setVehicleNumber(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBranchName()) {
            $data['branchName'] = $object->getBranchName();
        }
        if (null !== $object->getCounterpartsInRouteMap()) {
            $values = array();
            foreach ($object->getCounterpartsInRouteMap() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['counterpartsInRouteMap'] = $values;
        }
        if (null !== $object->getDriverFIO()) {
            $data['driverFIO'] = $object->getDriverFIO();
        }
        if (null !== $object->getDriverPassport()) {
            $data['driverPassport'] = $object->getDriverPassport();
        }
        if (null !== $object->getDriverPhone()) {
            $data['driverPhone'] = $object->getDriverPhone();
        }
        if (null !== $object->getRouteMapUID()) {
            $data['routeMapUID'] = $object->getRouteMapUID();
        }
        if (null !== $object->getVehicleBrand()) {
            $data['vehicleBrand'] = $object->getVehicleBrand();
        }
        if (null !== $object->getVehicleNumber()) {
            $data['vehicleNumber'] = $object->getVehicleNumber();
        }
        return $data;
    }
}