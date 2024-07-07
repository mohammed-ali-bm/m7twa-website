<img src="data:image/png;base64,{!! base64_encode(QrCode::size(400)->format('png')->generate(route('orders.redeem', $token))) !!}" />
