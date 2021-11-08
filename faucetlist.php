<?php

$faucetpay_url = file_get_contents("https://faucetpay.io/api/listv1/faucetlist");
$faucetpay_url = json_decode($faucetpay_url, true);
$faucetpay = $faucetpay_url['list_data']['normal'];

?>

    <div class="main">
      <div class="section section-basic" id="basic-elements">
        <div class="container">
          <h3 class="title text-center">Faucet List</h3>

    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=btc">BTC</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=ltc">LTC</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=bch">BCH</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=bnb">BNB</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=doge">DOGE</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=dgb">DGB</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=trx">TRX</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=eth">ETH</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=usdt">USDT</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=fey">FEY</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=dash">DASH</a>
    <a class="btn btn-primary" href="https://example.com/faucetlist?currency=zec">ZEC</a>
<hr>
<?php if(_get('currency') != null): ?> 
    <table class="table table-responsive">
                <tbody>
                <?php foreach($faucetlist as $result): ?>    
                  <tr>
                    <td><?= $result->id; ?></td>  
                    <td><?= $result->name; ?><span class="pr-3"></span><span class="badge badge-primary">Sponsored</span></td>
                    <td><?= $result->description; ?></td>
                    <td><?= $result->reward; ?></td>
                    <td><?= $result->timer; ?> Minutes</td>
                    <td>

            <a class="btn btn-warning" href="<?= $result->url; ?>" target="_blank">View</a>
            </td>
                  </tr>
                <?php endforeach; ?>  
                </tbody>
              </table>
    <?php if(_get('currency') == btc): ?> 
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
                <?php foreach($faucetpay['BTC'] as $result): ?>    
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
    <?php elseif(_get('currency') == ltc): ?>
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
                <?php foreach($faucetpay['LTC'] as $result): ?>    
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
    <?php elseif(_get('currency') == bch): ?>
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
                <?php foreach($faucetpay['BCH'] as $result): ?>    
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
    <?php elseif(_get('currency') == bnb): ?>
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
                <?php foreach($faucetpay['BNB'] as $result): ?>    
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
    <?php elseif(_get('currency') == doge): ?>
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
                <?php foreach($faucetpay['DOGE'] as $result): ?>    
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
    <?php elseif(_get('currency') == dgb): ?>
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
                <?php foreach($faucetpay['DGB'] as $result): ?>    
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
    <?php elseif(_get('currency') == trx): ?>
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
                <?php foreach($faucetpay['TRX'] as $result): ?>    
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
    <?php elseif(_get('currency') == eth): ?>
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
                <?php foreach($faucetpay['ETH'] as $result): ?>    
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
    <?php elseif(_get('currency') == usdt): ?>
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
                <?php foreach($faucetpay['USDT'] as $result): ?>    
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
    <?php elseif(_get('currency') == fey): ?>
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
                <?php foreach($faucetpay['FEY'] as $result): ?>    
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
    <?php elseif(_get('currency') == dash): ?>
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
                <?php foreach($faucetpay['DASH'] as $result): ?>    
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
    <?php elseif(_get('currency') == zec): ?>
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
                <?php foreach($faucetpay['ZEC'] as $result): ?>    
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
    <?php endif; ?>
<?php else: ?>
<?php endif; ?>
      </div>
      </div>

    </div>
