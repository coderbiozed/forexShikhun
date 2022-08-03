<?php

namespace App\Repositories;

use App\Models\Faqs;
use App\Repositories\BaseRepository;

/**
 * Class FaqsRepository
 * @package App\Repositories
 * @version August 2, 2022, 5:12 am UTC
*/

class FaqsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'question',
        'answer'
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
        return Faqs::class;
    }
}
