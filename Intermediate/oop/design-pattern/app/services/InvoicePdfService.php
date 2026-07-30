<?php 
namespace App\Services;
class InvoicePdfService {
    public function pdfGenerate(int $orderId, float $totalAmount): string {
        // Generate PDF binary string or HTML string to pass to pdf
        $html = "<h1> Invoice for Order #{$orderId} </h1>";
        $html = "<p>Total: $" . number_format($totalAmount, 2) . "</p>" ;
        return $html;
    }
}








