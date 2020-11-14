<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fund Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{url('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

 
  <!-- Template Main CSS File -->
  <link href="{{url('/assets/css/style.css')}}" rel="stylesheet">


  <!-- =======================================================
  * Template Name: BizLand - v1.1.1
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

   <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br><br>
    
@endif
@if(Session::has('msg'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('msg') }}</p>
@endif
<h1 class="logo mr-auto"><a href="index.html">Robo Advisor Aggregator<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a  href="{{url('/')}}">Home</a></li>
          <li><a href="#about">About</a></li>
        
          <li><a href="#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
         
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Fund Factsheet            </li>
          </ol>
        </div>
        <div class="container  mt-5 ">
          <nz-card _ngcontent-aaq-c387="" class="mb-4 ant-card ant-card-bordered ng-star-inserted">
            <!----><!---->
            <div class="ant-card-body">
               <div _ngcontent-aaq-c387="" nz-row="" nztype="flex" nzjustify="space-between" nzgutter="16" class="ant-row-flex ant-row-flex-top ant-row-flex-space-between ng-star-inserted" style="margin-left: -8px; margin-right: -8px;">
                  <div _ngcontent-aaq-c387="" nz-col="" nzlg="14" nzmd="15" class="ant-col ant-col-md-15 ant-col-lg-14" style="padding-left: 8px; padding-right: 8px;">
                     <div _ngcontent-aaq-c387="" class="d-flex">
                        <h3 _ngcontent-aaq-c387="" class="mr-2">Aberdeen Standard Islamic World Equity Fund - Class A</h3>
                        <b2c-fund-risk-rating _ngcontent-aaq-c387="" country="MY">
                           <div class="b2c-fund-risk-rating ng-star-inserted">
                              <h6 class="d-flex align-items-center mb-0 font-weight-normal">
                                 <i nz-icon="" nztype="warning" nztheme="fill" class="anticon rating-color-4 anticon-warning">
                                    <svg viewBox="64 64 896 896" fill="currentColor" width="1em" height="1em" data-icon="warning" aria-hidden="true">
                                       <path d="M955.7 856l-416-720c-6.2-10.7-16.9-16-27.7-16s-21.6 5.3-27.7 16l-416 720C56 877.4 71.4 904 96 904h832c24.6 0 40-26.6 27.7-48zM480 416c0-4.4 3.6-8 8-8h48c4.4 0 8 3.6 8 8v184c0 4.4-3.6 8-8 8h-48c-4.4 0-8-3.6-8-8V416zm32 352a48.01 48.01 0 010-96 48.01 48.01 0 010 96z"></path>
                                    </svg>
                                 </i>
                                 <span class="ml-5 mt-2 text-danger"><span>Risk Rating: </span><span class="_rating_">7</span></span>
                              </h6>
                           </div>
                           <!---->
                        </b2c-fund-risk-rating>
                     </div>
                     <div _ngcontent-aaq-c387="" role="link" class="pointer" tabindex="0">
                        <i _ngcontent-aaq-c387="" nz-icon="" nztype="bank" nztheme="outline" class="anticon anticon-bank">
                           <svg viewBox="64 64 896 896" fill="currentColor" width="1em" height="1em" data-icon="bank" aria-hidden="true">
                              <path d="M894 462c30.9 0 43.8-39.7 18.7-58L530.8 126.2a31.81 31.81 0 00-37.6 0L111.3 404c-25.1 18.2-12.2 58 18.8 58H192v374h-72c-4.4 0-8 3.6-8 8v52c0 4.4 3.6 8 8 8h784c4.4 0 8-3.6 8-8v-52c0-4.4-3.6-8-8-8h-72V462h62zM512 196.7l271.1 197.2H240.9L512 196.7zM264 462h117v374H264V462zm189 0h117v374H453V462zm307 374H642V462h118v374z"></path>
                           </svg>
                        </i>
                        <span _ngcontent-aaq-c387="" class="text-uppercase ml-2">Aberdeen Standard Islamic Investments (Malaysia) Sdn Bhd</span>
                     </div>
                  </div>
                  <div _ngcontent-aaq-c387="" nz-col="" nzlg="7" nzmd="9" class="ant-col ant-col-md-9 ant-col-lg-7" style="padding-left: 8px; padding-right: 8px;">
                     <p _ngcontent-aaq-c387="" class="mb-1 ng-star-inserted">
                        Latest NAV Price 
                        <i _ngcontent-aaq-c387="" nz-icon="" nztype="info-circle" nztheme="outline" nz-tooltip="" class="anticon ml-1 pointer text-primary anticon-info-circle">
                           <svg viewBox="64 64 896 896" fill="currentColor" width="1em" height="1em" data-icon="info-circle" aria-hidden="true">
                              <path d="M512 64C264.6 64 64 264.6 64 512s200.6 448 448 448 448-200.6 448-448S759.4 64 512 64zm0 820c-205.4 0-372-166.6-372-372s166.6-372 372-372 372 166.6 372 372-166.6 372-372 372z"></path>
                              <path d="M464 336a48 48 0 1096 0 48 48 0 10-96 0zm72 112h-48c-4.4 0-8 3.6-8 8v272c0 4.4 3.6 8 8 8h48c4.4 0 8-3.6 8-8V456c0-4.4-3.6-8-8-8z"></path>
                           </svg>
                        </i>
                        <!---->
                     </p>
                     <div _ngcontent-aaq-c387="" class="d-flex align-items-center justify-content-between ng-star-inserted">
                        <h2 _ngcontent-aaq-c387="" class="mb-0 font-weight-bold "><span _ngcontent-aaq-c387="">MYR </span><span _ngcontent-aaq-c387="">1.9077</span></h2>
                        <div _ngcontent-aaq-c387="" class="pointer text-primary font-weight-bold">
                           <i _ngcontent-aaq-c387="" nz-icon="" nztype="fund" nztheme="fill" class="anticon text-primary anticon-fund">
                              <svg viewBox="64 64 896 896" fill="currentColor" width="1em" height="1em" data-icon="fund" aria-hidden="true">
                                 <path d="M926 164H94c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V196c0-17.7-14.3-32-32-32zm-92.3 194.4l-297 297.2a8.03 8.03 0 01-11.3 0L410.9 541.1 238.4 713.7a8.03 8.03 0 01-11.3 0l-36.8-36.8a8.03 8.03 0 010-11.3l214.9-215c3.1-3.1 8.2-3.1 11.3 0L531 565l254.5-254.6c3.1-3.1 8.2-3.1 11.3 0l36.8 36.8c3.2 3 3.2 8.1.1 11.2z"></path>
                              </svg>
                           </i>
                           Price History 
                        </div>
                     </div>
                     <!----><!----><!---->
                  </div>
               </div>
               <!----><!----><!---->
            </div>
            <!---->
         </nz-card>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->



   

  </main><!-- End #main -->


      <div class="container">
         
      <div class=" mt-3  ml-n3">
               <div class="row ">
                  <div class="col-lg-8 col-md-10 col-sm-12 mb-3 " >
                     <div class="card col-12 border-0 shadow" style="height: 100%;"  >

                        <div class="card-body">
                           <h5 class="card-title">About this portfolio:</h5>
                           <table class="card-text table">
                              <tr>
                                 <th>Type</th>
                                 <td class="ml-2">High Risk</td>
                              </tr>
                              <tr>
                                 <th>Currency denomination</th>
                                 <td  class="pl-2">USD</td>
                              </tr>
                              <tr>
                                 <th>Duration</th>
                                 <td >3 to 5 years</td>
                              </tr>
                           </table>

                        </div>
                     </div>
                  </div>
                </div>
               </div> 
               <div class="row ">
               <div class="col-lg-8 col-md-10 col-sm-12">
                        <div class="row ">
                            <div class="col-lg-3 col-md-4 col-sm-6 bg-success  p-3">
                            
                            <span class="title text-light ">Convert value</sapn>
                            <h6>RM 103</h6>
                            </div>
                           <div class="col-lg-2 col-md-3 col-sm-6 ml-5 p-3 pr-0" style="background-color:#e8eaed;">
                              <h6 class="text-gray">Total Return (MYR)</h6>
                              <span class="text-2xl font-weight-bold text-success">RmM3.56</span>
                           </div>
                           <div class="col-lg-3 col-md-4 col-sm-6 p-3" style="background-color:#e8eaed;"> 
                           <h6 class="text-gray">Net deposit </h6>
                              <span class="text-2xl font-weight-bold text-success">RM100.00</span>
                           </div>
                           <div class="col-lg-3 col-md-4 col-sm-5 p-3" style="background-color:#e8eaed;">
                           <h6 class="text-gray">Time weighted Return </h6>
                              <span class="text-2xl font-weight-bold text-success">3.56%</span>
                           </div>
                        </div>
                          
                     </div>
               </div>
               <div class="row mt-2">
                     <div class="col-lg-8 col-md-10 col-sm-12">
                           <div class="row">
                                 <div class="col-lg-3  p-3">
                                    <span class="title font-weight-bold text-dark">Portfolio Summry</span>
                                    <ul class="mt-2  pr-3" style="list-style-type:none" >
                                    <li><small>portfolio type</small></li>
                                    <li class="text-success">General Investment</li>
                                    <li >Acount type</li>
                                    <li class="text-success">Personal</li>
                                    <li>Satshway risk inbox</li>
                                    <li class="text-success">26.9%</li>
                                    </ul>
                                 </div>
                                 <div class="col-lg-9" style="border:1px solid black">

                                    <img src="/images/{{$SingleFund->image}}" alt="name" style="max-width: 40%">
                                 </div>
                           </div>
                     </div>
               </div><br><br>
               <h3>Assets</h3>
               <div class="row ml-2  p-5">
              
               <div class="col-4 mb-3">
               
                  
               <h5 class="card-title">Target Asset Category</h5>
                           <table class="card-text  table ">
                              <tr>
                                 <th>Equity Sectors (US)</th>
                                 <td>{{$SingleFund->equity_sector}}</td>
                              </tr>
                              <tr>
                                 <th>International Equities</th>
                              <td>{{$SingleFund->international_equilities}}</td>
                              </tr>
                              <tr>
                                 <th>Real Estate</th>
                                 <td>{{$SingleFund->real_estate}}</td>
                              </tr>
                              <tr>
                                 <th>Commodities</th>
                                 <td>{{$SingleFund->commodities}}</td>
                              </tr>
                              <tr>
                                 <th>Cash (USD)</th>
                                 <td>{{$SingleFund->cash_usd}}</td>
                              </tr>
                           </table>

                  </div>
                  <div class="col-2 ">
                  </div>
                  <div class="col-6  ">
                  <h5 class="card-title">Target Geography</h5>
                           <table class=" table ">
                              <tr>
                                 <th>North America</th>
                                 <td>{{$SingleFund->north_america}}</td>
                              </tr>
                              <tr>
                                 <th> Asia</th>
                                 <td>{{$SingleFund->asia}}</td>
                                 
                              </tr>
                              <tr>
                                 <th>Europe</th>
                                 <td>{{$SingleFund->europe}}</td>

                              </tr>
                              <tr>
                                 <th>Ocinia</th>
                                 <td>{{$SingleFund->ocinia}}</td>

                              </tr>
                              <tr>
                                 <th>South America</th>
                                 <td>{{$SingleFund->south_america}}</td>

                              </tr>
                              <tr>
                                 <th>Africa</th>
                                 <td>{{$SingleFund->africa}}</td>

                              </tr>
                           </table>
                  </div>
               </div>



               <div class="row  ml-2 p-3">
               <h5 class="card-title">Asset Class Breakdown:</h5>
                           <table class="table table-responsive card-text  ">
                              <tr class="">
                                 <th>Asset Class </th>
                                 <th>Asset</th>
                                 <th>Current Wieght</th>

                              </tr>
                              <tr>
                                 <th>Equity Sectors (US)</th>
                                 <td> </td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td>Small Cap</td>
                                 <td>iShares Core S&P Small Cap ETF</td>
                                 <td>{{$SingleFund->small_cap}}</td>

                              </tr>
                              <tr>
                                 <td>Healthcare</td>
                                 <td>Health Care Select Sector SPDR Fund</td>
                                 <td>{{$SingleFund->health_care}}</td>

                              </tr>
                              <tr>
                                 <td>Consumer Discretionary</td>
                                 <td>Consumer Discretionary Select Sector SPDR Fund</td>
                                 <td>{{$SingleFund->consumer_discretionary}}</td>

                              </tr>
                              <tr class="mt-3">
                                 <th>International Equities</th>
                                  
                              </tr>
                              <tr>
                                 <td>Asia ex-Japan</td>
                                 <td>iShares MSCI All Country Asia ex Japan ETF</td>
                                 <td>{{$SingleFund->asia_ex_japan}}</td>

                              </tr>
                              <tr>
                                 <td>China-Tech</td>
                                 <td>KraneShares CSI China Internet ETF</td>
                                 <td>{{$SingleFund->china_tech}}</td>

                              </tr>
                              <tr>
                                 <td>Emerging Markets</td>
                                 <td>SPDR Portfolio Emerging Markets ETF</td>
                                 <td>{{$SingleFund->emrging_market}}</td>

                              </tr>

                              <tr>
                                 <th>Real Estate</th>
                                 <td> </td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td>Global ex-US REITS</td>
                                 <td>Vanguard Global ex-U.S. Real Estate Index Fund ETF</td>
                                 <td>{{$SingleFund->global_ex_us__reits}}</td>

                              </tr>



                              <tr>
                                 <th>Commodities</th>
                                 <td> </td>
                                 <td> </td>
                              </tr>
                              <tr>
                                 <td>Precious Metals (Gold)</td>
                                 <td>SPDR Gold Trust</td>
                                 <td>{{$SingleFund->precious_metals_gold}}</td>

                              </tr>

                              <tr>
                                 <th>cash</th>
                                 <td>USD </td>
                                 <td>{{$SingleFund->_cash}}</td>

                              </tr>

                           </table>

               </div>
               <div class="row mt-4 mb-2">
             <div class="col-12 p-4  border-0 shadow shadow-sm rounded card-hovr-tramsform ">
                <h5>Disclaimer
                </h5>
                <ol _ngcontent-dcg-c387="" class="ng-star-inserted"><li _ngcontent-dcg-c387="" class="pb-2"> Unit price is the NAV price, sales charge are not included. </li><li _ngcontent-dcg-c387="" class="pb-2"> Investment involves risk. The price of securities may go down as well as up, and under certain circumstances an investor may sustain a total or substantial loss of investment. Past performance is not necessarily indicative of the future or likely performance of the fund. Investors should read the relevant fund's prospectus for details before making any investment decision. An Investor should make an appraisal of the risks involved in investing in these products and should consult their own independent and professional advisors, to ensure that any decision made is suitable with regards to their circumstances and financial position. </li><li _ngcontent-dcg-c387="" class="pb-2"> This fact sheet is compiled by FSMOne from the individual fund management company's public information material, and meant for information only. Whilst all attempts have been made by FSMOne to present the information accurately and completely, mistakes and omissions do sometimes occur. Readers are advised to read the prospectus and product highlight sheet before making any investment decision. It is important that you read our disclaimers. </li><li _ngcontent-dcg-c387="" class="pb-2"> Unit trusts are offered solely on the basis of the information contained in the electronic prospectus and any other information found elsewhere does not form part of the electronic prospectus. </li><li _ngcontent-dcg-c387="" class="pb-2"> Please read the <a _ngcontent-dcg-c387="">Important Notices</a> before retrieving the electronic prospectus(es) and electronic application forms. </li></ol>
             </div>
          </div>
      </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="{{url('/subsscribe')}}" method="post" >
            @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>BizLand<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{url('/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{url('/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{url('/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{url('/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{url('/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{url('/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{url('/assets/js/main.js')}}"></script>

</body>

</html>