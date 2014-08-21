FlushOnKernelTerminateBundle
============================

Just execute EntityManager::flush() on kernel terminate.

If an entity can wait before to be flushed, don't flush it,
and let this bundle to flush it after the response has been sent.

## Installation

### Step 1: Download using composer

``` js
{
    "require": {
        "alcalyn/flush-on-kernel-terminate": "1.x"
    }
}
```

Update your composer.

``` bash
php composer.phar update
```

### Step 2: Register the Bundle

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Alcalyn\FlushOnKernelTerminateBundle\AlcalynFlushOnKernelTerminateBundle(),
    );
}
```

## License

This bundle is under the MIT license. See the complete license:

[Resources/meta/LICENSE](https://github.com/alcalyn/flush-on-kernel-terminate-bundle/blob/master/Resources/meta/LICENSE)
