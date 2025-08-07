<?php

namespace App\Repositories;

/**
 * -------------------------------
 * Repository Class Standard
 * -------------------------------
 * Please implements all repository 
 * using this interface
 * 
 */

interface RepositoryInterface
{
    //show all collection
    public function all();

    //show paginate collection
    public function paginate($perpage);

    //show paginate collection with conditions
    public function paginateWithConditions(array $condition, int $perpage, string $orderBy = 'created_at', string $sort = 'desc');

    //show document by id
    public function show($id);

    //show document by id with relations
    public function showWithRelation($id, $relations);

    //show collection/document by condition
    public function condition($rules, $first);

    //insert single record
    public function store($request);

    //update single recored
    public function update($id, $request);

    //update multiple recored
    public function bulkUpdate($ids, $request);

    //delete single recored
    public function delete($id);

    //delete by condition recored
    public function deleteByCondition($condition);
}
