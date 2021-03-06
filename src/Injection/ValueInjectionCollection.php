<?php
/**
 * Copyright 2015-2017 Xenofon Spafaridis
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Phramework\ValidateFiller\Injection;

/**
 * @license https://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @since  0.4.0
 * @author Xenofon Spafaridis <nohponex@gmail.com>
 */
class ValueInjectionCollection extends \ArrayObject
{
    /**
     * @param ValueInjection $value
     * @throws \TypeError
     */
    public function append($value)
    {
        if (!($value instanceof ValueInjection)) {
            throw new \TypeError(sprintf(
                'Argument 1 passed to %s::%s must be an instance of %s',
                __CLASS__,
                __METHOD__,
                ValueInjection::class
            ));
        }

        return parent::append($value);
    }
}
