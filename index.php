<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QR Scan</title>
    <link rel="stylesheet" href="./style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600&family=Taviraj:wght@400;500;600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container my-5">
      <div class="text-center logo"><img src="./logo.png" alt="" /></div>

      <div class="our-detail text-center my-5">
        <h1 class="mb-3">Our <span class="primary-color">Details</span></h1>

        <div class="text-color my-2">
          <span>Contact Name: </span><span class="primary-color">Profound</span>
        </div>

        <div class="text-color my-2">
          <span>Email: </span
          ><span class="primary-color">info@proluxury.co</span>
        </div>

        <div class="text-color my-2">
          <span>Contact number: </span
          ><span class="primary-color">+44 20 3504 9777 </span>
        </div>
      </div>
      <form action="contact.php" method="post">
        <div class="custom-details">
          <div class="row justify-content-center">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
              <h1 class="mb-4 mt-2 text-center">
                Contact <span class="primary-color">Us</span>
              </h1>
              <form>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label for="your-name" class="form-label text-color"
                      >Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="your-name"
                      name="your-name"
                      required
                    />
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="your-subject" class="form-label text-color"
                      >Contact Number
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="your-subject"
                      name="your-subject"
                    />
                  </div>

                  <div class="col-md-12 mb-3">
                    <label for="your-email" class="form-label text-color"
                      >Email</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="your-email"
                      name="your-email"
                      required
                    />
                  </div>
                  <div class="col-6">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <button
                          data-res=""
                          type="submit"
                          name="send"
                          class="btn-bg btn-lg mt-3"
                        >
                          Send
                        </button>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </form>
            </div>
            <div class="col-lg-3"></div>
          </div>
        </div>
      </form>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
