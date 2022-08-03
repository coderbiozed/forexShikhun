<?php

namespace App\Repositories;

use App\Models\Quote;
use App\Repositories\BaseRepository;

/**
 * Class QuoteRepository
 * @package App\Repositories
 * @version July 27, 2022, 4:41 am UTC
*/

class QuoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author_name',
        'quate_des',
        'author_title'
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
        return Quote::class;
    }
}
