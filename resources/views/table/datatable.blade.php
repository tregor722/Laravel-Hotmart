<x-app-layout :assets="$assets ?? []">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         {{-- <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Bootstrap Datatables</h4>
            </div>
         </div> --}}
         <div class="card-body">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-between">
                   <h5 class="mb-3">Billing History </h5>
                   <div class="d-flex mb-3 align-items-center">
                     <h6 style="margin-right: 5px;">Next Billing: </h6>
                     <p style="font-size: small;"> 10 USD (10 Ago 2022)</p>
                     <a style="margin-left: 10px" href="">Cancel</a>
                   </div>
                </div>
            </div>
            <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Robot</th>
                        <th>Type</th>
                        <th>Period</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 June 2022</td>
                        <td>20 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>2 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 April 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 September 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2021</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>9 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>8 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>7 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>6 July 2021</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2020</td>
                        <td>20 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>2 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2019</td>
                        <td>30 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>3 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                     <tr>
                        <td>10 July 2022</td>
                        <td>10 USD</td>
                        <td>Neobot</td>
                        <td>Credit Card</td>
                        <td>1 month</td>
                        <td><a href="">View</a></td>
                     </tr>
                  </tbody>
                  <tfoot>
                     <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Robot</th>
                        <th>Type</th>
                        <th>Period</th>
                        <th></th>
                     </tr>
                  </tfoot>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
