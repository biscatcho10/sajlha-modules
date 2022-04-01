<?php

namespace Modules\Auth\Repositories;

use Modules\Auth\Entities\User;
use Modules\Auth\Http\Filters\UserFilter;
use Modules\Base\Interfaces\CrudRepository;

class UserRepository implements CrudRepository
{
    /**
     * @var \Modules\Countries\Http\Filters\UserFilter
     */
    private $filter;

    /**
     * UserRepository constructor.
     *
     * @param \Modules\Countries\Http\Filters\UserFilter $filter
     */
    public function __construct(UserFilter $filter)
    {
        $this->filter = $filter;
    }

    /**
     * Get all countries as a collection.
     *
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function all()
    {
        return User::filter($this->filter)->paginate(request('perPage'));
    }

    /**
     * Save the created model to storage.
     *
     * @param array $data
     * @return \Modules\Countries\Entities\User
     */
    public function create(array $data)
    {
        $user = User::create($data);

        return $user;
    }

    /**
     * Display the given User instance.
     *
     * @param mixed $model
     * @return \Modules\Countries\Entities\User
     */
    public function find($model)
    {
        if ($model instanceof User) {
            return $model;
        }

        return User::findOrFail($model);
    }

    /**
     * Update the given User in the storage.
     *
     * @param mixed $model
     * @param array $data
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function update($model, array $data)
    {
        $user = $this->find($model);

        $user->update($data);

        return $user;
    }

    /**
     * Delete the given User from storage.
     *
     * @param mixed $model
     * @return void
     * @throws \Exception
     */
    public function delete($model)
    {
        $this->find($model)->delete();
    }
}
