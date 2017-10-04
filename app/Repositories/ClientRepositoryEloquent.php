<?php

namespace CodeDeliveryRepositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDeliveryRepositories\ClientRepository;
use CodeDeliveryModels\Client;
use CodeDeliveryValidators\ClientValidator;

/**
 * Class ClientRepositoryEloquent
 * @package namespace CodeDeliveryRepositories;
 */
class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
