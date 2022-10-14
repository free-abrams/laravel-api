<?php

function json_response($result,string $message = 'OK',int $status_code = 200): array
{
    return [
        'status_code' => $status_code,
        'result' => $result,
        'message' => $message,
    ];
}
