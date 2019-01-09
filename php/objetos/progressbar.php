<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>ProgressBar.js - Minimal Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="javascript.js"></script>
    <script src="https://rawgit.com/imagitama/nodelist-foreach-polyfill/master/index.js"></script>
    <link rel="stylesheet" type="text/css" href="css.css" />
  </head>
  <body>
    <input type="button" value="Clicka aqui" />
    <svg
      onload="funcionaPorra()"
      xmlns="http://www.w3.org/2000/svg"
      height="200"
      width="200"
      viewBox="0 0 200 200"
      data-value="50"
    >
      <path
        class="bg"
        stroke="#ccc"
        d="M41 149.5a77 77 0 1 1 117.93 0"
        fill="none"
      />
      <path
        class="meter"
        stroke="#09c"
        d="M41 149.5a77 77 0 1 1 117.93 0"
        fill="none"
        stroke-dasharray="350"
        stroke-dashoffset="350"
      />
    </svg>
  </body>
</html>
