# Faucetlist-FaucetPay-API-PHP
<h3 class="heading heading-4 strong-700">
            Faucet List:
        </h3> <br> <div class="row"> <div class="col-xs-12 col-sm-6"> <b>Request URL</b> <ul> <li>https://faucetpay.io/api/listv1/faucetlist</li> </ul> <b>Parameters</b> <ul> <li><code>api_key</code> <label class="badge badge-success">optional</label> A valid API Key from the website</li> </ul> <b>Return Values</b> <ul> <li><code>list_data</code> A JSON object containing list of the faucets. The data is listed under <code>normal</code> for each currencies.</li> </ul> </div> <div class="col-xs-12 col-sm-6"> <b>Request Response</b> <br> <br> <pre>{
    "status": 200,
    "message": "OK",
    "list_data": {
        "normal": {
            "BTC": [
                {
                    "id": 1,
                    "name": "Rushbitcoin.com",
                    "url": "https:\/\/rushbitcoin.com",
                    "owner_id": "734",
                    "owner_name": "anteruzic1",
                    "currency": "BTC",
                    "timer_in_minutes": "60",
                    "reward": "0",
                    "is_enabled": "0",
                    "creation_date": "0",
                    "category": null,
                    "paid_today": "0.000000",
                    "total_users_paid": "0",
                    "active_users": "0",
                    "balance": "0.00000000",
                    "health": "0"
                }
            ],
            "ETH": [
                {
                    "id": 2,
                    "name": "MBZ Community",
                    "url": "https:\/\/xcoin.mybook.biz",
                    "owner_id": "1036",
                    "owner_name": "Misael29",
                    "currency": "ETH",
                    "timer_in_minutes": "60",
                    "reward": "84",
                    "is_enabled": "1",
                    "creation_date": "0",
                    "category": null,
                    "paid_today": "0.062315",
                    "total_users_paid": "104",
                    "active_users": "103",
                    "balance": "0.02714408",
                    "health": "100"
                }
            ]
        }
    }
}</pre> </div> </div>
