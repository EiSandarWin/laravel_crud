<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
     
       
        
        /* ==========================================================================
          Custom Properties
        ========================================================================== */
        
        :root {
            --body-color: #6c5ce7;
            --primary-color: #FFF;
            --primary-color-dark: #f1f1f1;
            --text-dark: #000000;
            --text-light: #FFF;
          
            --font-sans: "Century Gothic", Tahoma, Arial, sans-serif;
            --font-serif: Georgia, Times, "Times New Roman", serif;
            --font-family: 'Fira sans', sans-serif;
          }
          
          /* ==========================================================================
            Sensible defaults
          ========================================================================== */
          
          *,
          *:before,
          *:after {
            box-sizing: border-box;
            
          }
          
          ::selection {
            background-color: var(--primary-color);
            color: var(--text-light);
          }
          
          html,
          body {
            background:var(--body-color);
            color: var(--text-light);
            height: 100%;
            min-height: 100vh;
            min-height: -webkit-fill-available;
            text-rendering: optimizeSpeed;
            line-height: 1.5;
            margin: 0;
            
          }
          
          img,
          picture {
            max-width: 100%;
            display: block;
          }
          
          /* ==========================================================================
            Typography
          ========================================================================== */
          
          h1,
          h2,
          h3,
          h4,
          h5,
          h6 {
            margin: 0;
            font-family: var(--font-family);
          }
          
          /* h1 {
            font-size: 3.75rem;
            line-height: 1;
            margin: 1rem 0 1.5rem;
            color: var(--primary-color);
          }*/
          
          h1 {
            margin-top: 0.5em;
            display: block;
            font-size: 2em;
            font-weight: bold;
          }
          
          h2 {
            font-size: 3rem;
            line-height: 1;
            margin: 1rem 0 1rem;
          }
          
          h3 {
            font-size: 2.25rem;
            line-height: 2.5rem;
            margin: 1rem 0 1rem;
          }
          
          h4 {
            font-size: 1.875rem;
            line-height: 2.25rem;
            margin: 1rem 0 1rem;
          }
          
          h5 {
            font-size: 1.5rem;
            line-height: 2rem;
            margin: 1rem 0 0.5rem;
          }
          
          h6 {
            font-size: 1.25rem;
            line-height: 1.75rem;
            margin: 1rem 0 0.2rem;
          }
          
          p {
                color: #6a727a;
                font-weight: 500;
          }
          
          a {
            color: #6a727a;
          }
          
          a:hover {
            color: #6a727a;
          }
          
          hr {
            border: 0;
            height: 1px;
            background-color: #e0e0e0;
            margin: 1em 0;
          }
          
          /* ==========================================================================
            Forms
          ========================================================================== */
          
          form {
            font-family: var(--font-family);
            width: 100%;
          }
          
          input[type="text"],
          input[type="email"],
          input[type="password"],
          textarea,
          select {
            padding: 0.6em 0.6em;
            font-family: var(--font-familly);
            font-size: 1em;
            width: 100%;
            border: 3px var(--primary-color-dark) solid;
            margin-bottom: 10px;
          }
          
          input[type="text"]:focus,
          textarea:focus,
          input[type="email"]:focus,
          input[type="password"]:focus,
          select:focus {
            border: 2px var(--text-dark) solid;
            outline: 0;
          }
          
          input[type="text"],
          input[type="email"],
          input[type="password"],
          button,
          input[type="submit"],
          input[type="reset"],
          textarea,
          select {
            border-radius: 0.25em;
          }
          
          
          
          label {
            margin-bottom: 10px;
            display: block;
          }
          
          /* button,
          input[type="submit"],
          input[type="reset"] {
            margin-top: 1em;
            border: 0;
            background-color: var(--primary-color);
            color: var(--text-dark);
            font-family: var(--font-sans);
            font-size: inherit;
            font-weight: bold;
            line-height: 1.2;
            white-space: nowrap;
            padding: 1em 2em;
            cursor: pointer;
            transition: 0.3s ease-in-out;
          }*/
          
          button,
          input[type="submit"],
          input[type="reset"] {
            margin-top: 1em;
            border: 1px solid #e0e0e0;
            background-color: none;
            color: var(--text-dark);
            padding: 9px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-family: var(--font-family);
          }
          
          button:not(:last-child),
          input[type="submit"]:not(:last-child),
          input[type="reset"]:not(:last-child) {
            margin-right: 0em;
          }
          
          button:hover,
          input[type="submit"]:hover,
          input[type="reset"]:hover {
            background-color: var(--primary-color-dark);
          }
          
          .btn-link{
            margin-top: 1em;
            border: 1px solid #e0e0e0;
            background: #e0e0e0;
            color: var(--text-dark);
            text-decoration: none;
            padding: 9px 15px;
            border-radius: 4px;
            cursor: pointer;
            font-family: var(--font-family);
          }
          .btn-link:hover{
            background-color: var(--primary-color-dark);
          }
          
          input[type="checkbox"],
          input[type="radio"] {
            margin-top: 1.4em;
            width: 1.4em;
            height: 1.4em;
          }
          
          /* ==========================================================================
            Lists
          ========================================================================== */
          
          ul {
            margin: 2em 0;
            list-style-type: circle;
          }
          
          li {
            line-height: 1.8em;
            font-family: var(--font-sans);
          }
          
          /* ==========================================================================
            Tables
          ========================================================================== */
          
          table {
            border-collapse: collapse;
            width: 100%;
            background-color: var(--primary-color);
            color: #6a727a;
            margin-top: 20px;
          }
          
          th {
           /* background-color: var(--primary-color);
            color: var(--text-dark);*/
            color: #6a727a;
            font-size: 14px;
            font-weight: 500;
          }
          
          th,
          td {
            border:0px var(--primary-color-dark) solid;
            padding: 0.7em;
          }
          td:hover {
            cursor: pointer;
          }
          
          tr:hover,
          tr:nth-child(odd):hover {
            background-color: #fdfdea;
          }
          
          tr:nth-child(odd) {
            background-color: #f3f3f3;
          }
          
          /* ==========================================================================
            Layout Elements
          ========================================================================== */
          section {
            margin: 4rem 0;
          }
          
          footer {
            margin-top: 2em;
            justify-self: flex-end;
            width: 100%;
            font-family: var(--font-sans);
            font-size: 0.8em;
            text-align: center;
            background-color: var(--text-dark);
            color: var(--text-light);
            padding: 2em;
          }
          
          /* ==========================================================================
            Custom/Alternative Styles
          ========================================================================== */
          .container {
            width: 100%;
            max-width: 780px;
            margin-top: 5rem;
            margin-left: auto;
            margin-right: auto;
          }
          .titlebar{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
          }
          .table{
            background: #FFF; 
          }
          .table-filter{
            border-bottom: 1px solid #e0e0e0;
            padding: 0px;
            margin:0px;
            font-family: var(--font-family);       
          }
          .table-filter div{
            padding: 0 30px;
            margin:0px
          }
          .table-filter-list{
            list-style: none;
            justify-content: flex-start;
            display: flex;
            padding: 0px;margin:0px
          }
          .table-filter-link{
            margin-top: 8px;
            margin-bottom: 10px;
            cursor: pointer;
          }
          .link-active{
            color: #006fbb;
            font-weight: 500;
          }
          .table-search{
            padding: 0 30px;
            margin-top: 10px;
            display: grid;
            grid-template-columns: minmax(150px, auto) minmax(180px, 1fr);
                        
          }
          .search-select {
            appearance: none;
            background: #eeeeee;
            color: #6a727a;
            width: 100%;
            border: none;
            border-top: 1px solid #e0e0e0;
            border-left: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            border-top-left-radius: 3px;
            border-bottom-left-radius: 3px;
            margin-top: 3px;
            font-size: 1em;
          }
          .search-select-arrow{
            font-size: 1rem;
            opacity: 0.7;
            top: 8px;
            right: 20px;
            position: absolute;                        
          }
          .relative{
            position: relative;
          }
          .search-input-icon{
            top: 12px;
            left: 12px;
            color: #d4d4d4;
            position: absolute;
                            
          }
          
          .search-input{
            width: 100%;
            border: none;
            color: #454f5b;
            border-top: 1px solid #e0e0e0;
            border-right: 1px solid #e0e0e0;
            border-bottom: 1px solid #e0e0e0;
            border-top-right-radius: 3px;
            border-bottom-right-radius: 3px;
            padding-left: 40px;
            padding-right: 20px;
            padding-top: 10px;
            padding-bottom: 10px;
            font-family: var(--font-family);
            font-size: 1rem;
          }
          
            
          .btn {
            border: 1px solid #e0e0e0;
            background: none;
            border-radius: 4px;
            color: #6a727a;
            cursor: pointer;
            font-family: var(--font-family);
          }
          
          .btn-success:hover {
          background: rgb(47, 214, 111);
          color: white;  
          }
          .btn-danger:hover {
            background: crimson;
            color: white; 
          }
          
          .table-paginate{
            width: 230px;
            margin-left: auto;
            margin-bottom: 1rem;
            margin-right: 30px;
            align-items: center;
            justify-content: space-between;
            display: flex;
          }
          
          .pagination {
            margin-bottom: 1rem;
            margin-right: 1rem;
            justify-content: space-between;
            color: #6a727a;
          }
          
          .pagination a {
            color: black;
            float: left;
            margin-top:10px;
            padding: 8px 16px;
            text-decoration: none;
          }
          
          .active-page:hover {
            background: #e0e0e0;
            color: #6a727a; 
          }
          
          .paginate-icon {
            cursor: pointer;
            opacity: 0.7; 
            font-family: "Font Awesome 5 Free";
            color: #6a727a;
          }
          
          .card{
            display: grid;
            grid-template-columns: 1fr minmax(auto, 290px);
            grid-gap: 20px;
            color: #6a727a;
            font-family: var(--font-family);
          }
          
          .card div {
          background: white;
          border: 1px solid #e0e0e0;
          box-shadow: 0 6px 13px -12px rgb(50 50 93 / 20%), 0 3px 7px -3px rgb(110 110 110 / 10%);
          border-radius: 4px;
          padding: 20px;
          }
          
          .alt {
            background-color: transparent;
            border: 2px var(--primary-color) solid;
            color: var(--primary-color);
          }
          
          .alt:hover {
            background-color: transparent;
            border: 2px var(--primary-color-dark) solid;
            color: var(--primary-color-dark);
          }
          
          /* ==========================================================================
            Product custom styles
          ========================================================================== */
          .table-product-head {
            padding: 0 30px;
            gap: 10px;
            display: grid;
            font-size: 14px;
            font-weight: 500;
            border-bottom: 1px solid #e0e0e0;
            grid-template-columns: 50px 1fr 120px 120px 120px;
            font-family: var(--font-family);
          }
          .table-product-body {
            padding: 10px 30px !important;
            gap: 10px;
            display: grid;
            align-items: center;
            border-bottom: 1px solid #e0e0e0;
            padding: 0.6rem 0;
            color: #6a727a;
            background-color: #f1f1f1;
            grid-template-columns: 50px 1fr 120px 120px 120px;
            font-family: var(--font-family);
          }
          
          .img-product {
            width: 100px; 
            height: 80px;
          }
          
          
          /* ==========================================================================
            Media queries
          ========================================================================== */
          
          @media screen and (max-width: 550px) {
            button,
            input[type="submit"],
            input[type="reset"] {
              width: 100%;
            }
          }
          
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>