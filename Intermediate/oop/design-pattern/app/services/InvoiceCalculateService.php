<?php 
namespace App\Services;
class InvoiceCalculateService {
    
    private const VAT_RATE = 0.15; // 15% VAT   
    public function calculateTotal(array $items): float {
        
        $subtotal = array_sum((array_column($items, 'price')));
        
        return $subtotal + ($subtotal + self::VAT_RATE);

    }

}