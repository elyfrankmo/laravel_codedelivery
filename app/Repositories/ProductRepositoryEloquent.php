<?php

namespace CodeDeliveryRepositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use CodeDeliveryRepositories\ProductRepository;
use CodeDeliveryModels\Product;
use CodeDeliveryValidators\ProductValidator;

/**
 * Class ProductRepositoryEloquent
 * @package namespace CodeDeliveryRepositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
