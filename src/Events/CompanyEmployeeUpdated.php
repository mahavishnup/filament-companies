<?php

namespace Wallo\FilamentCompanies\Events;

use Filament\Events\ServingFilament;
use Illuminate\Foundation\Events\Dispatchable;

class CompanyEmployeeUpdated extends ServingFilament
{
    use Dispatchable;

    /**
     * The company instance.
     *
     * @var mixed
     */
    public $company;

    /**
     * The company employee that was updated.
     *
     * @var mixed
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  mixed  $company
     * @param  mixed  $user
     * @return void
     */
    public function __construct($company, $user)
    {
        $this->company = $company;
        $this->user = $user;
    }
}
