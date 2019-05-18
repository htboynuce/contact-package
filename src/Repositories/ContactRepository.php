<?php
namespace Thuanvh\Contact\Repositories;

class ContactRepository extends BaseRepository
{

    public function getModel()
    {
        // TODO: Implement getModel() method.
        return \Thuanvh\Contact\Models\Contact::class;
    }
}