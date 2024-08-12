<?php

namespace App\Enums\Survey;

enum AnswerType: string {
    case numeric = "numeric";
    case text = "text";
    case boolean = "boolean";
    case date = "date";
}