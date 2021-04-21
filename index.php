<?php
$input = "Школа №14 им. Шумейко";

print_r(transliterateTextForURl($input)) . "\n";

function transliterateTextForURl($input): ?string
{
    if (empty($input)) {
        throw new \InvalidArgumentException("Не переданные данные для транслитерации");
    }

    $converter = [
        'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
        'е' => 'e',    'ё' => 'yo',   'ж' => 'zh',   'з' => 'z',    'и' => 'i',
        'й' => 'j',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
        'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
        'у' => 'u',    'ф' => 'f',    'х' => 'x',    'ц' => 'cz',   'ч' => 'ch',
        'ш' => 'sh',   'щ' => 'shh',  'ъ' => '',   'ы' => 'y',   'ь' => '',
        'э' => 'e',   'ю' => 'yu',   'я' => 'ya'
    ];

    $input = prepareAndClearText($input);
    return strtr($input, $converter);
}


function prepareAndClearText($input): ?string
{
    $input = mb_strtolower($input);
    $input = str_replace(". ", ".", $input);
    $input = str_replace([" ", "/", "."], "-", $input);
    $input = preg_replace('/[^a-zA-Zа-яА-Я0-9-]/ui', '',$input);
    return $input;
}