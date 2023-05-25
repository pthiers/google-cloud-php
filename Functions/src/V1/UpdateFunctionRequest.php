<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/functions/v1/functions.proto

namespace Google\Cloud\Functions\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateFunction` method.
 *
 * Generated from protobuf message <code>google.cloud.functions.v1.UpdateFunctionRequest</code>
 */
class UpdateFunctionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. New version of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $function = null;
    /**
     * Required. The list of fields in `CloudFunction` that have to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;

    /**
     * @param \Google\Cloud\Functions\V1\CloudFunction $function Required. New version of the function.
     *
     * @return \Google\Cloud\Functions\V1\UpdateFunctionRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Functions\V1\CloudFunction $function): self
    {
        return (new self())
            ->setFunction($function);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Functions\V1\CloudFunction $function
     *           Required. New version of the function.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields in `CloudFunction` that have to be updated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Functions\V1\Functions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. New version of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Functions\V1\CloudFunction|null
     */
    public function getFunction()
    {
        return $this->function;
    }

    public function hasFunction()
    {
        return isset($this->function);
    }

    public function clearFunction()
    {
        unset($this->function);
    }

    /**
     * Required. New version of the function.
     *
     * Generated from protobuf field <code>.google.cloud.functions.v1.CloudFunction function = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Functions\V1\CloudFunction $var
     * @return $this
     */
    public function setFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Functions\V1\CloudFunction::class);
        $this->function = $var;

        return $this;
    }

    /**
     * Required. The list of fields in `CloudFunction` that have to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The list of fields in `CloudFunction` that have to be updated.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

