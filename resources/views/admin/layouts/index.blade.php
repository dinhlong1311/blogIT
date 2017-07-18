<!DOCTYPE html>
<html>
  <head>
    @include('admin.layouts._head')
  </head>
  <body>
    <div class="admin-layout">
      @include('admin.layouts._logo')
      @include('admin.layouts._header')
      @include('admin.layouts._sidebar')
      <div class="admin-content">
        @include('admin.layouts._title')
        <div class="admin-main">
          @yield('content')
        </div>
      </div>
    </div>
    @include('admin.layouts._script')
  </body>
</html>
