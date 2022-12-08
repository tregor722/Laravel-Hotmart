<x-app-layout :assets="$assets ?? []">
   <div class="row mt-50">

      <div class="col-md-12">
         <div class="row">

            <div class="col-md-12 col-lg-12">
               <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                  {{-- <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title mb-2">Enterprise Clients</h4>
                        <p class="mb-0">
                           <svg class ="me-2" width="24" height="24" viewBox="0 0 24 24">
                              <path fill="#3a57e8" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                           </svg>
                           15 new acquired this month
                        </p>
                     </div>
                     <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        </span>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                           <a class="dropdown-item " href="javascript:void(0);">Action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                        </div>
                     </div>
                  </div> --}}
                  <div class="card-body py-5 px-2">
                    <div>
                        <h5>License</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <h6 >License: NU34H89FN4OJP</h6>
                            <h6 >Terminals: Unlimited</h6>
                            <h6 >Expires at: 10 Ago 2022</h6>
                        </div>
                        <hr style="border: 1px dotted black;" />
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="mt-3" id="question" style="display: none;">
                                <h5>Have quetions?</h5>
                                <span>Send us an Email to support@website.com</span>
                            </div>
                            <div id="overview">
                                <video style=" position: relative; width:100%;" controls>
                                    <source src="" type="video/mp4">
                                    <source src="" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="mt-5" id="gettingstart">
                                    <h5 class="mb-3">Getting Started</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                        laboris nisi ut.
                                        Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                        sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                           <div class="card shadow-none m-0 border-3">
                              <div class=" p-0 ">
                                <ul class="list-group list-group-flush">
                                    <li class="iq-sub-card list-group-item d-flex justify-content-between">
                                        <a class="p-0" id="btn_overview" href="#"><h6>Overview</h6></a>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Resources
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">File.doc</a></li>
                                            <li><a class="dropdown-item" href="#">File.zip</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" id="btn_overview" href="#gettingstart"><h6>Getting started</h6></a></li>
                                    <li class="iq-sub-card list-group-item"><a class="p-0" id="btn_overview" href="#"><h6>Workflow</h6></a></li>
                                    <li class="iq-sub-card list-group-item d-flex justify-content-between">
                                        <a class="p-0" id="btn_overview" href="#"><h6>Tips & Tricks</h6></a>
                                        <div class="btn-group">
                                            <button class="btn btn-secondary btn-xs dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Resources
                                            </button>
                                            <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#">File.doc</a></li>
                                            <li><a class="dropdown-item" href="#">File.zip</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                              </div>
                           </div>
                           <div class="card shadow-none mt-3 border-3">
                              <div class=" p-0 ">
                                 <ul class="list-group list-group-flush">
                                 <li class="iq-sub-card list-group-item" id="btn_question"><a class="p-0" href="#"><h6>Have questions?</h6></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                    </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>
<script type="text/javascript">
    $(document).on('click', '#btn_question', function(){
		$('#question').show();
		$('#overview').hide();
    });

    $(document).on('click', '#btn_overview', function(){
		$('#question').hide();
		$('#overview').show();
    });
</script>
