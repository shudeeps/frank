<nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/lender') }}">
                  <span data-feather="home"></span>
                  Upload  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('lender.showproduct')}}">
                 show product
                </a>
              </li>
          
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              
              
              
              @if(Auth::guard('admin')->check())
               
              <li class="nav-item">
                <a class="nav-link" href="{{route('admin.showLender')}}">
                  <span data-feather="users"></span>
                 All Lender
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link" href="{{route('admin.giveAccess')}}">
                  <span data-feather="bar-chart-2"></span>
                  Give access
                </a>
              </li>
           
              @endif
      
            </ul>

           </div>
        </nav>