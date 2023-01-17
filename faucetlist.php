<?php
$base_url = "https://yourdomain.com/faucetlist.php";
$faucetpay_url = "https://faucetpay.io/api/listv1/faucetlist";
$param = ["api_key" => "90332fc9fc6cd179235a0f1cb1b1bf38179653b6"];
$url = $faucetpay_url;
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 );
$result = json_decode(curl_exec($ch), true);
curl_close($ch);
$currency = strtoupper("BTC");
if(isset($_GET['currency'])) {
    $currency = strtoupper($_GET['currency']);
}
$faucetlist = $result['list_data']['normal'][$currency];
$nb_elem_per_page = 10;
$page = isset($_GET['page'])?intval($_GET['page']-1):0;
$current_page = $page+1;
$number_of_pages = intval(count($faucetlist)/$nb_elem_per_page)+1;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Faucetlist <?=$currency?></title>
  </head>
  <body>
    <div class="main">
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <div class="text-center">
            <a class="btn btn-primary" href="<?=$base_url?>?currency=btc">BTC</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=ltc">LTC</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=bch">BCH</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=bnb">BNB</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=doge">DOGE</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=dgb">DGB</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=trx">TRX</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=eth">ETH</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=usdt">USDT</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=fey">FEY</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=dash">DASH</a>
            <a class="btn btn-primary" href="<?=$base_url?>?currency=zec">ZEC</a>
          </div>
          <h1 class="title text-center">Faucetlist <?=$currency?></h1>
            <div class="table">
    <?php if($currency): ?> 
              <table class="table table-responsive" id="flist">
                <thead>
                  <tr>
                    <th scope="col">id</th>  
                    <th scope="col">Name</th>
                    <th scope="col">Reward</th>
                    <th scope="col">Timer</th>
                    <th scope="col">Total Paid Users</th>
                    <th scope="col">Health</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach(array_slice($faucetlist, $page*$nb_elem_per_page, $nb_elem_per_page) as $result): ?>    
                  <tr>
                    <td><?= $result['id']; ?></td>  
                    <td><?= $result['name']; ?></td>
                    <td><?= $result['reward']; ?> Sat</td>
                    <td><?= $result['timer_in_minutes']; ?> Minutes</td>
                    <td><?= $result['total_users_paid']; ?> Users</td>
                    <td><div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?= $result['health']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $result['health']; ?>%"></div>
</div>
                    </td>
                    <td>

            <a class="btn btn-primary" href="<?= $result['url']; ?>" target="_blank">Earn</a>
            </td>
                  </tr>
                <?php endforeach; ?>  
                </tbody>
              </table>
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <?php if($current_page > 1) { ?>
                <li class="page-item"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=<?=$current_page-1?>">Previous</a></li>
                <?php if($current_page >= 3) { ?>
                <li class="page-item"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=1">1</a></li>
                <li class="page-item"><span class="page-link">...</span></li>
                <?php }  }  if($current_page > 1) {  for($i=1;$i<$number_of_pages;$i++){ if($i <= $current_page+1 && $i > $current_page-2){ ?>
                <li class="page-item <?php if($i == $current_page) {echo 'active';} ?>"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=<?=$i?>"><?=$i?></a></li>
                <?php }} }else{  for($i=1;$i<$number_of_pages;$i++){ if($i <= 4 && $i > 1){ ?>
                <li class="page-item"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=<?=$i?>"><?=$i?></a></li>
                <?php }}  } ?>
                <li class="page-item"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=<?=$current_page+1?>">Next</a></li>
                <?php if($current_page < $number_of_pages) { ?>
                <li class="page-item"><a class="page-link" href="<?=$base_url?>?currency=<?=$_GET['currency']?>&page=<?=$number_of_pages?>">Last</a></li>
                <?php }?>
              </ul>
            </nav>
    <?php endif; ?>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
  </body>
</html>
