<?php

namespace App\Enums\Survey;

enum AnswerType: string {
    case numeric = "numeric";
    case text = "text";
    case boolean = "boolean";

    /**
     * @return string une chaine de caractere qui contient tout les types
     */
    public static function all(string $separator=" "): string{
        return self::boolean->value . $separator . self::numeric->value . $separator . self::text; 
    }
}