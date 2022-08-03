<?php

namespace App\Repositories;

use App\Models\Videos;
use App\Repositories\BaseRepository;

/**
 * Class VideosRepository
 * @package App\Repositories
 * @version July 24, 2022, 5:31 am UTC
*/

class VideosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'video'
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
        return Videos::class;
    }
}
