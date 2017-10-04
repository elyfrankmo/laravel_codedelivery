<?php

namespace CodeDeliveryRepositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDeliveryRepositories\UserRepository;
use CodeDeliveryModels\User;
use CodeDeliveryValidators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace CodeDeliveryRepositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
