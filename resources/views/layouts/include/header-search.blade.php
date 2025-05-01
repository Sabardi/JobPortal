   <!-- banner-section -->
   <section class="banner-section style-two centred"
       style="background-image: url({{ asset('assets') }}/images/banner.png);">
       <div class="auto-container">
           <div class="content-box">
               <div class="text">
                   <h1>Temukan Pekerjaan Impian Anda
                       <br />Hari Ini
                   </h1>
                   <p>kami menghubungkan Anda dengan perusahaan terkemuka yang mencari talenta seperti Anda. Dengan
                       platform yang mudah digunakan, Anda dapat dengan mudah mencari, melamar, dan mendapatkan
                       pekerjaan.
                       Pekerjaan ideal Anda hanya sejauh klik!</p>
               </div>
               <div class="form-inner">
                   <ul class="clearfix radio-select-box">
                       <li>
                           <div class="single-checkbox">
                               <input type="radio" name="check-box" id="check1" checked="">
                               <label for="check1"><span></span>All</label>
                           </div>
                       </li>
                       <li>
                           <div class="single-checkbox">
                               <input type="radio" name="check-box" id="check2">
                               <label for="check2"><span></span>FreeLance</label>
                           </div>
                       </li>
                       <li>
                           <div class="single-checkbox">
                               <input type="radio" name="check-box" id="check3">
                               <label for="check3"><span></span>Full Time</label>
                           </div>
                       </li>
                       <li>
                           <div class="single-checkbox">
                               <input type="radio" name="check-box" id="check4">
                               <label for="check4"><span></span>Part Time</label>
                           </div>
                       </li>
                   </ul>
                   <form action="" method="post">
                       <div class="clearfix input-inner">
                           <div class="form-group">
                               <i class="icon-2"></i>
                               <input type="search" name="name" placeholder="Cari Loker..." required="">
                           </div>
                           <div class="form-group">
                               <i class="icon-3"></i>
                               <select class="wide">
                                   <option data-display="Select Location">Lokasi</option>
                                   @foreach ($locations as $location)
                                       <option value="1">{{ $location->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="form-group">
                               <i class="icon-4"></i>
                               <select class="wide">
                                   <option data-display="Select Category">Kategori</option>
                                   @foreach ($categories as $category)
                                       <option value="1">{{ $category->name }}</option>
                                   @endforeach
                               </select>
                           </div>
                           <div class="btn-box">
                               <button type="submit"><i class="icon-2"></i>Cari</button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </section>
   <!-- banner-section end -->
