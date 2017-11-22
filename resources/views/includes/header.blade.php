<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('dashboard') }}">Home</a>
    </div>

  @auth
    <div class="pull-right">
        <form action="{{ route('logout') }}">
            <button type="submit" class="btn navbar-btn" name="logout" id="logout">Log Out</button>
        </form>
  @endauth

  </div><!-- /.container-fluid -->
</nav>
  <!--Se o usuario estiver autenticado, mostra o sair-->


</div>
  </div>
</nav>
</header>