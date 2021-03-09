<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class Helper

{

    /*

    |--------------------------------------------------------------------------

    | Detect Active Route

    |--------------------------------------------------------------------------

    |

    | Compare given route with current route and return output if they match.

    | Very useful for navigation, marking if the link is active.

    |

    */

    public static function isActiveRoute($route, $output = "active")

    {

        if (Route::currentRouteName() == $route) {

            return $output;
        }
    }



    public static function isActiveRoutesFind(array $routes, $output = "current")

    {

        foreach ($routes as $route) {

            if (Route::currentRouteName() == $route) {

                return $output;
            }
        }
    }



    /*

    |--------------------------------------------------------------------------

    | Detect Active Routes

    |--------------------------------------------------------------------------

    |

    | Compare given routes with current route and return output if they match.

    | Very useful for navigation, marking if the link is active.

    |

    */

    public static function areActiveRoutes(array $routes, $output = "active")

    {

        foreach ($routes as $route) {

            if (Route::currentRouteName() == $route) {

                return $output;
            }
        }
    }

    public static function classActiveSegment($segment, $value)

    {

        if (!is_array($value)) {

            return Request::segment($segment) == $value ? 'active' : '';
        }

        foreach ($value as $v) {

            if (Request::segment($segment) == $v) {

                return 'active';
            }
        }

        return '';
    }



    public function image($file, $default = '')

    {

        if (!empty($file) && Storage::disk(config('filesystems.disks.uploads.root'))->exists($file)) {

            return Storage::disk(config('voyager.storage.disk'))->url($file);
        }



        return $default;
    }



    public static function substring($content, $maxLength = 100)

    {

        if (mb_strlen($content) > $maxLength) {

            $excerpt = mb_substr($content, 0, $maxLength - 3);

            $lastSpace = mb_strrpos($excerpt, ' ');

            $excerpt = mb_substr($excerpt, 0, $lastSpace);

            $excerpt .= ' ...';
        } else {

            $excerpt = $content;
        }



        return $excerpt;
    }
}
