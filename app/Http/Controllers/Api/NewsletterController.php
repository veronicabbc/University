<?php

namespace App\Http\Controllers\Api;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Http\Requests\CreateNewsletterRquest;

class NewsletterController extends ApiController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNewsletterRquest $request)
    {
        Newsletter::create(
            $request->only('email')
        );
        return $this->messageResponse('Email Address added successfully', 200);
    }
}
