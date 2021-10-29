<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        Bootstrap template
    </title>
    <link rel="icon" href="bot.png" type="image/icon type">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container">
        <div class="logo">
            <br>
            <img src="bot.png" alt="bootstrap">
            <br><br>
            <h2>Checkout form</h2>
            <p>Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
        </div>
        <div class="row">
            <div class="col-8">
                <h4 class="mb-3">Billing address</h4>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firsName">First Name:</label>
                        <input type="text"class="form-control">
                    </div>
                   <div class="col-md-6 mb-3">
                        <label for="lastName">Last Name:</label>
                        <input type="text"class="form-control">
                   </div>
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                         <span class="input-group-text" id="basic-addon1">@</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <form>
                    <div class="form-group">
                        <label for="formGroupEmail">Email (Optional)</label>
                        <input type="text" class="form-control" id="formGroupEmail" placeholder="you@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="formGroupAddress">Address</label>
                        <input type="text" class="form-control" id="formGroupAddress" placeholder="1234 Main St">
                    </div>
                    <div class="form-group">
                        <label for="formGroupAddress2">Address 2 (Optional)</label>
                        <input type="text" class="form-control" id="formGroupAddress2" placeholder="Apartment or Suite">
                    </div>
                </form>
                <div class="form-row">
                    <div class="form-group col-md-5 ">
                        <label for="inputCountry">Country</label>
                        <select id="inputCountry" class="form-control">
                            <option selected>Choose...</option>
                            <option>Azerbaijan</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 ml-3">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose...</option>
                            <option>Baku</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2 ml-3">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div><hr>
                <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                    <label class="custom-control-label" for="customControlInline">Shipping address is the same as my billing address</label>
                 </div>
                 <div class="custom-control custom-checkbox my-1 mr-sm-2">
                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                    <label class="custom-control-label" for="customControlInline">Save this information for next time</label>
                 </div><hr>
                 <h4 class="mb-3">Payment</h4>
                 <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Credit card</label>
                 </div>
                 <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Debit card</label>
                 </div>
                 <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Paypal</label>
                 </div><br>
                 <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="cardName">Name on card</label>
                        <input type="text"class="form-control">
                    </div>
                   <div class="col-md-6 mb-3">
                        <label for="cardNumber">Credit card number</label>
                        <input type="text"class="form-control">
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="expiration">Expiration</label>
                        <input type="text"class="form-control">
                    </div>
                   <div class="col-md-3 mb-3">
                        <label for="cvv">CVV</label>
                        <input type="text"class="form-control">
                   </div>
                </div><hr>
                <button type="button" class="btn btn-primary btn-lg btn-block">Continue to checkout</button>
            </div>
            <div class="col-4 order-md-2 mb-4">
                 <h4 class="mb-3 d-flex justify-content-between align-items-center">
                     <span class="text-muted">Your Cart</span>
                     <span class="badge badge-secondary badge-pill">3</span>
                 </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item justify-content-between lh-condensed d-flex">
                            <div>
                                <h6 class="my-0">Product Name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item justify-content-between lh-condensed d-flex">
                            <div>
                                <h6 class="my-0">Second Product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item justify-content-between lh-condensed d-flex">
                            <div>
                                <h6 class="my-0">Third Product </h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item justify-content-between bg-light d-flex">
                            <div class="text-success">
                                <h6 class="my-0">Product Name</h6>
                                <small>Brief description</small>
                            </div>
                            <span>$12</span>
                        </li>
                        <li class="list-group-item justify-content-between d-flex">
                                <span>Total(USD)</span>
                                <strong>$20</strong>
                        </li>
                    </ul>
                    <div class="card p-2">
                        <div class="input-group ">
                            <input type="text" class="form-control" placeholder="Promo Code" aria-label="Promo code" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <a href=""class="btn btn-secondary" type="button">Redeem</a> 
                            </div>
                        </div>
                    </div>
            </div>
        </div>
       <footer class="my-5 pt-5 text-muted text-center text-small">
           <p class="mb-1">  © 2021 By Farzaliyev Vusal</p>
           <ul class="list-inline">
               <li class="list-inline-item">
                   <a href="#">Privacy</a>
               </li>
               <li class="list-inline-item">
                   <a href="#">Terms</a>
               </li>
               <li class="list-inline-item">
                   <a href="#">Support</a>
               </li>
           </ul>
       </footer>
    </div>

   </body>
</html>