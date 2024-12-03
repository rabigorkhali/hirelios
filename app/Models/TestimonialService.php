<?php

namespace App\Models;

use App\Models\Testimonial;
use App\Services\Service;

class TestimonialService extends Service
{
    public function __construct(Testimonial $model)
    {
        parent::__construct($model);
    }
}
