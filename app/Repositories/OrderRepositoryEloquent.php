<?php

namespace CodeDeliveryRepositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDeliveryRepositories\OrderRepository;
use CodeDeliveryModels\Order;
use CodeDeliveryValidators\OrderValidator;

/**
 * Class OrderRepositoryEloquent
 * @package namespace CodeDeliveryRepositories;
 */
class OrderRepositoryEloquent extends BaseRepository implements OrderRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
