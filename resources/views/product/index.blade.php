<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'FotoStudio')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/product.css', 'resources/js/app.js'])
</head>
<body>

<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="#" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74 9.94M7.38 12H.86M9.69 16H3.44"/></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="#">Strona główna</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Sale do wynajęcia</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Cennik</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Vouchery</a>
        <a class="py-2 d-none d-md-inline-block" href="#">Rezerwacje</a>
    </nav>
</header>

<main>
    <div class="position-relative overflow-hidden p-4 p-md-5 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        </div>
        <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Opis zdjęcia" class="background-img">
    </div>
    <div class="position-relative overflow-hidden p-4 p-md-1 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-2">
            <h1 class="display-8 fw-normal text-background">Przeżyj z nami niezapomnianą sesję</h1>
            <a class="btn btn-outline-secondary" href="#">Dowiedz się więcej</a>
        </div>
    </div>
    <div class="position-relative overflow-hidden p-4 p-md-5 m-md-3 text-center">
        <div class="col-md-6 p-lg-5 mx-auto my-5">
            <h1 class="display-8 fw-normal text-background">O nas</h1>
            <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
        </div>
    </div>
    <div class="position-relative overflow-hidden p-4 p-md-5 m-md-3 text-center">
        <div class="col-md-12 p-lg-6 mx-auto my-5">
            <h1 class="display-8 fw-normal text-background">Nasze usługi</h1>
            <div class="d-flex justify-content-between align-items-center">
                <div class="service-item flex-fill me-3">
                    <svg fill="#808276" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 480 480" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <path d="M409.709,70.268C364.387,24.955,304.111,0,239.985,0C175.876,0,115.61,24.955,70.29,70.268 C24.963,115.589,0,175.867,0,240c0,64.109,24.963,124.38,70.29,169.708C115.616,455.036,175.882,480,239.985,480 c64.119,0,124.395-24.963,169.724-70.291C455.037,364.382,480,304.111,480,240C480,175.864,455.037,115.586,409.709,70.268z M239.985,460C118.685,460,20,361.309,20,240S118.685,20,239.985,20C361.302,20,460,118.691,460,240S361.302,460,239.985,460z"></path> <path d="M66.219,200.62c0.922,0.265,1.852,0.392,2.766,0.392c4.346,0,8.347-2.856,9.606-7.242l0.265-0.915 c1.552-5.3-1.488-10.855-6.788-12.406c-5.302-1.55-10.855,1.487-12.406,6.789l-0.293,1.011 C57.844,193.557,60.911,199.096,66.219,200.62z"></path> <path d="M62.321,241.373c5.3,0,9.721-4.165,9.98-9.517l0.048-0.938c0.3-5.515-3.927-10.229-9.442-10.528 c-5.515-0.292-10.229,3.928-10.529,9.442l-0.054,1.058c-0.267,5.516,3.989,10.205,9.505,10.471 C61.994,241.369,62.158,241.373,62.321,241.373z"></path> <path d="M75.989,276.483l0.048-0.939c0.3-5.515-3.927-10.228-9.442-10.528c-5.515-0.292-10.229,3.928-10.529,9.442l-0.054,1.058 c-0.267,5.517,3.988,10.206,9.505,10.472c0.165,0.008,0.329,0.012,0.492,0.012C71.309,286,75.73,281.835,75.989,276.483z"></path> <path d="M90.153,315.79c-2.49-4.931-8.505-6.909-13.434-4.42c-4.93,2.489-6.909,8.504-4.419,13.434l0.477,0.938 c1.769,3.459,5.275,5.448,8.911,5.448c1.532,0,3.088-0.353,4.546-1.099c4.917-2.516,6.864-8.54,4.349-13.457L90.153,315.79z"></path> <path d="M111.418,347.99c-3.554-4.226-9.862-4.771-14.09-1.217c-4.227,3.555-4.771,9.863-1.217,14.09l0.684,0.808 c1.978,2.323,4.79,3.518,7.619,3.518c2.292,0,4.596-0.783,6.478-2.386c4.205-3.58,4.712-9.892,1.132-14.097L111.418,347.99z"></path> <path d="M90.148,143.681c-4.803-2.727-10.907-1.04-13.632,3.763l-0.523,0.929c-2.694,4.821-0.969,10.914,3.853,13.607 c1.544,0.863,3.217,1.272,4.868,1.272c3.505,0,6.908-1.847,8.739-5.124l0.459-0.815 C96.636,152.509,94.952,146.405,90.148,143.681z"></path> <path d="M101.959,112.563l-0.711,0.774c-3.719,4.083-3.423,10.408,0.66,14.127c1.917,1.745,4.327,2.606,6.73,2.606 c2.716,0,5.423-1.101,7.396-3.267l0.639-0.698c3.74-4.063,3.478-10.39-0.586-14.13 C112.024,108.234,105.698,108.497,101.959,112.563z"></path> <path d="M382.928,151.843c1.89,3.067,5.168,4.757,8.524,4.757c1.789,0,3.6-0.479,5.235-1.486 c4.703-2.896,6.167-9.057,3.271-13.759l-0.56-0.901c-2.927-4.684-9.098-6.106-13.78-3.181c-4.684,2.928-6.107,9.097-3.18,13.78 L382.928,151.843z"></path> <path d="M139.486,103.217c1.946,0,3.913-0.567,5.64-1.749l0.789-0.538c4.57-3.102,5.761-9.32,2.66-13.89 c-3.102-4.57-9.32-5.76-13.89-2.661l-0.857,0.585c-4.558,3.119-5.723,9.343-2.604,13.9 C133.163,101.695,136.297,103.217,139.486,103.217z"></path> <path d="M416.046,212.75c-5.496,0.542-9.513,5.436-8.971,10.933l0.091,0.953c0.488,5.18,4.844,9.064,9.944,9.064 c0.313,0,0.63-0.015,0.949-0.045c5.498-0.518,9.537-5.395,9.019-10.894l-0.1-1.039 C426.436,216.226,421.534,212.221,416.046,212.75z"></path> <path d="M398.948,185.923l0.3,0.895c1.396,4.192,5.298,6.845,9.487,6.845c1.047,0,2.111-0.166,3.159-0.515 c5.24-1.744,8.075-7.406,6.331-12.646l-0.335-1c-1.773-5.231-7.451-8.03-12.681-6.26 C399.978,175.015,397.175,180.692,398.948,185.923z"></path> <path d="M175.657,84.151c1.199,0,2.42-0.218,3.605-0.677l0.868-0.332c5.165-1.956,7.766-7.729,5.811-12.894 c-1.956-5.165-7.729-7.767-12.893-5.81l-1,0.382c-5.151,1.993-7.711,7.783-5.719,12.935 C167.862,81.722,171.646,84.151,175.657,84.151z"></path> <path d="M255.231,72.787l0.942,0.089c0.327,0.031,0.652,0.047,0.974,0.047c5.089,0,9.442-3.869,9.942-9.039 c0.531-5.497-3.495-10.385-8.992-10.916l-1.059-0.099c-5.493-0.509-10.363,3.555-10.863,9.055S249.731,72.288,255.231,72.787z"></path> <path d="M215.228,73.86c0.467,0,0.941-0.032,1.417-0.1l0.907-0.126c5.475-0.729,9.322-5.757,8.593-11.232 c-0.73-5.476-5.764-9.325-11.232-8.593l-1.075,0.147c-5.468,0.775-9.272,5.837-8.497,11.306 C206.048,70.256,210.327,73.86,215.228,73.86z"></path> <path d="M372.434,106.712c-3.921-3.888-10.253-3.861-14.142,0.059c-3.889,3.922-3.862,10.253,0.059,14.143l0.67,0.668 c1.954,1.958,4.516,2.937,7.079,2.937c2.556,0,5.112-0.974,7.063-2.922c3.91-3.901,3.916-10.232,0.015-14.142L372.434,106.712z"></path> <path d="M392.976,331.276c-4.577-3.088-10.793-1.883-13.883,2.695l-0.523,0.768c-3.121,4.556-1.958,10.78,2.599,13.901 c1.728,1.184,3.695,1.751,5.643,1.751c3.188,0,6.321-1.521,8.259-4.35l0.601-0.883 C398.76,340.582,397.554,334.366,392.976,331.276z"></path> <path d="M353.979,363.273l-0.703,0.647c-4.072,3.731-4.348,10.057-0.617,14.129c1.972,2.152,4.669,3.244,7.376,3.244 c2.413,0,4.833-0.868,6.753-2.627l0.765-0.704c4.056-3.748,4.306-10.075,0.558-14.131 C364.362,359.774,358.035,359.524,353.979,363.273z"></path> <path d="M339.368,80.557l-0.877-0.544c-4.702-2.898-10.863-1.435-13.76,3.268c-2.897,4.702-1.434,10.862,3.267,13.76l0.823,0.509 c1.642,1.02,3.464,1.505,5.264,1.505c3.344,0,6.612-1.677,8.506-4.728C345.503,89.634,344.061,83.469,339.368,80.557z"></path> <path d="M140.258,375.046l-0.77-0.571c-4.427-3.303-10.693-2.391-13.995,2.037c-3.302,4.427-2.39,10.692,2.037,13.994l0.836,0.62 c1.788,1.323,3.872,1.961,5.938,1.961c3.063,0,6.087-1.403,8.048-4.055C145.637,384.592,144.699,378.329,140.258,375.046z"></path> <path d="M417.657,253.706c-5.473-0.729-10.505,3.111-11.238,8.586l-0.127,0.929c-0.769,5.469,3.042,10.525,8.511,11.294 c0.472,0.066,0.941,0.099,1.404,0.099c4.906,0,9.188-3.612,9.89-8.609l0.145-1.06 C426.975,259.471,423.131,254.439,417.657,253.706z"></path> <path d="M409.823,293.931c-5.159-1.978-10.94,0.608-12.913,5.768l-0.35,0.909c-1.987,5.153,0.58,10.941,5.733,12.928 c1.183,0.456,2.399,0.673,3.595,0.673c4.015,0,7.802-2.436,9.333-6.405l0.369-0.96 C417.564,301.685,414.981,295.903,409.823,293.931z"></path> <path d="M322.855,386.066l-0.843,0.476c-4.816,2.703-6.528,8.799-3.825,13.614c1.835,3.268,5.23,5.107,8.729,5.107 c1.657,0,3.338-0.413,4.886-1.282l0.899-0.507c4.807-2.72,6.5-8.82,3.781-13.628 C333.764,385.041,327.662,383.347,322.855,386.066z"></path> <path d="M249.245,407.661l-0.97,0.052c-5.515,0.291-9.75,4.998-9.458,10.514c0.281,5.336,4.696,9.473,9.977,9.473 c0.178,0,0.356-0.005,0.536-0.014l1.028-0.056c5.515-0.307,9.735-5.026,9.428-10.541 C259.478,411.574,254.749,407.353,249.245,407.661z"></path> <path d="M210.722,405.365l-0.954-0.172c-5.436-0.985-10.638,2.622-11.624,8.057c-0.985,5.434,2.622,10.638,8.056,11.623 l1.021,0.184c0.592,0.105,1.181,0.156,1.762,0.156c4.756,0,8.973-3.406,9.834-8.252 C219.784,411.523,216.159,406.332,210.722,405.365z"></path> <path d="M300.373,62.069l-1.033-0.349c-5.239-1.742-10.902,1.091-12.646,6.33c-1.744,5.24,1.09,10.902,6.331,12.647l0.866,0.292 c1.074,0.368,2.167,0.543,3.242,0.543c4.155,0,8.037-2.611,9.459-6.762C308.382,69.546,305.598,63.859,300.373,62.069z"></path> <path d="M173.732,394.276l-0.834-0.363c-5.053-2.226-10.956,0.064-13.184,5.116c-2.229,5.054,0.062,10.956,5.116,13.185 c0.333,0.147,0.668,0.292,1.003,0.436c1.288,0.554,2.627,0.816,3.945,0.816c3.876,0,7.564-2.267,9.192-6.053 C181.15,402.339,178.806,396.457,173.732,394.276z"></path> <path d="M287.301,401.109l-0.876,0.253c-5.313,1.507-8.399,7.035-6.893,12.349c1.248,4.402,5.256,7.275,9.616,7.275 c0.903,0,1.821-0.124,2.733-0.382l1.046-0.302c5.3-1.554,8.337-7.109,6.783-12.409 C298.157,402.594,292.603,399.56,287.301,401.109z"></path> <path d="M257.486,222.584v-117.33c0-5.522-4.477-10-10-10c-5.523,0-10,4.478-10,10V222.71 c-9.037,3.695-15.64,12.163-16.655,22.262h-85.633c-5.523,0-10,4.478-10,10s4.477,10,10,10h91.832 c4.947,5.854,12.348,9.583,20.609,9.583c14.874,0,26.975-12.05,26.975-26.861C274.614,236.292,267.503,226.527,257.486,222.584z"></path> </g> </g> </g> </g></svg>
                    <p class="lead fw-normal">Wynajem sali</p>
                    <p class=" fw-normal service-item-desc">Masz wybór pomiędzy dwoma głównymi salami. Wybór należy do Ciebie.</p>
                </div>

                <div class="service-item flex-fill me-3">
                    <svg fill="#808276" height="32px" width="32px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 487 487" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M308.1,277.95c0,35.7-28.9,64.6-64.6,64.6s-64.6-28.9-64.6-64.6s28.9-64.6,64.6-64.6S308.1,242.25,308.1,277.95z M440.3,116.05c25.8,0,46.7,20.9,46.7,46.7v122.4v103.8c0,27.5-22.3,49.8-49.8,49.8H49.8c-27.5,0-49.8-22.3-49.8-49.8v-103.9 v-122.3l0,0c0-25.8,20.9-46.7,46.7-46.7h93.4l4.4-18.6c6.7-28.8,32.4-49.2,62-49.2h74.1c29.6,0,55.3,20.4,62,49.2l4.3,18.6H440.3z M97.4,183.45c0-12.9-10.5-23.4-23.4-23.4c-13,0-23.5,10.5-23.5,23.4s10.5,23.4,23.4,23.4C86.9,206.95,97.4,196.45,97.4,183.45z M358.7,277.95c0-63.6-51.6-115.2-115.2-115.2s-115.2,51.6-115.2,115.2s51.6,115.2,115.2,115.2S358.7,341.55,358.7,277.95z"></path> </g> </g> </g></svg>
                    <p class="lead fw-normal">Sesje zdjęciowe</p>
                    <p class="fw-normal service-item-desc">Zorganizujemy Ci wyjątkową sesję zdjęciową, zarówno w plenerze jak i na sali. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative overflow-hidden p-5 p-md-6 m-md-3 text-center">
        <div class="col-md-8 p-lg-5 mx-auto my-5">
            <h1 class="display-8 fw-normal text-background">Kontakt</h1>
            <div class="row justify-content-around p-3">
                <div class="col-md-6">
                    <div class="container mt-10">
                        <form method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="email" class = "text-lg-start p-2">Pozostaw nam swój email, żebyśmy mogli się z Tobą skontaktować:</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Wprowadź swój email" required>
                                <button type="submit" class="btn send-button mt-3">Wyślij</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="{{ Vite::asset('resources/pictures/studio.jpg') }}" alt="Opis zdjęcia" class="img-fluid" style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative overflow-hidden text-center">
        <h1 class="display-8 fw-normal text-background">Portfolio</h1>
        <div class="container-gallery">
            <div class="row justify-content-center">
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/aob0ukAYfuI/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/EUfxH-pze7s/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/M185_qYH8vg/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/sesveuG_rNo/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/AvhMzHwiE_0/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/2gYsZUmockw/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/EMSDtjVHdQ8/400x300" alt="">
                    </a>
                </div>
                <div class="col-lg-4 ">
                    <a href="#" class="d-block h-100">
                        <img class="img-fluid img-thumbnail custom-img" src="https://source.unsplash.com/8mUEy0ABdNE/400x300" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>


</main>



<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <small class="d-block mb-3 text-muted">&copy; 2023</small>
        </div>
        <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Cool stuff</a></li>
                <li><a class="link-secondary" href="#">Random feature</a></li>
                <li><a class="link-secondary" href="#">Team feature</a></li>
                <li><a class="link-secondary" href="#">Stuff for developers</a></li>
                <li><a class="link-secondary" href="#">Another one</a></li>
                <li><a class="link-secondary" href="#">Last time</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Resource</a></li>
                <li><a class="link-secondary" href="#">Resource name</a></li>
                <li><a class="link-secondary" href="#">Another resource</a></li>
                <li><a class="link-secondary" href="#">Final resource</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="#">Team</a></li>
                <li><a class="link-secondary" href="#">Locations</a></li>
                <li><a class="link-secondary" href="#">Privacy</a></li>
                <li><a class="link-secondary" href="#">Terms</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>
