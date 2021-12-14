<!DOCTYPE html>
<html lang="en">

<head>
  <title>CSS Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    /* Style the header */
    header {
      background-color: #666;
      padding: 30px;
      text-align: center;
      font-size: 35px;
      color: white;
    }

    /* Create two columns/boxes that floats next to each other */
    nav {
      float: left;
      width: 30%;
      height: 300px;
      /* only for demonstration, should be removed */
      background: #ccc;
      padding: 20px;
    }

    /* Style the list inside the menu */
    nav ul {
      list-style-type: none;
      padding: 0;
    }

    main {
      float: left;
      padding: 20px;
      width: 70%;
      background-color: #f1f1f1;
      height: 300px;
      /* only for demonstration, should be removed */
    }


    /* Style the footer */
    footer {
      background-color: #777;
      padding: 20px;
      text-align: center;
      color: white;
    }

    /* Clear floats after the columns */
    section::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
    @media (max-width: 600px) {

      nav,
      main {
        width: 100%;
        height: auto;
      }
    }
  </style>
</head>

<body>

  <header>
    <h2>Header</h2>
  </header>

  <section>
    <nav>
      <ul>
        <li><a href="#">London</a></li>
        <li><a href="#">Paris</a></li>
        <li><a href="#">Tokyo</a></li>
      </ul>
    </nav>

    <main>

      <h1>London</h1>
      <p>London is the capital city of England. It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
      <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>

    </main>
  </section>
  <footer>
    <h1>Footer</h1>
  </footer>

</body>

</html>