<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="logo.jpg" type="image/icon type">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
  margin-right: auto;
  margin-left: auto;
  }

td, th {
  border: 1px solid #ddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #fff;
}
</style>

</head>

<body>
<header class="text-gray-600 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">

        <img src="logo.jpg" width="12%">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Precious Bank</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 hover:text-gray-900" href="index.html">Home</a>
      <a class="mr-5 hover:text-gray-900" href="transfermoney.php">Money Transfer</a>
      <a class="mr-5 hover:text-gray-900" href="transactionhistory.php">Transaction History</a>

    </nav>

  </div>
</header>

  <div style="min-height: 570px;">
	<div class="container">
        <h6 class="title-font sm:text-3xl text-3xl mb-4 font-medium text-center"> Transaction History </h6>

       <br>
       <div>
    <table>
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Transaction Amount</th>
                <th>Date - Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while ($rows = mysqli_fetch_assoc($query)) {
                ?>

            <tr>
            <td><?php echo $rows['Sender']; ?></td>
            <td><?php echo $rows['Receiver']; ?></td>
            <td><?php echo $rows['Amount']; ?> </td>
            <td><?php echo $rows['DateTime']; ?> </td>

        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<footer class="text-gray-600 body-font">
  <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">

    <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2021 Sayan Ghosh —
      <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">Graduate Rotational Internship Program (GRIP) of The Sparks Foundation (TSF)</a>
    </p>
    <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">

      <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/sayan-ghosh-5506611ab" target="_blank">Connect with me on LinkedIn—

      </a>
      <a class="ml-3 text-gray-500" href="https://www.linkedin.com/in/sayan-ghosh-5506611ab" target="_blank">
        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
          <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
          <circle cx="4" cy="4" r="2" stroke="none"></circle>
        </svg>
      </a>
    </span>
  </footer>

</body>
</html>
