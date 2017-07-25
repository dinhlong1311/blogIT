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
      @include('admin.layouts._alert')
      <div class="admin-content">
        <div class="admin-title">
          @include('admin.layouts._title')
        </div>
        <div class="admin-main">
          @yield('content')
        </div>
      </div>
    </div>
    @include('admin.layouts._script')
  </body>
</html>
