<?php
/**
 * Created by PhpStorm.
 * User: GitzJoey
 * Date: 12/2/2016
 * Time: 9:13 PM
 */

namespace App\Services;

use Doctrine\Common\Collections\Collection;

interface StoreService
{
    public function getAllStore();

    public function isEmptyStoreTable();

    public function defaultStorePresent();

    public function getDefaultStore();

    public function getFrontWebStore();

    public function resetIsDefault();

    public function resetFrontWeb();

    public function setDefaultStore($id);

    public function createDefaultStore($storeName);

    /**
     * Get all stores that have one or more empty manual-filled fields/properties (except remarks).
     *
     * @return Collection unfinished stores
     */
    public function getUnfinishedStore();

    /**
     * Check whether there are some stores that have one 
     * or more empty manual-filled fields/properties (except remarks) or not.
     * 
     * @return bool
     */
    public function isUnfinishedStoreExist();
}
