<?php

namespace Phramework\ValidateFiller;

use Phramework\Validate\BaseValidator;
use Phramework\Validate\IntegerValidator;

/**
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @since  0.1.0
 * @author Xenofon Spafaridis <nohponex@gmail.com>
 */
class IntegerValidatorFiller implements IValidatorFiller
{
    /**
     * @param IntegerValidator $validator
     * @return int
     */
    public function fill(BaseValidator $validator)
    {
        $faker = \Faker\Factory::create();

        $minimum = $validator->minimum ?? PHP_INT_MIN;

        $maximum = $validator->maximum ?? PHP_INT_MAX;

        if ($validator->exclusiveMinimum) {
            $minimum +=1;
        }

        if ($validator->exclusiveMaximum) {
            $maximum -= 1;
        }

        /*
         * generate an non exclusive number
         */
        $number = $faker->numberBetween(
            $minimum,
            $maximum
        );

        /*
         * Ensure multipleOf
         */
        $number = ((int) ($number / $validator->multipleOf)) * $validator->multipleOf;

        return $number;
    }
}
