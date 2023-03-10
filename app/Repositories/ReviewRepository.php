<?php

namespace App\Repositories;

use App\Models\Review;
use App\Repositories\BaseRepository;

/**
 * Class ReviewRepository
 * @package App\Repositories
 * @version October 16, 2022, 7:22 pm UTC
*/

class ReviewRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'rating',
        'description',
        'accept'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Review::class;
    }
}
