<?php

namespace App\Rules;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class TimeBetween implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $pickupDate=Carbon::parse($value);

        $pickupTime= Carbon::createFromTime($pickupDate->hour,$pickupDate->minute,$pickupDate->second);

        // open time
        $earliestTime=Carbon::createFromTimeString('12:30:00');
        $lastTime=Carbon::createFromTimeString('23:30:00');

        return $pickupTime->between($earliestTime , $lastTime) ? true: false;



    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Chose between 12:30 and 23:30';
    }
}
