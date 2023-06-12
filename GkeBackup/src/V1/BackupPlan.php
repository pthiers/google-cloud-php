<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkebackup/v1/backup_plan.proto

namespace Google\Cloud\GkeBackup\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Defines the configuration and scheduling for a "line" of Backups.
 *
 * Generated from protobuf message <code>google.cloud.gkebackup.v1.BackupPlan</code>
 */
class BackupPlan extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The full name of the BackupPlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $uid = '';
    /**
     * Output only. The timestamp when this BackupPlan resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp when this BackupPlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * User specified descriptive string for this BackupPlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     */
    private $description = '';
    /**
     * Required. Immutable. The source cluster from which Backups will be created
     * via this BackupPlan. Valid formats:
     * - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     * - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $cluster = '';
    /**
     * RetentionPolicy governs lifecycle of Backups created under this plan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy retention_policy = 7;</code>
     */
    private $retention_policy = null;
    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     */
    private $labels;
    /**
     * Defines a schedule for automatic Backup creation via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.Schedule backup_schedule = 9;</code>
     */
    private $backup_schedule = null;
    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a backup plan from overwriting each
     * other. It is strongly suggested that systems make use of the 'etag' in the
     * read-modify-write cycle to perform BackupPlan updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetBackupPlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateBackupPlan` or `DeleteBackupPlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $etag = '';
    /**
     * This flag indicates whether this BackupPlan has been deactivated.
     * Setting this field to True locks the BackupPlan such that no further
     * updates will be allowed (except deletes), including the deactivated field
     * itself. It also prevents any new Backups from being created via this
     * BackupPlan (including scheduled Backups).
     * Default: False
     *
     * Generated from protobuf field <code>bool deactivated = 11;</code>
     */
    private $deactivated = false;
    /**
     * Defines the configuration of Backups created via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.BackupConfig backup_config = 12;</code>
     */
    private $backup_config = null;
    /**
     * Output only. The number of Kubernetes Pods backed up in the
     * last successful Backup created via this BackupPlan.
     *
     * Generated from protobuf field <code>int32 protected_pod_count = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $protected_pod_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The full name of the BackupPlan resource.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *     @type string $uid
     *           Output only. Server generated global unique identifier of
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when this BackupPlan resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when this BackupPlan resource was last
     *           updated.
     *     @type string $description
     *           User specified descriptive string for this BackupPlan.
     *     @type string $cluster
     *           Required. Immutable. The source cluster from which Backups will be created
     *           via this BackupPlan. Valid formats:
     *           - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     *           - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *     @type \Google\Cloud\GkeBackup\V1\BackupPlan\RetentionPolicy $retention_policy
     *           RetentionPolicy governs lifecycle of Backups created under this plan.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           A set of custom labels supplied by user.
     *     @type \Google\Cloud\GkeBackup\V1\BackupPlan\Schedule $backup_schedule
     *           Defines a schedule for automatic Backup creation via this BackupPlan.
     *     @type string $etag
     *           Output only. `etag` is used for optimistic concurrency control as a way to
     *           help prevent simultaneous updates of a backup plan from overwriting each
     *           other. It is strongly suggested that systems make use of the 'etag' in the
     *           read-modify-write cycle to perform BackupPlan updates in order to avoid
     *           race conditions: An `etag` is returned in the response to `GetBackupPlan`,
     *           and systems are expected to put that etag in the request to
     *           `UpdateBackupPlan` or `DeleteBackupPlan` to ensure that their change
     *           will be applied to the same version of the resource.
     *     @type bool $deactivated
     *           This flag indicates whether this BackupPlan has been deactivated.
     *           Setting this field to True locks the BackupPlan such that no further
     *           updates will be allowed (except deletes), including the deactivated field
     *           itself. It also prevents any new Backups from being created via this
     *           BackupPlan (including scheduled Backups).
     *           Default: False
     *     @type \Google\Cloud\GkeBackup\V1\BackupPlan\BackupConfig $backup_config
     *           Defines the configuration of Backups created via this BackupPlan.
     *     @type int $protected_pod_count
     *           Output only. The number of Kubernetes Pods backed up in the
     *           last successful Backup created via this BackupPlan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Gkebackup\V1\BackupPlan::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The full name of the BackupPlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The full name of the BackupPlan resource.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;backupPlans/&#42;`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. Server generated global unique identifier of
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier) format.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this BackupPlan resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when this BackupPlan resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The timestamp when this BackupPlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when this BackupPlan resource was last
     * updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * User specified descriptive string for this BackupPlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * User specified descriptive string for this BackupPlan.
     *
     * Generated from protobuf field <code>string description = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Required. Immutable. The source cluster from which Backups will be created
     * via this BackupPlan. Valid formats:
     * - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     * - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * Required. Immutable. The source cluster from which Backups will be created
     * via this BackupPlan. Valid formats:
     * - `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`
     * - `projects/&#42;&#47;zones/&#42;&#47;clusters/&#42;`
     *
     * Generated from protobuf field <code>string cluster = 6 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster = $var;

        return $this;
    }

    /**
     * RetentionPolicy governs lifecycle of Backups created under this plan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy retention_policy = 7;</code>
     * @return \Google\Cloud\GkeBackup\V1\BackupPlan\RetentionPolicy|null
     */
    public function getRetentionPolicy()
    {
        return $this->retention_policy;
    }

    public function hasRetentionPolicy()
    {
        return isset($this->retention_policy);
    }

    public function clearRetentionPolicy()
    {
        unset($this->retention_policy);
    }

    /**
     * RetentionPolicy governs lifecycle of Backups created under this plan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.RetentionPolicy retention_policy = 7;</code>
     * @param \Google\Cloud\GkeBackup\V1\BackupPlan\RetentionPolicy $var
     * @return $this
     */
    public function setRetentionPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\BackupPlan\RetentionPolicy::class);
        $this->retention_policy = $var;

        return $this;
    }

    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * A set of custom labels supplied by user.
     *
     * Generated from protobuf field <code>map<string, string> labels = 8;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Defines a schedule for automatic Backup creation via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.Schedule backup_schedule = 9;</code>
     * @return \Google\Cloud\GkeBackup\V1\BackupPlan\Schedule|null
     */
    public function getBackupSchedule()
    {
        return $this->backup_schedule;
    }

    public function hasBackupSchedule()
    {
        return isset($this->backup_schedule);
    }

    public function clearBackupSchedule()
    {
        unset($this->backup_schedule);
    }

    /**
     * Defines a schedule for automatic Backup creation via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.Schedule backup_schedule = 9;</code>
     * @param \Google\Cloud\GkeBackup\V1\BackupPlan\Schedule $var
     * @return $this
     */
    public function setBackupSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\BackupPlan\Schedule::class);
        $this->backup_schedule = $var;

        return $this;
    }

    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a backup plan from overwriting each
     * other. It is strongly suggested that systems make use of the 'etag' in the
     * read-modify-write cycle to perform BackupPlan updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetBackupPlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateBackupPlan` or `DeleteBackupPlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Output only. `etag` is used for optimistic concurrency control as a way to
     * help prevent simultaneous updates of a backup plan from overwriting each
     * other. It is strongly suggested that systems make use of the 'etag' in the
     * read-modify-write cycle to perform BackupPlan updates in order to avoid
     * race conditions: An `etag` is returned in the response to `GetBackupPlan`,
     * and systems are expected to put that etag in the request to
     * `UpdateBackupPlan` or `DeleteBackupPlan` to ensure that their change
     * will be applied to the same version of the resource.
     *
     * Generated from protobuf field <code>string etag = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * This flag indicates whether this BackupPlan has been deactivated.
     * Setting this field to True locks the BackupPlan such that no further
     * updates will be allowed (except deletes), including the deactivated field
     * itself. It also prevents any new Backups from being created via this
     * BackupPlan (including scheduled Backups).
     * Default: False
     *
     * Generated from protobuf field <code>bool deactivated = 11;</code>
     * @return bool
     */
    public function getDeactivated()
    {
        return $this->deactivated;
    }

    /**
     * This flag indicates whether this BackupPlan has been deactivated.
     * Setting this field to True locks the BackupPlan such that no further
     * updates will be allowed (except deletes), including the deactivated field
     * itself. It also prevents any new Backups from being created via this
     * BackupPlan (including scheduled Backups).
     * Default: False
     *
     * Generated from protobuf field <code>bool deactivated = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeactivated($var)
    {
        GPBUtil::checkBool($var);
        $this->deactivated = $var;

        return $this;
    }

    /**
     * Defines the configuration of Backups created via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.BackupConfig backup_config = 12;</code>
     * @return \Google\Cloud\GkeBackup\V1\BackupPlan\BackupConfig|null
     */
    public function getBackupConfig()
    {
        return $this->backup_config;
    }

    public function hasBackupConfig()
    {
        return isset($this->backup_config);
    }

    public function clearBackupConfig()
    {
        unset($this->backup_config);
    }

    /**
     * Defines the configuration of Backups created via this BackupPlan.
     *
     * Generated from protobuf field <code>.google.cloud.gkebackup.v1.BackupPlan.BackupConfig backup_config = 12;</code>
     * @param \Google\Cloud\GkeBackup\V1\BackupPlan\BackupConfig $var
     * @return $this
     */
    public function setBackupConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\GkeBackup\V1\BackupPlan\BackupConfig::class);
        $this->backup_config = $var;

        return $this;
    }

    /**
     * Output only. The number of Kubernetes Pods backed up in the
     * last successful Backup created via this BackupPlan.
     *
     * Generated from protobuf field <code>int32 protected_pod_count = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProtectedPodCount()
    {
        return $this->protected_pod_count;
    }

    /**
     * Output only. The number of Kubernetes Pods backed up in the
     * last successful Backup created via this BackupPlan.
     *
     * Generated from protobuf field <code>int32 protected_pod_count = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProtectedPodCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->protected_pod_count = $var;

        return $this;
    }

}

