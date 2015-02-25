<?php namespace Anomaly\HelperPlugin;

use Anomaly\Streams\Platform\Addon\Plugin\Plugin;

/**
 * Class HelperPlugin
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\Streams\Addon\Plugin\Helper
 */
class HelperPlugin extends Plugin
{

    /**
     * Available helper functions.
     *
     * @var array
     */
    protected $functions = [
        'count',
        'empty',
        'explode',
        'get_class',
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
        'print_r',
        'rtrim',
        'sprintf',
        'str_replace',
        'str_word_count',
        'strip_plugins',
        'strpos',
        'strtolower',
        'strtoupper',
        'substr',
        'trim',
        'ucfirst',
        'ucwords',
    ];

    /**
     * Return plugin functions.
     *
     * @return array
     */
    public function getFunctions()
    {
        return array_map(
            function ($function) {
                return new \Twig_SimpleFunction($function, $function);
            },
            $this->functions
        );
    }
}
