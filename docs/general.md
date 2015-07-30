# Helper Plugin

## This plugin will bring standard php functions to twig

### count

    {{ count(mixed $array_or_countable) }}
[count reference](http://php.net/manual/en/function.count.php)
    
### empty

    {{ empty(mixed $var) }}
[empty reference](http://php.net/manual/en/function.empty.php)

### explode

    {{ explode(string $delimiter, string $string [, $limit]) }}
[explode reference](http://php.net/manual/en/function.explode.php)

### get_class

    {{ get_class([ object $object = NULL ]) }}
[get_class reference](http://php.net/manual/en/function.get-class.php)

### html_entity_decode

    {{ html_entity_decode(string $string) }}
[html_entity_decode reference](http://php.net/manual/en/function.html-entity-decode.php)

### htmlentities

    {{ htmlentities(string $string) }}
[htmlentities reference](http://php.net/manual/en/function.htmlentities.php)

### htmlspecialchars

    {{ htmlspecialchars(string $string) }}
[htmlspecialchars reference](http://php.net/manual/en/function.htmlspecialchars.php)

### htmlspecialchars_decode

    {{ htmlspecialchars_decode(string $string) }}
[htmlspecialchars_decode reference](http://php.net/manual/en/function.htmlspecialchars-decode.php)

### implode

    {{ implode(string $glue, array $pieces) }}
    {{ implode(array $pieces) }}
[implode reference](http://php.net/manual/en/function.implode.php)

### is_array

    {{ is_array(mixed $var) }}
[is_array reference](http://php.net/manual/en/function.is-array.php)

### is_int

    {{ is_int(mixed $var) }}
[is_int](http://php.net/manual/en/function.is-int.php)

### is_integer

    {{ is_integer(mixed $var) }}
Alias of is_int
[is_integer](http://php.net/manual/en/function.is-integer.php)

### is_string

    {{ is_string(mixed $var) }}
[is_string reference](http://php.net/manual/en/function.is-string.php)

### ltrim

    {{ ltrim ( string $str [, string $character_mask ] ) }}
[ltrim reference](http://php.net/manual/en/function.ltrim.php)

### md5

    {{ md5(string $str) }}
[md5 reference](http://php.net/manual/en/function.md5.php)

### memory_get_usage

    {{ memory_get_usage() }}
[memory_get_usage reference](http://php.net/manual/en/function.memory-get-usage.php)

### mt_rand

    {{ mt_rand() }}
[mt_rand reference](http://php.net/manual/en/function.mt-rand.php)

### nl2br

    {{ nl2br(string $string) }}
[nl2br reference](http://php.net/manual/en/function.nl2br.php)

### parse_url

    {{ parse_url(string $url) }}
[parse_url reference](http://php.net/manual/en/function.parse-url.php)

### preg_match

    {{ preg_match(string $pattern, string $subject) }}
[preg_match](http://php.net/manual/en/function.preg-match.php)

### preg_replace

    {{ preg_replace(mixed $pattern, mixed $replacement, mixed $subject) }}
[preg_replace reference](http://php.net/manual/en/function.preg-replace.php)

### print_r

    {{ print_r(mixed $expression) }}
[print_r reference](http://php.net/manual/en/function.print-r.php)

### rtrim

    {{ rtrim(string $str [, string $character_mask ]) }}
[rtrim reference](http://php.net/manual/en/function.rtrim.php)

### sprintf

    {{ sprintf(string $format [, mixed $args [, mixed $... ]] ) }}
[sprintf reference](http://php.net/manual/en/function.sprintf.php)

### str_pad

    {{ str_pad(string $input, int $pad_length [, $pad_string = " "]) }}
[str_pad reference](http://php.net/manual/en/function.str-pad.php)

### str_replace

    {{ str_replace(mixed $search, mixed $replace, mixed $subject) }}
[str_replace reference](http://php.net/manual/en/function.str-replace.php)

### str_word_count

    {{ str_word_count(string $string) }}
[str_word_count reference](http://php.net/manual/en/function.str-word-count.php)

### strip_plugins

    {{ strip_plugins(string $string) }}

### strpos

    {{ strpos(string $haystack, mixed $needle) }}
[strpos reference](http://php.net/manual/en/function.strpos.php)

### strtolower

    {{ strtolower(string $string) }}
[strtolower reference](http://php.net/manual/en/function.strtolower.php)

### strtoupper

    {{ strtoupper(string $string) }}
[strtoupper reference](http://php.net/manual/en/function.strtoupper.php)

### substr

    {{ substr(string $string, int $start [, int $length ]) }}
[substr reference](http://php.net/manual/en/function.substr.php)

### trim

    {{ trim(string $str [, string $character_mask]) }}
[trim reference](http://php.net/manual/en/function.trim.php)

### ucfirst

    {{ ucfirst(string $str) }}
[ucfirst reference](http://php.net/manual/en/function.ucfirst.php)

### ucwords

    {{ ucwords(string $str) }}
[ucwords reference](http://php.net/manual/en/function.ucwords.php)

### var_export

    {{ var_export(mixed $expression) }}
[var_export reference](http://php.net/manual/en/function.var-export.php)

### var_dump

    {{ var_dump(mixed $expression) }}
[var_dump reference](http://php.net/manual/en/function.var-dump.php)
