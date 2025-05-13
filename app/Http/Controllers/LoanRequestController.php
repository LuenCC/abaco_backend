<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanRequestRequest;
use App\Http\Resources\LoanRequestCollection;
use App\Http\Resources\LoanRequestResource;
use App\Services\ApiService;

class LoanRequestController extends Controller
{
    private ApiService $apiService;

    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function index(): LoanRequestCollection
    {
        $loanRequests = $this->apiService->get();
        return new LoanRequestCollection($loanRequests);
    }

    public function store(LoanRequestRequest $request): LoanRequestResource
    {
        $validated = $request->validated();

        $loanRequest = $this->apiService->create($validated);
        return new LoanRequestResource($loanRequest);
    }
}
