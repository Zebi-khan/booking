<?php require_once 'header.php' ?>

<!-- Banner -->
<div class="hotel-banner py-5">
  <div class="container mt-5">
    <div class="text-white">
      <h1 class="mt-5">Hotels.</h1>
    </div>
    <div class="search-form bg-white p-4 rounded shadow">
      <form action="search.php" method="get" class="row g-3">
        <div class="col-md-6">
          <input type="text" class="form-control" name="destination" placeholder="City, airport, region, landmark or hotel name" required>
        </div>
        <div class="col-md-3">
          <input type="date" class="form-control" name="checkin" placeholder="Check-in">
        </div>
        <div class="col-md-3">
          <input type="date" class="form-control" name="checkout" placeholder="Check-out">
        </div>
        <div class="col-md-3">
          <select class="form-select" name="guests">
            <option value="1">1 adult, 0 children, 1 room</option>
            <option value="2">2 adults, 0 children, 1 room</option>
            <option value="3">2 adults, 1 child, 1 room</option>
            <!-- Add more options as needed -->
          </select>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-primary w-100">Search</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Location -->
 <div class="location py-5">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="card">
          <div></div>
        </div>
      </div>
      <div class="col-3"></div>
      <div class="col-3"></div>
      <div class="col-3"></div>
    </div>
  </div>
 </div>

<?php require_once 'footer.php' ?>
