<?php

function getFee(string $feeType,float $price): float {
    switch ($feeType) {
        case 'serviceFee':
            $result = $price * 0.10;  // 10% service fee
            break;
        case 'tax':
            $result = $price * 0.05;  // 5% tax
            break;
        default:
            throw new \InvalidArgumentException("Unsupported fee type: $feeType");
    }
    return $result;
}
