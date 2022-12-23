<?php

namespace App\Repositories;

use App\Models\Alluser;
use App\Repositories\BaseRepository;

/**
 * Class AlluserRepository
 * @package App\Repositories
 * @version September 5, 2022, 5:03 am UTC
*/

class AlluserRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'username',
        'user_title',
        'about',
        'location',
        'image',
        'status',
        'remember_token'
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
        return Alluser::class;
    }
}
