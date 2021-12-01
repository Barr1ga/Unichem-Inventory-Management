<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

  * {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }

  body:not(h1):not(h2):not(h3):not(h4):not(h5):not(h6) {
    font-size: .9rem;
  }

  body {
    min-height: 100vh;
    min-height: -webkit-fill-available;
    background-color: whitesmoke;
    /* display: flex;  login needs to be flex */
  }

  html {
    height: -webkit-fill-available;
  }

  main {
    display: flex;
    flex-wrap: nowrap;
    height: 100vh;
    height: -webkit-fill-available;
    max-height: 100vh;
    overflow-x: auto;
    overflow-y: hidden;
  }

  /*product information CARD-IMAGE*/
  .img-thumbnail {
    width: 105.78;
    height: 102.54;
  }

  /*product information CARD-UPDATE-BUTTON*/
  .update {
    border: none;
    background-color: inherit;
    color: #1D92FF;

    font-size: 14px;
    cursor: pointer;
    display: inline-block;
  }

  /*product information CARD-DELETE-BUTTON*/
  .delete {
    border: none;
    background-color: inherit;
    color: #F64545;

    font-size: 14px;
    cursor: pointer;
    display: inline-block;
  }

  /*product information CARD-BODY-CUSTOM*/
  .white-box-container-prod-info {
    background-color: white;
    border: 1px solid #D5DBE4;
    padding: 20px;
    border-radius: 7px 7px 7px 7px;
    width: 489.66px;
    margin: 0 0 6px 0;
  }

  /* STRICTLY USE THIS CLASS TO ROUND EDGES */
  .round-edge {
    border-radius: 7px;
  }

  /* STRICTLY USE THIS CLASS FOR FORM CONTAINER */
  .form-box {
    background-color: white;
    padding: 20px;
    border: 1px solid #D5DBE4;
  }

  /* STRICTLY USE THIS CLASS FOR GENERIC WHITE CONTAINERS */
  .white-box-container {
    background-color: white;
    border: 1px solid #D5DBE4;
    padding: 20px;
  }

  /* STRICTLY USE THIS CLASS FOR NAV CONTAINER */
  .nav-container {
    border-right: 1px solid #D5DBE4;
  }
  

  /* STRICTLY USE THIS CLASS FOR GENERIC CUSTOMER/SUPPLIER DETAIL CONTAINERS */
  .white-box-container-details-card-status {
    color: white;
    border: 1px solid #D5DBE4;
    padding: 5px 4px 2px 10px;
    width: 489.66px;
    border-radius: 7px 7px 0 0;
  }

  /* STRICTLY USE THIS CLASS FOR GENERIC CUSTOMER/SUPPLIER DETAIL CONTAINERS */
  .white-box-container-details-card-body {
    background-color: white;
    border: 1px solid #D5DBE4;
    padding: 20px;
    border-radius: 0 0 7px 7px;
    width: 489.66px;
    margin: 0 0 6px 0;
  }

  /* STRICTLY USE THIS CLASS FOR TO CONFIRM ORDER/REPLENISHMENT STATUS */
  .To-Confirm {
    background-color: #898989;
  }

  /* STRICTLY USE THIS CLASS FOR TO SHIP ORDER/REPLENISHMENT STATUS */
  .To-Ship {
    background-color: #1D92FF;
  }

  /* STRICTLY USE THIS CLASS FOR TO RECEIVE ORDER/REPLENISHMENT STATUS */
  .To-Receive {
    background-color: #9554FF;
  }

  /* STRICTLY USE THIS CLASS FOR COMPLETED ORDER/REPLENISHMENT STATUS */
  .Completed {
    background-color: #53C06B;
  }
  
  /* STRICTLY USE THIS CLASS FOR TO COMPLETE ORDER/REPLENISHMENT STATUS */
  .To-Approve {
    background-color: #ff2b2b;
  }

  /* STRICTLY USE THIS CLASS FOR ORDER ROWS */
  .order-replenishment-header {
    background-color: whitesmoke;
    border: none;
    padding: 20px;
  }

  /* STRICTLY USE THIS CLASS FOR CONTAINER HEADER */
  .container-header {
    background-color: whitesmoke;
    border: none;
    width: 941.44px;
    padding-left: 20px;
    margin: 0 0 5px 0;
  }

  .login-form {
    padding: 40px 20px 20px 20px;
  }

  .unichem-logo-login {
    height: 50px;
  }

  .notification-number {
    background-color: red;
    border-radius: 200px;
    padding: 1px 7px 3px 7px;
    color: white;
    font-size: .8rem;
  }

  .customer-supplier-information {
    width: 429.27px;
  }

  .supplier-customer-list {
    width: 473.61px;
  }

  .one-supplier-customer-list {
    height: 52.31px;
    width: 437.22px;
    margin: 0 0 5px 0;
  }
  .one-supplier-customer-list-long { 
    height: 52.31px;
    width: 1214.69px;
    margin: 0 0 5px 0;
    padding: 20px;
  }
  
  .reports-left-data {
    width: 800px;
  }
  
  .reports-right-data{
    width: 150px;
  }
  
  .one-order-replenishment-list {
    height: 52.31px;
    width: 961.44px;
    margin: 0 0 5px 0;
  }

  .father-container {
    padding: 30px;
  }

  .scroll-list {
    height: 700.43px;
    overflow-x: hidden;
    overflow-y: scroll;
    padding: 0 20px 0 0;
  }

  .scroll-list-2 {
    height: 650.43px;
    overflow-x: hidden;
    overflow-y: scroll;
    padding: 0 20px 0 0;
  }

  .search-input {
    width: 477.22px;
  }

  .layout-column {
    margin-right: 50px;
  }

  .border {
    border-radius: 20px;
    width: 100%;
    max-width: 700px;
    padding: 100px;
    margin: auto;
  }

  .form-signin {
    width: 100%;
    max-width: 500px;
    margin: auto;
  }

  .form-signin .form-floating {
    margin-top: 5px;
    margin-bottom: 5px;
  }

  .form-signin .form-floating:focus-within {
    z-index: 2;
  }

  .form-signin input {
    margin-bottom: 7px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .msg-container {
    margin-top: 10px;
    color: red;
  }

  .input-container {
    color: rgb(0, 0, 0);
    margin-top: 20px;
  }

  .nounderline {
    text-decoration: none !important
  }

  .table-fixed {
    border-collapse: separate;
    border-spacing: 0 5px;
    border-color: #E5E9F0;
    width: 950.22px;
    margin-top: -5px;
  }

  .thead-container {
    position: sticky;
    top: 0;
  }

  .thead-container tr th {
    font-weight: 400;
    padding: 12px;
  }

  .btn-delete{
    color: red;
    text-decoration: none;
  }

  .btn-delete:hover {
    color: red;
    text-decoration: underline;
  }

  .btn-preview{
    color: #0d6efd;
    text-decoration: none;
  }

  .btn-preview:hover {
    color: #0d6efd;
    text-decoration: underline;
  }

  .btn-update{
    color: #198754;
    text-decoration: none;
  }

  .btn-update:hover {
    color: #198754;
    text-decoration: underline;
  }

  .list-cell{
    width: 115px;
    height: 20px;
    overflow-x: hidden;
    overflow-y: hidden;
  }
  
  .form-create-order {
    width: 961.44px;
  }

  .create-new-button {
    display: flex;
    justify-content: end;
    width: 585px;
  }

  .list-name{
    width: 220px;
    height: 20px;
    overflow-x: hidden;
    overflow-y: hidden;
  }
  .empty-message {
    margin-top:25px;
    padding-left: 20px;
    color: red;
    width: 1000px;
  }
  .add-more{
    margin-top: -2px;
  }
  .paste-new-forms{
    margin-top: -2px;
    margin-bottom: 7px;
  }
  .remove-btn {
    margin-top: 10px;
  }

  .reg-log-form {
    width: 400px;
    margin-top: 100px;
  }
</style>


<!-- SIDEBAR IMG HERE -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

  <symbol id="report" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
    <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
  </symbol>
  <symbol id="supplier" viewBox="0 0 16 16">
    <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
  </symbol>
  <symbol id="customer" viewBox="0 0 16 16">
    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
  </symbol>
  <symbol id="inventory" viewBox="0 0 16 16">
    <path d="M8.186 1.113a.5.5 0 0 0-.372 0L1.846 3.5l2.404.961L10.404 2l-2.218-.887zm3.564 1.426L5.596 5 8 5.961 14.154 3.5l-2.404-.961zm3.25 1.7-6.5 2.6v7.922l6.5-2.6V4.24zM7.5 14.762V6.838L1 4.239v7.923l6.5 2.6zM7.443.184a1.5 1.5 0 0 1 1.114 0l7.129 2.852A.5.5 0 0 1 16 3.5v8.662a1 1 0 0 1-.629.928l-7.185 2.874a.5.5 0 0 1-.372 0L.63 13.09a1 1 0 0 1-.63-.928V3.5a.5.5 0 0 1 .314-.464L7.443.184z" />
  </symbol>
  <symbol id="order" viewBox="0 0 16 16">
    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
    <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
  </symbol>
  <symbol id="rep" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z" />
    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z" />
  </symbol>
</svg>

<script src="sidebars.js"></script>
