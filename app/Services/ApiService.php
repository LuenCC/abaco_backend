<?php

namespace App\Services;

use App\Models\LoanRequest;
use Illuminate\Database\Eloquent\Collection;

class ApiService
{
    public function get(): Collection
    {
        return LoanRequest::get();
    }

    public function create($data): LoanRequest
    {
        $loanRequest = new LoanRequest();
        $loanRequest->requested_amount = $data['requested_amount'];
        $loanRequest->requested_at = now();
        $loanRequest->save();

        return $loanRequest;
    }
}
