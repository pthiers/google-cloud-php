<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/billing/v1/cloud_billing.proto

namespace GPBMetadata\Google\Cloud\Billing\V1;

class CloudBilling
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/billing/v1/cloud_billing.protogoogle.cloud.billing.v1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/iam/v1/iam_policy.protogoogle/iam/v1/policy.proto google/protobuf/field_mask.proto"�
BillingAccount@
name (	B2�A�A,
*cloudbilling.googleapis.com/BillingAccount
open (B�A
display_name (	
master_billing_account (	"�
ProjectBillingInfo
name (	B�A

project_id (	B�A
billing_account_name (	
billing_enabled (B�A:S�AP
.cloudbilling.googleapis.com/ProjectBillingInfoprojects/{project}/billingInfo"\\
GetBillingAccountRequest@
name (	B2�A�A,
*cloudbilling.googleapis.com/BillingAccount"S
ListBillingAccountsRequest
	page_size (

page_token (	
filter (	"y
ListBillingAccountsResponseA
billing_accounts (2\'.google.cloud.billing.v1.BillingAccount
next_page_token (	"d
CreateBillingAccountRequestE
billing_account (2\'.google.cloud.billing.v1.BillingAccountB�A"�
UpdateBillingAccountRequest@
name (	B2�A�A,
*cloudbilling.googleapis.com/BillingAccount=
account (2\'.google.cloud.billing.v1.BillingAccountB�A/
update_mask (2.google.protobuf.FieldMask"�
ListProjectBillingInfoRequest@
name (	B2�A�A,
*cloudbilling.googleapis.com/BillingAccount
	page_size (

page_token (	"�
ListProjectBillingInfoResponseI
project_billing_info (2+.google.cloud.billing.v1.ProjectBillingInfo
next_page_token (	"a
GetProjectBillingInfoRequestA
name (	B3�A�A-
+cloudresourcemanager.googleapis.com/Project"
UpdateProjectBillingInfoRequest
name (	B�AI
project_billing_info (2+.google.cloud.billing.v1.ProjectBillingInfo2�
CloudBilling�
GetBillingAccount1.google.cloud.billing.v1.GetBillingAccountRequest\'.google.cloud.billing.v1.BillingAccount"+���/v1/{name=billingAccounts/*}�Aname�
ListBillingAccounts3.google.cloud.billing.v1.ListBillingAccountsRequest4.google.cloud.billing.v1.ListBillingAccountsResponse"���/v1/billingAccounts�A �
UpdateBillingAccount4.google.cloud.billing.v1.UpdateBillingAccountRequest\'.google.cloud.billing.v1.BillingAccount"<���\'2/v1/{name=billingAccounts/*}:account�Aname,account�
CreateBillingAccount4.google.cloud.billing.v1.CreateBillingAccountRequest\'.google.cloud.billing.v1.BillingAccount">���&"/v1/billingAccounts:billing_account�Abilling_account�
ListProjectBillingInfo6.google.cloud.billing.v1.ListProjectBillingInfoRequest7.google.cloud.billing.v1.ListProjectBillingInfoResponse"4���\'%/v1/{name=billingAccounts/*}/projects�Aname�
GetProjectBillingInfo5.google.cloud.billing.v1.GetProjectBillingInfoRequest+.google.cloud.billing.v1.ProjectBillingInfo"0���#!/v1/{name=projects/*}/billingInfo�Aname�
UpdateProjectBillingInfo8.google.cloud.billing.v1.UpdateProjectBillingInfoRequest+.google.cloud.billing.v1.ProjectBillingInfo"[���9!/v1/{name=projects/*}/billingInfo:project_billing_info�Aname,project_billing_info�
GetIamPolicy".google.iam.v1.GetIamPolicyRequest.google.iam.v1.Policy"@���/-/v1/{resource=billingAccounts/*}:getIamPolicy�Aresource�
SetIamPolicy".google.iam.v1.SetIamPolicyRequest.google.iam.v1.Policy"J���2"-/v1/{resource=billingAccounts/*}:setIamPolicy:*�Aresource,policy�
TestIamPermissions(.google.iam.v1.TestIamPermissionsRequest).google.iam.v1.TestIamPermissionsResponse"U���8"3/v1/{resource=billingAccounts/*}:testIamPermissions:*�Aresource,permissions��Acloudbilling.googleapis.com�A�https://www.googleapis.com/auth/cloud-billing,https://www.googleapis.com/auth/cloud-billing.readonly,https://www.googleapis.com/auth/cloud-platformBi
com.google.cloud.billing.v1BCloudBillingProtoPZ5cloud.google.com/go/billing/apiv1/billingpb;billingpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

