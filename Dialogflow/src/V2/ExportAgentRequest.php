<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/agent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for
 * [Agents.ExportAgent][google.cloud.dialogflow.v2.Agents.ExportAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.ExportAgentRequest</code>
 */
class ExportAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The [Google Cloud
     * Storage](https://cloud.google.com/storage/docs/) URI to export the agent
     * to. The format of this URI must be `gs://<bucket-name>/<object-name>`. If
     * left unspecified, the serialized agent is returned inline.
     * Dialogflow performs a write operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have write permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string agent_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $agent_uri = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The project that the agent to export is associated with.
     *           Format: `projects/<Project ID>`.
     *     @type string $agent_uri
     *           Required. The [Google Cloud
     *           Storage](https://cloud.google.com/storage/docs/) URI to export the agent
     *           to. The format of this URI must be `gs://<bucket-name>/<object-name>`. If
     *           left unspecified, the serialized agent is returned inline.
     *           Dialogflow performs a write operation for the Cloud Storage object
     *           on the caller's behalf, so your request authentication must
     *           have write permissions for the object. For more information, see
     *           [Dialogflow access
     *           control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Agent::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The [Google Cloud
     * Storage](https://cloud.google.com/storage/docs/) URI to export the agent
     * to. The format of this URI must be `gs://<bucket-name>/<object-name>`. If
     * left unspecified, the serialized agent is returned inline.
     * Dialogflow performs a write operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have write permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string agent_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAgentUri()
    {
        return $this->agent_uri;
    }

    /**
     * Required. The [Google Cloud
     * Storage](https://cloud.google.com/storage/docs/) URI to export the agent
     * to. The format of this URI must be `gs://<bucket-name>/<object-name>`. If
     * left unspecified, the serialized agent is returned inline.
     * Dialogflow performs a write operation for the Cloud Storage object
     * on the caller's behalf, so your request authentication must
     * have write permissions for the object. For more information, see
     * [Dialogflow access
     * control](https://cloud.google.com/dialogflow/cx/docs/concept/access-control#storage).
     *
     * Generated from protobuf field <code>string agent_uri = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_uri = $var;

        return $this;
    }

}

