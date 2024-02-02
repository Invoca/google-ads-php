<?php

/**
 * Copyright 2022 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

// Generated code ; DO NOT EDIT.

namespace Google\Ads\GoogleAds\Lib\V15;

use Google\Ads\GoogleAds\Constants;
use Google\Ads\GoogleAds\Lib\ConfigurationTrait;
use Google\Ads\GoogleAds\Lib\InsecureCredentialsWrapper;
use Google\Ads\GoogleAds\V15\Services\Client\AccountBudgetProposalServiceClient;
use Google\Ads\GoogleAds\V15\Services\AccountBudgetProposalServiceClient as AccountBudgetProposalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AccountLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\AccountLinkServiceClient as AccountLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupAdLabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupAdLabelServiceClient as AdGroupAdLabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupAdServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupAdServiceClient as AdGroupAdServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupAssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupAssetServiceClient as AdGroupAssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupAssetSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupAssetSetServiceClient as AdGroupAssetSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupBidModifierServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupBidModifierServiceClient as AdGroupBidModifierServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupCriterionCustomizerServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupCriterionCustomizerServiceClient as AdGroupCriterionCustomizerServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupCriterionLabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupCriterionLabelServiceClient as AdGroupCriterionLabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupCriterionServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupCriterionServiceClient as AdGroupCriterionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupCustomizerServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupCustomizerServiceClient as AdGroupCustomizerServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupExtensionSettingServiceClient as AdGroupExtensionSettingServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupFeedServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupFeedServiceClient as AdGroupFeedServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupLabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupLabelServiceClient as AdGroupLabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdGroupServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdGroupServiceClient as AdGroupServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdParameterServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdParameterServiceClient as AdParameterServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AdServiceClient;
use Google\Ads\GoogleAds\V15\Services\AdServiceClient as AdServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetGroupAssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetGroupAssetServiceClient as AssetGroupAssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetGroupListingGroupFilterServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetGroupListingGroupFilterServiceClient as AssetGroupListingGroupFilterServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetGroupServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetGroupServiceClient as AssetGroupServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetGroupSignalServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetGroupSignalServiceClient as AssetGroupSignalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetServiceClient as AssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetSetAssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetSetAssetServiceClient as AssetSetAssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AssetSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\AssetSetServiceClient as AssetSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AudienceInsightsServiceClient;
use Google\Ads\GoogleAds\V15\Services\AudienceInsightsServiceClient as AudienceInsightsServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\AudienceServiceClient;
use Google\Ads\GoogleAds\V15\Services\AudienceServiceClient as AudienceServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BatchJobServiceClient;
use Google\Ads\GoogleAds\V15\Services\BatchJobServiceClient as BatchJobServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BiddingDataExclusionServiceClient;
use Google\Ads\GoogleAds\V15\Services\BiddingDataExclusionServiceClient as BiddingDataExclusionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BiddingSeasonalityAdjustmentServiceClient;
use Google\Ads\GoogleAds\V15\Services\BiddingSeasonalityAdjustmentServiceClient as BiddingSeasonalityAdjustmentServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BiddingStrategyServiceClient;
use Google\Ads\GoogleAds\V15\Services\BiddingStrategyServiceClient as BiddingStrategyServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BillingSetupServiceClient;
use Google\Ads\GoogleAds\V15\Services\BillingSetupServiceClient as BillingSetupServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\BrandSuggestionServiceClient;
use Google\Ads\GoogleAds\V15\Services\BrandSuggestionServiceClient as BrandSuggestionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignAssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignAssetServiceClient as CampaignAssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignAssetSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignAssetSetServiceClient as CampaignAssetSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignBidModifierServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignBidModifierServiceClient as CampaignBidModifierServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignBudgetServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignBudgetServiceClient as CampaignBudgetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignConversionGoalServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignConversionGoalServiceClient as CampaignConversionGoalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignCriterionServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignCriterionServiceClient as CampaignCriterionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignCustomizerServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignCustomizerServiceClient as CampaignCustomizerServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignDraftServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignDraftServiceClient as CampaignDraftServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignExtensionSettingServiceClient as CampaignExtensionSettingServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignFeedServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignFeedServiceClient as CampaignFeedServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignGroupServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignGroupServiceClient as CampaignGroupServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignLabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignLabelServiceClient as CampaignLabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignLifecycleGoalServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignLifecycleGoalServiceClient as CampaignLifecycleGoalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignServiceClient as CampaignServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CampaignSharedSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\CampaignSharedSetServiceClient as CampaignSharedSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionActionServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionActionServiceClient as ConversionActionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionAdjustmentUploadServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionAdjustmentUploadServiceClient as ConversionAdjustmentUploadServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionCustomVariableServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionCustomVariableServiceClient as ConversionCustomVariableServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionGoalCampaignConfigServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionGoalCampaignConfigServiceClient as ConversionGoalCampaignConfigServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionUploadServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionUploadServiceClient as ConversionUploadServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionValueRuleServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionValueRuleServiceClient as ConversionValueRuleServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ConversionValueRuleSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\ConversionValueRuleSetServiceClient as ConversionValueRuleSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomAudienceServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomAudienceServiceClient as CustomAudienceServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomConversionGoalServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomConversionGoalServiceClient as CustomConversionGoalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerAssetServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerAssetServiceClient as CustomerAssetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerAssetSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerAssetSetServiceClient as CustomerAssetSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerClientLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerClientLinkServiceClient as CustomerClientLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerConversionGoalServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerConversionGoalServiceClient as CustomerConversionGoalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerCustomizerServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerCustomizerServiceClient as CustomerCustomizerServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerExtensionSettingServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerExtensionSettingServiceClient as CustomerExtensionSettingServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerFeedServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerFeedServiceClient as CustomerFeedServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerLabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerLabelServiceClient as CustomerLabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerLifecycleGoalServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerLifecycleGoalServiceClient as CustomerLifecycleGoalServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerManagerLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerManagerLinkServiceClient as CustomerManagerLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerNegativeCriterionServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerNegativeCriterionServiceClient as CustomerNegativeCriterionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerServiceClient;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerServiceClient as CustomerServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerSkAdNetworkConversionValueSchemaServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerSkAdNetworkConversionValueSchemaServiceClient as CustomerSkAdNetworkConversionValueSchemaServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerUserAccessInvitationServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerUserAccessInvitationServiceClient as CustomerUserAccessInvitationServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomerUserAccessServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomerUserAccessServiceClient as CustomerUserAccessServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomInterestServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomInterestServiceClient as CustomInterestServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\CustomizerAttributeServiceClient;
use Google\Ads\GoogleAds\V15\Services\CustomizerAttributeServiceClient as CustomizerAttributeServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ExperimentArmServiceClient;
use Google\Ads\GoogleAds\V15\Services\ExperimentArmServiceClient as ExperimentArmServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ExperimentServiceClient;
use Google\Ads\GoogleAds\V15\Services\ExperimentServiceClient as ExperimentServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ExtensionFeedItemServiceClient;
use Google\Ads\GoogleAds\V15\Services\ExtensionFeedItemServiceClient as ExtensionFeedItemServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedItemServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedItemServiceClient as FeedItemServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedItemSetLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedItemSetLinkServiceClient as FeedItemSetLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedItemSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedItemSetServiceClient as FeedItemSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedItemTargetServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedItemTargetServiceClient as FeedItemTargetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedMappingServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedMappingServiceClient as FeedMappingServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\FeedServiceClient;
use Google\Ads\GoogleAds\V15\Services\FeedServiceClient as FeedServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\GeoTargetConstantServiceClient;
use Google\Ads\GoogleAds\V15\Services\GeoTargetConstantServiceClient as GeoTargetConstantServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\GoogleAdsFieldServiceClient;
use Google\Ads\GoogleAds\V15\Services\GoogleAdsFieldServiceClient as GoogleAdsFieldServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\GoogleAdsServiceClient;
use Google\Ads\GoogleAds\V15\Services\GoogleAdsServiceClient as GoogleAdsServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\InvoiceServiceClient;
use Google\Ads\GoogleAds\V15\Services\InvoiceServiceClient as InvoiceServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanAdGroupKeywordServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanAdGroupKeywordServiceClient as KeywordPlanAdGroupKeywordServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanAdGroupServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanAdGroupServiceClient as KeywordPlanAdGroupServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanCampaignKeywordServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanCampaignKeywordServiceClient as KeywordPlanCampaignKeywordServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanCampaignServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanCampaignServiceClient as KeywordPlanCampaignServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanIdeaServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanIdeaServiceClient as KeywordPlanIdeaServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordPlanServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordPlanServiceClient as KeywordPlanServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\KeywordThemeConstantServiceClient;
use Google\Ads\GoogleAds\V15\Services\KeywordThemeConstantServiceClient as KeywordThemeConstantServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\LabelServiceClient;
use Google\Ads\GoogleAds\V15\Services\LabelServiceClient as LabelServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\OfflineUserDataJobServiceClient;
use Google\Ads\GoogleAds\V15\Services\OfflineUserDataJobServiceClient as OfflineUserDataJobServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\PaymentsAccountServiceClient;
use Google\Ads\GoogleAds\V15\Services\PaymentsAccountServiceClient as PaymentsAccountServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ProductLinkInvitationServiceClient;
use Google\Ads\GoogleAds\V15\Services\ProductLinkInvitationServiceClient as ProductLinkInvitationServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ProductLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\ProductLinkServiceClient as ProductLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ReachPlanServiceClient;
use Google\Ads\GoogleAds\V15\Services\ReachPlanServiceClient as ReachPlanServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\RecommendationServiceClient;
use Google\Ads\GoogleAds\V15\Services\RecommendationServiceClient as RecommendationServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\RecommendationSubscriptionServiceClient;
use Google\Ads\GoogleAds\V15\Services\RecommendationSubscriptionServiceClient as RecommendationSubscriptionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\RemarketingActionServiceClient;
use Google\Ads\GoogleAds\V15\Services\RemarketingActionServiceClient as RemarketingActionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\SharedCriterionServiceClient;
use Google\Ads\GoogleAds\V15\Services\SharedCriterionServiceClient as SharedCriterionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\SharedSetServiceClient;
use Google\Ads\GoogleAds\V15\Services\SharedSetServiceClient as SharedSetServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\SmartCampaignSettingServiceClient;
use Google\Ads\GoogleAds\V15\Services\SmartCampaignSettingServiceClient as SmartCampaignSettingServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\SmartCampaignSuggestServiceClient;
use Google\Ads\GoogleAds\V15\Services\SmartCampaignSuggestServiceClient as SmartCampaignSuggestServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\ThirdPartyAppAnalyticsLinkServiceClient;
use Google\Ads\GoogleAds\V15\Services\ThirdPartyAppAnalyticsLinkServiceClient as ThirdPartyAppAnalyticsLinkServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\TravelAssetSuggestionServiceClient;
use Google\Ads\GoogleAds\V15\Services\TravelAssetSuggestionServiceClient as TravelAssetSuggestionServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\UserDataServiceClient;
use Google\Ads\GoogleAds\V15\Services\UserDataServiceClient as UserDataServiceClientv15;
use Google\Ads\GoogleAds\V15\Services\Client\UserListServiceClient;
use Google\Ads\GoogleAds\V15\Services\UserListServiceClient as UserListServiceClientv15;
use Google\ApiCore\GrpcSupportTrait;
use Grpc\ChannelCredentials;

/**
 * Contains service client factory methods.
 */
trait ServiceClientFactoryTrait
{
    use ConfigurationTrait;
    use GrpcSupportTrait;

    private static $CREDENTIALS_LOADER_KEY = 'credentials';
    private static $DEVELOPER_TOKEN_KEY = 'developer-token';
    private static $LOGIN_CUSTOMER_ID_KEY = 'login-customer-id';
    private static $LINKED_CUSTOMER_ID_KEY = 'linked-customer-id';
    private static $SERVICE_ADDRESS_KEY = 'serviceAddress';
    private static $DEFAULT_SERVICE_ADDRESS = 'googleads.googleapis.com';
    private static $TRANSPORT_KEY = 'transport';
    private static $UNARY_MIDDLEWARES = 'unary-middlewares';
    private static $STREAMING_MIDDLEWARES = 'streaming-middlewares';

    /**
     * Gets the Google Ads client options for making API calls.
     *
     * @return array the client options
     */
    public function getGoogleAdsClientOptions(): array
    {
        $clientOptions = [
            self::$CREDENTIALS_LOADER_KEY => $this->getGrpcChannelIsSecure()
                ? $this->getOAuth2Credential()
                : new InsecureCredentialsWrapper($this->getOAuth2Credential()),
            self::$DEVELOPER_TOKEN_KEY => $this->getDeveloperToken()
        ];
        if (!empty($this->getLoginCustomerId())) {
            $clientOptions += [self::$LOGIN_CUSTOMER_ID_KEY => strval($this->getLoginCustomerId())];
        }
        if (!empty($this->getLinkedCustomerId())) {
            $clientOptions += [
                self::$LINKED_CUSTOMER_ID_KEY => strval($this->getLinkedCustomerId())
            ];
        }
        if (!empty($this->getEndpoint())) {
            $clientOptions += [self::$SERVICE_ADDRESS_KEY => $this->getEndpoint()];
        }
        $clientOptions['libName'] = Constants::LIBRARY_NAME;
        $clientOptions['libVersion'] = Constants::LIBRARY_VERSION;
        $clientOptions['transportConfig'] = [
            'grpc' => [
                'stubOpts' => [
                    // Inbound headers may exceed default (8kb) max header size.
                    // Sets max header size to 16MB, which should be more than necessary.
                    'grpc.max_metadata_size' => 16 * 1024 * 1024,
                    // Sets max response size to 64MB, since large responses will often exceed the
                    // default (4MB).
                    'grpc.max_receive_message_length' => 64 * 1024 * 1024
                ],
                'interceptors' => [new GoogleAdsFailuresInterceptor()]
            ]
        ];
        if (!empty($this->getLogger())) {
            $googleAdsLoggingInterceptor = new GoogleAdsLoggingInterceptor(
                new GoogleAdsCallLogger(
                    $this->getLogger(),
                    $this->getLogLevel(),
                    $this->getEndpoint() ?: self::$DEFAULT_SERVICE_ADDRESS
                )
            );
            array_unshift(
                $clientOptions['transportConfig']['grpc']['interceptors'],
                $googleAdsLoggingInterceptor
            );
        }
        array_push(
            $clientOptions['transportConfig']['grpc']['interceptors'],
            ...$this->getGrpcInterceptors()
        );
        if (!empty($this->getProxy())) {
            putenv('http_proxy=' . $this->getProxy());
        }
        if (!empty($this->getTransport())) {
            $clientOptions += [self::$TRANSPORT_KEY => $this->getTransport()];
        }
        if (
            self::getGrpcDependencyStatus()
            && (!$this->getGrpcChannelIsSecure() || !empty($this->getGrpcChannelCredential()))
        ) {
            $channelCredentials = $this->getGrpcChannelIsSecure()
                ? $this->getGrpcChannelCredential()
                : ChannelCredentials::createInsecure();
            $clientOptions['transportConfig']['grpc']['stubOpts'] += [
                self::$CREDENTIALS_LOADER_KEY => $channelCredentials
            ];
        }
        $clientOptions += [
            self::$UNARY_MIDDLEWARES => $this->getUnaryMiddlewares(),
            self::$STREAMING_MIDDLEWARES => $this->getStreamingMiddlewares()
        ];

        return $clientOptions;
    }

    /**
     * @return AccountBudgetProposalServiceClient|\Google\Ads\GoogleAds\V15\Services\AccountBudgetProposalServiceClient
     */
    public function getAccountBudgetProposalServiceClient()
    {
        return $this->accountBudgetProposalServiceClient ??= (
            $this->useGapicV2Source()
            ? new AccountBudgetProposalServiceClient($this->getGoogleAdsClientOptions())
            : new AccountBudgetProposalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
            );

    }

    /**
     * @return AccountLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\AccountLinkServiceClient
     */
    public function getAccountLinkServiceClient()
    {
        return $this->accountLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new AccountLinkServiceClient($this->getGoogleAdsClientOptions())
                : new AccountLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );
    }

    /**
     * @return AdGroupAdLabelServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupAdLabelServiceClient
     */
    public function getAdGroupAdLabelServiceClient()
    {
        return $this->adGroupAdLabelServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupAdLabelServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupAdLabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupAdServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupAdServiceClient
     */
    public function getAdGroupAdServiceClient()
    {
        return $this->adGroupAdServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupAdServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupAdServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupAssetServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupAssetServiceClient
     */
    public function getAdGroupAssetServiceClient()
    {
        return $this->adGroupAssetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupAssetServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupAssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupAssetSetServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupAssetSetServiceClient
     */
    public function getAdGroupAssetSetServiceClient()
    {
        return $this->adGroupAssetSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupAssetSetServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupAssetSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );
    }

    /**
     * @return AdGroupBidModifierServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupBidModifierServiceClient
     */
    public function getAdGroupBidModifierServiceClient()
    {
        return $this->adGroupBidModifierServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupBidModifierServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupBidModifierServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupCriterionCustomizerServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupCriterionCustomizerServiceClient
     */
    public function getAdGroupCriterionCustomizerServiceClient()
    {
        return $this->adGroupCriterionCustomizerServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupCriterionCustomizerServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupCriterionCustomizerServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupCriterionLabelServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupCriterionLabelServiceClient
     */
    public function getAdGroupCriterionLabelServiceClient()
    {
        return $this->adGroupCriterionLabelServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupCriterionLabelServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupCriterionLabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupCriterionServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupCriterionServiceClient
     */
    public function getAdGroupCriterionServiceClient()
    {
        return $this->adGroupCriterionServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupCriterionServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupCriterionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupCustomizerServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupCustomizerServiceClient
     */
    public function getAdGroupCustomizerServiceClient()
    {
        return $this->adGroupCustomizerServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupCustomizerServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupCustomizerServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupExtensionSettingServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupExtensionSettingServiceClient
     */
    public function getAdGroupExtensionSettingServiceClient()
    {
        return $this->adGroupExtensionSettingServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupExtensionSettingServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupExtensionSettingServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupFeedServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupFeedServiceClient
     */
    public function getAdGroupFeedServiceClient()
    {
        return $this->adGroupFeedServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupFeedServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupFeedServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupLabelServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupLabelServiceClient
     */
    public function getAdGroupLabelServiceClient()
    {
        return $this->adGroupLabelServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupLabelServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupLabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdGroupServiceClient|\Google\Ads\GoogleAds\V15\Services\AdGroupServiceClient
     */
    public function getAdGroupServiceClient()
    {
        return $this->adGroupServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdGroupServiceClient($this->getGoogleAdsClientOptions())
                : new AdGroupServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdParameterServiceClient|\Google\Ads\GoogleAds\V15\Services\AdParameterServiceClient
     */
    public function getAdParameterServiceClient()
    {
        return $this->adParameterServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdParameterServiceClient($this->getGoogleAdsClientOptions())
                : new AdParameterServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AdServiceClient|\Google\Ads\GoogleAds\V15\Services\AdServiceClient
     */
    public function getAdServiceClient()
    {
        return $this->adServiceClient ??= (
            $this->useGapicV2Source()
                ? new AdServiceClient($this->getGoogleAdsClientOptions())
                : new AdServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetGroupAssetServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetGroupAssetServiceClient
     */
    public function getAssetGroupAssetServiceClient()
    {
        return $this->assetGroupAssetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetGroupAssetServiceClient($this->getGoogleAdsClientOptions())
                : new AssetGroupAssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetGroupListingGroupFilterServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetGroupListingGroupFilterServiceClient
     */
    public function getAssetGroupListingGroupFilterServiceClient()
    {
        return $this->assetGroupListingGroupFilterServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetGroupListingGroupFilterServiceClient($this->getGoogleAdsClientOptions())
                : new AssetGroupListingGroupFilterServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetGroupServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetGroupServiceClient
     */
    public function getAssetGroupServiceClient()
    {
        return $this->assetGroupServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetGroupServiceClient($this->getGoogleAdsClientOptions())
                : new AssetGroupServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetGroupSignalServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetGroupSignalServiceClient
     */
    public function getAssetGroupSignalServiceClient()
    {
        return $this->assetGroupSignalServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetGroupSignalServiceClient($this->getGoogleAdsClientOptions())
                : new AssetGroupSignalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetServiceClient
     */
    public function getAssetServiceClient()
    {
        return $this->assetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetServiceClient($this->getGoogleAdsClientOptions())
                : new AssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetSetAssetServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetSetAssetServiceClient
     */
    public function getAssetSetAssetServiceClient()
    {
        return $this->assetSetAssetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetSetAssetServiceClient($this->getGoogleAdsClientOptions())
                : new AssetSetAssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AssetSetServiceClient|\Google\Ads\GoogleAds\V15\Services\AssetSetServiceClient
     */
    public function getAssetSetServiceClient()
    {
        return $this->assetSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new AssetSetServiceClient($this->getGoogleAdsClientOptions())
                : new AssetSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AudienceInsightsServiceClient|\Google\Ads\GoogleAds\V15\Services\AudienceInsightsServiceClient
     */
    public function getAudienceInsightsServiceClient()
    {
        return $this->audienceInsightsServiceClient ??= (
            $this->useGapicV2Source()
                ? new AudienceInsightsServiceClient($this->getGoogleAdsClientOptions())
                : new AudienceInsightsServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return AudienceServiceClient|\Google\Ads\GoogleAds\V15\Services\AudienceServiceClient
     */
    public function getAudienceServiceClient()
    {
        return $this->audienceServiceClient ??= (
            $this->useGapicV2Source()
                ? new AudienceServiceClient($this->getGoogleAdsClientOptions())
                : new AudienceServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BatchJobServiceClient|\Google\Ads\GoogleAds\V15\Services\BatchJobServiceClient
     */
    public function getBatchJobServiceClient()
    {
        return $this->batchJobServiceClient ??= (
            $this->useGapicV2Source()
                ? new BatchJobServiceClient($this->getGoogleAdsClientOptions())
                : new BatchJobServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BiddingDataExclusionServiceClient|\Google\Ads\GoogleAds\V15\Services\BiddingDataExclusionServiceClient
     */
    public function getBiddingDataExclusionServiceClient()
    {
        return $this->biddingDataExclusionServiceClient ??= (
            $this->useGapicV2Source()
                ? new BiddingDataExclusionServiceClient($this->getGoogleAdsClientOptions())
                : new BiddingDataExclusionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BiddingSeasonalityAdjustmentServiceClient|\Google\Ads\GoogleAds\V15\Services\BiddingSeasonalityAdjustmentServiceClient
     */
    public function getBiddingSeasonalityAdjustmentServiceClient()
    {
        return $this->biddingSeasonalityAdjustmentServiceClient ??= (
            $this->useGapicV2Source()
                ? new BiddingSeasonalityAdjustmentServiceClient($this->getGoogleAdsClientOptions())
                : new BiddingSeasonalityAdjustmentServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BiddingStrategyServiceClient|\Google\Ads\GoogleAds\V15\Services\BiddingStrategyServiceClient
     */
    public function getBiddingStrategyServiceClient()
    {
        return $this->biddingStrategyServiceClient ??= (
            $this->useGapicV2Source()
                ? new BiddingStrategyServiceClient($this->getGoogleAdsClientOptions())
                : new BiddingStrategyServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BillingSetupServiceClient|\Google\Ads\GoogleAds\V15\Services\BillingSetupServiceClient
     */
    public function getBillingSetupServiceClient()
    {
        return $this->billingSetupServiceClient ??= (
            $this->useGapicV2Source()
                ? new BillingSetupServiceClient($this->getGoogleAdsClientOptions())
                : new BillingSetupServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return BrandSuggestionServiceClient|\Google\Ads\GoogleAds\V15\Services\BrandSuggestionServiceClient
     */
    public function getBrandSuggestionServiceClient()
    {
        return $this->brandSuggestionServiceClient ??= (
            $this->useGapicV2Source()
                ? new BrandSuggestionServiceClient($this->getGoogleAdsClientOptions())
                : new BrandSuggestionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignAssetServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignAssetServiceClient
     */
    public function getCampaignAssetServiceClient()
    {
        return $this->campaignAssetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignAssetServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignAssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignAssetSetServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignAssetSetServiceClient
     */
    public function getCampaignAssetSetServiceClient()
    {
        return $this->campaignAssetSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignAssetSetServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignAssetSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignBidModifierServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignBidModifierServiceClient
     */
    public function getCampaignBidModifierServiceClient()
    {
        return $this->campaignBidModifierServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignBidModifierServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignBidModifierServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignBudgetServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignBudgetServiceClient
     */
    public function getCampaignBudgetServiceClient()
    {
        return $this->campaignBudgetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignBudgetServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignBudgetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignConversionGoalServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignConversionGoalServiceClient
     */
    public function getCampaignConversionGoalServiceClient()
    {
        return $this->campaignConversionGoalServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignConversionGoalServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignConversionGoalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignCriterionServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignCriterionServiceClient
     */
    public function getCampaignCriterionServiceClient()
    {
        return $this->campaignCriterionServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignCriterionServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignCriterionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignCustomizerServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignCustomizerServiceClient
     */
    public function getCampaignCustomizerServiceClient()
    {
        return $this->campaignCustomizerServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignCustomizerServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignCustomizerServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignDraftServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignDraftServiceClient
     */
    public function getCampaignDraftServiceClient()
    {
        return $this->campaignDraftServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignDraftServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignDraftServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignExtensionSettingServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignExtensionSettingServiceClient
     */
    public function getCampaignExtensionSettingServiceClient()
    {
        return $this->campaignExtensionSettingServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignExtensionSettingServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignExtensionSettingServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignFeedServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignFeedServiceClient
     */
    public function getCampaignFeedServiceClient()
    {
        return $this->campaignFeedServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignFeedServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignFeedServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignGroupServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignGroupServiceClient
     */
    public function getCampaignGroupServiceClient()
    {
        return $this->campaignGroupServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignGroupServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignGroupServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignLabelServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignLabelServiceClient
     */
    public function getCampaignLabelServiceClient()
    {
        return $this->campaignLabelServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignLabelServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignLabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignLifecycleGoalServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignLifecycleGoalServiceClient
     */
    public function getCampaignLifecycleGoalServiceClient()
    {
        return $this->campaignLifecycleGoalServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignLifecycleGoalServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignLifecycleGoalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CampaignServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignServiceClient
     */
    public function getCampaignServiceClient()
    {
        return $this->campaignServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );
    }

    /**
     * @return CampaignSharedSetServiceClient|\Google\Ads\GoogleAds\V15\Services\CampaignSharedSetServiceClient
     */
    public function getCampaignSharedSetServiceClient()
    {
        return $this->campaignSharedSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CampaignSharedSetServiceClient($this->getGoogleAdsClientOptions())
                : new CampaignSharedSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionActionServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionActionServiceClient
     */
    public function getConversionActionServiceClient()
    {
        return $this->conversionActionServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionActionServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionActionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionAdjustmentUploadServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionAdjustmentUploadServiceClient
     */
    public function getConversionAdjustmentUploadServiceClient()
    {
        return $this->conversionAdjustmentUploadServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionAdjustmentUploadServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionAdjustmentUploadServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionCustomVariableServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionCustomVariableServiceClient
     */
    public function getConversionCustomVariableServiceClient()
    {
        return $this->conversionCustomVariableServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionCustomVariableServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionCustomVariableServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionGoalCampaignConfigServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionGoalCampaignConfigServiceClient
     */
    public function getConversionGoalCampaignConfigServiceClient()
    {
        return $this->conversionGoalCampaignConfigServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionGoalCampaignConfigServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionGoalCampaignConfigServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionUploadServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionUploadServiceClient
     */
    public function getConversionUploadServiceClient()
    {
        return $this->conversionUploadServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionUploadServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionUploadServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionValueRuleServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionValueRuleServiceClient
     */
    public function getConversionValueRuleServiceClient()
    {
        return $this->conversionValueRuleServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionValueRuleServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionValueRuleServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ConversionValueRuleSetServiceClient|\Google\Ads\GoogleAds\V15\Services\ConversionValueRuleSetServiceClient
     */
    public function getConversionValueRuleSetServiceClient()
    {
        return $this->conversionValueRuleSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new ConversionValueRuleSetServiceClient($this->getGoogleAdsClientOptions())
                : new ConversionValueRuleSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomAudienceServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomAudienceServiceClient
     */
    public function getCustomAudienceServiceClient()
    {
        return $this->customAudienceServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomAudienceServiceClient($this->getGoogleAdsClientOptions())
                : new CustomAudienceServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomConversionGoalServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomConversionGoalServiceClient
     */
    public function getCustomConversionGoalServiceClient()
    {
        return $this->customConversionGoalServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomConversionGoalServiceClient($this->getGoogleAdsClientOptions())
                : new CustomConversionGoalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerAssetServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerAssetServiceClient
     */
    public function getCustomerAssetServiceClient()
    {
        return $this->customerAssetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerAssetServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerAssetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerAssetSetServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerAssetSetServiceClient
     */
    public function getCustomerAssetSetServiceClient()
    {
        return $this->customerAssetSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerAssetSetServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerAssetSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerClientLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerClientLinkServiceClient
     */
    public function getCustomerClientLinkServiceClient()
    {
        return $this->customerClientLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerClientLinkServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerClientLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerConversionGoalServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerConversionGoalServiceClient
     */
    public function getCustomerConversionGoalServiceClient()
    {
        return $this->customerConversionGoalServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerConversionGoalServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerConversionGoalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerCustomizerServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerCustomizerServiceClient
     */
    public function getCustomerCustomizerServiceClient()
    {
        return $this->customerCustomizerServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerCustomizerServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerCustomizerServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerExtensionSettingServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerExtensionSettingServiceClient
     */
    public function getCustomerExtensionSettingServiceClient()
    {
        return $this->customerExtensionSettingServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerExtensionSettingServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerExtensionSettingServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerFeedServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerFeedServiceClient
     */
    public function getCustomerFeedServiceClient()
    {
        return $this->customerFeedServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerFeedServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerFeedServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerLabelServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerLabelServiceClient
     */
    public function getCustomerLabelServiceClient()
    {
        return $this->customerLabelServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerLabelServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerLabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerLifecycleGoalServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerLifecycleGoalServiceClient
     */
    public function getCustomerLifecycleGoalServiceClient()
    {
        return $this->customerLifecycleGoalServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerLifecycleGoalServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerLifecycleGoalServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerManagerLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerManagerLinkServiceClient
     */
    public function getCustomerManagerLinkServiceClient()
    {
        return $this->customerManagerLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerManagerLinkServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerManagerLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerNegativeCriterionServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerNegativeCriterionServiceClient
     */
    public function getCustomerNegativeCriterionServiceClient()
    {
        return $this->customerNegativeCriterionServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerNegativeCriterionServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerNegativeCriterionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerServiceClient
     */
    public function getCustomerServiceClient()
    {
        return $this->customerServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerSkAdNetworkConversionValueSchemaServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerSkAdNetworkConversionValueSchemaServiceClient
     */
    public function getCustomerSkAdNetworkConversionValueSchemaServiceClient()
    {
        return $this->customerSkAdNetworkConversionValueSchemaServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerSkAdNetworkConversionValueSchemaServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerSkAdNetworkConversionValueSchemaServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerUserAccessInvitationServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerUserAccessInvitationServiceClient
     */
    public function getCustomerUserAccessInvitationServiceClient()
    {
        return $this->customerUserAccessInvitationServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerUserAccessInvitationServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerUserAccessInvitationServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomerUserAccessServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomerUserAccessServiceClient
     */
    public function getCustomerUserAccessServiceClient()
    {
        return $this->customerUserAccessServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomerUserAccessServiceClient($this->getGoogleAdsClientOptions())
                : new CustomerUserAccessServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomInterestServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomInterestServiceClient
     */
    public function getCustomInterestServiceClient()
    {
        return $this->customInterestServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomInterestServiceClient($this->getGoogleAdsClientOptions())
                : new CustomInterestServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return CustomizerAttributeServiceClient|\Google\Ads\GoogleAds\V15\Services\CustomizerAttributeServiceClient
     */
    public function getCustomizerAttributeServiceClient()
    {
        return $this->customizerAttributeServiceClient ??= (
            $this->useGapicV2Source()
                ? new CustomizerAttributeServiceClient($this->getGoogleAdsClientOptions())
                : new CustomizerAttributeServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ExperimentArmServiceClient|\Google\Ads\GoogleAds\V15\Services\ExperimentArmServiceClient
     */
    public function getExperimentArmServiceClient()
    {
        return $this->experimentArmServiceClient ??= (
            $this->useGapicV2Source()
                ? new ExperimentArmServiceClient($this->getGoogleAdsClientOptions())
                : new ExperimentArmServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ExperimentServiceClient|\Google\Ads\GoogleAds\V15\Services\ExperimentServiceClient
     */
    public function getExperimentServiceClient()
    {
        return $this->experimentServiceClient ??= (
            $this->useGapicV2Source()
                ? new ExperimentServiceClient($this->getGoogleAdsClientOptions())
                : new ExperimentServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ExtensionFeedItemServiceClient|\Google\Ads\GoogleAds\V15\Services\ExtensionFeedItemServiceClient
     */
    public function getExtensionFeedItemServiceClient()
    {
        return $this->extensionFeedItemServiceClient ??= (
            $this->useGapicV2Source()
                ? new ExtensionFeedItemServiceClient($this->getGoogleAdsClientOptions())
                : new ExtensionFeedItemServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedItemServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedItemServiceClient
     */
    public function getFeedItemServiceClient()
    {
        return $this->feedItemServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedItemServiceClient($this->getGoogleAdsClientOptions())
                : new FeedItemServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedItemSetLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedItemSetLinkServiceClient
     */
    public function getFeedItemSetLinkServiceClient()
    {
        return $this->feedItemSetLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedItemSetLinkServiceClient($this->getGoogleAdsClientOptions())
                : new FeedItemSetLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedItemSetServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedItemSetServiceClient
     */
    public function getFeedItemSetServiceClient()
    {
        return $this->feedItemSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedItemSetServiceClient($this->getGoogleAdsClientOptions())
                : new FeedItemSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedItemTargetServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedItemTargetServiceClient
     */
    public function getFeedItemTargetServiceClient()
    {
        return $this->feedItemTargetServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedItemTargetServiceClient($this->getGoogleAdsClientOptions())
                : new FeedItemTargetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedMappingServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedMappingServiceClient
     */
    public function getFeedMappingServiceClient()
    {
        return $this->feedMappingServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedMappingServiceClient($this->getGoogleAdsClientOptions())
                : new FeedMappingServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return FeedServiceClient|\Google\Ads\GoogleAds\V15\Services\FeedServiceClient
     */
    public function getFeedServiceClient()
    {
        return $this->feedServiceClient ??= (
            $this->useGapicV2Source()
                ? new FeedServiceClient($this->getGoogleAdsClientOptions())
                : new FeedServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return GeoTargetConstantServiceClient|\Google\Ads\GoogleAds\V15\Services\GeoTargetConstantServiceClient
     */
    public function getGeoTargetConstantServiceClient()
    {
        return $this->geoTargetConstantServiceClient ??= (
            $this->useGapicV2Source()
                ? new GeoTargetConstantServiceClient($this->getGoogleAdsClientOptions())
                : new GeoTargetConstantServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return GoogleAdsFieldServiceClient|\Google\Ads\GoogleAds\V15\Services\GoogleAdsFieldServiceClient
     */
    public function getGoogleAdsFieldServiceClient()
    {
        return $this->googleAdsFieldServiceClient ??= (
            $this->useGapicV2Source()
                ? new GoogleAdsFieldServiceClient($this->getGoogleAdsClientOptions())
                : new GoogleAdsFieldServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return GoogleAdsServiceClient|\Google\Ads\GoogleAds\V15\Services\GoogleAdsServiceClient
     */
    public function getGoogleAdsServiceClient()
    {
        return $this->googleAdsServiceClient ??= (
            $this->useGapicV2Source()
                ? new GoogleAdsServiceClient($this->getGoogleAdsClientOptions())
                : new GoogleAdsServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return InvoiceServiceClient|\Google\Ads\GoogleAds\V15\Services\InvoiceServiceClient
     */
    public function getInvoiceServiceClient()
    {
        return $this->invoiceServiceClient ??= (
            $this->useGapicV2Source()
                ? new InvoiceServiceClient($this->getGoogleAdsClientOptions())
                : new InvoiceServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanAdGroupKeywordServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanAdGroupKeywordServiceClient
     */
    public function getKeywordPlanAdGroupKeywordServiceClient()
    {
        return $this->keywordPlanAdGroupKeywordServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanAdGroupKeywordServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanAdGroupKeywordServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanAdGroupServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanAdGroupServiceClient
     */
    public function getKeywordPlanAdGroupServiceClient()
    {
        return $this->keywordPlanAdGroupServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanAdGroupServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanAdGroupServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanCampaignKeywordServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanCampaignKeywordServiceClient
     */
    public function getKeywordPlanCampaignKeywordServiceClient()
    {
        return $this->keywordPlanCampaignKeywordServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanCampaignKeywordServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanCampaignKeywordServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanCampaignServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanCampaignServiceClient
     */
    public function getKeywordPlanCampaignServiceClient()
    {
        return $this->keywordPlanCampaignServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanCampaignServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanCampaignServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanIdeaServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanIdeaServiceClient
     */
    public function getKeywordPlanIdeaServiceClient()
    {
        return $this->keywordPlanIdeaServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanIdeaServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanIdeaServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordPlanServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordPlanServiceClient
     */
    public function getKeywordPlanServiceClient()
    {
        return $this->keywordPlanServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordPlanServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordPlanServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return KeywordThemeConstantServiceClient|\Google\Ads\GoogleAds\V15\Services\KeywordThemeConstantServiceClient
     */
    public function getKeywordThemeConstantServiceClient()
    {
        return $this->keywordThemeConstantServiceClient ??= (
            $this->useGapicV2Source()
                ? new KeywordThemeConstantServiceClient($this->getGoogleAdsClientOptions())
                : new KeywordThemeConstantServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return LabelServiceClient|\Google\Ads\GoogleAds\V15\Services\LabelServiceClient
     */
    public function getLabelServiceClient()
    {
        return $this->labelServiceClient ??= (
            $this->useGapicV2Source()
                ? new LabelServiceClient($this->getGoogleAdsClientOptions())
                : new LabelServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return OfflineUserDataJobServiceClient|\Google\Ads\GoogleAds\V15\Services\OfflineUserDataJobServiceClient
     */
    public function getOfflineUserDataJobServiceClient()
    {
        return $this->offlineUserDataJobServiceClient ??= (
            $this->useGapicV2Source()
                ? new OfflineUserDataJobServiceClient($this->getGoogleAdsClientOptions())
                : new OfflineUserDataJobServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return PaymentsAccountServiceClient|\Google\Ads\GoogleAds\V15\Services\PaymentsAccountServiceClient
     */
    public function getPaymentsAccountServiceClient()
    {
        return $this->paymentsAccountServiceClient ??= (
            $this->useGapicV2Source()
                ? new PaymentsAccountServiceClient($this->getGoogleAdsClientOptions())
                : new PaymentsAccountServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ProductLinkInvitationServiceClient|\Google\Ads\GoogleAds\V15\Services\ProductLinkInvitationServiceClient
     */
    public function getProductLinkInvitationServiceClient()
    {
        return $this->productLinkInvitationServiceClient ??= (
            $this->useGapicV2Source()
                ? new ProductLinkInvitationServiceClient($this->getGoogleAdsClientOptions())
                : new ProductLinkInvitationServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ProductLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\ProductLinkServiceClient
     */
    public function getProductLinkServiceClient()
    {
        return $this->productLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new ProductLinkServiceClient($this->getGoogleAdsClientOptions())
                : new ProductLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ReachPlanServiceClient|\Google\Ads\GoogleAds\V15\Services\ReachPlanServiceClient
     */
    public function getReachPlanServiceClient()
    {
        return $this->reachPlanServiceClient ??= (
            $this->useGapicV2Source()
                ? new ReachPlanServiceClient($this->getGoogleAdsClientOptions())
                : new ReachPlanServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return RecommendationServiceClient|\Google\Ads\GoogleAds\V15\Services\RecommendationServiceClient
     */
    public function getRecommendationServiceClient()
    {
        return $this->recommendationServiceClient ??= (
            $this->useGapicV2Source()
                ? new RecommendationServiceClient($this->getGoogleAdsClientOptions())
                : new RecommendationServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return RecommendationSubscriptionServiceClient|\Google\Ads\GoogleAds\V15\Services\RecommendationSubscriptionServiceClient
     */
    public function getRecommendationSubscriptionServiceClient()
    {
        return $this->recommendationSubscriptionServiceClient ??= (
            $this->useGapicV2Source()
                ? new RecommendationSubscriptionServiceClient($this->getGoogleAdsClientOptions())
                : new RecommendationSubscriptionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return RemarketingActionServiceClient|\Google\Ads\GoogleAds\V15\Services\RemarketingActionServiceClient
     */
    public function getRemarketingActionServiceClient()
    {
        return $this->remarketingActionServiceClient ??= (
            $this->useGapicV2Source()
                ? new RemarketingActionServiceClient($this->getGoogleAdsClientOptions())
                : new RemarketingActionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return SharedCriterionServiceClient|\Google\Ads\GoogleAds\V15\Services\SharedCriterionServiceClient
     */
    public function getSharedCriterionServiceClient()
    {
        return $this->sharedCriterionServiceClient ??= (
            $this->useGapicV2Source()
                ? new SharedCriterionServiceClient($this->getGoogleAdsClientOptions())
                : new SharedCriterionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return SharedSetServiceClient|\Google\Ads\GoogleAds\V15\Services\SharedSetServiceClient
     */
    public function getSharedSetServiceClient()
    {
        return $this->sharedSetServiceClient ??= (
            $this->useGapicV2Source()
                ? new SharedSetServiceClient($this->getGoogleAdsClientOptions())
                : new SharedSetServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return SmartCampaignSettingServiceClient|\Google\Ads\GoogleAds\V15\Services\SmartCampaignSettingServiceClient
     */
    public function getSmartCampaignSettingServiceClient()
    {
        return $this->smartCampaignSettingServiceClient ??= (
            $this->useGapicV2Source()
                ? new SmartCampaignSettingServiceClient($this->getGoogleAdsClientOptions())
                : new SmartCampaignSettingServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return SmartCampaignSuggestServiceClient|\Google\Ads\GoogleAds\V15\Services\SmartCampaignSuggestServiceClient
     */
    public function getSmartCampaignSuggestServiceClient()
    {
        return $this->smartCampaignSuggestServiceClient ??= (
            $this->useGapicV2Source()
                ? new SmartCampaignSuggestServiceClient($this->getGoogleAdsClientOptions())
                : new SmartCampaignSuggestServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return ThirdPartyAppAnalyticsLinkServiceClient|\Google\Ads\GoogleAds\V15\Services\ThirdPartyAppAnalyticsLinkServiceClient
     */
    public function getThirdPartyAppAnalyticsLinkServiceClient()
    {
        return $this->thirdPartyAppAnalyticsLinkServiceClient ??= (
            $this->useGapicV2Source()
                ? new ThirdPartyAppAnalyticsLinkServiceClient($this->getGoogleAdsClientOptions())
                : new ThirdPartyAppAnalyticsLinkServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return TravelAssetSuggestionServiceClient|\Google\Ads\GoogleAds\V15\Services\TravelAssetSuggestionServiceClient
     */
    public function getTravelAssetSuggestionServiceClient()
    {
        return $this->travelAssetSuggestionServiceClient ??= (
            $this->useGapicV2Source()
                ? new TravelAssetSuggestionServiceClient($this->getGoogleAdsClientOptions())
                : new TravelAssetSuggestionServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return UserDataServiceClient|\Google\Ads\GoogleAds\V15\Services\UserDataServiceClient
     */
    public function getUserDataServiceClient()
    {
        return $this->userDataServiceClient ??= (
            $this->useGapicV2Source()
                ? new UserDataServiceClient($this->getGoogleAdsClientOptions())
                : new UserDataServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }

    /**
     * @return UserListServiceClient|\Google\Ads\GoogleAds\V15\Services\UserListServiceClient
     */
    public function getUserListServiceClient()
    {
       return $this->userListServiceClient ??= (
            $this->useGapicV2Source()
                ? new UserListServiceClient($this->getGoogleAdsClientOptions())
                : new UserListServiceClientv15(
                    $this->getGoogleAdsClientOptions()
                )
        );

    }
}
