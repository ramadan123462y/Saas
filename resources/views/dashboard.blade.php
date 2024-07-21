<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container-fluid {
            background-color: #C5CAE9
        }

        .heading {
            font-size: 40px;
            margin-top: 35px;
            margin-bottom: 30px;
            padding-left: 20px
        }

        .card {
            border-radius: 10px !important;
            margin-top: 60px;
            margin-bottom: 60px
        }

        .form-card {
            margin-left: 20px;
            margin-right: 20px
        }

        .form-card input,
        .form-card textarea {
            padding: 10px 15px 5px 15px;
            border: none;
            border: 1px solid lightgrey;
            border-radius: 6px;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            font-family: arial;
            color: #2C3E50;
            font-size: 14px;
            letter-spacing: 1px
        }

        .form-card input:focus,
        .form-card textarea:focus {
            -moz-box-shadow: 0px 0px 0px 1.5px skyblue !important;
            -webkit-box-shadow: 0px 0px 0px 1.5px skyblue !important;
            box-shadow: 0px 0px 0px 1.5px skyblue !important;
            font-weight: bold;
            border: 1px solid #304FFE;
            outline-width: 0
        }

        .input-group {
            position: relative;
            width: 100%;
            overflow: hidden
        }

        .input-group input {
            position: relative;
            height: 80px;
            margin-left: 1px;
            margin-right: 1px;
            border-radius: 6px;
            padding-top: 30px;
            padding-left: 25px
        }

        .input-group label {
            position: absolute;
            height: 24px;
            background: none;
            border-radius: 6px;
            line-height: 48px;
            font-size: 15px;
            color: gray;
            width: 100%;
            font-weight: 100;
            padding-left: 25px
        }

        input:focus+label {
            color: #304FFE
        }

        .btn-pay {
            background-color: #304FFE;
            height: 60px;
            color: #ffffff !important;
            font-weight: bold
        }

        .btn-pay:hover {
            background-color: #3F51B5
        }

        .fit-image {
            width: 100%;
            object-fit: cover
        }

        img {
            border-radius: 5px
        }

        .radio-group {
            position: relative;
            margin-bottom: 25px
        }

        .radio {
            display: inline-block;
            border-radius: 6px;
            box-sizing: border-box;
            border: 2px solid lightgrey;
            cursor: pointer;
            margin: 12px 25px 12px 0px
        }

        .radio:hover {
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 0, 0.2)
        }

        .radio.selected {
            box-shadow: 0px 0px 0px 1px rgba(0, 0, 155, 0.4);
            border: 2px solid blue
        }

        .label-radio {
            font-weight: bold;
            color: #000000
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
</head>

<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-8">
                <div class="card p-3">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <h2 class="heading text-center">BBBootstrap</h2>
                        </div>
                    </div>
                    <form onsubmit="event.preventDefault()" class="form-card">
                        <div class="row justify-content-center mb-4 radio-group">
                            <div class="col-sm-3 col-5">
                                <div class='radio selected mx-auto'  data-value="dk"> <img class="fit-image"
                                        src="https://i.imgur.com/5TqiRQV.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="visa"> <img class="fit-image"
                                        src="https://i.imgur.com/OdxcctP.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="master"> <img class="fit-image"
                                        src="https://i.imgur.com/WIAP9Ku.jpg" width="105px" height="55px"> </div>
                            </div>
                            <div class="col-sm-3 col-5">
                                <div class='radio mx-auto' data-value="paypal"> <img class="fit-image"
                                        src="https://i.imgur.com/cMk1MtK.jpg" width="105px" height="55px"> </div>
                            </div> <br>
                        </div>
                        <div class="row justify-content-center form-group">
                            <div class="col-12 px-auto">
                                <div class="custom-control custom-radio custom-control-inline"> <input
                                        id="customRadioInline1" type="radio" name="customRadioInline1"
                                        class="custom-control-input" checked="true"> <label for="customRadioInline1"
                                        class="custom-control-label label-radio">Private</label> </div>
                                <div class="custom-control custom-radio custom-control-inline"> <input
                                        id="customRadioInline2" type="radio" name="customRadioInline1"
                                        class="custom-control-input"> <label for="customRadioInline2"
                                        class="custom-control-label label-radio">Business</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" name="Name" placeholder="John Doe">
                                    <label>Name</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="input-group"> <input type="text" id="cr_no" name="card-no"
                                        placeholder="0000 0000 0000 0000" minlength="19" maxlength="19"> <label>Card
                                        Number</label> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="input-group"> <input type="text" id="exp" name="expdate"
                                                placeholder="MM/YY" minlength="5" maxlength="5"> <label>Expiry
                                                Date</label> </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="input-group"> <input type="password" name="cvv"
                                                placeholder="&#9679;&#9679;&#9679;" minlength="3" maxlength="3">
                                            <label>CVV</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12"> <input type="submit" value="Pay 100 EUR"
                                    class="btn btn-pay placeicon"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            //For Card Number formatted input
            var cardNum = document.getElementById('cr_no');
            cardNum.onkeyup = function(e) {
                if (this.value == this.lastValue) return;
                var caretPosition = this.selectionStart;
                var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
                var parts = [];

                for (var i = 0, len = sanitizedValue.length; i < len; i += 4) {
                    parts.push(sanitizedValue.substring(i, i + 4));
                }

                for (var i = caretPosition - 1; i >= 0; i--) {
                    var c = this.value[i];
                    if (c < '0' || c > '9') {
                        caretPosition--;
                    }
                }
                caretPosition += Math.floor(caretPosition / 4);

                this.value = this.lastValue = parts.join('-');
                this.selectionStart = this.selectionEnd = caretPosition;
            }

            //For Date formatted input
            var expDate = document.getElementById('exp');
            expDate.onkeyup = function(e) {
                if (this.value == this.lastValue) return;
                var caretPosition = this.selectionStart;
                var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
                var parts = [];

                for (var i = 0, len = sanitizedValue.length; i < len; i += 2) {
                    parts.push(sanitizedValue.substring(i, i + 2));
                }

                for (var i = caretPosition - 1; i >= 0; i--) {
                    var c = this.value[i];
                    if (c < '0' || c > '9') {
                        caretPosition--;
                    }
                }
                caretPosition += Math.floor(caretPosition / 2);

                this.value = this.lastValue = parts.join('/');
                this.selectionStart = this.selectionEnd = caretPosition;
            }

            // Radio button
            $('.radio-group .radio').click(function() {
                $(this).parent().parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
            });
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
