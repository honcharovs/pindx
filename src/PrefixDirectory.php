<?php
/*
 * Copyright 2018 Alexey Kopytko <alexey@kopytko.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

declare(strict_types=1);

namespace RussianPostIndex;

/**
 * Частичный справочник индексов.
 */
final class PrefixDirectory
{
    /**
     * Список всех кодов городов, и соответствующие им минимальные и максимальные номера отделений.
     *
     * @var array
     */
    const CITY_LIST = [
        101 => [
               0,
               990,
        ],
        102 => [
               0,
               999,
        ],
        103 => [
               70,
               500,
        ],
        104 => [
               0,
               980,
        ],
        105 => [
               5,
               980,
        ],
        106 => [
               0,
               0,
        ],
        107 => [
               13,
               996,
        ],
        108 => [
               0,
               995,
        ],
        109 => [
               4,
               992,
        ],
        111 => [
               20,
               999,
        ],
        115 => [
               35,
               976,
        ],
        117 => [
               36,
               997,
        ],
        119 => [
               2,
               991,
        ],
        121 => [
               59,
               615,
        ],
        123 => [
               1,
               787,
        ],
        124 => [
               365,
               683,
        ],
        125 => [
               8,
               993,
        ],
        127 => [
               6,
               994,
        ],
        129 => [
               3,
               626,
        ],
        130 => [
               100,
               981,
        ],
        131 => [
               0,
               0,
        ],
        140 => [
               0,
               999,
        ],
        141 => [
               0,
               986,
        ],
        142 => [
               0,
               970,
        ],
        143 => [
               0,
               989,
        ],
        144 => [
               0,
               700,
        ],
        145 => [
               100,
               932,
        ],
        150 => [
               0,
               999,
        ],
        152 => [
               0,
               990,
        ],
        153 => [
               0,
               999,
        ],
        155 => [
               0,
               938,
        ],
        156 => [
               0,
               999,
        ],
        157 => [
               0,
               998,
        ],
        160 => [
               0,
               999,
        ],
        161 => [
               50,
               582,
        ],
        162 => [
               0,
               996,
        ],
        163 => [
               0,
               999,
        ],
        164 => [
               0,
               990,
        ],
        165 => [
               100,
               990,
        ],
        166 => [
               0,
               990,
        ],
        167 => [
               0,
               999,
        ],
        168 => [
               20,
               227,
        ],
        169 => [
               0,
               999,
        ],
        170 => [
               0,
               987,
        ],
        171 => [
               40,
               999,
        ],
        172 => [
               0,
               899,
        ],
        173 => [
               0,
               999,
        ],
        174 => [
               150,
               782,
        ],
        175 => [
               0,
               475,
        ],
        180 => [
               0,
               990,
        ],
        181 => [
               0,
               645,
        ],
        182 => [
               0,
               933,
        ],
        183 => [
               0,
               990,
        ],
        184 => [
               1,
               716,
        ],
        185 => [
               0,
               990,
        ],
        186 => [
               0,
               985,
        ],
        187 => [
               0,
               876,
        ],
        188 => [
               200,
               992,
        ],
        190 => [
               0,
               999,
        ],
        191 => [
               2,
               317,
        ],
        192 => [
               7,
               906,
        ],
        193 => [
               79,
               382,
        ],
        194 => [
               17,
               362,
        ],
        195 => [
               9,
               427,
        ],
        196 => [
               6,
               690,
        ],
        197 => [
               0,
               790,
        ],
        198 => [
               35,
               999,
        ],
        199 => [
               4,
               406,
        ],
        200 => [
               801,
               995,
        ],
        214 => [
               0,
               990,
        ],
        215 => [
               2,
               876,
        ],
        216 => [
               100,
               799,
        ],
        236 => [
               1,
               999,
        ],
        238 => [
               0,
               769,
        ],
        241 => [
               0,
               992,
        ],
        242 => [
               17,
               845,
        ],
        243 => [
               1,
               677,
        ],
        248 => [
               0,
               990,
        ],
        249 => [
               0,
               968,
        ],
        295 => [
               0,
               999,
        ],
        296 => [
               0,
               585,
        ],
        297 => [
               0,
               653,
        ],
        298 => [
               0,
               901,
        ],
        299 => [
               1,
               990,
        ],
        300 => [
               0,
               999,
        ],
        301 => [
               0,
               997,
        ],
        302 => [
               0,
               998,
        ],
        303 => [
               2,
               995,
        ],
        305 => [
               0,
               999,
        ],
        306 => [
               0,
               859,
        ],
        307 => [
               0,
               939,
        ],
        308 => [
               0,
               994,
        ],
        309 => [
               0,
               999,
        ],
        344 => [
               0,
               999,
        ],
        346 => [
               0,
               997,
        ],
        347 => [
               0,
               996,
        ],
        350 => [
               0,
               999,
        ],
        352 => [
               0,
               993,
        ],
        353 => [
               0,
               999,
        ],
        354 => [
               0,
               399,
        ],
        355 => [
               0,
               902,
        ],
        356 => [
               0,
               899,
        ],
        357 => [
               0,
               981,
        ],
        358 => [
               0,
               990,
        ],
        359 => [
               1,
               469,
        ],
        360 => [
               0,
               990,
        ],
        361 => [
               9,
               826,
        ],
        362 => [
               0,
               990,
        ],
        363 => [
               1,
               766,
        ],
        364 => [
               0,
               990,
        ],
        366 => [
               0,
               913,
        ],
        367 => [
               0,
               999,
        ],
        368 => [
               0,
               998,
        ],
        369 => [
               0,
               999,
        ],
        385 => [
               0,
               990,
        ],
        386 => [
               1,
               899,
        ],
        390 => [
               0,
               990,
        ],
        391 => [
               1,
               999,
        ],
        392 => [
               0,
               999,
        ],
        393 => [
               0,
               996,
        ],
        394 => [
               0,
               996,
        ],
        396 => [
               2,
               959,
        ],
        397 => [
               1,
               979,
        ],
        398 => [
               0,
               999,
        ],
        399 => [
               0,
               959,
        ],
        400 => [
               0,
               998,
        ],
        403 => [
               1,
               998,
        ],
        404 => [
               2,
               998,
        ],
        410 => [
               0,
               999,
        ],
        412 => [
               1,
               990,
        ],
        413 => [
               30,
               965,
        ],
        414 => [
               0,
               999,
        ],
        416 => [
               9,
               550,
        ],
        420 => [
               0,
               999,
        ],
        421 => [
               0,
               993,
        ],
        422 => [
               0,
               999,
        ],
        423 => [
               1,
               999,
        ],
        424 => [
               0,
               999,
        ],
        425 => [
               0,
               595,
        ],
        426 => [
               0,
               999,
        ],
        427 => [
               0,
               997,
        ],
        428 => [
               0,
               999,
        ],
        429 => [
               20,
               965,
        ],
        430 => [
               0,
               990,
        ],
        431 => [
               21,
               914,
        ],
        432 => [
               0,
               990,
        ],
        433 => [
               1,
               992,
        ],
        440 => [
               0,
               999,
        ],
        442 => [
               0,
               965,
        ],
        443 => [
               0,
               970,
        ],
        445 => [
               0,
               998,
        ],
        446 => [
               0,
               981,
        ],
        450 => [
               0,
               999,
        ],
        452 => [
               0,
               996,
        ],
        453 => [
               0,
               889,
        ],
        454 => [
               0,
               999,
        ],
        455 => [
               0,
               999,
        ],
        456 => [
               1,
               997,
        ],
        457 => [
               0,
               699,
        ],
        460 => [
               0,
               999,
        ],
        461 => [
               0,
               999,
        ],
        462 => [
               0,
               895,
        ],
        468 => [
               320,
               700,
        ],
        500 => [
               100,
               984,
        ],
        600 => [
               0,
               999,
        ],
        601 => [
               1,
               979,
        ],
        602 => [
               101,
               359,
        ],
        603 => [
               0,
               995,
        ],
        606 => [
               0,
               982,
        ],
        607 => [
               1,
               959,
        ],
        610 => [
               0,
               999,
        ],
        612 => [
               10,
               999,
        ],
        613 => [
               0,
               999,
        ],
        614 => [
               0,
               999,
        ],
        617 => [
               0,
               879,
        ],
        618 => [
               100,
               968,
        ],
        619 => [
               0,
               683,
        ],
        620 => [
               0,
               999,
        ],
        622 => [
               0,
               980,
        ],
        623 => [
               0,
               999,
        ],
        624 => [
               0,
               999,
        ],
        625 => [
               0,
               999,
        ],
        626 => [
               9,
               399,
        ],
        627 => [
               10,
               769,
        ],
        628 => [
               0,
               990,
        ],
        629 => [
               0,
               994,
        ],
        630 => [
               0,
               998,
        ],
        632 => [
               71,
               978,
        ],
        633 => [
               0,
               654,
        ],
        634 => [
               0,
               971,
        ],
        636 => [
               0,
               955,
        ],
        640 => [
               0,
               990,
        ],
        641 => [
               0,
               999,
        ],
        644 => [
               0,
               974,
        ],
        646 => [
               1,
               992,
        ],
        647 => [
               0,
               506,
        ],
        648 => [
               0,
               594,
        ],
        649 => [
               0,
               810,
        ],
        650 => [
               0,
               999,
        ],
        652 => [
               10,
               999,
        ],
        653 => [
               0,
               260,
        ],
        654 => [
               0,
               261,
        ],
        655 => [
               0,
               990,
        ],
        656 => [
               0,
               999,
        ],
        658 => [
               0,
               999,
        ],
        659 => [
               0,
               996,
        ],
        660 => [
               0,
               999,
        ],
        662 => [
               10,
               991,
        ],
        663 => [
               11,
               981,
        ],
        664 => [
               0,
               969,
        ],
        665 => [
               0,
               998,
        ],
        666 => [
               13,
               960,
        ],
        667 => [
               0,
               999,
        ],
        668 => [
               10,
               551,
        ],
        669 => [
               0,
               522,
        ],
        670 => [
               0,
               999,
        ],
        671 => [
               1,
               959,
        ],
        672 => [
               0,
               999,
        ],
        673 => [
               0,
               850,
        ],
        674 => [
               50,
               698,
        ],
        675 => [
               0,
               998,
        ],
        676 => [
               0,
               999,
        ],
        677 => [
               0,
               999,
        ],
        678 => [
               0,
               999,
        ],
        679 => [
               0,
               950,
        ],
        680 => [
               0,
               999,
        ],
        681 => [
               0,
               99,
        ],
        682 => [
               30,
               992,
        ],
        683 => [
               0,
               997,
        ],
        684 => [
               0,
               500,
        ],
        685 => [
               0,
               990,
        ],
        686 => [
               50,
               442,
        ],
        687 => [
               0,
               599,
        ],
        688 => [
               0,
               902,
        ],
        689 => [
               0,
               700,
        ],
        690 => [
               0,
               997,
        ],
        692 => [
               1,
               998,
        ],
        693 => [
               0,
               970,
        ],
        694 => [
               2,
               929,
        ],
        800 => [
               801,
               999,
        ],
        801 => [
               0,
               200,
        ],
        901 => [
               1,
               281,
        ],
        990 => [
               0,
               540,
        ],
        991 => [
               0,
               804,
        ],
        992 => [
               0,
               700,
        ],
        993 => [
               0,
               900,
        ],
        994 => [
               0,
               900,
        ],
        995 => [
               100,
               901,
        ],
        996 => [
               100,
               903,
        ],
        997 => [
               0,
               100,
        ],
];

    /**
     * Проверяет существование почтового индекса.
     *
     * @param string|int $postalCode
     *
     * @return bool
     */
    public static function postalCodeValid($postalCode): bool
    {
        $postalCode = (string) $postalCode;
        $cityCode = (int) substr($postalCode, 0, 3);

        if (!array_key_exists($cityCode, self::CITY_LIST)) {
            return false;
        }

        $officeCode = (int) substr($postalCode, 3);

        if ($officeCode < self::CITY_LIST[$cityCode][0]) {
            return false;
        }

        if ($officeCode > self::CITY_LIST[$cityCode][1]) {
            return false;
        }

        return true;
    }

    /**
     * @param string|int $postalCode
     *
     * @return \RussianPostIndex\Record|null
     */
    public static function getOffice($postalCode)
    {
        $postalCode = (string) $postalCode;

        if (!self::postalCodeValid($postalCode)) {
            return null;
        }

        $cityCode = substr($postalCode, 0, 3);
        $fqcn = "\RussianPostIndex\ByCity\City{$cityCode}\Office{$postalCode}";

        if (!class_exists($fqcn)) {
            return null;
        }

        return new $fqcn();
    }
}
