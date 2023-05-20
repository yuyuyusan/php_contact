// document.getElementById('answer-area').style.display = 'none';
//     let judgeNum = 0;
//     let judge = false;
//     let courseName = 'もう一度最初からやり直してください'
//     const questionTagObj = document.getElementById('question-text');
//     const questionList  = [
//     { question: '資格をすでに持っている'},
//     { question: '経験５年以上'},
//     { question: '経験３年以上'},
//     { question: '経験したことがある'}
//     ];
//     questionTagObj.innerText=questionList[0].question;
//     const courseList = [
//     { course: 'プロコース' },
//     { course: '上級者コース' },
//     { course: '中級者コース' },
//     { course: '初心者コース' }
//     ]

//     function clickYes(){
//       judge = true;
//       judgeCourse(judgeNum);
//       console.log(courseName);
//       document.getElementById('body').style.backgroundColor = '#f9ecd6';
//       document.getElementById('question-area').style.display = 'none';
//       document.getElementById('answer-area').style.display = 'block';
//       document.getElementById('answer-text').innerHTML = '【あなたにおすすめのコース】<br><div class="course-name">' + courseName + '</div>';
//     };
//     function clickNo(){
//       judge = false;
//       judgeNum = judgeNum + 1;
//       if(judgeNum === 4){
//         clickYes();
//       }else{
//         nextQuestion(judgeNum);
//       }
//     };
//     function nextQuestion(num){
//       if(!judge){
//         questionTagObj.innerText = questionList[num].question;
//       }else{
//         clickYes();
//       }
//     }
//     function judgeCourse(num){
//         switch (num){
//         case 0:
//           courseName = courseList[0].course;
//         　break;
//         case 1:
//           courseName = courseList[1].course;
//           break;
//         case 2:
//           courseName = courseList[2].course;
//           break;
//         case 3:
//           courseName = courseList[2].course;
//           break;
//         case 4:
//           courseName = courseList[3].course;
//           break;
//         }
//     };


// $(function () {
//   $(".btn").on("click", function () {
//     $(this).closest("div").css("display", "none");
//     id = $(this).attr("href");
//     $(id).addClass("fit").show("slow");
//   });
// });
