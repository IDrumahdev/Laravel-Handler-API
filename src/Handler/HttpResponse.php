<?php

namespace Ibnudirsan\HandleHttpApi\Handler;

class HttpResponse {

    public static function Status($httpCode)
    {
        
        if ($httpCode == 400) { //400

            $errorStatus = true;
            $status      = "Bad Request";
            $message     = "Access Bad Request";

            $response = [
                'error'     =>$errorStatus,
                'info'      => [
                    'Status'    => $status,
                    'httpcode'  => 400,
                    'Message'   => $message
                    ]
                ];

            return response()->json($response, 400);

        } elseif ($httpCode == 401) { //401

            $errorStatus = true;
            $status      = "Unauthorized";
            $message     = "Unauthorized Access.";

            $response = [
                    'error'     =>$errorStatus,
                    'info'      => [
                        'status'    =>$status,
                        'httpcode'  =>401,
                        'message'   =>$message
                        ]
                    ];


            return response()->json($response, 401);

        } elseif ($httpCode == 403) { //403

            $errorStatus = true;
            $status      = "Forbidden";
            $message     = "Access Forbidden.";

            $response = [
                        'error'     =>$errorStatus,
                        'info'      => [
                            'status'    =>$status,
                            'httpcode'  =>403,
                            'message'   =>$message
                            ]
                        ];


            return response()->json($response, 403);

        } elseif ($httpCode == 404) { //404

            $errorStatus = true;
            $status      = "Not Fount Endpoint.";
            $message     = "Check Incorrect URL.";

            $response = [
                            'error'     =>$errorStatus,
                            'info'      => [
                                'status'    =>$status,
                                'httpcode'  =>404,
                                'message'   =>$message
                                ]
                            ];

            return response()->json($response, 404);

        } elseif ($httpCode == 405) { //405

            $errorStatus = true;
            $status      = "Method Not Allowed";
            $message     = "Check Incorrect Method";

            $response = [
                                'error'     =>$errorStatus,
                                'info'      => [
                                    'status'    =>$status,
                                    'httpcode'  =>405,
                                    'message'   =>$message
                                    ]
                                ];

            return response()->json($response, 405);

        } elseif ($httpCode == 500) { //500

            $errorStatus = true;
            $status      = "Internal Server Error.";
            $message     = "Access Internal Server Error.";

            $response = [
                                    'error'     =>$errorStatus,
                                    'info'      => [
                                        'status'    =>$status,
                                        'httpcode'  =>500,
                                        'message'   =>$message
                                        ]
                                    ];


            return response()->json($response, 500);

        }
    }
}