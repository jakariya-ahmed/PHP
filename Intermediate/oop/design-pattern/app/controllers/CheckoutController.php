<?php 
namespace App\Controllers;

use App\Services\OrderInvoiceProcessor;
use Illuminate\Http\Request;
class CheckoutController {

    public function __construct(
        private readonly OrderInvoiceProcessor $invoiceProcessor,
    ) {}

    public function completeCheckout(Request $request) {
        $orderData = [
            'id' => 1015,
            'email' => $request->input('email'),
            'items' => [
                ['name' => 'Laptop Bad', 'price' => 1500.00],
                ['name' => 'Wireless Mouse', 'price' => 490.00]
            ],
        ];

        $this->invoiceProcessor->process($orderData);

        return response()->json(['message' => 'Order Completed and Invoice Send']);

    }
}