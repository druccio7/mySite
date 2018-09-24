<!doctype html>
<html lang="{{ app()->getLocale() }}">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Andrea</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }



        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        hgroup,
        nav,
        section,
        summary {
            display: block; }

        audio,
        canvas,
        video {
            display: inline-block; }

        audio:not([controls]) {
            display: none;
            height: 0; }

        [hidden], template {
            display: none; }

        html {
            background: #fff;
            color: #000;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%; }

        html,
        button,
        input,
        select,
        textarea {
            font-family: sans-serif; }

        body {
            margin: 0; }

        a {
            background: transparent; }
        a:focus {
            outline: thin dotted; }
        a:hover, a:active {
            outline: 0; }

        h1 {
            font-size: 2em;
            margin: 0.67em 0; }

        h2 {
            font-size: 1.5em;
            margin: 0.83em 0; }

        h3 {
            font-size: 1.17em;
            margin: 1em 0; }

        h4 {
            font-size: 1em;
            margin: 1.33em 0; }

        h5 {
            font-size: 0.83em;
            margin: 1.67em 0; }

        h6 {
            font-size: 0.75em;
            margin: 2.33em 0; }

        abbr[title] {
            border-bottom: 1px dotted; }

        b,
        strong {
            font-weight: bold; }

        dfn {
            font-style: italic; }

        mark {
            background: #ff0;
            color: #000; }

        code,
        kbd,
        pre,
        samp {
            font-family: monospace, serif;
            font-size: 1em; }

        pre {
            white-space: pre;
            white-space: pre-wrap;
            word-wrap: break-word; }

        q {
            quotes: "\201C" "\201D" "\2018" "\2019"; }

        q:before,
        q:after {
            content: '';
            content: none; }

        small {
            font-size: 80%; }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline; }

        sup {
            top: -0.5em; }

        sub {
            bottom: -0.25em; }

        img {
            border: 0; }

        svg:not(:root) {
            overflow: hidden; }

        figure {
            margin: 0; }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em; }

        legend {
            border: 0;
            padding: 0;
            white-space: normal; }

        button,
        input,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            margin: 0;
            vertical-align: baseline; }

        button,
        input {
            line-height: normal; }

        button,
        select {
            text-transform: none; }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"] {
            -webkit-appearance: button;
            cursor: pointer; }

        button[disabled],
        input[disabled] {
            cursor: default; }

        input[type="checkbox"],
        input[type="radio"] {
            box-sizing: border-box;
            padding: 0; }

        input[type="search"] {
            -webkit-appearance: textfield;
            box-sizing: content-box; }

        input[type="search"]::-webkit-search-cancel-button,
        input[type="search"]::-webkit-search-decoration {
            -webkit-appearance: none; }

        button::-moz-focus-inner, input::-moz-focus-inner {
            border: 0;
            padding: 0; }

        textarea {
            overflow: auto;
            vertical-align: top; }

        table {
            border-collapse: collapse;
            border-spacing: 0; }

        *, *:before, *:after {
            box-sizing: border-box; }

        /*
         * Global Styles
         */
        body {
            color: #927e7e;
            font-family: "Montserrat", "Open Sans", sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 1.6; }

        h1, h2, h3, h4, h5, h6 {
            font-weight: 700;
            margin: 0 0 20px; }

        hr {
            border: none;
            border-bottom: 1px solid #777; }

        ul, ol {
            margin: 0;
            padding-left: 0; }

        a {
            text-decoration: none;
            color: #ed5151; }

        address {
            font-style: normal; }

        p {
            margin-top: 0; }

        form input, form textarea, form select {
            outline: none; }
        form select {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none; }
        form textarea {
            resize: vertical; }

        @media screen and (max-width: 320px) {
            [class*="col-xs"] {
                width: 100%; } }

        /*
         * Reusable Components Style
         */
        .button, form input[type="submit"], form button, form input[type="reset"] {
            background: #ed5151;
            color: white;
            padding: 10px;
            display: inline-block; }

        .feature {
            padding-left: 90px;
            position: relative;
            margin-bottom: 30px; }
        .feature p {
            line-height: 1.5;
            margin: 0; }

        .feature-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: inline-block;
            background: #ed5151;
            text-align: center;
            padding-top: 20px;
            position: absolute;
            left: 0;
            top: 0; }

        .feature-title {
            font-size: 24px;
            font-size: 1.5em;
            color: #6a5b5b;
            font-weight: 400;
            margin: 0 0 10px; }

        .team {
            margin-bottom: 30px;
            margin: 0 auto 30px;
            width: 100%; }
        .team img {
            max-width: 100%;
            height: auto;
            display: block;
            width: 100%; }
        .team figcaption {
            background: #ed5151;
            color: white;
            padding: 10px 20px;
            text-align: center; }
        .team h2 {
            text-transform: uppercase;
            margin: 0;
            line-height: normal;
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size: 18px;
            font-size: 1.125em; }
        .team small {
            font-size: 14px;
            font-size: 0.875em;
            color: #303236; }

        .testimonial-slider .slides {
            list-style: none;
            margin: 0;
            *zoom: 1; }
        .testimonial-slider .slides:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        .testimonial-slider .slides li {
            padding-left: 140px;
            position: relative;
            min-height: 140px; }
        @media screen and (max-width: 480px) {
            .testimonial-slider .slides li {
                padding-left: 0; } }
        .testimonial-slider .slides .cite-avatar {
            position: absolute;
            left: 0;
            top: 0;
            border-radius: 50%;
            width: 120px;
            height: 120px; }
        @media screen and (max-width: 480px) {
            .testimonial-slider .slides .cite-avatar {
                display: block;
                margin: 0 auto 20px;
                position: relative; } }
        .testimonial-slider blockquote {
            margin: 0;
            color: #6a5b5b;
            font-size: 18px;
            font-size: 1.125em; }
        @media screen and (max-width: 480px) {
            .testimonial-slider blockquote {
                text-align: center; } }
        .testimonial-slider cite {
            color: #927e7e;
            font-size: 16px;
            font-size: 1rem;
            font-style: normal; }
        .testimonial-slider .flex-control-nav {
            list-style: none;
            margin-left: 140px; }
        .testimonial-slider .flex-control-nav li {
            display: inline-block;
            margin-right: 10px; }
        .testimonial-slider .flex-control-nav li a {
            background: #ede6e6;
            width: 20px;
            height: 20px;
            border: 3px solid #ede6e6;
            box-shadow: 0 0 0 2px #ed5151;
            border-radius: 50%;
            display: block;
            overflow: hidden;
            text-indent: -9999px; }
        .testimonial-slider .flex-control-nav li a.flex-active {
            background-color: #ed5151; }

        .client-grid {
            *zoom: 1; }
        .client-grid:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        .client-grid .client {
            width: 25%;
            float: left;
            height: 230px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            border-left: 1px solid #e8e8e8;
            border-bottom: 1px solid #e8e8e8; }
        .client-grid .client:first-child, .client-grid .client:nth-child(5n) {
            border-left: none; }
        .client-grid .client:nth-child(5), .client-grid .client:nth-child(6), .client-grid .client:nth-child(7), .client-grid .client:nth-child(8) {
            border-bottom: none; }
        @media screen and (max-width: 768px) {
            .client-grid .client {
                width: 50%;
                border-left: 1px solid #e8e8e8; }
            .client-grid .client:nth-child(5n) {
                border-right: 1px solid #e8e8e8; }
            .client-grid .client:nth-child(3n) {
                border-left: none; }
            .client-grid .client:nth-child(7) {
                border-left: none; }
            .client-grid .client:nth-child(5), .client-grid .client:nth-child(6) {
                border-bottom: 1px solid #e8e8e8; } }
        .client-grid .client img {
            margin: auto;
            max-width: 80%; }

        .map {
            min-height: 450px; }

        .contact-form .row {
            margin: 0 -5px; }
        .contact-form [class*="col-"] {
            padding: 0 5px; }
        .contact-form .control {
            position: relative; }
        .contact-form .control .fa {
            position: absolute;
            left: 10px;
            top: 10px;
            color: #e5dcdc; }
        .contact-form .control input, .contact-form .control textarea {
            width: 100%;
            padding: 10px 10px 10px 30px;
            margin-bottom: 10px;
            outline: none;
            border: none; }
        .contact-form .control textarea {
            min-height: 100px;
            resize: vertical; }
        .contact-form .right-aligned {
            text-align: right; }
        .contact-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #303236;
            color: white;
            border: none;
            font-size: 20px;
            font-size: 1.25em; }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            *zoom: 1; }
        .container:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        @media (min-width: 768px) {
            .container {
                width: 750px; } }
        @media (min-width: 992px) {
            .container {
                width: 970px; } }
        @media (min-width: 1200px) {
            .container {
                width: 1170px; } }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px;
            *zoom: 1; }
        .container-fluid:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }

        .row {
            margin-left: -15px;
            margin-right: -15px;
            *zoom: 1; }
        .row:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }

        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
            position: relative;
            min-height: 1px;
            padding-left: 15px;
            padding-right: 15px; }

        .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
            float: left; }

        .col-xs-1 {
            width: 8.3333333333%; }

        .col-xs-2 {
            width: 16.6666666667%; }

        .col-xs-3 {
            width: 25%; }

        .col-xs-4 {
            width: 33.3333333333%; }

        .col-xs-5 {
            width: 41.6666666667%; }

        .col-xs-6 {
            width: 50%; }

        .col-xs-7 {
            width: 58.3333333333%; }

        .col-xs-8 {
            width: 66.6666666667%; }

        .col-xs-9 {
            width: 75%; }

        .col-xs-10 {
            width: 83.3333333333%; }

        .col-xs-11 {
            width: 91.6666666667%; }

        .col-xs-12 {
            width: 100%; }

        .col-xs-pull-0 {
            right: auto; }

        .col-xs-pull-1 {
            right: 8.3333333333%; }

        .col-xs-pull-2 {
            right: 16.6666666667%; }

        .col-xs-pull-3 {
            right: 25%; }

        .col-xs-pull-4 {
            right: 33.3333333333%; }

        .col-xs-pull-5 {
            right: 41.6666666667%; }

        .col-xs-pull-6 {
            right: 50%; }

        .col-xs-pull-7 {
            right: 58.3333333333%; }

        .col-xs-pull-8 {
            right: 66.6666666667%; }

        .col-xs-pull-9 {
            right: 75%; }

        .col-xs-pull-10 {
            right: 83.3333333333%; }

        .col-xs-pull-11 {
            right: 91.6666666667%; }

        .col-xs-pull-12 {
            right: 100%; }

        .col-xs-push-0 {
            left: auto; }

        .col-xs-push-1 {
            left: 8.3333333333%; }

        .col-xs-push-2 {
            left: 16.6666666667%; }

        .col-xs-push-3 {
            left: 25%; }

        .col-xs-push-4 {
            left: 33.3333333333%; }

        .col-xs-push-5 {
            left: 41.6666666667%; }

        .col-xs-push-6 {
            left: 50%; }

        .col-xs-push-7 {
            left: 58.3333333333%; }

        .col-xs-push-8 {
            left: 66.6666666667%; }

        .col-xs-push-9 {
            left: 75%; }

        .col-xs-push-10 {
            left: 83.3333333333%; }

        .col-xs-push-11 {
            left: 91.6666666667%; }

        .col-xs-push-12 {
            left: 100%; }

        .col-xs-offset-0 {
            margin-left: 0%; }

        .col-xs-offset-1 {
            margin-left: 8.3333333333%; }

        .col-xs-offset-2 {
            margin-left: 16.6666666667%; }

        .col-xs-offset-3 {
            margin-left: 25%; }

        .col-xs-offset-4 {
            margin-left: 33.3333333333%; }

        .col-xs-offset-5 {
            margin-left: 41.6666666667%; }

        .col-xs-offset-6 {
            margin-left: 50%; }

        .col-xs-offset-7 {
            margin-left: 58.3333333333%; }

        .col-xs-offset-8 {
            margin-left: 66.6666666667%; }

        .col-xs-offset-9 {
            margin-left: 75%; }

        .col-xs-offset-10 {
            margin-left: 83.3333333333%; }

        .col-xs-offset-11 {
            margin-left: 91.6666666667%; }

        .col-xs-offset-12 {
            margin-left: 100%; }

        @media (min-width: 768px) {
            .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
                float: left; }

            .col-sm-1 {
                width: 8.3333333333%; }

            .col-sm-2 {
                width: 16.6666666667%; }

            .col-sm-3 {
                width: 25%; }

            .col-sm-4 {
                width: 33.3333333333%; }

            .col-sm-5 {
                width: 41.6666666667%; }

            .col-sm-6 {
                width: 50%; }

            .col-sm-7 {
                width: 58.3333333333%; }

            .col-sm-8 {
                width: 66.6666666667%; }

            .col-sm-9 {
                width: 75%; }

            .col-sm-10 {
                width: 83.3333333333%; }

            .col-sm-11 {
                width: 91.6666666667%; }

            .col-sm-12 {
                width: 100%; }

            .col-sm-pull-0 {
                right: auto; }

            .col-sm-pull-1 {
                right: 8.3333333333%; }

            .col-sm-pull-2 {
                right: 16.6666666667%; }

            .col-sm-pull-3 {
                right: 25%; }

            .col-sm-pull-4 {
                right: 33.3333333333%; }

            .col-sm-pull-5 {
                right: 41.6666666667%; }

            .col-sm-pull-6 {
                right: 50%; }

            .col-sm-pull-7 {
                right: 58.3333333333%; }

            .col-sm-pull-8 {
                right: 66.6666666667%; }

            .col-sm-pull-9 {
                right: 75%; }

            .col-sm-pull-10 {
                right: 83.3333333333%; }

            .col-sm-pull-11 {
                right: 91.6666666667%; }

            .col-sm-pull-12 {
                right: 100%; }

            .col-sm-push-0 {
                left: auto; }

            .col-sm-push-1 {
                left: 8.3333333333%; }

            .col-sm-push-2 {
                left: 16.6666666667%; }

            .col-sm-push-3 {
                left: 25%; }

            .col-sm-push-4 {
                left: 33.3333333333%; }

            .col-sm-push-5 {
                left: 41.6666666667%; }

            .col-sm-push-6 {
                left: 50%; }

            .col-sm-push-7 {
                left: 58.3333333333%; }

            .col-sm-push-8 {
                left: 66.6666666667%; }

            .col-sm-push-9 {
                left: 75%; }

            .col-sm-push-10 {
                left: 83.3333333333%; }

            .col-sm-push-11 {
                left: 91.6666666667%; }

            .col-sm-push-12 {
                left: 100%; }

            .col-sm-offset-0 {
                margin-left: 0%; }

            .col-sm-offset-1 {
                margin-left: 8.3333333333%; }

            .col-sm-offset-2 {
                margin-left: 16.6666666667%; }

            .col-sm-offset-3 {
                margin-left: 25%; }

            .col-sm-offset-4 {
                margin-left: 33.3333333333%; }

            .col-sm-offset-5 {
                margin-left: 41.6666666667%; }

            .col-sm-offset-6 {
                margin-left: 50%; }

            .col-sm-offset-7 {
                margin-left: 58.3333333333%; }

            .col-sm-offset-8 {
                margin-left: 66.6666666667%; }

            .col-sm-offset-9 {
                margin-left: 75%; }

            .col-sm-offset-10 {
                margin-left: 83.3333333333%; }

            .col-sm-offset-11 {
                margin-left: 91.6666666667%; }

            .col-sm-offset-12 {
                margin-left: 100%; } }
        @media (min-width: 992px) {
            .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
                float: left; }

            .col-md-1 {
                width: 8.3333333333%; }

            .col-md-2 {
                width: 16.6666666667%; }

            .col-md-3 {
                width: 25%; }

            .col-md-4 {
                width: 33.3333333333%; }

            .col-md-5 {
                width: 41.6666666667%; }

            .col-md-6 {
                width: 50%; }

            .col-md-7 {
                width: 58.3333333333%; }

            .col-md-8 {
                width: 66.6666666667%; }

            .col-md-9 {
                width: 75%; }

            .col-md-10 {
                width: 83.3333333333%; }

            .col-md-11 {
                width: 91.6666666667%; }

            .col-md-12 {
                width: 100%; }

            .col-md-pull-0 {
                right: auto; }

            .col-md-pull-1 {
                right: 8.3333333333%; }

            .col-md-pull-2 {
                right: 16.6666666667%; }

            .col-md-pull-3 {
                right: 25%; }

            .col-md-pull-4 {
                right: 33.3333333333%; }

            .col-md-pull-5 {
                right: 41.6666666667%; }

            .col-md-pull-6 {
                right: 50%; }

            .col-md-pull-7 {
                right: 58.3333333333%; }

            .col-md-pull-8 {
                right: 66.6666666667%; }

            .col-md-pull-9 {
                right: 75%; }

            .col-md-pull-10 {
                right: 83.3333333333%; }

            .col-md-pull-11 {
                right: 91.6666666667%; }

            .col-md-pull-12 {
                right: 100%; }

            .col-md-push-0 {
                left: auto; }

            .col-md-push-1 {
                left: 8.3333333333%; }

            .col-md-push-2 {
                left: 16.6666666667%; }

            .col-md-push-3 {
                left: 25%; }

            .col-md-push-4 {
                left: 33.3333333333%; }

            .col-md-push-5 {
                left: 41.6666666667%; }

            .col-md-push-6 {
                left: 50%; }

            .col-md-push-7 {
                left: 58.3333333333%; }

            .col-md-push-8 {
                left: 66.6666666667%; }

            .col-md-push-9 {
                left: 75%; }

            .col-md-push-10 {
                left: 83.3333333333%; }

            .col-md-push-11 {
                left: 91.6666666667%; }

            .col-md-push-12 {
                left: 100%; }

            .col-md-offset-0 {
                margin-left: 0%; }

            .col-md-offset-1 {
                margin-left: 8.3333333333%; }

            .col-md-offset-2 {
                margin-left: 16.6666666667%; }

            .col-md-offset-3 {
                margin-left: 25%; }

            .col-md-offset-4 {
                margin-left: 33.3333333333%; }

            .col-md-offset-5 {
                margin-left: 41.6666666667%; }

            .col-md-offset-6 {
                margin-left: 50%; }

            .col-md-offset-7 {
                margin-left: 58.3333333333%; }

            .col-md-offset-8 {
                margin-left: 66.6666666667%; }

            .col-md-offset-9 {
                margin-left: 75%; }

            .col-md-offset-10 {
                margin-left: 83.3333333333%; }

            .col-md-offset-11 {
                margin-left: 91.6666666667%; }

            .col-md-offset-12 {
                margin-left: 100%; } }
        @media (min-width: 1200px) {
            .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
                float: left; }

            .col-lg-1 {
                width: 8.3333333333%; }

            .col-lg-2 {
                width: 16.6666666667%; }

            .col-lg-3 {
                width: 25%; }

            .col-lg-4 {
                width: 33.3333333333%; }

            .col-lg-5 {
                width: 41.6666666667%; }

            .col-lg-6 {
                width: 50%; }

            .col-lg-7 {
                width: 58.3333333333%; }

            .col-lg-8 {
                width: 66.6666666667%; }

            .col-lg-9 {
                width: 75%; }

            .col-lg-10 {
                width: 83.3333333333%; }

            .col-lg-11 {
                width: 91.6666666667%; }

            .col-lg-12 {
                width: 100%; }

            .col-lg-pull-0 {
                right: auto; }

            .col-lg-pull-1 {
                right: 8.3333333333%; }

            .col-lg-pull-2 {
                right: 16.6666666667%; }

            .col-lg-pull-3 {
                right: 25%; }

            .col-lg-pull-4 {
                right: 33.3333333333%; }

            .col-lg-pull-5 {
                right: 41.6666666667%; }

            .col-lg-pull-6 {
                right: 50%; }

            .col-lg-pull-7 {
                right: 58.3333333333%; }

            .col-lg-pull-8 {
                right: 66.6666666667%; }

            .col-lg-pull-9 {
                right: 75%; }

            .col-lg-pull-10 {
                right: 83.3333333333%; }

            .col-lg-pull-11 {
                right: 91.6666666667%; }

            .col-lg-pull-12 {
                right: 100%; }

            .col-lg-push-0 {
                left: auto; }

            .col-lg-push-1 {
                left: 8.3333333333%; }

            .col-lg-push-2 {
                left: 16.6666666667%; }

            .col-lg-push-3 {
                left: 25%; }

            .col-lg-push-4 {
                left: 33.3333333333%; }

            .col-lg-push-5 {
                left: 41.6666666667%; }

            .col-lg-push-6 {
                left: 50%; }

            .col-lg-push-7 {
                left: 58.3333333333%; }

            .col-lg-push-8 {
                left: 66.6666666667%; }

            .col-lg-push-9 {
                left: 75%; }

            .col-lg-push-10 {
                left: 83.3333333333%; }

            .col-lg-push-11 {
                left: 91.6666666667%; }

            .col-lg-push-12 {
                left: 100%; }

            .col-lg-offset-0 {
                margin-left: 0%; }

            .col-lg-offset-1 {
                margin-left: 8.3333333333%; }

            .col-lg-offset-2 {
                margin-left: 16.6666666667%; }

            .col-lg-offset-3 {
                margin-left: 25%; }

            .col-lg-offset-4 {
                margin-left: 33.3333333333%; }

            .col-lg-offset-5 {
                margin-left: 41.6666666667%; }

            .col-lg-offset-6 {
                margin-left: 50%; }

            .col-lg-offset-7 {
                margin-left: 58.3333333333%; }

            .col-lg-offset-8 {
                margin-left: 66.6666666667%; }

            .col-lg-offset-9 {
                margin-left: 75%; }

            .col-lg-offset-10 {
                margin-left: 83.3333333333%; }

            .col-lg-offset-11 {
                margin-left: 91.6666666667%; }

            .col-lg-offset-12 {
                margin-left: 100%; } }
        @-ms-viewport {
            width: device-width; }
        .visible-xs, .visible-sm, .visible-md, .visible-lg {
            display: none !important; }

        .visible-xs-block,
        .visible-xs-inline,
        .visible-xs-inline-block,
        .visible-sm-block,
        .visible-sm-inline,
        .visible-sm-inline-block,
        .visible-md-block,
        .visible-md-inline,
        .visible-md-inline-block,
        .visible-lg-block,
        .visible-lg-inline,
        .visible-lg-inline-block {
            display: none !important; }

        @media (max-width: 767px) {
            .visible-xs {
                display: block !important; }

            table.visible-xs {
                display: table; }

            tr.visible-xs {
                display: table-row !important; }

            th.visible-xs,
            td.visible-xs {
                display: table-cell !important; } }
        @media (max-width: 767px) {
            .visible-xs-block {
                display: block !important; } }

        @media (max-width: 767px) {
            .visible-xs-inline {
                display: inline !important; } }

        @media (max-width: 767px) {
            .visible-xs-inline-block {
                display: inline-block !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm {
                display: block !important; }

            table.visible-sm {
                display: table; }

            tr.visible-sm {
                display: table-row !important; }

            th.visible-sm,
            td.visible-sm {
                display: table-cell !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-block {
                display: block !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline {
                display: inline !important; } }

        @media (min-width: 768px) and (max-width: 991px) {
            .visible-sm-inline-block {
                display: inline-block !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md {
                display: block !important; }

            table.visible-md {
                display: table; }

            tr.visible-md {
                display: table-row !important; }

            th.visible-md,
            td.visible-md {
                display: table-cell !important; } }
        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-block {
                display: block !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline {
                display: inline !important; } }

        @media (min-width: 992px) and (max-width: 1199px) {
            .visible-md-inline-block {
                display: inline-block !important; } }

        @media (min-width: 1200px) {
            .visible-lg {
                display: block !important; }

            table.visible-lg {
                display: table; }

            tr.visible-lg {
                display: table-row !important; }

            th.visible-lg,
            td.visible-lg {
                display: table-cell !important; } }
        @media (min-width: 1200px) {
            .visible-lg-block {
                display: block !important; } }

        @media (min-width: 1200px) {
            .visible-lg-inline {
                display: inline !important; } }

        @media (min-width: 1200px) {
            .visible-lg-inline-block {
                display: inline-block !important; } }

        @media (max-width: 767px) {
            .hidden-xs {
                display: none !important; } }
        @media (min-width: 768px) and (max-width: 991px) {
            .hidden-sm {
                display: none !important; } }
        @media (min-width: 992px) and (max-width: 1199px) {
            .hidden-md {
                display: none !important; } }
        @media (min-width: 1200px) {
            .hidden-lg {
                display: none !important; } }
        .visible-print {
            display: none !important; }

        @media print {
            .visible-print {
                display: block !important; }

            table.visible-print {
                display: table; }

            tr.visible-print {
                display: table-row !important; }

            th.visible-print,
            td.visible-print {
                display: table-cell !important; } }
        .visible-print-block {
            display: none !important; }
        @media print {
            .visible-print-block {
                display: block !important; } }

        .visible-print-inline {
            display: none !important; }
        @media print {
            .visible-print-inline {
                display: inline !important; } }

        .visible-print-inline-block {
            display: none !important; }
        @media print {
            .visible-print-inline-block {
                display: inline-block !important; } }

        @media print {
            .hidden-print {
                display: none !important; } }
        /*
         * Header Styles
         */
        .site-header {
            *zoom: 1;
            padding: 20px 0 0;
            line-height: normal; }
        .site-header:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        .site-header .container {
            *zoom: 1; }
        .site-header .container:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }

        .logo {
            float: left;
            margin-bottom: 20px; }

        .main-navigation {
            float: right; }
        .main-navigation .menu-toggle {
            background: none;
            border: none;
            color: #333;
            padding: 10px;
            font-size: 18px;
            font-size: 1.125em;
            display: inline-block;
            vertical-align: top;
            outline: none;
            display: none; }
        @media screen and (max-width: 990px) {
            .main-navigation .menu-toggle {
                display: block; } }
        .main-navigation .menu {
            display: inline-block;
            vertical-align: top;
            list-style: none;
            *zoom: 1; }
        .main-navigation .menu:after {
            content: " ";
            clear: both;
            display: block;
            overflow: hidden;
            height: 0; }
        @media screen and (max-width: 990px) {
            .main-navigation .menu {
                display: none; } }
        .main-navigation .menu li {
            float: left;
            position: relative; }
        .main-navigation .menu li a {
            padding: 10px 20px;
            display: block;
            color: #927e7e;
            font-size: 14px;
            font-size: 0.875em; }
        .main-navigation .menu li:hover:before, .main-navigation .menu li:hover:after, .main-navigation .menu li:focus:before, .main-navigation .menu li:focus:after, .main-navigation .menu li.current-menu-item:before, .main-navigation .menu li.current-menu-item:after {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            opacity: 1; }
        .main-navigation .menu li:before, .main-navigation .menu li:after {
            content: " ";
            width: 100%;
            left: 0;
            height: 2px;
            background: #ed5151;
            position: absolute;
            opacity: 0;
            -webkit-transition: .3s ease;
            transition: .3s ease; }
        .main-navigation .menu li:before {
            top: 0;
            -webkit-transform: translateY(20px);
            -ms-transform: translateY(20px);
            transform: translateY(20px); }
        .main-navigation .menu li:after {
            botom: 0;
            -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            transform: translateY(-20px); }

        .mobile-navigation {
            clear: both;
            background: #ed5151;
            display: none;
            margin-bottom: 20px; }
        @media screen and (min-width: 991px) {
            .mobile-navigation {
                display: none !important; } }
        .mobile-navigation .menu {
            list-style: none; }
        .mobile-navigation .menu li {
            border-bottom: 1px solid rgba(0, 0, 0, 0.3);
            text-align: center; }
        .mobile-navigation .menu li:last-child {
            border-bottom: none; }
        .mobile-navigation a {
            color: white;
            padding: 10px;
            display: block; }

        .page-head {
            background: #ed5151;
            color: white;
            text-align: center;
            padding: 50px 0; }
        .page-head h1 {
            font-size: 40px;
            font-size: 2.5em;
            margin: 0; }

        .hero {
            background: #ed5151;
            text-align: center;
            padding: 50px 0; }
        .hero img {
            margin-bottom: 20px;
            max-width: 100%;
            height: auto; }
        .hero .hero-content {
            color: white; }
        .hero .hero-content span {
            padding: 10px;
            background-color: #b23d3d;
            display: inline-block;
            margin-bottom: 10px;
            font-size: 20px;
            font-size: 1.25em; }
        .hero .button, .hero form input[type="submit"], form .hero input[type="submit"], .hero form button, form .hero button, .hero form input[type="reset"], form .hero input[type="reset"] {
            background: #303236;
            font-size: 20px;
            font-size: 1.25em;
            padding: 10px 30px; }

        .fullwidth-block {
            padding: 70px 0; }
        .fullwidth-block img {
            max-width: 100%; }

        .cta {
            background-color: #ede6e6;
            padding: 50px 0;
            color: #6a5b5b; }
        @media screen and (max-width: 990px) {
            .cta {
                text-align: center; } }
        .cta span {
            color: #ed5151;
            font-weight: 700; }
        .cta h2 {
            margin: 0;
            font-weight: 400; }
        @media screen and (max-width: 990px) {
            .cta h2 {
                margin-bottom: 30px; } }
        .cta a.button {
            padding: 10px 30px;
            font-size: 20px;
            font-size: 1.25em; }

        .testimonial-section {
            background-color: #ede6e6;
            padding: 40px 0; }

        @media screen and (max-width: 990px) {
            .macbook {
                margin-top: 30px; } }

        .contact-area {
            background-color: #ed5151;
            color: white; }
        .contact-area address {
            font-size: 30px;
            font-size: 1.875em;
            margin-bottom: 30px; }
        .contact-area address a {
            color: white; }
        .contact-area address a:hover {
            text-decoration: underline; }

        /*
         * Footer Styles
         */
        .site-footer {
            background-color: #303236;
            color: #9a9ca1;
            padding: 50px 0;
            font-size: 14px;
            font-size: 0.875em; }
        .site-footer .widget {
            margin-bottom: 30px; }
        .site-footer .widget-title {
            color: #caccd3;
            font-size: 20px;
            font-size: 1.25rem;
            font-weight: normal; }
        .site-footer a {
            color: #9a9ca1; }
        .site-footer a:hover {
            color: #ed5151; }
        .site-footer .dash-list {
            list-style: none; }
        .site-footer .dash-list li {
            position: relative;
            padding: 5px 0 5px 20px; }
        .site-footer .dash-list li:before {
            content: "-";
            position: absolute;
            left: 0;
            top: 5px; }

        .social-links a {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: inline-block;
            background-color: #45474c;
            color: white;
            text-align: center;
            font-size: 20px;
            font-size: 1.25em;
            line-height: 2.6;
            margin-right: 10px;
            margin-bottom: 10px; }
        .social-links a:hover {
            background-color: #ed5151;
            color: white; }

        /*# sourceMappingURL=style.css.map */




    </style>
</head>


<header class="site-header">
    <div class="container">
        <a href="/" class="logo"><img src="images/logo.png" alt="Perfect Lab"></a>

        <!-- Default snippet for navigation -->
        <div class="main-navigation">
            <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
            <ul class="menu">
                <li class="menu-item current-menu-item"><a href=#>Home</a></li>
                <li class="menu-item"><a href="#">About</a></li>
                <li class="menu-item"><a href="#">Features</a></li>
                <li class="menu-item"><a href="#">Clients</a></li>
                <li class="menu-item"><a href="#">Contact</a></li>
            </ul> <!-- .menu -->
        </div> <!-- .main-navigation -->

        <div class="mobile-navigation"></div>
    </div> <!-- .container -->
</header> <!-- .site-header -->


<body>
    @include('about')
    @yield('content')
</body>


<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Contact</h3>
                    <address>
                        <strong>Prefect Labs</strong>
                        <p>186 W Canfield St Detroit, MI 48201</p>
                        <p><a href="#">(45) 985 527 421</a><br>
                            <a href="#">hello@perfectlab.com</a></p>
                    </address>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Help</h3>
                    <ul class="dash-list">
                        <li><a href="#">Praesentium deleniti</a></li>
                        <li><a href="#">Atque corrupti</a></li>
                        <li><a href="#">Quos dolores quas molestias</a></li>
                        <li><a href="#">Excepturi sint occaecati</a></li>
                        <li><a href="#">Cupiditate provident</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Jobs</h3>
                    <ul class="dash-list">
                        <li><a href="#">Web designer</a></li>
                        <li><a href="#">Project manager</a></li>
                        <li><a href="#">Web developer</a></li>
                        <li><a href="#">Art director</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-6 col-md-3">
                <div class="widget">
                    <h3 class="widget-title">Follow us</h3>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> <!-- .site-footer -->
</html>
