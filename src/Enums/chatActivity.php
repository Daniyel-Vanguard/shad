<?php

namespace shad\Enums;

enum chatActivity: string
{
    case Type = "Typing";
    case Upload = "Uploading";
    case  Record = "Recording";
}
