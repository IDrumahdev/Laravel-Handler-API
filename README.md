# Laravel Handler API Laravel
Laravel package untuk Handler Response http request API.

## Cara menggunakannya :
Untuk menghandle http code pada API bisa gunakan function ini :
```php
// app/Exceptions/Handler.php

<?php

namespace App\Exceptions;

use Throwable;
use Ibnudirsan\HandleHttpApi\Handler\HttpResponse;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception) {

        if ($request->is('api/*')) {
            $code = method_exists($exception, 'getStatusCode');
            if (method_exists($exception, 'getStatusCode')) {
                $statusCode = $this->prepareException($exception)->getStatusCode();
                return HttpResponse::Status($statusCode);
            } else {
                $statusCode = 500;
                    return HttpResponse::Status($statusCode);
            }
                return parent::render($request, $exception);
        }

    }
}
```
