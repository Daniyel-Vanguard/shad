<?php

namespace shad\Enums;

enum Platform: string
{
    case Android = "Android";
    case Web = "Web";

    public function getClientPlatform(): array
    {
        return match ($this) {
            self::Android => [
                "client" => [
                    "app_name" => "Main",
                    "app_version" => "3.6.5",
                    "platform" => "Android",
                    "package" => "ir.medu.shad",
                    "lang_code" => "fa"
                ],
                "url" => "https://shgetdcmess.iranlms.ir/",
                "header" => [
                    "Accept-Encoding" => "gzip",
                    "Connection" => "Keep-Alive",
                    "Content-Type" => "application/json; charset=utf-8",
                    "User-Agent" => "okhttp/3.12.1"
                ]
            ],
            self::Web => [
                "client" => [
                    "app_name" => "Main",
                    "app_version" => "4.4.18",
                    "platform" => "Web",
                    "package" => "web.shad.ir",
                    "lang_code" => "fa"
                ],
                "url" => "https://shgetdcmess.iranlms.ir/",
                "header" => [
                    "Accept" => "application/json, text/plain, */*",
                    "Content-Type" => "text/plain",
                    "Origin" => "https://web.shad.ir",
                    "Referer" => "https://web.shad.ir/",
                    "Sec-Ch-Ua-Platform" => "Windows",
                    "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36",
                ]
            ]
        };
    }
}
