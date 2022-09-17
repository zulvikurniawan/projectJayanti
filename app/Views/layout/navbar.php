<?php $user = session()->get('user') ?>

<nav class="navbar navbar-expand-lg navbar-light bg-info shadow">
     <div class="container-fluid mx-5">
          <a class="navbar-brand fw-bold" href="/home"><img src="/img/logoPanarub.jpg"
                    class="img-thumbnail rounded me-3" alt="logoPanarub" style="width: 40px;">PT PANARUB INDUSTRI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
               aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
          </button>
          <?php $user = session()->get('user');
          $jabatan = $user['id_jabatan'];
          $parent = $user['id_parent'];
          $allAccess  ?>
          <?php ($jabatan == 1) ? $allAccess = true : $allAccess = false; ?>
          <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                         <a class="nav-link" aria-current="page" href="/Home">Home</a>
                    </li>
                    <?php if ($allAccess || $parent == 3) : ?>
                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket/create">Create Ticket</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket">Status Ticket</a>
                    </li>
                    <?php if ($allAccess || $jabatan == 9) : ?>
                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket/approval">Ticket Approval</a>
                    </li>
                    <?php endif; ?>
                    <?php if ($allAccess || $jabatan == 6) : ?>

                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket/assign">Assign Ticket</a>
                    </li>
                    <?php endif; ?>
                    <?php if ($allAccess || $jabatan == 7) : ?>
                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket/solved">Solved Ticket</a>
                    </li>
                    <?php endif; ?>

                    <?php if ($allAccess || $jabatan == 5) : ?>

                    <li class="nav-item">
                         <a class="nav-link" href="/Ticket/report">Report</a>
                    </li>
                    <?php endif; ?>

                    <?php if ($allAccess || $jabatan == 6) : ?>

                    <li class="nav-item">
                         <a class="nav-link" href="/Admin">Admin</a>
                    </li>
                    <?php endif; ?>

                    <li class="nav-item dropdown">
                         <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-person-circle"></i>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarScrollingDropdown">
                              <li><a class="dropdown-item" href="/Profile/<?= $user['id_account']; ?>">Profile</a></li>
                              <li><a class="dropdown-item" href="/login/logout">Logout</a></li>
                         </ul>
                    </li>
               </ul>
          </div>
     </div>
</nav>