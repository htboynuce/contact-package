<?php
namespace Thuanvh\Contact\Repositories;
interface RepositoryInterface{
    /**
     * get all
     * @return mixed
     */
    public function getAll();

    /**
     * get one
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes);

    /**
     * update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, array $attributes);

    /**
     * delete
     * @param $id
     * @return mixed
     */
    public function delete($id);
}