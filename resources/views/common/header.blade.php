<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bpi|Bogra</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('css/sweetalert2.css')}}" rel="stylesheet" />
    <link rel="icon" href="{{asset('img/bpi-logo.png')}}" type="image/png">
    <!-- GOOGLE FONTS-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <style>
        .sidebar-collapse .nav > li{
            padding:0;
        }
        .sidebar-collapse .nav > li > a {
            background: transparent none repeat scroll 0 0;
            color: #fff;
            padding: 9px 26px;
            text-shadow: none;
        }
        .active-m{
            background: #C90000 none repeat scroll 0 0;

        }

        .user-image {

            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            max-height: 170px;
            max-width: 170px;
            width: 70px;

            margin: 0 auto;
            padding: 11px 0;
        }


        .arrow {
            float: right;
            margin-top: 16px;
        }

        #page-wrapper {


        }
        #page-wrapper {

            min-height: 500px;

        }
        #page-inner {
            min-height: 600px;
        }
img{
    max-width: 100%;
}




        .sort-desc > ul {
            list-style: outside none none;
            margin: 0;
            padding: 0;
        }
        .sort-desc li {
            padding: 7px 0 2px 22px;
        }


        .sort-desc img {
            height: 300px;
            width: 100%;
        }

        .overlay {
            background: #eee none repeat scroll 0 0;
            border-radius: 5px;
            margin: 26px 0;
            padding: 10px 21px;
        }

        .overlay > ul {
            list-style: outside none none;
            padding: 15px 0 0;
        }
        .overlay li {
            font-size: 17px;
            padding: 7px 0;
        }
        .overlay h3 {
            margin: 8px 0;
            padding: 15px 14px;
        }


        .changling-step {
            padding: 12px 0;
        }
        .arrow {
            float: right;
            margin-top: 8px;
        }

        .staff-detiles > img {
            height: auto;
            width: 178px;
        }


        .staff-detiles p {
            letter-spacing: 2px;
            margin: 0;
            padding-left: 20px;
            position: relative;
        }
        .staff-detiles p span {
            bottom: 0;
            left: 36%;
            letter-spacing: 1px;
            position: absolute;
        }
        .staff-detiles {
            border: 1px solid #ddd;
            padding-bottom: 18px;
        }






        .navbar-cls-top .navbar-brand {
            background: #c90000 none repeat scroll 0 0;
            color: #fff;
            font-size: 15px;
            font-weight: 300;
            height: 60px;
            margin: 0;
            padding: 19px 0 0;
            text-align: center;
            width: 260px;
        }
        .user-image {
            border-radius: 50%;
            height: 100px;
            margin: 0 auto;
            max-height: 170px;
            max-width: 170px;
            padding: 11px 0;
            width: 79px;
        }
        .btn-srs {
            background: #000 none repeat scroll 0 0;
            border: 0 none;
            border-radius: 5px;
            color: #fff;
            display: inline-flex;
            font-weight: 700;
            margin-top: 3px;
            padding: 9px 13px;
        }
        a:hover {
            text-decoration: none;
        }
        .btn-srs:hover {
            color: #fff;
        }
        img {
            width: 100%;
        }
        .result-list {
            background: #dff0d8 none repeat scroll 0 0;
            margin: 30px 0;
        }
        .result-list ul {
            border: 1px solid #000;
            list-style: outside none none;
            margin: 0;
            padding: 24px 0;
            position: relative;
        }
        .result-list ul li {
            font-size: 17px;
            padding: 6px 0 2px 36px;
            position: relative;
        }
        .result-list ul::before {
            background: #000 none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: 50%;
            position: absolute;
            top: 0;
            width: 1px;
        }
        .result-list ul li span {
            left: 55%;
            position: absolute;
            top: 28%;
        }
        .result-list ul li::before {
            border-bottom: 1px dotted #000;
            content: "";
            height: 1px;
            left: 0;
            position: absolute;
            top: 7%;
            width: 100%;
        }

        .result-list img {
            height: 90px;
            margin: 12px;
            width: 118px;
        }


        .result-list {

            margin: 0;
        }


        .result-list ul li:last-child::after {
            border-bottom: 1px dotted #000;
            bottom: 0;
            content: "";
            height: 0;
            left: 0;
            position: absolute;
            width: 100%;
        }


        .result-list h3 {
            margin: 0;
            padding: 9px 0 21px 11px;
        }

        .overlay img {
            width: 50%;
        }


        .nav-second-level > li > a:before, .nav-third-level > li > a:before {

            background: #E16C25;

        }

        .nav-second-level > li > a:after, .nav-third-level > li > a:after {

            background: #E16C25;

        }

        .active-m {
            background: #E16C25 none repeat scroll 0 0;
        }

        .sidebar-collapse .nav > li > a:hover {
            background: #e16c26 none repeat scroll 0 0;

        }
        .btn-lg{
            background: #e16c26 none repeat scroll 0 0;
            border: 1px solid #e16c26;
            border-radius: 5px;
        }

        .navbar-cls-top .navbar-brand,.navbar-cls-top .navbar-brand:hover {
            background: #e16c26 none repeat scroll 0 0;

        }
        .square-btn-adjust,.square-btn-adjust:hover{
            color: #fff;
            background-color: #e16c26;
            border-color: #d43f3a;
        }
        .admin-header {
            color: #ddd;
            font-size: 33px;
            margin-left: 23%;
        }

        .footer-area.text-center {
            background: #4d4d4d none repeat scroll 0 0;
            border-radius: 3px;
            color: #fff;
            padding: 29px 0;
        }

        .footer-area.text-center > span {
            color: #e16c26;
            font-size: 11px;
            font-style: italic;
        }

        .result-list {
            background: #fff none repeat scroll 0 0;
            margin: 0;
            box-shadow: 0px 1px 5px -1px rgb(0,0,0);
        }

        .result-list ul {
            border: 1px solid #fff7f7;

        }


        .result-list ul::before {
            background: #f7eeee none repeat scroll 0 0;

        }



        .result-list img {
            height: 104px;
            margin: 12px;
            padding-bottom: 38px;
            position: absolute;
            right: 3%;
            top: 0;
            width: 104px;
        }

        .result-list h3 {
            margin: 0;
            padding: 24px 0 38px 9px;
        }

        .staff-detiles {
            margin-top: 32px;
        }

        .result-list ul li::before {
            border-bottom: 1px dotted #cecece;

        }


        .result-list ul li:last-child::after {
            border-bottom: 1px dotted #cecece;
        }


        #page-inner{
            background-image: url("img/topography.png");
        }

        .overlay img {
            width: 100%;
        }

        .overlay h3 {
            margin: 8px 0;
            padding: 1px 14px;
            font-size: 16px;
            display: inline-block;
        }
        .overlay h3 {
            margin: 8px 0;
            padding: 14px 14px;
            font-size: 16px;
            display: inline-block;
            background: #e16c26;
            border-radius: 51%;
            color: #fff;
        }

        .text-info {
            color: #e16c26;
        }

        .admin-header {
            color: #e16c26;

        }

        .btn-infos {
            color: #fff;
            background-color: #e16c26;
            border-color: #e16c26;
        }

        .overlay {
            background: #fff none repeat scroll 0 0;
            margin: 12px 0;

        }
        .overlay img {

            display: flex;

            width: auto;
        }



        .navbar-header {
            background: #e16c26;


        }

        .text_c {
            color: #e16c26;
        }

        .changling-step .btn {
            margin-bottom: 10px;
        }

        .result-list img {
            height: 108px;

            width: auto;
        }


        .overlay li {

            font-size: 15px;
        }


        .overlay {
            background: #fff none repeat scroll 0 0;
            box-shadow: 0 0 3px rgb(204, 199, 197);
        }
        #page-inner {

            padding: 0 20px;
        }
        .result-list h4 {
            margin: 0;
            padding: 51px 5px 0px 12px;
        }


        .result-list ul {
            border: 1px solid #fff7f7;
            margin-top: 28px;
        }
        .bg-wh{
            background: #fff;
            min-height: 20px;
            border-top:1px solid #eee;
            box-shadow: 0 1px 5px -1px rgb(0, 0, 0);
            padding-top: 20px;
            margin-top: 5px;

        }
        .table {

            background: #fff;
        }
        .text-info {

            background: #fff;
            padding: 13px 0;
        }

        .find-bg {
            background: #fff;
            padding-bottom: 18px;
            padding-right: 32px;
            padding-left: 32px;
            margin-top: 14px;
            padding-top: 18px;
            border-radius: 5px;
            box-shadow: 0 0 3px rgb(204, 199, 197)
        }
        a:hover{
            transition: 0.9s;
        }

        .text_c {

            margin: 0;
            padding: 6px 0;
        }

        .softList span {
            border: 1px solid #ddd;
            display: inline-block;
            min-height: 42px;
            padding-top: 9px;
            text-align: center;
            width: 20%;
        }
        .softList span:last-child{
            width: 20%;
        }

        .softList > ul {
            background: #fff none repeat scroll 0 0;
            list-style: outside none none;
            margin: 0;
            padding: 16px;
        }



        @media print {
           a[href]{
               visibility: hidden;
           }
            nav * {
                visibility: hidden;
            }
            title{
                visibility: hidden;
            }
            #print* {
                visibility: visible;
                background: red;
            }
            #print {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;;
                height: 100%;
            }
            .offprint{
                visibility: hidden;
            }
        }



        .panel-heading {
            padding: 18px 15px;

        }

        .panel-body {
            padding: 0;
        }

        .result-list ul {
            border: 0px solid #fff7f7;
            margin-top: 0;
        }


        .result-list {

            background: #fff none repeat scroll 0 0;
            margin: 0;
            box-shadow: 0 0 -1px rgb(0,0,0);

        }
        .result-list>div{
            box-shadow: none;
        }


        .custom-mail .btn {
            background: #e16c26 none repeat scroll 0 0;
            border: 1px solid #fff;
            color: #fff;
        }

        .soft-over {
            height: 900px;
            overflow-y: scroll;
        }
        body{
            font-family: 'Roboto Slab', serif;
        }
    .find-area{
        padding:0;
    }
        .find-bg {

            margin-top: 5px;

        }
        .overlay h3 {

            border-radius: 29%;

        }
        .admin-scroll {
            overflow-x: scroll;
        }
        .overlay li {
            font-size: 13px;
        }

        .changling-step .btn {

            font-size: 10px;
        }

        .result-list ul::before {
            background: none;
            left: 40%;

        }
        .result-list ul li span {
            left: 54%;

        }
        .result-list.del-padd li {
            font-size: 13px;
        }
        .find-result {
            background: #fff none repeat scroll 0 0;
            box-shadow: 0 0 3px rgb(204, 199, 197);
            margin-top: 7px;
            padding-bottom: 0;
            border-radius: 5px;
            padding-right: 0;
            padding-top: 0;
        }
       .find-result span {
            display: inline-block;

        }
ul{
    list-style: none;
    padding: 0;
}
        .find-result li {
            font-size: 11px;
            padding: 5px 0;
            position: relative;
        }
        .find-result > ul {
            list-style:none;
            margin: 0;
            padding: 6px 0;
        }

        .find-result ul li span {
            font-weight: 700;
            left: 58%;
            position: absolute;
        }
        .find-area {
            padding: 0 15px 0 0;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
</head>
<body>

<div id="wrapper">
