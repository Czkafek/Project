<?php
session_start();
include "header.html";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid text-light text-center">
        <div class="row">
        <div class="col-3">
            UWU
        </div>

        <div class="col-12 col-md-6">
            <div class="mx-auto my-4">
                <input type="text" placeholder="SEARCH" class="w-75 bg-dark rounded text-light">
                <input type="submit">
            </div>
            <div class="card-group">
                <div class="card m-3 rounded">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card m-3 rounded">
                    <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        <!--
        <div class="card">
            <div class="card-header">
                Quote
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>A well-known quote, contained in a blockquote element.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </div>
        </div>
        -->

        </div>
        <div class="col-3">UWU</div>
        </div>
    </div>
</body>
</html>