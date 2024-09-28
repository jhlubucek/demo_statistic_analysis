<?php

enum FeeType
{
    case ServiceFee;
    case Tax;

    public function getMultiplier(): float
    {
        return match($this) {
            FeeType::ServiceFee => 0.10,  // 10% service fee
            FeeType::Tax => 0.05,         // 5% tax
        };
    }
}

function getFee(FeeType $feeType, float $price): float {
    return $price * $feeType->getMultiplier();
}