<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Programmer Polls</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Vue.js -->
    <script type="text/javascript" src="https://unpkg.com/vue@2.0.5/dist/vue.js"></script>
    <div id="app">
      <ol>
        <!-- Now we provide each todo-item with the todo object    -->
        <!-- it's representing, so that its content can be dynamic -->
        <todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
      </ol>
    </div>

    <script type="text/javascript">
      Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>'
      })

      var app =new Vue({
        el: '#app',
        data: {
          groceryList: [
            { text: 'Vegetables' },
            { text: 'Cheese' },
            { text: 'Whatever else humans are supposed to eat' }
          ]
        },
        methods: {
          hello: function () {
            alert('Hello');
          }
        }
      });
    </script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>