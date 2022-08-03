<?php

namespace App\Repositories;

use App\Models\Subscribe;
use App\Repositories\BaseRepository;

/**
 * Class SubscribeRepository
 * @package App\Repositories
 * @version July 25, 2022, 6:43 am UTC
*/

class SubscribeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email',
        'email_verified_at'
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
        return Subscribe::class;
    }
}
