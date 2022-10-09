
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice - #123</title>

    <style type="text/css">
      tfoot tr td a {
    color: #fff;
    background-color: #60a7a6;
    font-size: 14px;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;
}
        @page  {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 5px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>
<div class="container">
  <div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 40%;">
                <h3>John Doe</h3>
                <pre>
Street 15
123456 City
United Kingdom
<br /><br />
Date: 2018-01-01
Identifier: #uniquehash
Status: Paid
</pre>


            </td>
            <td align="center">
                <img src="/path/to/logo.png" alt="Logo" width="64" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h3>CompanyName</h3>
                <pre>
                    https://company.com

                    Street 26
                    123456 City
                    United Kingdom
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>
<div class="invoice">

    <h3>Invoice specification #123</h3>
    <table width="100%">
        <thead>
        <tr>
            <th>Client Name</th>
            <th>Address</th>
            <th>Apt Unit</th>
            <th>City State</th>
            <th>Zip</th>
            <th>Apt Unit</th>
            <th>City State</th>
            <th>Country</th>
            <th>Phonenumber</th>
            <th>alleged_father_name</th>
            <th>alleged_father_dob</th>
             <th>child1_name</th>
            <th>child2_name</th>
             <th>paternity_trio</th>
            <th>paternity_motherless </th>
             <th>additional_af</th>
            <th>additional_af_chck</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Item 1</td>
            <td>1</td>
            <td>€15,-</td>
        </tr>
  
        </tbody>

        <tfoot>
        <tr>
           
          <td><a href="<?php echo e(route('downloadPDF')); ?>" class="btn-primary">PDF</a></td>
           

        </tr>
        </tfoot>
    </table>
</div>
</div>




</body>
</html>






























<!-- <style type="text/css">
  :root {
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI",
    Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif,
    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas,
    "Liberation Mono", "Courier New", monospace;
}
*,
::after,
::before {
  box-sizing: border-box;
}
html {
  font-family: sans-serif;
  line-height: 1.15;
  -webkit-text-size-adjust: 100%;
  -webkit-tap-highlight-color: transparent;
}
body {
  margin: 0;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
    "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
    "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #212529;
  text-align: left;
  background-color: #fff;
}
[tabindex="-1"]:focus:not(:focus-visible) {
  outline: 0 !important;
}
table {
  border-collapse: collapse;
}
th {
  text-align: inherit;
  text-align: -webkit-match-parent;
}
[type="button"]:not(:disabled),
[type="reset"]:not(:disabled),
[type="submit"]:not(:disabled),
button:not(:disabled) {
  cursor: pointer;
}
::-webkit-file-upload-button {
  font: inherit;
  -webkit-appearance: button;
}
.container {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 576px) {
  .container {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .container {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .container {
    max-width: 1140px;
  }
}
.row {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.col-12 {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}
.col-12 {
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
}
.table {
  width: 100%;
  margin-bottom: 1rem;
  color: #212529;
}
.table td,
.table th {
  padding: 0.75rem;
  vertical-align: top;
  border-top: 1px solid #dee2e6;
  text-align: center;
}
.table thead th {
  vertical-align: bottom;
  border-bottom: 2px solid #dee2e6;
}
.table-hover tbody tr:hover {
  color: #212529;
  background-color: rgba(0, 0, 0, 0.075);
}
.custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #80bdff;
}
.custom-control-input:not(:disabled):active ~ .custom-control-label::before {
  color: #fff;
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}
.card {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.125);
  border-radius: 0.25rem;
  max-width: 100%;
    overflow-x: scroll;
}
.close:not(:disabled):not(.disabled):focus,
.close:not(:disabled):not(.disabled):hover {
  opacity: 0.75;
}
@supports ((position: -webkit-sticky) or (position: sticky)) {
}
@media  print {
  *,
  ::after,
  ::before {
    text-shadow: none !important;
    box-shadow: none !important;
  }
  thead {
    display: table-header-group;
  }
  tr {
    page-break-inside: avoid;
  }
  @page  {
    size: a3;
  }
  body {
    min-width: 992px !important;
  }
  .container {
    min-width: 992px !important;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
}

body {
  background-color: #f4f4f4;
}

.dot-success {
  color: #52d986;
}

.dot-success::before {
  background-color: #52d986;
}

.dot-error {
  color: #d9527d;
}

.dot-error::before {
  background-color: #d9527d;
}

.dot-notice {
  color: #d9c352;
}

.dot-notice::before {
  background-color: #d9c352;
}

.table {
  margin-bottom: 0;
}
.table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.02);
}

.currency {
  color: grey;
  font-size: 85%;
  padding-left: 0.2rem;
}
.overdue-row {
  background: #ff00000a;
}

</style>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>client_name</th>
                <th>address</th>
                <th>client_name</th>
                <th>apt_unit</th>
                <th>city_state</th>
                <th>zip</th>
                <th>country</th>
                <th>phonenumber</th>
                <th>alleged_father_name</th>
                <th>alleged_father_dob</th>
                <th>child1_name</th>
                <th>child2_name</th>
                <th>child1_dob</th>
                <th>child2_dob</th>
                <th>paternity_trio</th>
                <th>paternity_motherless</th>
               <th>additional_af</th>
               <th>additional_af_chck</th>
               <th>additional_child_chk</th>
               <th>additional_child</th>
               <th>other_check</th>
               <th>other</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="overdue-row">
                <td>683</td>
                <td>03/20/2021</td>
                <td>03/27/2021</td>
                <td>$14.00<span class="currency">USD</span></td>
                <td>
                  <div class="dot-error">Overdue</div>
                </td>
              </tr>
              <tr>
                <td>629</td>
                <td>03/22/2021</td>
                <td>03/29/2021</td>
                <td>$11.50<span class="currency">USD</span></td>
                <td>
                  <div class="dot-notice">Due soon</div>
                </td>
              </tr>
              <tr>
                <td>604</td>
                <td>02/08/2021</td>
                <td>02/15/2021</td>
                <td>$14.00<span class="currency">USD</span></td>
                <td>
                  <div class="dot-success">Paid</div>
                </td>
              </tr>
              <tr>
                <td>548</td>
                <td>01/20/2021</td>
                <td>01/27/2021</td>
                <td>$14.00<span class="currency">USD</span></td>
                <td>
                  <div class="dot-success">Paid</div>
                </td>
              </tr>
              <tr>
                <td>512</td>
                <td>01/03/2021</td>
                <td>01/10/2021</td>
                <td>$14.00<span class="currency">USD</span></td>
                <td>
                  <div class="dot-success">Paid</div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>
 --><?php /**PATH D:\FareehaShah\files_updated\resources\views/web/invoice.blade.php ENDPATH**/ ?>