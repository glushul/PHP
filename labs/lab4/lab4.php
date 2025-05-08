<?php

echo "<br>Задание №1: ";
$input = 'a1b2c3';
$output = preg_replace('/(\d)/', '$1$1', $input);
echo $output;

echo "<br>Задание №2: ";
$input = 'http://site.ru';
$output = preg_match('#^https?://[a-z0-9-]+\.[a-z]{2,}$#i', $input);
echo $output;

echo "<br>Задание №4: ";
$input = 'hello.site.com';
$output = preg_match('#^[a-z0-9-]+.[a-z0-9-]+.[a-z0-9-]+$#i', $input);
echo $output;

echo "<br>Задание №7: ";
$input = 'mymail@mail.ru my.mail@mail.ru my-mail@mail.ru my_mail@mail.ru mail@mail.com mail@mail.by mail@yandex.ru';
preg_match_all('/\b[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}\b/i', $input, $matches);
echo implode(', ', $matches[0]);

echo "<br>Задание №8: ";
$input = 'aaa bcd xxx efg';
$output = preg_match_all('#\b(\w)\1+\b#', $input, $matches);
echo $output;

echo "<br>Задание №11: ";
$input = 'aaa@bbb eee7@kkk';
$output = preg_replace('#\b(\w+)@(\w+)\b#', '$2@$1', $input);
echo $output;

echo "<br>Задание №14: ";
$input = 'a\a a\a a\\a';
$output = preg_replace('#a\\\\a#', '!', $input);
echo $output;

echo "<br>Задание №17: ";
$input = 'aeeea aeea aea axa axxa axxxa apppa';
$output = preg_match_all('#a(e|x)+a#', $input, $matches);
echo $output;

echo "<br>Задание №24: ";
$input = 'aaa * bbb ** eee *** kkk ****';
$output = preg_replace('#(?<!\*)\*\*(?!\*)#', '!', $input);
echo $output;

echo "<br>Задание №38: ";
$input = 'aa aba abba abbba abbbba abbbbba';
preg_match_all('#ab{4,}a#', $input, $matches);
echo implode(', ', $matches[0]);

echo "<br>Задание №45: ";
$input = 'a1a a22a a333a a4444a a55555a aba aca';
preg_match_all('#a(\d)*a#', $input, $matches);
echo implode(', ', $matches[0]);

echo "<br>Задание №53: ";
$input = 'aba aca aea abba adca abea';
preg_match_all('#a..a#', $input, $matches);
echo implode(', ', $matches[0]);