@extends('information.layouts')
@section('information')
<style>
    .space{
        background-color: #ffa31a;
    }
    .icon-card {
      border: 1px solid #ddd;
      background-color: black;
      border-radius: 0.5rem;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      text-align: center;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .icon-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
    }

    .icon-card img {
      width: 50px;
      height: 50px;
      margin-bottom: 10px;
    }

    .icon-card h5 {
      color: #0d6efd; /* Bootstrap Primary Color */
    }
    h5 {
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-weight: 700; /* Correct usage */
    color: black;
}

  </style>
<section class="space">
    <div class="container">
        <div class="container py-5">
            <div class="row">
              <div class="col-md-4">
                <!-- Vertical Navigation Tabs -->
                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-pills-tab1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab1" type="button" role="tab" aria-controls="v-pills-tab1" aria-selected="true"><span class="icon mr-3"><img src="information/assets/img/catchIcon/Washing_Machine.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Wash & Fold</button>
                  <button class="nav-link" id="v-pills-tab2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab2" type="button" role="tab" aria-controls="v-pills-tab2" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/iron.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Wash & Iron</button>
                  <button class="nav-link" id="v-pills-tab3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab3" type="button" role="tab" aria-controls="v-pills-tab3" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/steam.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Dry Clean</button>
                  <button class="nav-link" id="v-pills-tab4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-tab4" type="button" role="tab" aria-controls="v-pills-tab4" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/shoes.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Shoes</button>
                </div>
              </div>

              <div class="col-md-8">
                <!-- Tab Content -->
                <div class="tab-content" id="v-pills-tabContent">
                  <!-- Section 1 wash and fold -->
                  <div class="tab-pane fade show active" id="v-pills-tab1" role="tabpanel" aria-labelledby="v-pills-tab1-tab">
                    <div class="row g-4">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><span class="icon mr-3"><img src="information/assets/img/catchIcon/men.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Man</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/PodcasterWoman.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Women</button>
                            </li>
                            <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/kid.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Kids</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-house-tab" data-bs-toggle="pill" data-bs-target="#pills-house" type="button" role="tab" aria-controls="pills-house" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/House.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>HouseHold</button>
                              </li>
                          </ul>
                          <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row g-4">
                                <div class="col-md-4" onclick="addToCart(1001, 'https://via.placeholder.com/50', 150,1,'Men Shirt', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Shirt</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1002, 'https://via.placeholder.com/50', 150,1,'Men T Shirt', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>T Shirt</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1003, 'https://via.placeholder.com/50', 150,1,'Men Trouser', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1" >
                                      <h5>Trouser</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1004, 'https://via.placeholder.com/50', 150,1,'Men Jeans', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Jeans</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1005, 'https://via.placeholder.com/50', 180,1,'Men Sherwani', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Sherwani</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1006, 'https://via.placeholder.com/50', 150,1,'Men Coat & Blazer', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Coat & Blazer</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1007, 'https://via.placeholder.com/50', 150,1,'Men Kurta', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Kurta</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1008, 'https://via.placeholder.com/50', 150,1,'Men SweatShirt', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Sweatshirt</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1009, 'https://via.placeholder.com/50', 150,1,'Men Dhoti', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Dhoti</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4" onclick="addToCart(1010, 'https://via.placeholder.com/50', 150,1,'Men Shawl', 'Everyday comfort with a radiant glow')">
                                    <div class="icon-card">
                                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                                      <h5>Shawl</h5>
                                      <p>Everyday comfort with a radiant glow</p>
                                    </div>
                                  </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="row g-4">
                                    <div class="col-md-4" onclick="addToCart(1201, 'https://via.placeholder.com/50', 140,1,'Women Saree', 'Effortless style for daily wear')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Saree Set</h5>
                                          <p>Effortless style for daily wear</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1202, 'https://via.placeholder.com/50', 140,1,'Women Kurta Set', 'Effortless style for daily wear')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Kurta Set</h5>
                                          <p>Effortless style for daily wear</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1203, 'https://via.placeholder.com/50', 150,1,'Women Coats & Saree', 'Effortless style for daily wear')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Coats& Blazer</h5>
                                          <p>Effortless style for daily wear</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1204, 'https://via.placeholder.com/50', 150,1,'Women Sweater', 'Effortless style for daily wear')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Sweater</h5>
                                          <p>Effortless style for daily wear</p>
                                        </div>
                                      </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="row g-4">
                                    <div class="col-md-4" onclick="addToCart(1301, 'https://via.placeholder.com/50', 140,1,'Kids', 'Cute, comfy, and radiant')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Kids</h5>
                                          <p>Cute, comfy, and radiant</p>
                                        </div>
                                      </div>

                                      <div class="col-md-4" onclick="addToCart(1302, 'https://via.placeholder.com/50', 150,1,'Kids Party', 'Cute, comfy, and radiant')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Dress</h5>
                                          <p>Cute, comfy, and radiant</p>
                                        </div>
                                      </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-house" role="tabpanel" aria-labelledby="pills-house-tab">
                                <div class="row g-4">
                                    <div class="col-md-4" onclick="addToCart(1401, 'https://via.placeholder.com/50', 150,1,'Household Curtains', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Curtains</h5>
                                          <p>Sparkling clean household essential </p>
                                        </div>
                                      </div>

                                      <div class="col-md-4" onclick="addToCart(1402, 'https://via.placeholder.com/50', 150,1,'Household Blankets', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Blanket</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1403, 'https://via.placeholder.com/50', 150,1,'Household Bedsheets', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Bedsheet</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1404, 'https://via.placeholder.com/50', 150,1,'Household Pillow Cover', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Pillow Cover</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1405, 'https://via.placeholder.com/50', 150,1,'Household Sofa', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Sofa Cover</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1406, 'https://via.placeholder.com/50', 150,1,'Household Table Cover', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Table Cover</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1407, 'https://via.placeholder.com/50', 150,1,'Household Towel', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Towel</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1408, 'https://via.placeholder.com/50', 150,1,'Household Table Mat', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Table Mat</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>
                                      <div class="col-md-4" onclick="addToCart(1409, 'https://via.placeholder.com/50', 140,1,'Household Apron', 'Sparkling clean household essential')">
                                        <div class="icon-card">
                                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                                          <h5>Apron</h5>
                                          <p>Sparkling clean household essential</p>
                                        </div>
                                      </div>


                                </div>
                            </div>

                          </div>
                    </div>
                  </div>

                  <!-- Section 2 wash iron -->

<div class="tab-pane fade" id="v-wash-iron-tab2" role="tabpanel" aria-labelledby="v-wash-iron-tab2-tab">
    <div class="row g-4">
        <ul class="nav nav-wash-iron mb-3" id="wash-iron-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="wash-iron-home-tab" data-bs-toggle="pill" data-bs-target="#wash-iron-home" type="button" role="tab" aria-controls="wash-iron-home" aria-selected="true"><span class="icon mr-3"><img src="information/assets/img/catchIcon/men.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Man</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="wash-iron-profile-tab" data-bs-toggle="pill" data-bs-target="#wash-iron-profile" type="button" role="tab" aria-controls="wash-iron-profile" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/PodcasterWoman.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Women</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="wash-iron-contact-tab" data-bs-toggle="pill" data-bs-target="#wash-iron-contact" type="button" role="tab" aria-controls="wash-iron-contact" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/kid.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>Kids</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="wash-iron-house-tab" data-bs-toggle="pill" data-bs-target="#wash-iron-house" type="button" role="tab" aria-controls="wash-iron-house" aria-selected="false"><span class="icon mr-3"><img src="information/assets/img/catchIcon/House.png" alt="Icon" class="img-fluid" style="max-width:70px;" /></span>HouseHold</button>
              </li>
          </ul>
          <div class="tab-content" id="wash-iron-tabContent">
            <div class="tab-pane fade show active" id="wash-iron-home" role="tabpanel" aria-labelledby="wash-iron-home-tab">
                <div class="row g-4">
                <div class="col-md-4" onclick="addToCart(2001, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Shirt', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Shirt</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2002, 'https://via.placeholder.com/50', 150,1,'Wash Iron T Shirt', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>T Shirt</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2003, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Trouser', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Trouser</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2004, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Jeans', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Jeans</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2005, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Sherwani', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Sherwani</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2006, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Coats and Blazer', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Coat & Blazer</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2007, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Shirt', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Kurta</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2008, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Sweatshirt', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Sweatshirt</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2009, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Dhoti', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Dhoti</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>
                  <div class="col-md-4"  onclick="addToCart(2010, 'https://via.placeholder.com/50', 150,1,'Wash Iron Men Shawl', ' Clean, washed, and ironed men's wear')">
                    <div class="icon-card">
                      <img src="https://via.placeholder.com/50" alt="Icon 1">
                      <h5>Shawl</h5>
                      <p>Clean, washed, and ironed men's wear</p>
                    </div>
                  </div>

                </div>
            </div>
            <div class="tab-pane fade" id="wash-iron-profile" role="tabpanel" aria-labelledby="wash-iron-profile-tab">
                <div class="row g-4">
                    <div class="col-md-4"  onclick="addToCart(2301, 'https://via.placeholder.com/50', 150,1,'Wash Iron Women Saree Set', 'Expert cleaning and ironing for a glowing look')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Saree Set</h5>
                          <p>Expert cleaning and ironing for a glowing look</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2302, 'https://via.placeholder.com/50', 150,1,'Wash Iron Women Kurta Set', 'Expert cleaning and ironing for a glowing look')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Kurta Set</h5>
                          <p>Expert cleaning and ironing for a glowing look</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2303, 'https://via.placeholder.com/50', 150,1,'Wash Iron Women Coats & Blazers', 'Expert cleaning and ironing for a glowing look')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Coats& Blazer</h5>
                          <p>Expert cleaning and ironing for a glowing look</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2304, 'https://via.placeholder.com/50', 150,1,'Wash Iron Women Sweater', 'Expert cleaning and ironing for a glowing look')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Sweater</h5>
                          <p>Expert cleaning and ironing for a glowing look</p>
                        </div>
                      </div>


                </div>
            </div>
            <div class="tab-pane fade" id="wash-iron-contact" role="tabpanel" aria-labelledby="wash-iron-contact-tab">
                <div class="row g-4">
                    <div class="col-md-4" onclick="addToCart(2401, 'https://via.placeholder.com/50', 150,1,'Wash Iron Kids', 'Fun, clean, and comfy')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Kids</h5>
                          <p>Fun, clean, and comfy</p>
                        </div>
                      </div>

                      <div class="col-md-4" onclick="addToCart(2402, 'https://via.placeholder.com/50', 150,1,'Wash Iron Kids Partywear', 'Fun, clean, and comfy')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Dress</h5>
                          <p>Fun, clean, and comfy</p>
                        </div>
                      </div>


                </div>
            </div>
            <div class="tab-pane fade" id="wash-iron-house" role="tabpanel" aria-labelledby="wash-iron-house-tab">
                <div class="row g-4">
                    <div class="col-md-4" onclick="addToCart(2401, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Curtains', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Curtains</h5>
                          <p>Vibrant Home, Vibrant Life </p>
                        </div>
                      </div>

                      <div class="col-md-4" onclick="addToCart(2402, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Blanket', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Blanket</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2403, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Bedsheet', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Bedsheet</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2404, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Pillow Cover', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Pillow Cover</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2405, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Sofa Cover', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Sofa Cover</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2406, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household table Cover', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Table Cover</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2407, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Towel', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Towel</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2408, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Table Mat', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Table Mat</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(2409, 'https://via.placeholder.com/50', 150,1,'Wash Iron Household Apron', 'Vibrant Home, Vibrant Life')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Apron</h5>
                          <p>Vibrant Home, Vibrant Life</p>
                        </div>
                      </div>


                </div>
            </div>

          </div>
    </div>
  </div>

                  <!-- Section 3 -->
                  <div class="tab-pane fade" id="v-pills-tab3" role="tabpanel" aria-labelledby="v-pills-tab3-tab">
                    <div class="row g-4">
                      <div class="col-md-4" onclick="addToCart(3001, 'https://via.placeholder.com/50', 150,1,'Dry Clean Uniform', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Uniform</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3002, 'https://via.placeholder.com/50', 150,1,'Dry Clean Leather', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 2">
                          <h5>Leather</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3003, 'https://via.placeholder.com/50', 150,1,'Dry Clean Fur Garment', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Fur Garments</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3004, 'https://via.placeholder.com/50', 150,1,'Dry Clean Wedding Dress', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Wedding Dress</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3005, 'https://via.placeholder.com/50', 150,1,'Dry Clean Delicate Fibrics', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Delicate Fibrics</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3006, 'https://via.placeholder.com/50', 150,1,'Dry Clean Wool Garments', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Wool Garment</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(3007, 'https://via.placeholder.com/50', 150,1,'Dry Clean Coats & Jacket', 'Expert dry cleaning for your delicate items')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Coats & Jackets</h5>
                          <p>Expert dry cleaning for your delicate items</p>
                        </div>
                      </div>

                    </div>
                  </div>


                  <!-- Section 4 shoes and boots -->
                  <div class="tab-pane fade" id="v-pills-tab4" role="tabpanel" aria-labelledby="v-pills-tab4-tab">
                    <div class="row g-4">
                      <div class="col-md-4" onclick="addToCart(4001, 'https://via.placeholder.com/50', 150,1,'Shoes Clean Sneaker', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 1">
                          <h5>Sneaker</h5>
                          <p>Fresh and clean shoes, every time</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(4002, 'https://via.placeholder.com/50', 150,1,'Shoes Clean Loafers', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 2">
                          <h5>Loafers</h5>
                          <p>Fresh and clean loafers, every time.</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(4003, 'https://via.placeholder.com/50', 150,1,'Shoes Clean Formals', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Formals</h5>
                          <p>Fresh and clean shoes, every time</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(4004, 'https://via.placeholder.com/50', 150,1,'Shoes Clean Boots', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Boots</h5>
                          <p>Fresh and clean boots, every time</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(4005, 'https://via.placeholder.com/50', 150,1,'Shoes Clean Sandals', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Sandals</h5>
                          <p>Fresh and clean sandals, every time</p>
                        </div>
                      </div>
                      <div class="col-md-4" onclick="addToCart(4006, 'https://via.placeholder.com/50', 150,1,'Luxury', 'Fresh and clean shoes, every time')">
                        <div class="icon-card">
                          <img src="https://via.placeholder.com/50" alt="Icon 3">
                          <h5>Luxury</h5>
                          <p>extra care for beloved footwear</p>
                        </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    <script>
       function addToCart(id, image, cost, quantity, name, description) {
    // Create a cart array in localStorage if it doesn't exist
    const cart = JSON.parse(localStorage.getItem('cart')) || [];

    // Find if the item already exists in the cart
    const existingItem = cart.find(item => item.id === id);

    if (existingItem) {
        // If the item already exists, increase its quantity
        existingItem.quantity += quantity;  // Add the passed quantity, instead of just 1
        showNotification('success', 'Added to cart.');
    } else {
        // If the item doesn't exist, create a new item object
        const newItem = {
            id: id,
            image: image,
            cost: cost,
            name: name,
            description: description,
            quantity: quantity || 1  // Ensure the quantity is 1 if not provided
        };
        cart.push(newItem);
        showNotification('success', 'Added to cart.');
    }

    // Save the updated cart back to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));

    // Optional: Log the updated cart for debugging
    console.log('Updated Cart:', cart);

    // Optional: Alert user that the item was added to the cart
    // alert('Item added to cart!');
}

    </script>
</section>
@endsection

