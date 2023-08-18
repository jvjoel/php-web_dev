<!DOCTYPE html>
<html>
    <head>
        <title>Prices</title>
        <link href="pricing.css" rel="stylesheet">
        <link href="bootstrap.min.css1" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>

    <body>
      <div class="container-fluid">
        <div class="row" style="border: 4px solid;">
        <?php
           include 'nav.html';
          ?>
       </div>
      </div>
              <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal text-body-emphasis">Monthly plans</h1>
                <p class="fs-5 text-body-secondary">monthly subscription plans at the lowest Prices</p>
              </div>
            </header>
          
            <main>
              <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Free</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">$5<small class="text-body-secondary fw-light">/mo</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                      </ul>
                      <a href="subscription.php" class="w-100 btn btn-lg btn-primary" >Subscription</a>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card mb-4 rounded-3 shadow-sm">
                        <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Pro</h4>
                        </div>
                        <div class="card-body">
                        <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>20 users included</li>
                            <li>10 GB of storage</li>
                            <li>Priority email support</li>
                            <li>Help center access</li>
                        </ul>
                        <a href="subscription.php" class="w-100 btn btn-lg btn-primary" >Subscription</a>
                        </div>
                  </div>
                </div>
                <div class="col">
                    <div class="card mb-4 rounded-3 shadow-sm border-primary">
                      <div class="card-header py-3 text-bg-primary border-primary">
                        <h4 class="my-0 fw-normal">Enterprise</h4>
                      </div>
                      <div class="card-body">
                        <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                          <li>30 users included</li>
                          <li>15 GB of storage</li>
                          <li>Phone and email support</li>
                          <li>Help center access</li>
                        </ul>
                        <a href="subscription.php" class="w-100 btn btn-lg btn-primary" >Subscription</a>
                      </div>
                    </div>
                  </div>
                </div>    
            </div>
        </main>
          
    </body>
</html>