<?php


    namespace App\Enums;
    enum TableStatus: string {
        case Pending = 'front';
        case Available = 'available';
        case Unavailable = 'unavailable';
    }