<nav class="navbar navbar-dark bg-dark navbar-expand-sm">
  <a class="navbar-brand" href="/">
    <img class="logo" src="{{ asset('images/employee-logo.svg') }}" alt="Employee Management">
    Employee Manager
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list-2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbar-list-2">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/departments">Departments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employees">Employees</a>
      </li>
    </ul>
  </div>
</nav>