<?php namespace Anomaly\Streams\Addon\Tag\Helper;

use Anomaly\Streams\Platform\Addon\Tag\TagAddon;

class HelperTag extends TagAddon
{
    /**
     * Allowed PHP functions.
     *
     * @var array
     */
    protected $allowedFunctions = [
        'count',
        'empty',
        'explode',
        'html_entity_decode',
        'htmlentities',
        'htmlspecialchars',
        'htmlspecialchars_decode',
        'implode',
        'is_array',
        'is_int',
        'is_integer',
        'is_string',
        'ltrim',
        'md5',
        'memory_get_usage',
        'nl2br',
        'preg_match',
        'preg_replace',
        'rtrim',
        'sprintf',
        'str_replace',
        'str_word_count',
        'strip_tags',
        'strpos',
        'strtolower',
        'strtoupper',
        'substr',
        'trim',
        'ucfirst',
        'ucwords',
    ];

    /**
     * Return the memory usage.
     *
     * @return string
     */
    public function memory_get_usage()
    {
        $unit = array('b', 'kb', 'mb');

        $size = memory_get_usage(true);

        return round($size / pow(1024, ($i = floor(log($size, 1024)))), 2) . ' ' . $unit[$i];
    }

    /**
     * Return the request time.
     *
     * @return mixed
     */
    public function request_time()
    {
        return number_format(microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'], 2).' s';
    }

    /**
     * Hook into the call method to allow PHP functions.
     *
     * @param $method
     * @param $arguments
     * @return null|void
     */
    public function __call($method, $arguments)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $this->attributes);
        } elseif (in_array($method, $this->allowedFunctions) and function_exists($method)) {
            return call_user_func_array($method, $this->attributes);
        }

        return null;
    }
}
