<?php

use FitnessApi\App\AppKernel;

require_once dirname(__DIR__) . '/../vendor/autoload_runtime.php';

return function (array $context) {
    return new AppKernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
