
<link rel="stylesheet" href="/app/components/navbar/navbar.css">
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">EnergyTracker</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/categories">Kategorien erfassen</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Zählerstände erfassen
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/capture-power">Stromverbrauch erfassen</a></li>
            <li><a class="dropdown-item" href="/capture-gas">Gasverbrauch erfassen</a></li>
           
          </ul>
        </li> 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Auswertungen
          </a>
          <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/overview-power">Auswertung Strom</a></li>
            <li><a class="dropdown-item" href="/overview-gas">Auswertung Gas</a></li>
          </ul>
        </li> 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Spartipps
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/tips-power">Strom sparen</a></li>
            <li><a class="dropdown-item" href="/tips-gas">Gas sparen</a></li>
          </ul>
        </li> 

      </ul>
    </div>
  </div>
</nav>