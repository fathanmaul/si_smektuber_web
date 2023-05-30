@extends('includes.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header bg-light py-5 mb-5">
        <div class="container py-5">
            <div class="row g-5 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 text-center">
                    <h1 class="display-4 mb-3 animated slideInDown">Artikel Smektuber</h1>
                    <nav aria-label="breadcrumb animated slideInDown">
                        <ol class="breadcrumb mb-0 justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Artikel</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- search Start -->
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="input-group">
                    <span class="input-group-text logo-search"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" id="searchInput" placeholder="Telusuri artikel">
                    <button class="btn btn-primary btn-search-rounded" id="searchButton" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>
    <!-- search End -->

    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5">
                    <span class="px-2">Latest Blog</span>
                </p>
                <h1 class="mb-4">Latest Articles From Blog</h1>
            </div>
            <div class="row pb-3">
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Blog SMK 7 Jember</h4>
                            <a href="/blog" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Ekstra Kulikuler SMK 7 Jember</h4>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
                <!-- Card -->
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="{{ getAsset('landing/img/blog_dami.png') }}" alt="" />
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Data PPDB</h4>
                            <a href="" class="btn btn-primary px-4 mx-auto my-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <!-- end Card -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the search input element and search button element
            var searchInput = document.getElementById('searchInput');
            var searchButton = document.getElementById('searchButton');

            // Add event listener to the search button
            searchButton.addEventListener('click', function() {
                // Get the search query
                var query = searchInput.value.toLowerCase();

                // Get all the card bodies
                var cardBodies = document.getElementsByClassName('card-body');

                // Loop through each card body
                for (var i = 0; i < cardBodies.length; i++) {
                    var cardBody = cardBodies[i];

                    // Get the text content of the card body and convert it to lowercase
                    var cardText = cardBody.textContent.toLowerCase();

                    // Check if the search query is found in the card body's text content
                    if (cardText.includes(query)) {
                        cardBody.parentNode.style.display = ''; // Show the card if the query matches
                    } else {
                        cardBody.parentNode.style.display =
                            'none'; // Hide the card if the query doesn't match
                    }
                }

                // Center align the search results
                var visibleCards = document.querySelectorAll('.card:visible');
                var row = document.querySelector('.row.pb-3');
                row.style.justifyContent = 'center';

                if (visibleCards.length === 0) {
                    var noResultsMessage = document.createElement('p');
                    noResultsMessage.textContent = 'No results found.';
                    noResultsMessage.classList.add('text-center');
                    row.appendChild(noResultsMessage);
                } else {
                    var noResultsMessage = document.querySelector('.row.pb-3 p');
                    if (noResultsMessage) {
                        noResultsMessage.remove();
                    }
                }
            });
        });
    </script>
@endsection
