<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2/search_service.proto

namespace Google\Cloud\Retail\V2\SearchRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A facet specification to perform faceted search.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2.SearchRequest.FacetSpec</code>
 */
class FacetSpec extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The facet key specification.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey facet_key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $facet_key = null;
    /**
     * Maximum of facet values that should be returned for this facet. If
     * unspecified, defaults to 20. The maximum allowed value is 300. Values
     * above 300 will be coerced to 300.
     * If this field is negative, an INVALID_ARGUMENT is returned.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     */
    private $limit = 0;
    /**
     * List of keys to exclude when faceting.
     * By default,
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * is not excluded from the filter unless it is listed in this field.
     * For example, suppose there are 100 products with color facet "Red" and
     * 200 products with color facet "Blue". A query containing the filter
     * "colorFamilies:ANY("Red")" and have "colorFamilies" as
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * will by default return the "Red" with count 100.
     * If this field contains "colorFamilies", then the query returns both the
     * "Red" with count 100 and "Blue" with count 200, because the
     * "colorFamilies" key is now excluded from the filter.
     * A maximum of 100 values are allowed. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     *
     * Generated from protobuf field <code>repeated string excluded_filter_keys = 3;</code>
     */
    private $excluded_filter_keys;
    /**
     * Enables dynamic position for this facet. If set to true, the position of
     * this facet among all facets in the response is determined by Google
     * Retail Search. It will be ordered together with dynamic facets if dynamic
     * facets is enabled. If set to false, the position of this facet in the
     * response will be the same as in the request, and it will be ranked before
     * the facets with dynamic position enable and all dynamic facets.
     * For example, you may always want to have rating facet returned in
     * the response, but it's not necessarily to always display the rating facet
     * at the top. In that case, you can set enable_dynamic_position to true so
     * that the position of rating facet in response will be determined by
     * Google Retail Search.
     * Another example, assuming you have the following facets in the request:
     * * "rating", enable_dynamic_position = true
     * * "price", enable_dynamic_position = false
     * * "brands", enable_dynamic_position = false
     * And also you have a dynamic facets enable, which will generate a facet
     * 'gender'. Then the final order of the facets in the response can be
     * ("price", "brands", "rating", "gender") or ("price", "brands", "gender",
     * "rating") depends on how Google Retail Search orders "gender" and
     * "rating" facets. However, notice that "price" and "brands" will always be
     * ranked at 1st and 2nd position since their enable_dynamic_position are
     * false.
     *
     * Generated from protobuf field <code>bool enable_dynamic_position = 4;</code>
     */
    private $enable_dynamic_position = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Retail\V2\SearchRequest\FacetSpec\FacetKey $facet_key
     *           Required. The facet key specification.
     *     @type int $limit
     *           Maximum of facet values that should be returned for this facet. If
     *           unspecified, defaults to 20. The maximum allowed value is 300. Values
     *           above 300 will be coerced to 300.
     *           If this field is negative, an INVALID_ARGUMENT is returned.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $excluded_filter_keys
     *           List of keys to exclude when faceting.
     *           By default,
     *           [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     *           is not excluded from the filter unless it is listed in this field.
     *           For example, suppose there are 100 products with color facet "Red" and
     *           200 products with color facet "Blue". A query containing the filter
     *           "colorFamilies:ANY("Red")" and have "colorFamilies" as
     *           [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     *           will by default return the "Red" with count 100.
     *           If this field contains "colorFamilies", then the query returns both the
     *           "Red" with count 100 and "Blue" with count 200, because the
     *           "colorFamilies" key is now excluded from the filter.
     *           A maximum of 100 values are allowed. Otherwise, an INVALID_ARGUMENT error
     *           is returned.
     *     @type bool $enable_dynamic_position
     *           Enables dynamic position for this facet. If set to true, the position of
     *           this facet among all facets in the response is determined by Google
     *           Retail Search. It will be ordered together with dynamic facets if dynamic
     *           facets is enabled. If set to false, the position of this facet in the
     *           response will be the same as in the request, and it will be ranked before
     *           the facets with dynamic position enable and all dynamic facets.
     *           For example, you may always want to have rating facet returned in
     *           the response, but it's not necessarily to always display the rating facet
     *           at the top. In that case, you can set enable_dynamic_position to true so
     *           that the position of rating facet in response will be determined by
     *           Google Retail Search.
     *           Another example, assuming you have the following facets in the request:
     *           * "rating", enable_dynamic_position = true
     *           * "price", enable_dynamic_position = false
     *           * "brands", enable_dynamic_position = false
     *           And also you have a dynamic facets enable, which will generate a facet
     *           'gender'. Then the final order of the facets in the response can be
     *           ("price", "brands", "rating", "gender") or ("price", "brands", "gender",
     *           "rating") depends on how Google Retail Search orders "gender" and
     *           "rating" facets. However, notice that "price" and "brands" will always be
     *           ranked at 1st and 2nd position since their enable_dynamic_position are
     *           false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2\SearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The facet key specification.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey facet_key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2\SearchRequest\FacetSpec\FacetKey|null
     */
    public function getFacetKey()
    {
        return $this->facet_key;
    }

    public function hasFacetKey()
    {
        return isset($this->facet_key);
    }

    public function clearFacetKey()
    {
        unset($this->facet_key);
    }

    /**
     * Required. The facet key specification.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey facet_key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2\SearchRequest\FacetSpec\FacetKey $var
     * @return $this
     */
    public function setFacetKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2\SearchRequest\FacetSpec\FacetKey::class);
        $this->facet_key = $var;

        return $this;
    }

    /**
     * Maximum of facet values that should be returned for this facet. If
     * unspecified, defaults to 20. The maximum allowed value is 300. Values
     * above 300 will be coerced to 300.
     * If this field is negative, an INVALID_ARGUMENT is returned.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * Maximum of facet values that should be returned for this facet. If
     * unspecified, defaults to 20. The maximum allowed value is 300. Values
     * above 300 will be coerced to 300.
     * If this field is negative, an INVALID_ARGUMENT is returned.
     *
     * Generated from protobuf field <code>int32 limit = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt32($var);
        $this->limit = $var;

        return $this;
    }

    /**
     * List of keys to exclude when faceting.
     * By default,
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * is not excluded from the filter unless it is listed in this field.
     * For example, suppose there are 100 products with color facet "Red" and
     * 200 products with color facet "Blue". A query containing the filter
     * "colorFamilies:ANY("Red")" and have "colorFamilies" as
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * will by default return the "Red" with count 100.
     * If this field contains "colorFamilies", then the query returns both the
     * "Red" with count 100 and "Blue" with count 200, because the
     * "colorFamilies" key is now excluded from the filter.
     * A maximum of 100 values are allowed. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     *
     * Generated from protobuf field <code>repeated string excluded_filter_keys = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExcludedFilterKeys()
    {
        return $this->excluded_filter_keys;
    }

    /**
     * List of keys to exclude when faceting.
     * By default,
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * is not excluded from the filter unless it is listed in this field.
     * For example, suppose there are 100 products with color facet "Red" and
     * 200 products with color facet "Blue". A query containing the filter
     * "colorFamilies:ANY("Red")" and have "colorFamilies" as
     * [FacetKey.key][google.cloud.retail.v2.SearchRequest.FacetSpec.FacetKey.key]
     * will by default return the "Red" with count 100.
     * If this field contains "colorFamilies", then the query returns both the
     * "Red" with count 100 and "Blue" with count 200, because the
     * "colorFamilies" key is now excluded from the filter.
     * A maximum of 100 values are allowed. Otherwise, an INVALID_ARGUMENT error
     * is returned.
     *
     * Generated from protobuf field <code>repeated string excluded_filter_keys = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExcludedFilterKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->excluded_filter_keys = $arr;

        return $this;
    }

    /**
     * Enables dynamic position for this facet. If set to true, the position of
     * this facet among all facets in the response is determined by Google
     * Retail Search. It will be ordered together with dynamic facets if dynamic
     * facets is enabled. If set to false, the position of this facet in the
     * response will be the same as in the request, and it will be ranked before
     * the facets with dynamic position enable and all dynamic facets.
     * For example, you may always want to have rating facet returned in
     * the response, but it's not necessarily to always display the rating facet
     * at the top. In that case, you can set enable_dynamic_position to true so
     * that the position of rating facet in response will be determined by
     * Google Retail Search.
     * Another example, assuming you have the following facets in the request:
     * * "rating", enable_dynamic_position = true
     * * "price", enable_dynamic_position = false
     * * "brands", enable_dynamic_position = false
     * And also you have a dynamic facets enable, which will generate a facet
     * 'gender'. Then the final order of the facets in the response can be
     * ("price", "brands", "rating", "gender") or ("price", "brands", "gender",
     * "rating") depends on how Google Retail Search orders "gender" and
     * "rating" facets. However, notice that "price" and "brands" will always be
     * ranked at 1st and 2nd position since their enable_dynamic_position are
     * false.
     *
     * Generated from protobuf field <code>bool enable_dynamic_position = 4;</code>
     * @return bool
     */
    public function getEnableDynamicPosition()
    {
        return $this->enable_dynamic_position;
    }

    /**
     * Enables dynamic position for this facet. If set to true, the position of
     * this facet among all facets in the response is determined by Google
     * Retail Search. It will be ordered together with dynamic facets if dynamic
     * facets is enabled. If set to false, the position of this facet in the
     * response will be the same as in the request, and it will be ranked before
     * the facets with dynamic position enable and all dynamic facets.
     * For example, you may always want to have rating facet returned in
     * the response, but it's not necessarily to always display the rating facet
     * at the top. In that case, you can set enable_dynamic_position to true so
     * that the position of rating facet in response will be determined by
     * Google Retail Search.
     * Another example, assuming you have the following facets in the request:
     * * "rating", enable_dynamic_position = true
     * * "price", enable_dynamic_position = false
     * * "brands", enable_dynamic_position = false
     * And also you have a dynamic facets enable, which will generate a facet
     * 'gender'. Then the final order of the facets in the response can be
     * ("price", "brands", "rating", "gender") or ("price", "brands", "gender",
     * "rating") depends on how Google Retail Search orders "gender" and
     * "rating" facets. However, notice that "price" and "brands" will always be
     * ranked at 1st and 2nd position since their enable_dynamic_position are
     * false.
     *
     * Generated from protobuf field <code>bool enable_dynamic_position = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableDynamicPosition($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_dynamic_position = $var;

        return $this;
    }

}


