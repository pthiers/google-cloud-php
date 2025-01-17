<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/sql/v1/cloud_sql_resources.proto

namespace Google\Cloud\Sql\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PSC settings for a Cloud SQL instance.
 *
 * Generated from protobuf message <code>google.cloud.sql.v1.PscConfig</code>
 */
class PscConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>optional bool psc_enabled = 1;</code>
     */
    private $psc_enabled = null;
    /**
     * The list of consumer projects that are allow-listed for PSC connections to
     * this instance. This instance can be connected to with PSC from any network
     * in these projects.
     * Each consumer project in this list may be represented by a project number
     * (numeric) or by a project id (alphanumeric).
     *
     * Generated from protobuf field <code>repeated string allowed_consumer_projects = 2;</code>
     */
    private $allowed_consumer_projects;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $psc_enabled
     *           Whether PSC connectivity is enabled for this instance.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $allowed_consumer_projects
     *           The list of consumer projects that are allow-listed for PSC connections to
     *           this instance. This instance can be connected to with PSC from any network
     *           in these projects.
     *           Each consumer project in this list may be represented by a project number
     *           (numeric) or by a project id (alphanumeric).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Sql\V1\CloudSqlResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>optional bool psc_enabled = 1;</code>
     * @return bool
     */
    public function getPscEnabled()
    {
        return isset($this->psc_enabled) ? $this->psc_enabled : false;
    }

    public function hasPscEnabled()
    {
        return isset($this->psc_enabled);
    }

    public function clearPscEnabled()
    {
        unset($this->psc_enabled);
    }

    /**
     * Whether PSC connectivity is enabled for this instance.
     *
     * Generated from protobuf field <code>optional bool psc_enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPscEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->psc_enabled = $var;

        return $this;
    }

    /**
     * The list of consumer projects that are allow-listed for PSC connections to
     * this instance. This instance can be connected to with PSC from any network
     * in these projects.
     * Each consumer project in this list may be represented by a project number
     * (numeric) or by a project id (alphanumeric).
     *
     * Generated from protobuf field <code>repeated string allowed_consumer_projects = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowedConsumerProjects()
    {
        return $this->allowed_consumer_projects;
    }

    /**
     * The list of consumer projects that are allow-listed for PSC connections to
     * this instance. This instance can be connected to with PSC from any network
     * in these projects.
     * Each consumer project in this list may be represented by a project number
     * (numeric) or by a project id (alphanumeric).
     *
     * Generated from protobuf field <code>repeated string allowed_consumer_projects = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowedConsumerProjects($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->allowed_consumer_projects = $arr;

        return $this;
    }

}

