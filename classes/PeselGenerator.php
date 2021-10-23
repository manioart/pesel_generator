<?php

class PeselGenerator {

    public static function generatePeselNumber($dateOfBirth,$sex) {

        $dateOfBirth = date('Y-m-d',strtotime($dateOfBirth));
        $yearOfBirth = date('Y',strtotime($dateOfBirth));
        $monthOfBirth = date('m',strtotime($dateOfBirth));
        $dayOfBirth = date('d',strtotime($dateOfBirth));
        $date18 = date('Y-m-d', strtotime("01/01/1800"));
        $date19 = date('Y-m-d', strtotime("01/01/1900"));
        $date20 = date('Y-m-d', strtotime("01/01/2000"));
        $date21 = date('Y-m-d', strtotime("01/01/2100"));
        $date22 = date('Y-m-d', strtotime("01/01/2200"));
        $dateEnds = date('Y-m-d', strtotime("01/01/2300"));

        if ($dateOfBirth < $date18) {
            return 'Brak numeru pesel dla osób urodzonych przed 1800 rokiem';
        }
        elseif ($dateOfBirth > $date18 && $dateOfBirth < $date19) {
            $generatedPesel = substr($yearOfBirth,-2);
            $generatedPesel .= (string)((int)$monthOfBirth + 80);
            $generatedPesel .= $dayOfBirth;
            $randomValue = str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT);
            $even = substr($randomValue,0, 3) . substr($randomValue,-1) & ~1;
            $odd = substr($randomValue,0, 3) . substr($randomValue,-1) | 1;
            if ($sex == 'woman') {
                $generatedPesel .= $even;
            }
            else {
                $generatedPesel .= $odd;
            }

            var_dump($generatedPesel);
        }
        elseif ($dateOfBirth > $date19 && $dateOfBirth < $date20) {
            $generatedPesel = substr($yearOfBirth,-2);
            $generatedPesel .= $monthOfBirth;
            $generatedPesel .= $dayOfBirth;
            $randomValue = str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT);
            $even = substr($randomValue,0, 3) . substr($randomValue,-1) & ~1;
            $odd = substr($randomValue,0, 3) . substr($randomValue,-1) | 1;
            if ($sex == 'woman') {
                $generatedPesel .= $even;
            }
            else {
                $generatedPesel .= $odd;
            }
            var_dump($generatedPesel);
        }
        elseif ($dateOfBirth > $date20 && $dateOfBirth < $date21) {
            $generatedPesel = substr($yearOfBirth,-2);
            $generatedPesel .= (string)((int)$monthOfBirth + 20);
            $generatedPesel .= $dayOfBirth;
            $randomValue = str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT);
            $even = substr($randomValue,0, 3) . substr($randomValue,-1) & ~1;
            $odd = substr($randomValue,0, 3) . substr($randomValue,-1) | 1;
            if ($sex == 'woman') {
                $generatedPesel .= $even;
            }
            else {
                $generatedPesel .= $odd;
            }
            var_dump($generatedPesel);
        }
        elseif ($dateOfBirth > $date21 && $dateOfBirth < $date22) {
            $generatedPesel = substr($yearOfBirth,-2);
            $generatedPesel .= (string)((int)$monthOfBirth + 40);
            $generatedPesel .= $dayOfBirth;
            $randomValue = str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT);
            $even = substr($randomValue,0, 3) . substr($randomValue,-1) & ~1;
            $odd = substr($randomValue,0, 3) . substr($randomValue,-1) | 1;
            if ($sex == 'woman') {
                $generatedPesel .= $even;
            }
            else {
                $generatedPesel .= $odd;
            }
            var_dump($generatedPesel);
        }
        elseif ($dateOfBirth > $date22 && $dateOfBirth < $dateEnds) {
            $generatedPesel = substr($yearOfBirth,-2);
            $generatedPesel .= (string)((int)$monthOfBirth + 60);
            $generatedPesel .= $dayOfBirth;
            $randomValue = str_pad(rand(0, pow(10, 4)-1), 4, '0', STR_PAD_LEFT);
            $even = substr($randomValue,0, 3) . substr($randomValue,-1) & ~1;
            $odd = substr($randomValue,0, 3) . substr($randomValue,-1) | 1;
            if ($sex == 'woman') {
                $generatedPesel .= $even;
            }
            else {
                $generatedPesel .= $odd;
            }
            var_dump($generatedPesel);
        }
        elseif ($dateOfBirth > $dateEnds) {
            return 'Nie przewidziano jeszcze numeru pesel dla podanej daty urodzenia';
        }

    }
}