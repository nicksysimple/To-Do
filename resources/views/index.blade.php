<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script>https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js</script>
    <link rel="stylesheet" href="styles.css">

    <title>ToDo</title>
</head>
<body>
<div class="container">
    <div id="root">
      <navigation></navigation>
      <addTask></addTask>
      <tasks></tasks>
      <footersec></footersec>
    </div>
</div>
<script src="{{ mix('js/app.js')}}"></script>
    
</body>
</html>