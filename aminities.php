      <?php include('./header.php') ?>
      <style>
          :root {
              --primary-color: #23346C;
              --secondary-color: #F7961D;
              --third-color: #0C8B44;
              --accent-color: #00a896;
              --light-bg: #f8f9fa;
          }


          .Aminities-section {
              padding: 100px 0;
              background: linear-gradient(135deg, #ffffff 0%, #f0f7f6 100%);
              position: relative;
          }

          .section-header {
              text-align: center;
              margin-bottom: 60px;
              position: relative;
          }

          .gradient-heading {
              font-size: 3rem;
              font-weight: 800;
              background: linear-gradient(45deg, var(--primary-color), var(--accent-color));
              -webkit-background-clip: text;
              -webkit-text-fill-color: transparent;
              margin-bottom: 20px;
          }

          .section-subtitle {
              color: #666;
              font-size: 1.2rem;
              max-width: 700px;
              margin: 0 auto;
          }

          .amenity-category {

              background: rgba(255, 255, 255, 0.8);
              padding: 30px;
              border-radius: 20px;
              box-shadow: 0 5px 20px rgba(0, 89, 76, 0.05);
          }

          .category-title {
              color: var(--primary-color);
              font-size: 2rem;
              font-weight: 700;
              margin-bottom: 35px;
              padding-left: 20px;
              border-left: 5px solid var(--accent-color);
              display: flex;
              align-items: center;
          }

          .amenity-card {
              background: white;
              border-radius: 15px;
              padding: 25px;
              height: 100%;
              transition: all 0.3s ease;
              position: relative;
              overflow: hidden;
              border: 1px solid rgba(0, 89, 76, 0.1);
              box-shadow: 0 10px 30px rgba(0, 89, 76, 0.05);
              display: flex;
              flex-direction: column;
              align-items: center;
              text-align: center;
          }

          .amenity-card:hover {
              transform: translateY(-5px);
              box-shadow: 0 15px 35px rgba(0, 89, 76, 0.15);
              border-color: var(--accent-color);
          }

          .amenity-icon {
              font-size: 2.8rem;
              color: var(--primary-color);
              margin-bottom: 20px;
              transition: all 0.3s ease;
              background: rgb(247 150 29 / 42%);
              width: 70px;
              height: 70px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 50%;
          }

          .amenity-card:hover .amenity-icon {
              transform: scale(1.1);
              background: var(--g);
              color: white;
          }

          .amenity-title {
              font-size: 2rem;
              font-weight: 700;
              color: var(--primary-color);
              margin-bottom: 10px;
              line-height: 1.3;
          }

          .amenity-description {
              color: #666;
              /* font-size: 0.9rem; */
              margin: 0;
              line-height: 1.4;
          }

          @media (max-width: 768px) {
              .amenity-category {
                  padding: 20px;
                  margin-bottom: 30px;
              }

              .category-title {
                  font-size: 1.6rem;
                  margin-bottom: 25px;
              }

              .col-md-3 {
                  margin-bottom: 20px;
              }

              .amenity-card {
                  padding: 20px;
              }

              .amenity-icon {
                  font-size: 2.2rem;
                  width: 60px;
                  height: 60px;
              }
          }

          .widget-menu-tab {
              display: flex;
              justify-content: center;
              gap: 20px;
              margin-bottom: 40px !important;
          }

          .widget-menu-tab .item-title {
              font-size: 1.2rem;
              font-weight: 600;
              color: var(--primary-color);
              padding: 10px 25px;
              border-radius: 30px;
              cursor: pointer;
              transition: all 0.3s ease;
              background-color: white;
              border: 2px solid var(--primary-color);
          }

          .widget-menu-tab .item-title.active,
          .widget-menu-tab .item-title:hover {
              background-color: var(--primary-color);
              color: white;
          }

          .widget-content-inner {
              display: none;
          }

          .widget-content-inner.active {
              display: block;
              animation: fadeIn 0.5s ease;
          }

          @keyframes fadeIn {
              from {
                  opacity: 0;
              }

              to {
                  opacity: 1;
              }
          }
      </style>

      <section class="neighborhood-hero Aminities_ban">
          <div class="overlay-gradient"></div>
          <div class="tf-container">
              <div class="hero-content text-center">
                  <h1>Aminities</h1>
                  <p>Discover the luxury features and facilities that make our community special</p>
                  <ul class="breadcrumb">
                      <li><a class="home" href="index.php">Home</a></li>
                      <li>Aminities</li>
                  </ul>
              </div>
          </div>
      </section>

      <!-- section-featured-listings -->
      <section class="section-featured-listings space">
          <div class="tf-container">
              <div class="row">
                  <div class="col-12">
                      <div class="heading_section text-center mb-48">
                          <h2 class="title Aminities" data-wow-duration="1s">Aminities</h2>
                          <p class="text-1 sub_title " data-wow-duration="1.5s" data-wow-delay="0.2s">
                              Thousands of luxury home enthusiasts just like you visit our website.
                          </p>
                      </div>
                      <div class="widget-tabs style-2">
                          <ul class="widget-menu-tab mb-48 overflow-x-auto animate__fadeIn wow animate__" data-wow-duration="1s">
                              <li class="item-title active hover-tooltip" data-tab="property">
                                  Property Aminities
                              </li>
                              <li class="item-title hover-tooltip" data-tab="outdoor">
                                  Outdoor Aminities
                              </li>
                          </ul>
                          <div class="widget-content-tab">
                              <div class="widget-content-inner active" id="property">
                                  <div class="tf-grid-layout col-lg-12">
                                      <div class="amenity-category">
                                          <h3 class="category-title animate__fadeInLeft wow animate__" data-wow-duration="1s">Property Features</h3>
                                          <div class="row g-4">
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.2s">
                                                      <i class="fas fa-shield-alt amenity-icon"></i>
                                                      <h4 class="amenity-title">Gated Community</h4>
                                                      <p class="amenity-description">Secure access with elevator service</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.3s">
                                                      <i class="fas fa-bicycle amenity-icon"></i>
                                                      <h4 class="amenity-title">Lebanon Bike Trail</h4>
                                                      <p class="amenity-description">Direct access to scenic bike trails</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.4s">
                                                      <i class="fas fa-basketball-ball amenity-icon"></i>
                                                      <h4 class="amenity-title">Sports Courts</h4>
                                                      <p class="amenity-description">Tennis, basketball & pickleball courts</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.5s">
                                                      <i class="fas fa-car amenity-icon"></i>
                                                      <h4 class="amenity-title">Garage Parking</h4>
                                                      <p class="amenity-description">Available in each building</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.6s">
                                                      <i class="fas fa-water amenity-icon"></i>
                                                      <h4 class="amenity-title">Kayak/Canoe Ramp</h4>
                                                      <p class="amenity-description">Available at River Creek Lofts</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.7s">
                                                      <i class="fas fa-dog amenity-icon"></i>
                                                      <h4 class="amenity-title">Pet Friendly</h4>
                                                      <p class="amenity-description">Dog park & wash stations available</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.8s">
                                                      <i class="fas fa-dumbbell amenity-icon"></i>
                                                      <h4 class="amenity-title">Clubhouse</h4>
                                                      <p class="amenity-description">With banquet hall and fitness center</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.9s">
                                                      <i class="fas fa-charging-station amenity-icon"></i>
                                                      <h4 class="amenity-title">EV Charging</h4>
                                                      <p class="amenity-description">Electric vehicle charging stations</p>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="1s">
                                                      <i class="fas fa-car-side amenity-icon"></i>
                                                      <h4 class="amenity-title">Car Care Station</h4>
                                                      <p class="amenity-description">Vacuum and air check facilities</p>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="widget-content-inner" id="outdoor">
                                  <div class="amenity-category">
                                      <h3 class="category-title animate__fadeInLeft wow animate__" data-wow-duration="1s">Outdoor Features</h3>
                                      <div class="row g-4">
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.2s">
                                                  <i class="fas fa-swimming-pool amenity-icon"></i>
                                                  <h4 class="amenity-title">Resort Style Pool</h4>
                                                  <p class="amenity-description">Luxury swimming experience</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.3s">
                                                  <i class="fas fa-utensils amenity-icon"></i>
                                                  <h4 class="amenity-title">Outdoor Kitchen</h4>
                                                  <p class="amenity-description">Perfect for outdoor entertaining</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.4s">
                                                  <i class="fas fa-umbrella-beach amenity-icon"></i>
                                                  <h4 class="amenity-title">Riverfront Gazebo</h4>
                                                  <p class="amenity-description">Scenic relaxation spot</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.5s">
                                                  <i class="fas fa-futbol amenity-icon"></i>
                                                  <h4 class="amenity-title">Soccer Field</h4>
                                                  <p class="amenity-description">Located at Riverfront</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.6s">
                                                  <i class="fas fa-fire amenity-icon"></i>
                                                  <h4 class="amenity-title">Fire Pits</h4>
                                                  <p class="amenity-description">Perfect for evening gatherings</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.7s">
                                                  <i class="fas fa-hiking amenity-icon"></i>
                                                  <h4 class="amenity-title">River Walk Path</h4>
                                                  <p class="amenity-description">Scenic riverside walking trail</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.8s">
                                                  <i class="fas fa-bullseye amenity-icon"></i>
                                                  <h4 class="amenity-title">Nearby Activities</h4>
                                                  <p class="amenity-description">Archery range & Kings Island nearby</p>
                                              </div>
                                          </div>
                                          <div class="col-md-3">
                                              <div class="amenity-card animate__zoomIn wow animate__" data-wow-duration="1s" data-wow-delay="0.9s">
                                                  <i class="fas fa-wifi amenity-icon"></i>
                                                  <h4 class="amenity-title">Outdoor WiFi</h4>
                                                  <p class="amenity-description">Stay connected in common areas</p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- /section-featured-listings -->




      <section class="pet_policy space">
          <div class="container">
              <div class="heading_section text-center mb-48">
                  <h2 class="title " data-wow-duration="1s">Pet Policy</h2>
                  <p class="text-1 sub_title " data-wow-duration="1.5s" data-wow-delay="0.2s">
                      Thousands of luxury home enthusiasts just like you visit our website.
                  </p>
              </div>
              <div class="policy-card">
                  <h3><i class="fas fa-paw"></i> Pets</h3>
                  <div class="policy-details">
                      <div class="left-column">
                          <p><i class="fas fa-check"></i> Max 2 Allowed</p>
                          <p><i class="fas fa-dollar-sign"></i> Rent $30 | Deposit $150</p>

                          <p><b>Comments:</b> Refundable Pet Deposit is due per pet. Pet rent is per pet, per month. See leasing office for details.</p>

                          <div class="restrictions">
                              <p><i class="fas fa-exclamation-triangle"></i> <b>Restrictions:</b> This community does not accept the following breeds or mixed breeds of dogs: Dogo Argentino, St. Bernard, Rodesian Ridgeback, Wolf Hybrids, Cane Corso, Rottweiler, Doberman Pinscher, Chow, Akita, Mastiff, Pit Bull, Pit Bull Mini, American Staffordshire Terrier, Staffordshire Bull Terrier, Malamute, Siberian Husky, Presa Canario, German Shepherd. This list maybe subject to local and federal laws and obligations.</p>

                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>

      <?php include('./footer.php') ?>

      <script>
          document.addEventListener('DOMContentLoaded', function() {
              const tabs = document.querySelectorAll('.item-title');
              tabs.forEach(tab => {
                  tab.addEventListener('click', function() {
                      // Remove active class from all tabs
                      tabs.forEach(t => t.classList.remove('active'));
                      // Add active class to clicked tab
                      this.classList.add('active');

                      // Hide all content
                      const contents = document.querySelectorAll('.widget-content-inner');
                      contents.forEach(content => {
                          content.classList.remove('active');
                          content.classList.remove('animate__animated', 'animate__fadeIn');
                      });

                      // Show selected content with animation
                      const tabId = this.getAttribute('data-tab');
                      const selectedContent = document.getElementById(tabId);
                      selectedContent.classList.add('active');
                      selectedContent.classList.add('animate__animated', 'animate__fadeIn');
                  });
              });
          });
      </script>