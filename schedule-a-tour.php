<?php include('./header.php') ?>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
</head>
<style>
  .time-slot {
    flex: 1 1 auto;
    min-width: 100px;
    font-size: 16px;
    font-weight: 600;
    color: #000;
    border-radius: 100px;
    border: 1px solid var(--p);
  }

  .time-slot.active {
    background-color: var(--p);
    color: white;
  }

  .btn-primary {
    background-color: var(--p);

    border-color: #0d6efd;
  }

  .btn-primary:hover {
    background-color: var(--p);

    border-color: #0b5ed7;
  }

  .btn:hover {
    color: var(--bs-btn-hover-color);
    background-color: var(--p);
    border-color: var(--bs-btn-hover-border-color);
  }




  .form-label {
    margin-bottom: .5rem;
    color: #000;
    font-size: 18px;
    font-weight: 600;
  }


  .form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5em;
    margin-bottom: .125rem;
    display: flex;
    justify-content: center;
    align-items: center;
  }
</style>


<section class="neighborhood-hero Aminities_ban">
  <div class="overlay-gradient"></div>
  <div class="tf-container">
    <div class="hero-content text-center">
      <h1>Schedule A Tour</h1>
      <p>Discover the luxury features and facilities that make our community special</p>
      <ul class="breadcrumb">
        <li><a class="home" href="index.php">Home</a></li>
        <li>Schedule a Tour</li>
      </ul>
    </div>
  </div>
</section>

<!-- section-featured-listings -->
<section class="section-featured-listings space">
  <div class="tf-container">

    <div class="row">





      <div class="col-md-8 offset-2">



        <div class="heading-section text-center mb-48">
          <h2 class="title ">Schedule a Tour</h2>
          <p class="text-1 wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Pick a date and time that works best for you. We’re excited to show you around!
          </p>
        </div>

        <form action="">

          <div class="tour_forms">

            <!-- Date Picker -->
            <div class="mb-4">
              <label for="datePicker" class="form-label"><i class="fas fa-calendar-alt me-2"></i>Select Date:</label>
              <input type="text" id="datePicker" class="form-control" placeholder="Select Date">
            </div>

            <!-- Time Slots -->
            <div class="mb-4">
              <label class="form-label"><i class="fas fa-clock me-2"></i>Select Time:</label>
              <div class="d-flex flex-wrap gap-2" id="timeSlots">
                <button type="button" class="btn btn-outline-primary time-slot">10:00 AM</button>
                <button type="button" class="btn btn-outline-primary time-slot">11:00 AM</button>
                <button type="button" class="btn btn-outline-primary time-slot">1:00 PM</button>
                <button type="button" class="btn btn-outline-primary time-slot">2:00 PM</button>
                <button type="button" class="btn btn-outline-primary time-slot">3:00 PM</button>
                <button type="button" class="btn btn-outline-primary time-slot">4:00 PM</button>
                <button type="button" class="btn btn-outline-primary time-slot">5:00 PM</button>
              </div>
              <input type="hidden" id="selectedTime" name="selectedTime" required>
            </div>

          </div>

          <div class="tour_forms">

            <!-- Contact Details Form -->
            <div class="mb-4">
              <label class="form-label"><i class="fas fa-user me-2"></i>Contact Details:</label>
              <div class="row g-3">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-md-6">
                  <input
                    type="number"
                    class="form-control"
                    placeholder="Your phone number"
                    name="phone"
                    required
                    pattern="\d{10}"
                    maxlength="10"
                    title="Please enter exactly 10 digits" oninput="this.value = this.value.slice(0, 10);">


                </div>
              </div>
            </div>

            <!-- Move-In Date -->
            <div class="mb-4">
              <label for="moveInDate" class="form-label"><i class="fas fa-home me-2"></i>Move-In Date:</label>
              <input type="text" id="moveInDate" class="form-control" placeholder="Select Move-In Date">
            </div>

            <!-- Tour Type -->
            <div class="mb-4">
              <label class="form-label"><i class="fas fa-walking me-2"></i>Tour Type:</label>
              <div class="d-flex gap-3">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tourType" id="inPerson" checked>
                  <label class="form-check-label" for="inPerson">In-Person</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="tourType" id="virtual">
                  <label class="form-check-label" for="virtual">Virtual</label>
                </div>
              </div>
            </div>

            <div class="send-wrap">
              <button class="tf-btn bg-color-primary fw-5 pd-8" type="button">Contact our
                experts</button>
            </div>

        </form>
      </div>

    </div>

  </div>

  </div>

  </div>



</section>
<!-- /section-featured-listings -->






<!-- Bootstrap JS and Flatpickr JS -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Custom JS -->
<script src="script.js"></script>

<script>
  // Initialize Flatpickr for Date Pickers
  flatpickr("#datePicker", {
    dateFormat: "Y-m-d",
    minDate: "today",
  });

  flatpickr("#moveInDate", {
    dateFormat: "Y-m-d",
    minDate: "today",
  });

  // Time Slot Selection
  const timeSlots = document.querySelectorAll(".time-slot");
  const selectedTimeInput = document.getElementById("selectedTime");

  timeSlots.forEach((slot) => {
    slot.addEventListener("click", () => {
      // Remove active class from all slots
      timeSlots.forEach((s) => s.classList.remove("active"));
      // Add active class to the clicked slot
      slot.classList.add("active");
      // Set the selected time value to the hidden input
      selectedTimeInput.value = slot.textContent;
    });
  });

  // Form Submission
  document.getElementById("tourForm").addEventListener("submit", (event) => {
    event.preventDefault(); // Prevent form from refreshing the page

    const date = document.getElementById("datePicker").value;
    const selectedTime = selectedTimeInput.value;
    const moveInDate = document.getElementById("moveInDate").value;
    const tourType = document.querySelector('input[name="tourType"]:checked').value;

    if (!date || !selectedTime || !moveInDate) {
      alert("Please fill out all fields.");
      return;
    }

    // Display confirmation
    alert(`Tour Scheduled!\nDate: ${date}\nTime: ${selectedTime}\nMove-In Date: ${moveInDate}\nTour Type: ${tourType}`);
  });
</script>



<?php include('./footer.php') ?>