<!DOCTYPE html>
<html manifest="manifest.appcache">

   <head>
     <meta charset="utf-8">
     <title>Regjistrohu</title>
    <link href="https://fonts.googleapis.com/css?family=Charm|Pacifico" rel="stylesheet">
     <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="registerrrstyle.css" rel="stylesheet">

     <script type="text/javascript" src="JScriptForRegister.js"></script>
     <script src="jquery-3.3.1.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script>
     $(function(){
         $("#flip").click(function(){
            $("#panel").slideDown("slow")
            $("#flip").text("Multiplication Table");
         });
     });
     </script>



   </head>
   <body class="day night"  onload="form.reset(); ">
     <header>

             <div class="navigacioni">


           <p style="color:#b3b3b3;"> <a href="index.html" target="_blank"  style="text-decoration: none; font-size:25px;">ModernSchool</a></br>Discover MS</p>
           <p><audio autoplay>
            <source src="CloudAtlas.mp4" type="audio/mpeg">
              <embed src="path/your_song.mp3" autostart="true" loop="false" hidden>
              Shfletuesi juaj nuk perkrahe audion.

           </audio></p>

             <nav style="float:right">

                <p><a href="index.html" target="_self">HOME</a><br/>Internships</p>
                <p><a href="programs.html" target="_self">PROGRAMS</a><br/>Get informed</p>
                <p><a href="Register.html" target="_self">REGISTER</a><br/>Not a member?</p>
                <p><a href="www.html" target="_self">ACTIVITIES</a><br/>School activities</p>
                <p><a href="#footer" >ABOUT US</a> <br/>More</p>



             </nav>
       </div>
    </header>



<table class="tablee" cellspacing="1" cellpadding="1">
  <tr class="tablee">
    <td class="tablee"  rowspan="2">
   <section>

     <form method="post" name="form" id="form" action="Php/MySql.php"  autocomplete="on" onsubmit="return validateForm()">

          <div  class="registration" >

              <label style="color: #e1b849;"><b>ARE YOU NEW?<mark> REGISTER</mark></b></label></br><br>
             <label>Parent/guardian-s Name </label></br>
             <input type="text" name="Parent" placeholder="Your Name "  size="60" id="parent" ></br>
             <label>E-mail</label></br>
             <input type="email" name="email" placeholder="Email"  size="60" id="email" ></br>
             <label>How old is your child that will be applying?</label></br>
             <input type="number" name="children"  min="6" max=15  placeholder="Number"  size="60" id="children"></br>
             <label >Birth Month <input type="text" id="txtList"  placeholder="Select a month" list="months">
              <datalist id="months" name="list">
                <select required>
                <option value="January">
                <option value="February">
                <option value="March">
                <option value="April">
                <option value="May">
                <option value="June">
                <option value="July">
                <option value="August">
                <option value="September">
                <option value="October">
                <option value="November">
                <option value="December">
                  <select>
              </datalist>
            </label>
             <label>First Name </label></br>
             <input type="text" name="name" placeholder="Child's name "  size="60" id="ChildName"></br>
             <label>Last Name </label></br>
             <input type="text" name="surname" placeholder="Last Name "  size="60" id="Surname"></br>
             <label>Home Street Address </label></br>
             <input type="text" name="address" placeholder="Address "  size="60" id="address"></br>
             <label><b>Are you interested in applying for financal aid?</b></label></br>
            <label> Yes</label><input type="radio"class="radio"  name="financial aid"  size="60" value="yes"></br>
            <label> No<label><input type="radio" class="radio" name="financial aid"  size="60" value="no"></br>
             <label>Password</label></br>
             <input type="password" name="password" placeholder="Password" size="60" id="password"></br>
             <input type="submit" class="save"value="Register">
             <div id="drag" ondrop="drop(event)" ondragover="allowDrop(event)"> <img id="foto" src="logo.png" draggable="true" ondragstart="drag(event)"style"display:inline;" width="50" height="50"></div>
             <div id="drop" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

         </div>

       </form>
</td>

<td class="tablee" colspan="2">
  <section class="boxing">

    <h1 >Register</h1>
     <h5  id="title" > Welcome to the ModernSchool application!<br>It is necessary to register in order for you to be a part of our school system.<br> We look forward to meeting you soon.</h5>

  </section>
</td>
</tr>

<tr class="tablee">

<td class="tablee">
 <section id="quizz">
  <h2 style="font-size:38px; text-shadow:-4px 4px 6px black; color: #e1b849; ">Quick Quiz</h2>

       <label id="quiz"></label>
      <button id="submit">Get Results</button>
      <label id="results"></label>
</section>
</td>
</tr>
</table>
<script>

var myQuestions = [
    {
        question: "What the capital of Kosova?",
        answers: {
            a: 'Prishtina',
            b: 'Prizreni',
            c: 'Tirana'
        },
        correctAnswer: 'a'
    },
    {
        question: "What is 30/3?",
        answers: {
            a: '3',
            b: '5',
            c: '10'
        },
        correctAnswer: 'c'
    },
    {
        question: "What's the color of the water",
        answers: {
            a: 'Blue',
            b: 'Transparent',
            c: 'Gray'
        },
        correctAnswer: 'b'
    }
];

var quizContainer = document.getElementById('quiz');
var resultsContainer = document.getElementById('results');
var submitButton = document.getElementById('submit');

generateQuiz(myQuestions, quizContainer, resultsContainer, submitButton);

function generateQuiz(questions, quizContainer, resultsContainer, submitButton){

    function showQuestions(questions, quizContainer){
        // we'll need a place to store the output and the answer choices
        var output = [];
        var answers;

        // for each question...
        for(var i=0; i<questions.length; i++){

            // first reset the list of answers
            answers = [];

            // for each available answer...


                // ...add an html radio button
                for(letter in questions[i].answers){

			// ...add an html radio button
			answers.push(
				'<br><label>'
					+ '<input type="radio" name="question'+i+'" value="'+letter+'">'
					+ questions[i].answers[letter]
				+ '</label>'
			);
		}



            // add this question and its answers to the output
            output.push(
                '<div class="question">' + questions[i].question + '</div>'
                + '<div class="answers">' + answers.join('') + '</div><br>'

            );
        }

        // finally combine our output list into one string of html and put it on the page
        quizContainer.innerHTML = output.join('');
    }


    function showResults(questions, quizContainer, resultsContainer){

        // gather answer containers from our quiz
        var answerContainers = quizContainer.querySelectorAll('.answers');

        // keep track of user's answers
        var userAnswer = '';
        var numCorrect = 0;

        // for each question...
        for(var i=0; i<questions.length; i++){

            // find selected answer
            userAnswer = (answerContainers[i].querySelector('input[name=question'+i+']:checked')||{}).value;

            // if answer is correct
            if(userAnswer===questions[i].correctAnswer){
                // add to the number of correct answers
                numCorrect++;

                // color the answers green
                answerContainers[i].style.color = 'lightgreen';
            }
            // if answer is wrong or blank
            else{
                // color the answers red
                answerContainers[i].style.color = 'red';
            }
        }

        // show number of correct answers out of total
        resultsContainer.innerHTML = numCorrect + ' out of ' + questions.length;
    }

    // show questions right away
    showQuestions(questions, quizContainer);

    // on submit, show results
    submitButton.onclick = function(){
        showResults(questions, quizContainer, resultsContainer);
    }

}</script>


<div id="flip">Click here to see the muliplication table</div>
<div id="panel">
<table border="2">
<script>

              var dy=2,tre=3,kater=4;pese=5;gjashte=6;shtate=7;tete=8;nenet=9;dhjete=10;
      document.write("<tr>");
      for(i=1;i<=10;i++){
        dy=2*i;tre=3*i;kater=4*i;pese=5*i;gjashte=6*i;shtate=7*i;tete=8*i;nenet=9*i;dhjete=10*i;
        document.write("<tr><td>"+i+"</td><td>"+dy+"</td><td>"+tre+"</td><td>"+kater+"</td><td>"+pese+"</td><td>"+gjashte+"</td><td>"+shtate+"</td><td>"+tete+"</td><td>"+nenet+"</td><td>"+dhjete+"</td>");

      }
    document.write("</tr>");

  </script>
</table>
</div>


          <footer id="footer">

                  <div class="contact">

                      <p class="headi"><i >Phone</i></p>
                  <p> (860)555-1234</p>
                  <p>(860)222-5678
                      </p>
                  </div>


                  <div class="contact">
           <address>
               <p class="headi"> <i >Address</i></p>
                <p>Atlantic Ave</p>
                <p>Brooklyn</p>

           </address>
                  </div>


           <div class="contact">
             <p class="headi"> <i >Email</i></p>
                   <a href="mailto:modernchool@gmail.com">modernschool@gmail.com</a><br/>
                  <label id="demo"></label>
                   <script>
                   var dateObj = new Date();
                   var month = dateObj.getUTCMonth() + 1; //months from 1-12
                   var day = dateObj.getUTCDate();
                   var year = dateObj.getUTCFullYear();

                   newdate = day + "/" + month + "/" +year;
document.getElementById("demo").innerHTML = newdate;
</script>
<p>Count numbers: <output id="result"></output>
<button class="ww" onclick="startWorker()">Start</button>
<button class="ww" onclick="stopWorker()">Stop</button></p>


                  </div>

      </footer>

   </body>






</html>
