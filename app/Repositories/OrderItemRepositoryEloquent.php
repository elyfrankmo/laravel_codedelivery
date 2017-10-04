<?php

namespace CodeDeliveryRepositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDeliveryRepositories\OrderItemRepository;
use CodeDeliveryModels\OrderItem;
use CodeDeliveryValidators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent
 * @package namespace CodeDeliveryRepositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
