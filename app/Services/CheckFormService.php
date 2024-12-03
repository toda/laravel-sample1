<?php

namespace App\Services;

class CheckFormService
{
    public static function checkGender(int $genderId): string
    {
        $genderStr = '男性';
        if ($genderId === 1) {
            $genderStr = '女性';
        }

        return $genderStr;
    }

    public static function checkAge(int $ageId): string
    {
        $ageStr = '～19歳';
        if ($ageId === 1) {
            $ageStr = '～19歳';
        } else if ($ageId === 2) {
            $ageStr = '20歳～29歳';
        } else if ($ageId === 3) {
            $age = '30歳～39歳';
        } else if ($ageId === 4) {
            $ageStr = '40歳～49歳';
        } else if ($ageId === 5) {
            $ageStr = '50歳～59歳';
        } else if ($ageId === 6) {
            $ageStr = '60歳～';
        }

        return $ageStr;
    }
}
