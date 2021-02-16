@extends('layouts.checkout')
@section('title','Checkout')
@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Details
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Checkout
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>Who is Going ?</h1>
                            <p>
                                Trip to Pura, Bali Indonesia.
                            </p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <td>Picture</td>
                                            <td>Name</td>
                                            <td>Nationality</td>
                                            <td>VISA</td>
                                            <td>Passport</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                              <img src="{{url('frontend/images/avatar1.png')}}" height="60px">  
                                            </td>
                                            <td class="align-middle">Achmad Firmansyah</td>
                                            <td class="align-middle">Indonesia</td>
                                            <td class="align-middle">N/A</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <img src="{{url('frontend/images/icon/remove.png')}}" height="15px">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="{{url('frontend/images/avatar2.png')}}" height="60px">  
                                            </td>
                                            <td class="align-middle">Elinawati</td>
                                            <td class="align-middle">Indonesia</td>
                                            <td class="align-middle">30 Days</td>
                                            <td class="align-middle">Active</td>
                                            <td class="align-middle">
                                                <img src="{{url('frontend/images/icon/remove.png')}}" height="15px">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form action="" class="form-inline">
                                    <label for="inputUsername" class="sr-only">Name</label>
                                    <input type="text" name="inputUsername" id="inputUsername" class="form-control mb-2 mr-sm-2" placeholder="Masukan Username">
                                    <label for="inputVisa" class="sr-only">VISA</label>
                                    <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                                        <option value="VISA" selected>VISA</option>
                                        <option value="30 Days">30 Days</option>
                                        <option value="N/A">N/A</option>
                                    </select>
                                    <label for="doePassport" class="sr-only">PASSPORT</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <input type="text" name="doePassport" id="doePassport" class="form-control datepicker" placeholder="DOE Passprt">
                                    </div>
                                    <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                                </form>
                                <h3 class="mt-2 mb-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite member that has registered in Nomads.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Checkout Infdrmation</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-right">2 Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional VISA</th>
                                    <td width="50%" class="text-right">$190.00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-right">$80.00/Person</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Price</th>
                                    <td width="50%" class="text-right">$280.00</td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Pay (+Unique Code)</th>
                                    <td width="50%" class="text-right text-total">
                                        <span class="text-blue">$279.</span>
                                        <span class="text-orange">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instruction</h2>
                            <p class="payment-instructions">
                                Please complete the payment before you continue the trip.
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{url('frontend/images/icon/atm.png')}}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            34653453455
                                            <br>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{url('frontend/images/icon/atm.png')}}" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>PT Nomads ID</h3>
                                        <p>
                                            0345525345
                                            <br>
                                            Bank Permata
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="success.html" class="btn btn-block btn-join-now mt-3 py-2">I Have Maid Payment</a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{url('/')}}" class="text-muted">Cancel Booking</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</main>
@endsection
@push('prepend-style')
    <!-- Gijgo Datepicker -->
    <link rel="stylesheet" href="{{url('frontend/libraries/gijgo-datepicker/css/gijgo.min.css')}}">
    <!-- End Gijgo Datepicker -->
@endpush
@push('addon-script')
    <!-- Gijgo Datepicker -->
    <script src="{{url('frontend/libraries/gijgo-datepicker/js/gijgo.min.js')}}"></script>
    <!-- End Gijgo Datepicker -->
    <script>
        //Inisialisasi Datepicker
        $('.datepicker').datepicker({
            uilibrary: 'bootstrap4',
            icons: {
                rightIcon: '<img src="{{url('frontend/images/icon/calendar.png')}}"/>'
            }
        });
    </script>
@endpush