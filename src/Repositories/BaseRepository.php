<?php
namespace Thuanvh\Contact\Repositories;

abstract class BaseRepository implements RepositoryInterface
{
    /**
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $_model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * get model
     * @return mixed
     */
    abstract function getModel();

    /**
     * set model
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function setModel(){
        $this->_model = app()->make($this->getModel());
    }

    /**
     * Get All
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model[]|mixed
     */
    public function getAll(){
        return $this->_model->all();
    }

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id){
        return $this->_model->find($id);
    }

    /**
     * create
     * @param array $attributes
     * @return mixed
     */
    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }

    /**
     * update
     * @param $id
     * @param array $attributes
     * @return bool|mixed
     */
    public function update($id, array $attributes)
    {
        $result = $this->_model->find($id);
        if($result){
            $result->update($attributes);
            return $result;
        }
        return false;
    }

    /**
     * delete
     * @param $id
     * @return bool|mixed
     */
    public function delete($id)
    {
        $result = $this->_model->find($id);
        if($result){
            $result->delete();
            return true;
        }
        return false;
    }
}