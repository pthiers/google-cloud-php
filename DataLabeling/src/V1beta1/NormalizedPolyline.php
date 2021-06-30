<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/annotation.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Normalized polyline.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.NormalizedPolyline</code>
 */
class NormalizedPolyline extends \Google\Protobuf\Internal\Message
{
    /**
     * The normalized polyline vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.NormalizedVertex normalized_vertices = 1;</code>
     */
    private $normalized_vertices;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\DataLabeling\V1beta1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $normalized_vertices
     *           The normalized polyline vertices.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Annotation::initOnce();
        parent::__construct($data);
    }

    /**
     * The normalized polyline vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.NormalizedVertex normalized_vertices = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNormalizedVertices()
    {
        return $this->normalized_vertices;
    }

    /**
     * The normalized polyline vertices.
     *
     * Generated from protobuf field <code>repeated .google.cloud.datalabeling.v1beta1.NormalizedVertex normalized_vertices = 1;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\NormalizedVertex[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNormalizedVertices($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataLabeling\V1beta1\NormalizedVertex::class);
        $this->normalized_vertices = $arr;

        return $this;
    }

}
