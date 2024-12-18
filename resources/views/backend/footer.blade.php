
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">First link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Second link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Third link</a></li>
                  </ul>
                </div>
                <div class="col-6 col-md-3">
                  <ul class="list-unstyled mb-0">
                    <li><a href="#">Fourth link</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
              All Access Managed By Super Admin
            </div>
          </div>
        </div>
      </div>

    <footer class="footer">
        <div class="container">
          <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
              <div class="row align-items-center">
                <div class="col-auto">
                  <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item"><a href="./docs/index.html">Documentation</a></li>
                    <li class="list-inline-item"><a href="./faq.html">FAQ</a></li>
                  </ul>
                </div>
                <div class="col-auto">
                  <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">Source code</a>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
              Copyright © 2018 <a href=".">{{env('APP_NAME')}}</a>. Developed by <a href="#" target="_blank">Harumi Project</a> All rights reserved.
            </div>
          </div>
        </div>
    </footer>
    <script src="{{asset('assets/js/jquery-3.7.0.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <!-- Custom Script -->
    <script>
      var renderAsHtml = function (data, type, full) {
        return decHTMLifEnc(data);
      }; 
      var isEncHTML = function(str) {
          if(str.search(/&amp;/g) != -1 || str.search(/&lt;/g) != -1 || str.search(/&gt;/g) != -1)
              return true;
          else
              return false;
      };
      
      var decHTMLifEnc = function(str){
          if(isEncHTML(str))
              return str.replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>');
          return str;
      }
    </script>