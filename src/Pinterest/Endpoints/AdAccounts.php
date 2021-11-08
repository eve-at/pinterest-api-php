<?php
/**
 * Copyright 2021 Alexandre Muraviov
 *
 * (c) Alexandre Muraviov <amuraviov@alltimedigital.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DirkGroenen\Pinterest\Endpoints;

use DirkGroenen\Pinterest\Models\AdAccount;
use DirkGroenen\Pinterest\Models\Collection;

class AdAccounts extends Endpoint {

    /**
     * Get a list of the ad_accounts
     *
     * @access public
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ad_accounts/list
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return AdAccount
     */
    public function getAdAccounts(array $data = [])
    {
        $response = $this->request->get("ad_accounts/", $data);
        return new AdAccount($this->master, $response);
    }

    /**
     * Get ad account analytics
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ad_account/analytics
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getAnalytics($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/analytics/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * List campaigns
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/campaigns/list
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getCampaigns($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/campaigns/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * Get campaign analytics
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/campaigns/analytics
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getCampaignsAnalytics($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/campaigns/analytics/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * List ad groups
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ad_groups/list
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getAdGroups($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/ad_groups/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * Get ad group analytics
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ad_groups/analytics
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getAdGroupsAnalytics($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/ad_groups/analytics/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * List ads
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ads/list
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getAds($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/ads/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }

    /**
     * Get ad analytics
     *
     * @access public
     * @param  string   $ad_account_id
     * @param array     $data
     * @see https://developers.pinterest.com/docs/api/v5/#operation/ads/analytics
     * @throws \DirkGroenen\Pinterest\Exceptions\PinterestException
     * @return Collection
     */
    public function getAdsAnalytics($ad_account_id, array $data = [])
    {
        $response = $this->request->get(sprintf("ad_accounts/%s/ads/analytics/", $ad_account_id), $data);
        return new Collection($this->master, $response, "AdAccount");
    }
}