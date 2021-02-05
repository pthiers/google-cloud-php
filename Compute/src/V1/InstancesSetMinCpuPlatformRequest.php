<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.InstancesSetMinCpuPlatformRequest</code>
 */
class InstancesSetMinCpuPlatformRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Minimum cpu/platform this instance should be started at.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 242912759;</code>
     */
    private $min_cpu_platform = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $min_cpu_platform
     *           Minimum cpu/platform this instance should be started at.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Minimum cpu/platform this instance should be started at.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 242912759;</code>
     * @return string
     */
    public function getMinCpuPlatform()
    {
        return $this->min_cpu_platform;
    }

    /**
     * Minimum cpu/platform this instance should be started at.
     *
     * Generated from protobuf field <code>string min_cpu_platform = 242912759;</code>
     * @param string $var
     * @return $this
     */
    public function setMinCpuPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->min_cpu_platform = $var;

        return $this;
    }

}
